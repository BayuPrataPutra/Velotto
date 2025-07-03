<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VelottoController extends Controller
{
    public function index(){
        return view('index');
    }
    public function data(){
        $result = DB::select(
            "SELECT penyewa.nama, concat(mobil.merk, ' ', mobil.tipe)AS jenis, orderan.tgl_ambil, transaksi.jumlah, status.ket_sts, transaksi.id_transaksi 
            from transaksi
            JOIN orderan ON transaksi.id_orderan = orderan.id_orderan
            JOIN penyewa ON transaksi.nik = penyewa.nik
            JOIN mobil ON transaksi.id_mobil = mobil.id_mobil
            JOIN status ON status.id_sts = orderan.id_sts
            GROUP BY penyewa.nama, jenis, orderan.tgl_ambil, status.ket_sts, transaksi.id_transaksi, transaksi.jumlah;"
        );

        $mobil = DB::table('mobil')->get();
        
        return view('data', ['result'=>$result], ['mobil'=>$mobil]);
    }

    public function detail($id){
        $result = DB::select("SELECT orderan.tgl_ambil, orderan.tgl_kembali, SUM(datediff(orderan.tgl_kembali,orderan.tgl_ambil)) AS total_hari, penyewa.*, status.ket_sts, paket.keterangan, transaksi.id_transaksi, transaksi.jumlah, mobil.harga, concat(mobil.merk, ' ', mobil.tipe)AS jenis, pembayaran.bukti
        FROM transaksi, orderan, penyewa, paket, mobil, status, pembayaran
        WHERE transaksi.id_transaksi = ?
        AND pembayaran.id_transaksi = transaksi.id_transaksi
        AND orderan.id_orderan = transaksi.id_orderan
        AND mobil.id_mobil = transaksi.id_mobil
        AND penyewa.nik = transaksi.nik
        AND paket.id_paket = orderan.id_paket
        AND status.id_sts = orderan.id_sts
        GROUP BY transaksi.id_transaksi, orderan.tgl_ambil, orderan.tgl_kembali, mobil.harga, 
        penyewa.nik, penyewa.nama, penyewa.no_telepon, penyewa.alamat, paket.keterangan, status.ket_sts, 
        transaksi.jumlah, jenis, mobil.harga, pembayaran.bukti;", [$id]
        );  
        if (request()->has('download')) {
            $bukti = storage_path("app/{$result[0]->bukti}");
            return response()->download($bukti);
        }
        
        return view ('detail', ['result'=>$result, 'buktiPembayaran' => $result[0]->bukti]);
    }

    public function tambah(){
        $paket = DB::table('paket')->get();
        $types = DB::select("SELECT concat(merk, ' ',tipe, ' - Rp. ', harga, '/day') AS merek, id_mobil FROM mobil");
        
        return view('tambah', ['paket' => $paket, 'types' => $types]);
    }
    public function storeOr(Request $request){
        
        $hargaRaw1 = DB::table('mobil')->select('harga')->where('id_mobil', $request->tipe_mobil)->first();
        $hargaM = floatval($hargaRaw1->harga);
        
        $hargaRaw2 = DB::table('paket')->select('harga_pk')->where('id_paket', $request->paket)->first();
        $hargaP = floatval($hargaRaw2->harga_pk);
        
        $jumlah_hari = strtotime($request->tgl_kembali) - strtotime($request->tgl_ambil);
        $jumlah_hari = floor($jumlah_hari / (60 * 60 * 24));
        
        $jumlah = $hargaM * $jumlah_hari + $hargaP ;

        DB::table('penyewa')->insert([
            'nik'=> $request->nik,
            'nama'=> $request->nama,
            'no_telepon'=> $request->no_telp,
            'alamat'=> $request->alamat,
        ]);
        $sts = '1';
        $order_id = DB::table('orderan')->insertGetId([
            'tgl_ambil'=> $request->tgl_ambil,
            'tgl_kembali'=> $request->tgl_kembali,
            'id_paket'=> $request->paket,
            'id_sts' => $sts,
        ]);
        $id = DB::table('transaksi')->insertGetId([
            'id_orderan'=> $order_id,
            'jumlah'=> $jumlah,
            'nik'=> $request->nik,
            'id_mobil'=> $request->tipe_mobil,
        ]);

        return redirect('/velotto/bayar');
    }
    public function bayar(){
        $id = DB::table('transaksi')->latest('id_transaksi')->first()->id_transaksi;
        $data = DB::select("SELECT penyewa.*, orderan.*, transaksi.id_transaksi, transaksi.jumlah, paket.keterangan, concat(mobil.merk, ' ', mobil.tipe)AS jenis
        FROM transaksi, orderan, paket, mobil, penyewa
        WHERE transaksi.id_transaksi = ?
        AND penyewa.nik = transaksi.nik
        AND mobil.id_mobil = transaksi.id_mobil
        AND orderan.id_orderan = transaksi.id_orderan
        AND paket.id_paket = orderan.id_paket", [$id]);
       
       return view('bayar', ['data'=>$data]);
    }
    public function storeBy(Request $request){
        $imagePath = $request->file('bukti')->store('public/bukti');
        DB::table('pembayaran')->insert([
            'bukti'=> $imagePath,
            'id_transaksi' => $request->idtrans
        ]);
        return redirect('/');
    }
    public function tambahM(){
        return view('tambahM');
    }
    public function storeM(Request $request){
        DB::table('mobil')->insert([
            'merk' => $request ->merk,
            'tipe' => $request ->tipe,
            'harga'=> $request ->harga,
        ]);
        return redirect('/velotto/data');
    }

    public function hapus($id){
        DB::delete('delete from transaksi where id_transaksi = ?', [$id]);
        DB::delete('delete from orderan where id_orderan NOT IN (SELECT id_orderan FROM transaksi)');
        DB::delete('delete from penyewa where nik NOT IN (SELECT nik FROM transaksi)');
        DB::delete('delete from pembayaran where id_transaksi NOT IN (SELECT id_transaksi FROM transaksi)');
        
        return redirect('/velotto/history');
    }
    public function hapusM($id){
        DB::delete('delete from mobil where id_mobil = ?', [$id]);
        return redirect('/velotto/data');
    }
    public function home(){
        $result = DB::select(
            "SELECT penyewa.nama, CONCAT(mobil.merk, ' ', mobil.tipe) as jenis, orderan.tgl_ambil, SUM(datediff(orderan.tgl_kembali,orderan.tgl_ambil)) AS total_hari, orderan.id_orderan 
            from transaksi
            JOIN orderan ON transaksi.id_orderan = orderan.id_orderan
            JOIN penyewa ON transaksi.nik = penyewa.nik
            JOIN mobil ON transaksi.id_mobil = mobil.id_mobil
            WHERE orderan.id_sts = '1'
            GROUP BY penyewa.nama, jenis, orderan.tgl_ambil, orderan.id_orderan;");
        
        $income = DB::select("SELECT SUM(transaksi.jumlah) as hasil
            FROM transaksi");
        return view('home',['result'=>$result], ['income'=>$income]);
        
    }
    public function history(){
        $result = DB::select(
            "SELECT penyewa.nama, concat(mobil.merk, ' ', mobil.tipe)AS jenis, orderan.tgl_ambil, SUM(datediff(orderan.tgl_kembali,orderan.tgl_ambil)) AS total_hari, status.ket_sts, transaksi.id_transaksi
            from transaksi
            JOIN orderan ON transaksi.id_orderan = orderan.id_orderan
            JOIN penyewa ON transaksi.nik = penyewa.nik
            JOIN mobil ON transaksi.id_mobil = mobil.id_mobil
            JOIN status ON status.id_sts = orderan.id_sts
            GROUP BY penyewa.nama, jenis, orderan.tgl_ambil, status.ket_sts, transaksi.id_transaksi;"
        );

        return view('history', ['result'=>$result]);
    }
    public function edit($id){
        $order = DB::select("SELECT penyewa.*, orderan.*, status.ket_sts, transaksi.id_transaksi, transaksi.id_mobil, paket.keterangan, concat(mobil.merk, ' ', mobil.tipe)AS jenis
        FROM transaksi, orderan, status, paket, mobil, penyewa
        WHERE transaksi.id_transaksi = ?
        AND penyewa.nik = transaksi.nik
        AND mobil.id_mobil = transaksi.id_mobil
        AND orderan.id_orderan = transaksi.id_orderan
        AND paket.id_paket = orderan.id_paket
        AND status.id_sts = orderan.id_sts", [$id]);
        $types = DB::select("SELECT concat(merk, ' ',tipe, ' - Rp. ', harga, '/day') AS merek, id_mobil FROM mobil");
        $paket = DB::table('paket')->get();
        $status = DB::table('status')->get();

        return view('edit', ['order'=>$order], ['types'=>$types, 'paket'=>$paket, 'status'=>$status] );
    }

    public function update(Request $request){
        $hargaRaw1 = DB::table('mobil')->select('harga')->where('id_mobil', $request->jenis)->first();
        $hargaM = floatval($hargaRaw1->harga);
        
        $hargaRaw2 = DB::table('paket')->select('harga_pk')->where('id_paket', $request->paket)->first();
        $hargaP = floatval($hargaRaw2->harga_pk);
        
        $jumlah_hari = strtotime($request->tgl_kembali) - strtotime($request->tgl_ambil);
        $jumlah_hari = floor($jumlah_hari / (60 * 60 * 24));
        
        $jumlah = $hargaM * $jumlah_hari + $hargaP ;
 
        DB::table('orderan')->where('id_orderan', $request->idOr)->update([
            'tgl_ambil'=> $request->tgl_ambil,
            'tgl_kembali'=> $request->tgl_kembali,
            'id_paket'=> $request->paket,
            'id_sts' => $request->sts,
        ]);
        DB::table('transaksi')->where('id_transaksi', $request->idTr)->update([
            'id_orderan'=> $request->idOr,
            'jumlah'=> $jumlah,
            'nik'=> $request->nik,
            'id_mobil'=> $request->jenis,
        ]);

        return redirect('/velotto/history');
    }
    public function editM($id){
        $mobil = DB::table('mobil')->where('id_mobil', $id)->get();

        return view('editM', ['mobil'=>$mobil]);
    }
    public function updateM(Request $request){
        DB::table('mobil')->where('id_mobil', $request->id)->update([
            'id_mobil'=> $request->id,
            'merk'=> $request->merk,
            'tipe'=> $request->tipe,
            'harga'=> $request->harga,
        ]);
        return redirect('/velotto/data');
    }
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Orderan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex-grow: 1;
        }

        .no-wrap{
            white-space: nowrap;
        }
    </style>
</head>
<body class="m-0">
    <main>
        <nav class="navbar navbar-expand-lg sticky-top bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                      <img src="{{ asset('img/logo.png') }}" alt="Logo" width="60" height="60" class="d-inline-block pb-2 rounded-5">
                      velotto auto rent</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navi">
                      <li class="nav-item">
                        <a class="nav-link fs-5" aria-current="page" href="/velotto/data">Back</a>
                      </li>
                    </ul>
                  </div>
            </div>
        </nav>
        <div class="container-fluid p-3">
            <p class="h2 text-center">Details Data</p>
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="card rounded-4 p-4" >
                    @foreach($result as $r)

                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="no-wrap"><strong>ID Transaksi</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->id_transaksi }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Status Orderan</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->ket_sts }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Atas Nama</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->nama }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>NIK</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->nik }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>No Telp</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->no_telepon }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Alamat</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->alamat }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Jumlah Hari</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->total_hari }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Tanggal Ambil</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->tgl_ambil }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Tanggal Kembali</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->tgl_kembali }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Jenis Mobil</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->jenis }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Harga Perhari</strong></td>
                                <td><strong>:</strong></td>
                                <td>Rp.{{ $r->harga }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Paket</strong></td>
                                <td><strong>:</strong></td>
                                <td>{{ $r->keterangan }}</td>
                            </tr>
                            <tr>
                                <td class="no-wrap"><strong>Total Harga</strong></td>
                                <td><strong>:</strong></td>
                                <td>Rp.{{ $r->jumlah }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <p><strong>Bukti Pembayaran :</strong></p>
                            @if($buktiPembayaran)
                                <a href="{{ route('velotto.detail', $r->id_transaksi) }}?download=1" download="bukti.jpg">Download Bukti</a>
                            @else
                                <p>Tidak ada bukti pembayaran.</p>
                            @endif
                    @endforeach
                </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-2 mt-auto">
        <p class="mt-1">Created with
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="pink" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg><br>
              &copy; 2023 Velotto Auto Rent | Our Team
        </p>
    </footer>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
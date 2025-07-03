<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran</title>
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
                        <a class="nav-link fs-5" aria-current="page" href="/">Back</a>
                      </li>
                    </ul>
                  </div>
            </div>
        </nav>

        <div class="formPembayaran" id="formPembayaran">
            <div class="container-fluid p-3">
                <p class="h2 text-center">Form Pembayaran</p>
                <br>
                <div class="card rounded-4" style="background-color: #dddddd;">
                @foreach($data as $d)
                    <form action="/velotto/storeBy" enctype="multipart/form-data" class="p-2" method="post">
                        {{ csrf_field() }}
                        <div class="row m-0">
                            <div class="form-group p-2 col-6">
                                <label for="#">ID Transaksi :</label>
                                <input type="hidden" class="form-control" name="idtrans" placeholder="{{ $d->id_transaksi }}" value="{{ $d->id_transaksi }}" required>
                                <input type="text" class="form-control"  placeholder="{{ $d->id_transaksi }}" required disabled>
                            </div>
                            <div class="form-group p-2 col-6">
                                <label for="#">NIK :</label>
                                <input type="text" class="form-control" placeholder="{{ $d->nik }}" disabled>
                            </div>
                            <div class="form-group p-2 col-6">
                                <label for="#">Atas Nama :</label>
                                <input type="text" class="form-control" placeholder="{{ $d->nama }}" disabled>
                            </div>
                            <div class="form-group p-2 col-6">
                                <label for="#">No Telp :</label>
                                <input type="text" class="form-control" placeholder="{{ $d->no_telepon }}" disabled>
                            </div>
                            <div class="form-group p-2 col-12">
                                <label for="#">Alamat :</label>
                                <input type="text" class="form-control" placeholder="{{ $d->alamat }}" disabled>
                            </div>
                            <div class="form-group p-2 col-6">
                                <label for="#">Jenis Mobil :</label>
                                <input type="text" class="form-control" placeholder="{{ $d->jenis }}" disabled>
                            </div>
                            <div class="form-group p-2 col-6">
                                <label for="#">Jenis Paket :</label>
                                <input type="text" class="form-control" placeholder="{{ $d->keterangan }}" disabled>
                            </div>
                            <div class="form-group p-2 col-12">
                                <label for="#">Total Bayar :</label>
                                <input type="text" class="form-control"  placeholder="{{ $d->jumlah}}" disabled>
                            </div>
                        </div>      
                        <div class="row m-0">
                            <div class="form-group p-2 col-12">
                                <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran (Gambar)</label>
                                <input type="file" class="form-control" id="bukti_pembayaran" name="bukti" accept="image/*" required>
                                <p class="mt-2 text-danger">NOTE : Pastikan Data dan Jumlah Bayar Sesuai!</p>                                       
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group col-12 text-end">
                                <button type="submit" class="btn btn-primary text">Kirim</button>
                            </div>
                        </div>
    
                    </form>
                    @endforeach
                </div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <style>
        .formPemesanan {
            display: none;
        }
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navi">
                      <li class="nav-item">
                        <a class="nav-link fs-5" aria-current="page" href="/velotto/data">Back</a>
                      </li>
                    </ul>
                  </div>
            </div>
        </nav>
        
        <div id="formPemesanan">
            <div class="container-fluid p-3">
                <p class="h2 text-center">Form Tambah Data Mobil</p>
                <br>
                <div class="card rounded-4" style="background-color: #dddddd;">
                @foreach($mobil as $m)
                    <form action="/velotto/updateM" class="p-2" method="post">
                        {{ csrf_field() }}
                        <div class="row m-0">
                            <div class="form-group p-2 col-6">
                                <input type="hidden" class="form-control" name="id" value="{{ $m->id_mobil }}" required>
                                <input type="text" class="form-control" name="merk" placeholder="Merek Mobil" value="{{ $m->merk }}" required>
                            </div>
                            <div class="form-group p-2 col-6">
                                <input type="text" class="form-control" name="tipe" placeholder="Tipe Mobil" value="{{ $m->tipe }}" required>
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group p-2 col-12">
                                <input type="tel" class="form-control" name="harga" placeholder="Harga Perhari" value="{{ $m->harga }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 text-end">
                                <button type="submit" class="btn btn-primary text" id="pesan">Simpan</button>
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
    <script src="{{ asset('js/form.js') }}"></script>
</body>
</html>
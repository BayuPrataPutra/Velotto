<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velotto Admin - Home</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <main>
    <nav class="navbar navbar-expand-lg sticky-top bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <button class="btn" id="button-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-list pb-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                  </button>
                  <img src="{{ asset('img/logo.png') }}" alt="Logo" width="60" height="60" class="d-inline-block pb-2 rounded-5">
                  velotto auto rent</a>
          </div>
      </nav>

      <div>
        <div class="sidebar p-4 bg-dark" id="sidebar">
          <h4 class="mb-2 text-white">Menu</h4>
          <li>
            <a class="text-white" href="/velotto/home">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house pb-1" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                  </svg>
              Home
            </a>
          </li>
          <li>
            <a class="text-white" href="/velotto/history">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-history pb-1" viewBox="0 0 16 16">
                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                  </svg>
              History
            </a>
          </li>
          <li>
            <a class="text-white" href="/velotto/data">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clipboard-data pb-1" viewBox="0 0 16 16">
                    <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                  </svg>
              Data
            </a>
          </li>
        </div>
      </div>

    <div class="p-4" id="main-content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <p class="h3 ps-2">Order in Progress</p>
                <div class="card card1">
                    <div class="card-body">
                        <div class="scrollable-table scrollable-tabley">
                            <table class="table tablepesan text-center">
                                <thead>
                                  <tr>
                                    <th scope="col">Atas Nama</th>
                                    <th scope="col">Jenis Mobil</th>
                                    <th scope="col">Tanggal Order</th>
                                    <th scope="col">Jumlah Hari</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ($result as $r)
                                <tr>
                                    <td>{{ $r->nama }}</td>
                                    <td>{{ $r->jenis }}</td>
                                    <td>{{ $r->tgl_ambil }}</td>
                                    <td>{{ $r->total_hari}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <p class="h3 ps-2">Income</p>
                <div class="card">
                    <div class="card-body">
                        @foreach($income as $i)
                            <p class="h1 fw-bold text-center pt-5 pb-5">Rp. {{ $i->hasil }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-12 text-center">
                <a href="/">
                    <button type="button" class="btn btn-success mx-auto">
                        Kembali ke Halaman Utama
                    </button>
                </a>
            </div>
        </div>
        
      </div>
    </div>

    </main>
    <footer class="bg-dark text-white text-center py-2">
        <p class="mt-1">Created with
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="pink" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
              </svg><br>
              &copy; 2023 Velotto Auto Rent | Our Team
        </p>
    </footer>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
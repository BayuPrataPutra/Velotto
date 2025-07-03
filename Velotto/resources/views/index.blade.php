<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container mt-0">
<div class="modal fade text-white" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close rounded-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-dark">
              <p class="h4">Velotto Admin</p>
                <form id="loginForm">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-dark">
              <button type="button" class="btn btn-primary" onclick="login()">Login</button>
            </div>
        </div>
    </div>
  </div>
</div>
  

    <main>
          <div class="tagline vh-100 text-white" id="home">
            <nav class="navbar navbar-expand-lg bg-navbar border-bottom border-body" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand logo fs-3 ms-1 ps-2" href="#">
                        <img src="img/logo.png" alt="Logo" width="60" height="60" class="d-inline-block mt-auto pb-2 logoimg rounded-5">
                        velotto auto rent</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navi">
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#home">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#benefit">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#produk">Auto Listings</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#testimoni">Testimonials</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#contact">Contact</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                              </svg><span class="d-md-none"> Admin</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                </div>
              </nav>
            <p class="p1 m-5 mb-1 mt-4">Book Your Auto Rental</p>
            <p class="p2 fs-3 m-5 ps-5 mt-0">Comfort Cars at low-cost and <br> premium quality</p>
          </div>

          <div class="benefit" id="benefit" style="height:80vh;">
            <p class="fs-1 text-center pt-4 fw-bold mb-0 pb-0">OUR BENEFITS</p>
            <p class="sub text-center fs-5">Comfort Velotto Rental Services</p>
            <div class="row p-4 m-0">
              <div class="col-4 text-center p-3">
                <img src="img/testimoni bagus.png">
                <p class="fw-bold pt-3">Great Comfort Testimonial</p>
                <p class="keterangan">Kenyamanan adalah prioritas utama dari kami. sehingga kami pun selalu siap memberikan pelayanan maksimal kepada semua pelanggan.</p>
              </div>
              <div class="col-4 text-center p-3">
                <img src="img/murah.png">
                <p class="fw-bold pt-3">More Economical with Lower Prices</p>
                <p class="keterangan">Bayar dengan apapun, velotto siap memberikan harga yang sangat terjangkau untuk memenuhi kebutuhan anda</p>
              </div>
              <div class="col-4 text-center p-3">
                <img src="img/sistem booking mudah.png">
                <p class="fw-bold pt-3">We Provide Easier & Faster Booking</p>
                <p class="keterangan">Dari velotto anda dapat menyewa mobil sesuai dengan tipe yang diinginkan dengan mudah dan cepat tanpa harus menunggu lama.</p>
              </div>
            </div>
          </div>

          <div class="cararental vh-100 text-white">
            <p class="fs-1 text-center paddingtopcararental fw-bold">How To Rent</p>

            <div class="row paddingcararental m-0">
              <div class="col-sm-3 col-md-3 col-12 text-center p-2">
                <img class="img1" src="img/Group 1.png">
                <p class="fw-bold pt-3">Pilih jenis yang akan anda rental.</p>
              </div>
              <div class="col-sm-3 col-md-3 col-12 text-center p-2">
                <img class="img2" src="img/Group 2.png">
                <p class="fw-bold pt-3">Isi form data yang sudah disediakan</p>
              </div>
              <div class="col-sm-3 col-md-3 col-12 text-center p-2">
                <img class="img3" src="img/Group 3.png">
                <p class="fw-bold pt-3">Lakukan pembayaran sesuai harga dan lakukan konfirmasi.</p>
              </div>
              <div class="col-sm-3 col-md-3 col-12 text-center p-2">
                <img class="img4" src="img/Group 4.png">
                <p class="fw-bold pt-3">Terima mobil yang sudah disewa.</p>
              </div>
            </div>
          </div>

          <div class="produk" id="produk">
            <p class="fs-1 text-center pt-4 fw-bold mb-0 pb-0">OUR RENTAL FLEETS</p>
            <p class="sub text-center fs-5">Comfort Velotto Rental Services</p>
            <div class="row">
              <div class="col-3"></div>
              <div class="col-6 text-center">
                <p class=" fst-italic">"Tanpa pelanggan sadari bahwa velotto mempunyai armada dimana kualitas mobil per unitnya sangat mumpuni untuk dipakai dalam situasi dan kondisi apapun."</p>
              </div>
              <div class="col-3"></div>
            </div>
            <div class="row ps-4 pb-0 m-0">
              <div class="col ps-3 m-0">
                <p class="fs-3 ps-3 fw-bold">Recomended for you</p>
              </div>
            </div>
            
            <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="container">
                      <div class="row p-3">
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/2017 jeep grand.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Jeep Grand 2017</h5>
                            <p class="card-text">Rp 1.000.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/2018 toyota landcruiser.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Toyota Landcruiser</h5>
                            <p class="card-text">Rp 800.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/daihatsu agya.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Daihatsu Agya</h5>
                            <p class="card-text">Rp 300.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/Daihatsu Xenia.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Daihatsu Xenia</h5>
                            <p class="card-text">Rp 500.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
                  
                <div class="carousel-item">
                  <div class="container">
                      <div class="row p-3">
                      
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/Honda Civic.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Honda Civic</h5>
                            <p class="card-text">Rp 850.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/mazda cx 5.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Mazda CX5</h5>
                            <p class="card-text">Rp 750.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/Mitsubishi Xpander.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Mitsubishi Xpander</h5>
                            <p class="card-text">Rp 800.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/suzuki ertiga.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Suzuki Ertiga</h5>
                            <p class="card-text">Rp 550.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
                
                <div class="carousel-item">
                  <div class="container">
                      <div class="row p-3">
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/toyota Avanza.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Toyota Avanza</h5>
                            <p class="card-text">Rp 500.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/Suzuki Swift.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Suzuki Swift</h5>
                            <p class="card-text">Rp 400.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/toyota Innova.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Toyota Innova</h5>
                            <p class="card-text">Rp 600.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
              
                      <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card" >
                          <img src="img/Toyota Rush.png" class="card-img-top imgproduk">
                          <div class="card-body">
                            <h5 class="card-title">Toyota Rush</h5>
                            <p class="card-text">Rp 600.000/hari</p>
                            <a href="/velotto/tambah" class="btn btn-primary">Sewa</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
                
              </div>
              <br>
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            </div>
          </div>
           
          <div class="testimoni m-0 vh-100" id="testimoni">
            <p class="fs-1 text-center pt-4 fw-bold mb-0 pb-0">TESTIMONIAL</p>
            <p class="sub text-center fs-5">Comfort Velotto Rental Services</p>
            <div class="row testi p-5 mb-0">
              <div class="col-lg-3 col-md-1 col-sm-1"></div>
              <div class="col-lg-6 col-md-10 col-sm-10">
                <div id="carouselExampleAutoplaying2"  class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="5000">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="card rounded-5 border border-black m-0 p-1">
                        <div class="row">
                          <img src="img/Mask_group.png" class="pt-2 rounded-circle imgtesti">
                        </div>
                        <div class="row testimonial">
                          <div class="col-1"></div>
                          <div class="col-10">
                            <p class="text-center fst-italic fs-6 p-4 pt-1">"Lorem ipsum dolor sit amet,  do consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                          </div>
                          <div class="col-1"></div>
                        </div>
                        <div class="row">
                          <p class="text-center fw-bold fs-5">Ginna Artha Apriliani</p>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item">
                      <div class="card rounded-5 border border-black m-0 p-1">
                        <div class="row">
                          <img src="img/gani.jpg" class="pt-2 rounded-circle imgtesti">  
                        </div>                   
                        <div class="row testimonial">
                          <div class="col-1"></div>
                          <div class="col-10">
                            <p class="text-center fst-italic fs-6 p-4 pt-1">"MMPPSHH MPSSHHH klontang klontang nderrr!"</p>
                          </div>
                          <div class="col-1"></div>
                        </div>
                        <div class="row">
                          <p class="text-center fw-bold fs-5">Ganni Artha Apriliana</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                  <br><br>
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-1 col-sm-1"></div>
            </div>
          </div>
          <br>

          <div id="contact">
            <p class="fs-1 text-center pt-4 fw-bold mb-0 pb-0">CONTACT US</p>
            <p class="sub text-center fs-5">Comfort Velotto Rental Services</p><br><br>
            <div class="row">
              <div class="col-4 text-center">
                <a href="https://instagram.com/velottosejahtera" class="text-black text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="black" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                  </svg>
                  <p>Instagram</p>
                </a>
              </div>
              <div class="col-4 text-center">
                <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=velottosejahtera@gmail.com" class="text-black text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="black" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                  </svg>
                  <p>Gmail</p>
                </a>
              </div>
              <div class="col-4 text-center">
                <a href="http://www.facebook.com" class="text-black text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="black" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg>
                  <p>Facebook</p>
                </a>
              </div>
            </div>
          </div>

          <footer class="bg-dark text-white text-center py-2">
            <p class="mt-1">Created with
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="pink" class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                  </svg><br>
                  &copy; 2023 Velotto Auto Rent | Our Team
            </p>
          </footer>
          
    </main>

    <script src="{{ asset('/js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>

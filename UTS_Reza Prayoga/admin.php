<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Warunk Jeletet</title>
        <!-- Favicon-->
        <link rel="icon" href="assets/jeletet.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <div class="wrapper">
        <?php
            session_start();
            if (!isset($_SESSION["username"])) header("location:index.php");
        ?>   
        </div>
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Warunk Jeletet</a>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin.php">Beranda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="biodata.php">Biodata</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Logout</a></li>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="mb-5" src="assets/img/jeletet.png" alt="Logo" />
                <h2 class="text-center text-uppercase text-white">Basrengnya Lampung</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-shopping-basket"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Input Data Produk</p>
            </div>
        </header>
        <!-- Data Mahasiswa Section-->
        <div class="container">

            <div class="row my-4">
        
              <div class="col-md-12">
                <div class="card border-primary shadow">
                  <div class="card-body">
                    <h6 class="card-title text-center">Data Produk</h6>
                  </div>
                </div>
              </div>
        
            </div>
        
            <!-- Tambah ini -->
        
            <div class="row">
              <div class="ml-auto mr-3">
                <a href="tambah_produk.php" class="btn btn-primary mb-3">Tambah</a>
              </div>
            </div>
        
            <!-- // -->
        
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="align-middle text-center" scope="col">No</th>
                  <th class="align-middle text-center" scope="col">Kode</th>
                  <th class="align-middle text-center" scope="col">Nama</th>
                  <th class="align-middle text-center" scope="col">Jumlah</th>
                  <th class="align-middle text-center" scope="col">Tanggal</th>
                  <th class="align-middle text-center" scope="col">Harga</th>
                  <th class="align-middle text-center" scope="col">Kategori</th>
                  <th class="align-middle text-center" scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "koneksi.php";
                //lihat data di database
                $data = mysqli_query($koneksi, "SELECT * FROM produk");
                $no = 1;
                while ($a = mysqli_fetch_array($data)) {
        
                ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $a['kode']; ?></td>
                    <td><?= $a['nama']; ?></td>
                    <td><?= $a['jumlah']; ?></td>
                    <td><?= date('d-m-Y', strtotime($a['tanggal'])); ?></td>
                    <td><?= $a['harga']; ?></td>
                    <td><?= $a['kategori']; ?></td>
                    <td>
                      
                      <a href="edit_produk.php?id=<?= $a['id']; ?>" type="button" class="btn btn-sm btn-warning">Edit</a>
                      <a href="hapus_produk.php?id=<?= $a['id']; ?>" type="button" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>
        
                <?php
                }
                ?>
              </tbody>
            </table>
        
          </div>
        
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="text-center text-uppercase text-white">Teknokrat Official</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="ms-auto"><p style="text-align:center" class="lead">Anda juga bisa kunjungi toko kami di Shopee</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://shopee.co.id/basreng_jeletet.id?categoryId=100629&entryPoint=ShopByPDP&itemId=9386380727">
                        <i class="fas fa-cart-arrow-down me-2"></i>
                        Kunjungi
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact -->

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                        Jl. Lintas Barat Sumatera No.1, Gumuk Mas, Kec. Pagelaran, Kabupaten Pringsewu,
                            <br />
                            Lampung 35376
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/snack_jeletet.id/"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://shopee.co.id/basreng_jeletet.id?categoryId=100629&entryPoint=ShopByPDP&itemId=9386380727"><i class="fas fa-fw fa-shopping-cart"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.google.com/maps/place/Warunk+Jeletet/@-5.3644764,104.9020869,17z/data=!3m1!4b1!4m5!3m4!1s0x2e4731a0248161d3:0xc15a5f8c6e9a5f70!8m2!3d-5.3645722!4d104.9042823"><i class="fas fa-map-marker-alt"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-whatsapp"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Tentang Produk</h4>
                        <p class="lead mb-0">
                            Kunjungi eCommerce kami jika ingin memesan
                            <a href="https://shopee.co.id/basreng_jeletet.id?categoryId=100629&entryPoint=ShopByPDP&itemId=9386380727">Basreng Jeletet</a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Reza Website 2021</small></div>
        </div>
        <!-- beranda Modals-->
        <!-- beranda Modal 1-->
        <div class="beranda-modal modal fade" id="berandaModal1" tabindex="-1" aria-labelledby="berandaModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- beranda Modal - Title-->
                                    <h2 class="beranda-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- beranda Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/beranda/cabin.png" alt="..." />
                                    <!-- beranda Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- beranda Modal 2-->
        <div class="beranda-modal modal fade" id="berandaModal2" tabindex="-1" aria-labelledby="berandaModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- beranda Modal - Title-->
                                    <h2 class="beranda-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- beranda Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/beranda/cake.png" alt="..." />
                                    <!-- beranda Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- beranda Modal 3-->
        <div class="beranda-modal modal fade" id="berandaModal3" tabindex="-1" aria-labelledby="berandaModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- beranda Modal - Title-->
                                    <h2 class="beranda-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- beranda Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/beranda/circus.png" alt="..." />
                                    <!-- beranda Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- beranda Modal 4-->
        <div class="beranda-modal modal fade" id="berandaModal4" tabindex="-1" aria-labelledby="berandaModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- beranda Modal - Title-->
                                    <h2 class="beranda-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- beranda Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/beranda/game.png" alt="..." />
                                    <!-- beranda Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- beranda Modal 5-->
        <div class="beranda-modal modal fade" id="berandaModal5" tabindex="-1" aria-labelledby="berandaModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- beranda Modal - Title-->
                                    <h2 class="beranda-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- beranda Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/beranda/safe.png" alt="..." />
                                    <!-- beranda Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- beranda Modal 6-->
        <div class="beranda-modal modal fade" id="berandaModal6" tabindex="-1" aria-labelledby="berandaModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- beranda Modal - Title-->
                                    <h2 class="beranda-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- beranda Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/beranda/submarine.png" alt="..." />
                                    <!-- beranda Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

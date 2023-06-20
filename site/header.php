<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>MDB Shop</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />

    <!-- css bootstrap -->
    <link rel="stylesheet" href="./content/css/bootstrap.min.css" />
    <!-- MDB -->
    <link rel="stylesheet" href="./content/css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="./content/css/style.css" />
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Jumbotron -->
        <div class="p-3 text-center bg-white border-bottom">
            <div class="container">
                <div class="row gy-3">
                    <!-- Left elements -->
                    <div class="col-lg-2 col-sm-4 col-4">
                        <a href="https://mdbootstrap.com/" target="_blank" class="float-start">
                            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
                        </a>
                    </div>
                    <!-- Left elements -->


                    <?php
                    if (isset($_SESSION['kh']) && $_SESSION['kh']['vai_tro'] == 1) {

                        echo '
                        <!-- Center elements -->
                        <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                            <div class="d-flex float-end">
                            <div class="nav-item dropdown">
                            <a
                              class="nav-link dropdown-toggle text-dark mb-0 border px-3 py-2"
                              href="#"
                              id="navbarDropdown"
                              role="button"
                              data-mdb-toggle="dropdown"
                              aria-expanded="false"
                            >
                              Settings
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li>
                                <a href="index.php?act=capnhattk" class="dropdown-item" href="#">Profile</a>
                              </li>
                              <li>
                                <a href="index.php?act=quenmk" class="dropdown-item" href="#">Quên mật khẩu</a>
                              </li>
                              <li>
                                <a href="admin/index.php" class="dropdown-item" href="#">Admin</a>
                              </li>
                              <li><hr class="dropdown-divider" /></li>
                              <li>
                                <a href="index.php?act=thoat" class="dropdown-item" href="#">Logout</a>
                              </li>
                            </ul>
                          </div>
    
                            </div>
                        </div>
                        <!-- Center elements -->';
                    } elseif (isset($_SESSION['kh']) && $_SESSION['kh']['vai_tro'] == 0) {
                        echo '
                        <!-- Center elements -->
                        <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                            <div class="d-flex float-end">
                            <div class="nav-item dropdown">
                            <a
                              class="nav-link dropdown-toggle text-dark mb-0 border px-3 py-2"
                              href="#"
                              id="navbarDropdown"
                              role="button"
                              data-mdb-toggle="dropdown"
                              aria-expanded="false"
                            >
                              Settings
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li>
                                <a href="index.php?act=capnhattk" class="dropdown-item" href="#">Profile</a>
                              </li>
                              <li>
                                <a href="index.php?act=quenmk" class="dropdown-item" href="#">Quên mật khẩu</a>
                              </li>
                              <li><hr class="dropdown-divider" /></li>
                              <li>
                                <a href="index.php?act=thoat" class="dropdown-item" href="#">Logout</a>
                              </li>
                            </ul>
                          </div>
    
                            </div>
                        </div>
                        <!-- Center elements -->';
                    } else {


                        echo '
                        <!-- Center elements -->
                        <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                            <div class="d-flex float-end">
                                <a href="index.php?act=dangnhap" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
                                    <i class="fas fa-user-alt m-1 me-md-2"></i>
                                    <p class="d-none d-md-block mb-0">Đăng nhập</p>
                                </a>
                                <a href="index.php?act=dangky" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
                                    <i class="fas fa-heart m-1 me-md-2"></i>
                                    <p class="d-none d-md-block mb-0">Đăng ký</p>
                                </a>
    
                            </div>
                        </div>
                        <!-- Center elements -->';
                    }



                    ?>


                    <!-- Center elements -->
                    <!-- <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                        <div class="d-flex float-end">
                            <a href="index.php?act=dangnhap" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
                                <i class="fas fa-user-alt m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">Settings</p>
                            </a>
                            <a href="index.php?act=dangky" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
                                <i class="fas fa-heart m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">Admin</p>
                            </a>

                        </div>
                    </div> -->
                    <!-- Center elements -->

                    <!-- Right elements -->
                    <div class="col-lg-5 col-md-12 col-12">
                        <form class="input-group float-center" method="post" action="index.php">
                            <div class="form-outline">
                                <input type="search" id="form1" class="form-control" name="keyword" />
                                <label class="form-label" for="form1">Search</label>
                            </div>
                            <button type="submit" class="btn btn-primary shadow-0" name="keysearch">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- Right elements -->
                </div>
            </div>
        </div>
        <!-- Jumbotron -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5f5f5">
            <!-- Container wrapper -->
            <div class="container justify-content-center justify-content-md-between">
                <!-- Toggle button -->
                <button class="navbar-toggler border text-dark py-2" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?act=categories">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?act=offer">Hot offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?act=gift">Gift boxes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="index.php?act=project">Projects</a>
                        </li>

                    </ul>
                    <!-- Left links -->
                </div>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
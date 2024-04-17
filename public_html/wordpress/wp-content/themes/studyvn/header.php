<?php extract($args);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $head['head_title'][0] ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="Description" content="<?= $head['head_des'][0] ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="<?= $head['head_des'][0] ?>">
    <meta property="og:title" content="<?= $head['head_title'][0] ?>">
    <meta property="og:url" content="https://daisukii.net/">
    <meta property="og:image" content="https://daisukii.net/ogp.png">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="<?= $head['head_des'][0] ?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/all.css" rel="stylesheet">
    <link href="/assets/css/config-css.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <?= @implode('', $head['_css']) ?>
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid topbar bg-dark d-none d-lg-block">
            <div class="container px-0">
                <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                    <div class="top-info flex-grow-0">
                        <span class="rounded-circle btn-sm-square bg-primary me-2">
                            <i class="fas fa-bolt text-white"></i>
                        </span>
                        <div class="pe-2 me-3 border-end border-white d-flex align-items-center">
                            <p class="mb-0 text-white fs-6 fw-normal">Trending</p>
                        </div>
                        <div class="overflow-hidden" style="width: 735px;">
                            <div id="note" class="ps-2">
                                <img src="/img/features-fashion.jpg" class="img-fluid rounded-circle border border-3 border-primary me-2" style="width: 30px; height: 30px;" alt="">
                                <a href="#">
                                    <p class="text-white mb-0 link-hover">Newsan unknown printer took a galley of type
                                        andscrambled Newsan.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="top-link flex-lg-wrap">
                        <i class="fas fa-calendar-alt text-white border-end border-secondary pe-2 me-2"> <span class="text-body">Tuesday, Sep 12, 2024</span></i>
                        <div class="d-flex icon">
                            <p class="mb-0 text-white me-2">Follow Us:</p>
                            <a href="" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-linkedin-in text-body link-hover"></i></a>
                            <a href="" class="me-2"><i class="fab fa-skype text-body link-hover"></i></a>
                            <a href="" class=""><i class="fab fa-pinterest-p text-body link-hover"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="/" class="navbar-brand mt-3">
                        <p class="text-primary display-6 mb-2" style="line-height: 0;">daisukii</p>
                        <!-- <small class="text-body fw-normal" style="letter-spacing: 12px;">buituananh</small> -->
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="detail-page.html" class="nav-item nav-link">TIN TỨC</a>
                            <a href="/" class="nav-item nav-link">CHIA SẺ</a>
                            <div class="nav-item dropdown">
                                <a href="/jlpt-test?category=JLPT%20N1" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">LUYỆN THI JLPT</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="/jlpt-test?category=JLPT%20N1" class="dropdown-item">JLPT N1</a>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <a href="/jlpt-test?category=JLPT%20N2" class="dropdown-item">JLPT N2</a>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <a href="/jlpt-test?category=JLPT%20N3" class="dropdown-item">JLPT N3</a>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <a href="/jlpt-test?category=JLPT%20N4" class="dropdown-item">JLPT N4</a>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <a href="/jlpt-test?category=JLPT%20N5" class="dropdown-item">JLPT N5</a>
                                </div>
                            </div>
                            <a href="detail-page.html" class="nav-item nav-link">YOUTUBE</a>
                            <a href="detail-page.html" class="nav-item nav-link">MUA SÁCH</a>
                            <a href="contact.html" class="nav-item nav-link me-3">LIÊN HỆ</a>
                            <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0 me-5">
                                <button class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                            </div>

                            <div class="nav-item dropdown pt-3 pt-xl-0 me-3">
                                <a href="#" class="acc-bgcl border border-primary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="mdo" width="44" height="44" class="rounded-circle">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="/jlpt-test?category=JLPT%20N1" class="dropdown-item">Viết Bài Chia Sẻ</a>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <a href="/jlpt-test?category=JLPT%20N2" class="dropdown-item">Thông Tin Cá Nhân</a>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <a href="/jlpt-test?category=JLPT%20N4" class="dropdown-item">Đăng Xuất</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->
    <!-- hkKcU5Xsfcq#Vr3 -->
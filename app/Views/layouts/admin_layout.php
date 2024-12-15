<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Ceres HTML Free  - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme
Upgrade to Pro: https://keenthemes.com/products/ceres-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>Event App Bank Kalsel</title>
    <meta name="description"
        content="Ceres admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Ceres theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Ceres HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/products/ceres-html-pro" />
    <meta property="og:site_name" content="Keenthemes | Ceres HTML Free" />
    <link rel="canonical" href="Https://preview.keenthemes.com/ceres-html-free" />
    <link rel="shortcut icon" href="<?=base_url()?>/image/logo-cropped.png" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?=base_url()?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?=base_url()?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <?= $this->renderSection('css') ?>

    <style>
    .nav-container {
        display: none;
    }

    /* Menampilkan nav-container hanya di layar perangkat mobile */
    @media (max-width: 991px) {
        .nav-container {
            display: block;
        }

        .back-dashboard {
            display: none !important;
        }
    }


    @media only screen and (max-width: 600px) {
        .dataTables_filter input[type="search"] {
            width: 150px !important;
            /* Mengurangi ukuran teks */
            padding: 5px !important;
            /* Mengurangi padding agar lebih sesuai dengan lebar yang kecil */
        }

        .dataTables_length {
            display: none !important;
        }
    }


    .nav-container * {
        margin: 0 !important;
        padding: 0 !important;
        box-sizing: border-box !important;
    }


    .nav-mob {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navigation-mob {
        position: fixed;
        width: 400px;
        bottom: 0;
        height: 70px;
        z-index: 999;
        background: linear-gradient(45deg, #2196f3, #6C48C5);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    .navigation-mob ul {
        display: flex;
        width: 350px;
    }

    .navigation-mob ul li {
        position: relative;
        width: 70px;
        height: 70px;
        list-style: none;
        z-index: 1;
    }

    .navigation-mob ul li a {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        text-align: center;
        font-weight: 500;
    }

    .navigation-mob ul li a .icon {
        position: relative;
        display: block;
        line-height: 75px;
        font-size: 1.5em;
        text-align: center;
        color: #fff;
        transition: 0.5s;
    }

    .navigation-mob ul li.active a .icon {
        transform: translateY(-32px);
    }

    .navigation-mob ul li a .text {
        position: absolute;
        color: #fff;
        font-weight: 400;
        font-size: 0.75em;
        letter-spacing: 0.05em;
        opacity: 0;
        transform: translateY(20px);
        transition: 0.5s;
    }

    .navigation-mob ul li.active a .text {
        opacity: 1;
        transform: translateY(10px);
    }

    .navigation-mob ul li a .circle {
        position: absolute;
        display: block;
        width: 50px;
        height: 50px;
        background: transparent;
        border-radius: 50%;
        border: 1.8px solid #fff;
        transform: translateY(-37px) scale(0);
    }

    .navigation-mob ul li.active a .circle {
        transition: 0.5s;
        transition-delay: 0.5s;
        transform: translateY(-37px) scale(1);
    }

    .indicator {
        position: absolute;
        top: -50%;
        width: 70px;
        height: 70px;
        background: linear-gradient(45deg, #2196f3, #1230AE);
        border: 6px solid #ffffff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.5s;
    }

    .indicator::before {
        content: "";
        position: absolute;
        top: 50%;
        left: -320px;
        width: 318px;
        height: 20px;
        background: transparent;
        border-top-right-radius: 20px;
        box-shadow: 1px -10px 0 #ffffff;
    }

    .indicator::after {
        content: "";
        position: absolute;
        top: 50%;
        right: -322px;
        width: 320px;
        height: 20px;
        background: transparent;
        border-top-left-radius: 20px;
        box-shadow: -1px -10px 0 #ffffff;
    }

    .navigation-mob ul li:nth-child(1).active~.indicator {
        transform: translateX(calc(70px * 0));
    }

    .navigation-mob ul li:nth-child(2).active~.indicator {
        transform: translateX(calc(70px * 1));
    }

    .navigation-mob ul li:nth-child(3).active~.indicator {
        transform: translateX(calc(70px * 2));
    }

    .navigation-mob ul li:nth-child(4).active~.indicator {
        transform: translateX(calc(70px * 3));
    }

    .navigation-mob ul li:nth-child(5).active~.indicator {
        transform: translateX(calc(70px * 4));
    }
    </style>

    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<div class="nav-container">
    <div class="nav-mob">

        <div class="navigation-mob">
            <ul>
                <li class="list  <?= $activeMenu == "profile" ? "active" : ""; ?>">
                    <a href="<?=base_url()?>/admin/profile">
                        <span class="icon">
                            <ion-icon name="person-outline" style="font-size: 1.15em !important;"></ion-icon>
                        </span>
                        <span class="text">Profile</span>
                        <span class="circle"></span>
                    </a>
                </li>
                <li class="list <?= $activeMenu == "akun" ? "active" : ""; ?>">
                    <a href="<?=base_url()?>/admin/akun">
                        <span class="icon">
                            <ion-icon name="reader-outline"></ion-icon>
                        </span>
                        <span class="text">Akun</span>
                        <span class="circle"></span>
                    </a>
                </li>
                <li class="list <?= $activeMenu == "pendaftaran" ? "active" : ""; ?>">
                    <a href="<?=base_url()?>/admin/pendaftaran" class="">
                        <span class="icon" style="box-sizing: border-box !important;">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="text">Home</span>
                        <span class="circle"></span>
                    </a>
                </li>
                <li class="list <?= $activeMenu == "event" ? "active" : ""; ?>">
                    <a href="<?=base_url()?>/admin/event">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="text">Event</span>
                        <span class="circle"></span>
                    </a>
                </li>
                <li class="list">
                    <a href="<?=base_url()?>/logout">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>

                        </span>
                        <span class="text">Logout</span>
                        <span class="circle"></span>
                    </a>
                </li>

                <div class="indicator"></div>
            </ul>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
        const list = document.querySelectorAll('.list');

        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('active'));
            this.classList.add('active');
        }

        list.forEach((item) =>
            item.addEventListener('click', activeLink));
        </script>
    </div>

</div>

<body id="kt_body" style="background-image: url(<?=base_url()?>/assets/media/patterns/header-bg.png)"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">




    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header align-items-stretch" data-kt-sticky="true"
                    data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex align-items-center">
                        <!--begin::Heaeder menu toggle-->
                        <!-- <div class="d-flex align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                            <div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px"
                                id="kt_header_menu_mobile_toggle">
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </div>
                        </div> -->
                        <!--end::Heaeder menu toggle-->
                        <!--begin::Header Logo-->
                        <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
                            <a href="<?=base_url()?>/admin/dashboard">
                                <img alt="Logo" src="<?=base_url()?>/image/logo.png" style="border-radius: 8px;"
                                    class="h-25px h-lg-35px logo-default" />
                                <img alt="Logo" src="<?=base_url()?>/image/logo.png"
                                    class="h-35px h-lg-40px logo-sticky" />
                            </a>
                        </div>
                        <!--end::Header Logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                    data-kt-drawer-name="header-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                    data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                                        id="#kt_header_menu" data-kt-menu="true">
                                        <!-- <a href="<?=base_url()?>/admin/dashboard" data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-lg-1 <?php $activeMenu == "dashboard" ? "here show " : ""; ?>">
                                            <span class="menu-link py-3">
                                                <span class="menu-title">Dashboard</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                        </a> -->
                                        <!-- <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                            data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-lg-1 <?php $activeMenu == "pengajuan id card" || $activeMenu == "pengajuan simper" ? "here show " : ""; ?>">
                                            <span class="menu-link py-3">
                                                <span class="menu-title">
                                                    Pengajuan
                                                </span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div
                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                           
                                                <div class="menu-item">
                                                    <a class="menu-link py-3 <?php $activeMenu == "pengajuan id card" ? "active " : ""; ?>"
                                                        href="<?=base_url()?>/admin/id_card">
                                                        <span class="menu-icon">
                                                            <i class="bi bi-person-badge-fill"></i>
                                                        </span>
                                                        <span class="menu-title">Pengajuan ID Card</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3 <?php $activeMenu == "pengajuan simper" ? "active " : ""; ?>"
                                                        href="<?=base_url()?>/admin/simper">
                                                        <span class="menu-icon">
                                                            <i class="bi bi-credit-card"></i>
                                                        </span>
                                                        <span class="menu-title">Pengajuan Simper</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-lg-1 <?= $activeMenu == "akun" ? "here show " : ""; ?>"">
                                            <a href=" <?=base_url()?>/admin/akun" class="menu-link py-3 px-5">
                                            <span class="menu-title">Management Akun</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div>
                                        <div data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-lg-1 <?= $activeMenu == "event" ? "here show " : ""; ?>"">
                                            <a href=" <?=base_url()?>/admin/event" class="menu-link py-3 px-5">
                                            <span class="menu-title">Kelola Event</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div>
                                        <div data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-lg-1 <?= $activeMenu == "pendaftaran" ? "here show " : ""; ?>"">
                                            <a href=" <?=base_url()?>/admin/pendaftaran" class="menu-link py-3 px-5">
                                            <span class="menu-title">Management Peserta</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div>
                                        <div data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-lg-1 <?= $activeMenu == "profile" ? "here show " : ""; ?>"">
                                            <a href=" <?=base_url()?>/admin/profile" class="menu-link py-3 px-5">
                                            <span class="menu-title">Profile</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div>
                                        <div data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-lg-1">
                                            <a href="<?=base_url()?>/logout" class="menu-link py-3">
                                                <span class="menu-title">Logout</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div>
                                        <!-- <div data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-lg-down-accordion me-lg-1">
                                            <a href="<?=base_url()?>/logout" class="menu-link py-3">
                                                <span class="menu-title">Logout</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </a>
                                        </div> -->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Topbar-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Toolbar wrapper-->
                                <div class="topbar d-flex align-items-stretch flex-shrink-0">
                                    <span class="menu-title text-white fw-bold ">
                                        <span class="d-flex align-items-center px-1" style="font-size: 93% !important;">
                                            <?= session("username"); ?>
                                        </span>
                                        <div class="d-flex align-items-end">
                                            <span
                                                class="badge badge-light-success d-flex align-items-center fw-bolder fs-8 px-2 py-1 ms-auto"
                                                style="color: #50CD89 !important; background-color: #E8FFF3 !important; display: inline-block !important; min-width: 50px !important; width: auto !important;">
                                                online
                                            </span>
                                        </div>
                                    </span>
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <!-- <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                            <img src="<?=base_url()?>/assets/media/avatars/blank.png" alt="User" />
                                        </div> -->
                                        <!-- <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end">
                                            <img alt="Pic" src="<?=base_url()?>/assets/media/avatars/150-26.jpg" />
                                        </div> -->
                                        <!--begin::User account menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo"
                                                            src="<?=base_url()?>/assets/media/avatars/150-26.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                                            <?= ucwords(session("username")); ?>
                                                            <span
                                                                class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">online</span>
                                                        </div>
                                                        <a href="#"
                                                            class="fw-bold text-muted text-hover-primary fs-7">Admin</a>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="<?=base_url()?>/admin/profile" class="menu-link px-5">Profile
                                                    Saya</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="<?=base_url()?>/auth/login" class="menu-link px-5">Sign Out</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::User account menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User -->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Topbar-->
                        </div>

                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Toolbar-->
                <!--end::Toolbar-->
                <!--begin::Container-->
                <?= $this->renderSection('content') ?>
                <!--end::Container-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2024©</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">PT
                                Event App Bank Kalsel</a>
                        </div>
                        <!--end::Copyright-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <script>
    var hostUrl = "/assets/";
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?=base_url()?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?=base_url()?>/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="<?=base_url()?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?=base_url()?>/assets/js/custom/widgets.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->

    <script src="<?=base_url()?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <?= $this->renderSection('js') ?>


    <!-- alert -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (session()->getFlashdata('success')): ?>
        Swal.fire({
            text: "<?php echo session()->getFlashdata('success'); ?>",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok!",
            customClass: {
                confirmButton: "btn btn-primary mx-4"
            }
        });
        <?php elseif (session()->getFlashdata('error')): ?>
        Swal.fire({
            text: "<?php echo session()->getFlashdata('error'); ?>",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok!",
            customClass: {
                confirmButton: "btn btn-danger mx-4"
            }
        });
        <?php endif; ?>
    });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
    const list = document.querySelectorAll('.navigation-mob-mobile list');

    function activeLink() {
        list.forEach((item) =>
            item.classList.remove('active'));
        this.classList.add('active');
    }
    list.forEach((item) =>
        item.addEventListener('click', activeLink));
    </script>

</body>
<!--end::Body-->

</html>
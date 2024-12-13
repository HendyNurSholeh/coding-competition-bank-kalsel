<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Ceres 
Product Version: 1.1.4
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

    <meta charset="utf-8" />
    <meta name="description"
        content="Ceres admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Ceres theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Ceres HTML Pro- Bootstrap 5 HTML Multipurpose Admin Dashboard Theme - Ceres HTML Free by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/products/ceres-html-pro" />
    <meta property="og:site_name" content="Ceres HTML Free by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/ceres-html-pro" />
    <link rel="shortcut icon" href="<?=base_url()?>/image/logo-cropped.png" />
    <title>United Tractors</title>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="<?=base_url()?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="<?=base_url()?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-37564768-1');
    </script>
    <!--end::Google tag-->
    <script>
    // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
    if (window.top != window.self) {
        window.top.location.replace(window.self.location.href);
    }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->



<body id="kt_body" style="background-image: url(<?=base_url()?>/assets/media/patterns/header-bg.png)"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
    <!--begin::Theme mode setup on page load-->
    <script>
    var defaultThemeMode = "dark";
    var themeMode;

    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">




                <!--begin::Toolbar-->
                <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class=" container-xxl  d-flex flex-stack flex-wrap">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column">
                            <!--begin::Title-->
                            <h1 class="d-flex text-white fw-bold fs-2qx my-1 me-5">
                                Mine Permit
                            </h1>
                            <!--end::Title-->


                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">

                                <li class="breadcrumb-item text-white opacity-75">
                                    <a href="#" class="text-white text-hover-primary">
                                        Mine Permit </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                                </li>

                                <li class="breadcrumb-item text-white opacity-75">
                                    Overview </li>

                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center flex-wrap py-2">
                            <!--begin::Action-->
                            <a href="<?=base_url()?>/<?= $minePermit['mine_permit']?>"
                                class="btn btn-custom btn-color-white btn-active-color-success my-2 me-2 me-lg-6">
                                Lihat ID Card
                            </a>
                            <!--end::Action-->

                            <!--begin::Button-->
                            <!-- <a href="#" class="btn btn-success my-2" tooltip="New App" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_campaign">
                                New Goal
                            </a> -->
                            <!--end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Toolbar-->



                <!--begin::Container-->
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start  container-xxl ">

                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">

                        <!--begin::Layout - Overview-->
                        <div class="d-flex flex-column flex-xl-row">
                            <!--begin::Sidebar-->
                            <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                                <!--begin::Card-->
                                <div class="card card-flush" data-kt-sticky="true" data-kt-sticky-name="account-navbar"
                                    data-kt-sticky-offset="{default: false, xl: '80px'}"
                                    data-kt-sticky-height-offset="50" data-kt-sticky-width="{lg: '250px', xl: '300px'}"
                                    data-kt-sticky-animation="false" data-kt-sticky-left="auto"
                                    data-kt-sticky-top="90px" data-kt-sticky-animation="false"
                                    data-kt-sticky-zindex="95">

                                    <!--begin::Card header-->
                                    <div class="card-header justify-content-between">
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <small class="text-gray-400">Masa Berlaku:
                                                <?= $minePermit['masaberlakuformatindo']; ?></small>

                                            <!--end::Menu 3-->
                                        </div>
                                        <div class="card-toolbar">
                                            <span class="badge badge-success">Active</span>

                                            <!--end::Menu 3-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0 p-10">
                                        <!--begin::Summary-->
                                        <div class="d-flex flex-center flex-column">
                                            <!--begin::Avatar-->
                                            <div class="symbol  mb-3 symbol-100px symbol-circle "><img alt="Pic"
                                                    src="<?=base_url()?>/uploads/pas_foto/<?= $minePermit['pas_foto_image']; ?>" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <a href="#" class="fs-2 text-gray-800 text-hover-primary fw-bold mb-1">
                                                <?= ucwords(strtolower(trim($minePermit['nama']))); ?>
                                                <!--end::Name-->

                                                <!--begin::Position-->
                                                <div class="fs-6 fw-semibold text-gray-400 mb-2">
                                                    <?= ucwords(strtolower(trim($minePermit['jabatan']))); ?> </div>
                                                <!--end::Position-->

                                                <!--begin::Actions-->
                                                <div class="d-flex flex-center">
                                                    <a href="#"
                                                        class="btn btn-sm btn-light-primary py-2 px-4 fw-bold me-2"
                                                        data-kt-drawer-show="true"
                                                        data-kt-drawer-target="#kt_drawer_chat"><?= $minePermit['company']; ?></a>
                                                </div>
                                                <!--end::Actions-->
                                        </div>
                                        <!--end::Summary-->

                                        <!--begin::Menu-->
                                        <!-- <ul
                                            class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bold fs-5 mb-10">
                                            <li class="menu-item mb-1">
                                                <a class="menu-link px-6 py-4 active" href="<?=base_url()?>/account/overview.html">
                                                    <span class="menu-bullet"><span class="bullet"></span></span>
                                                    <span class="menu-title">
                                                        Overview </span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-1">
                                                <a class="menu-link px-6 py-4 " href="#">
                                                    <span class="menu-bullet"><span class="bullet"></span></span>
                                                    <span class="menu-title">
                                                        ID Card </span>
                                                </a>
                                            </li>
                                        </ul> -->
                                        <!--end::Menu-->

                                        <!--begin::Account info-->

                                        <!--end::Account info-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Sidebar-->

                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid ms-lg-10">

                                <!--begin::details View-->
                                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">

                                    <!-- <div class="card-header cursor-pointer">
                                        <div class="card-title m-0">
                                            <h3 class="fw-bold m-0">Profile Details</h3>
                                        </div>
                                    </div> -->
                                    <!--begin::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body p-9">
                                        <!--begin::Row-->
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-semibold text-muted">Nama Lengkap</label>
                                            <!--end::Label-->

                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <span
                                                    class="fw-bold fs-6 text-dark"><?= ucwords(strtolower(trim($minePermit['nama']))); ?></span>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-semibold text-muted">NRP</label>
                                            <!--end::Label-->

                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <span
                                                    class="fw-bold fs-6 text-dark"><?= ucwords($minePermit['nrp']); ?></span>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-semibold text-muted">Jabatan</label>
                                            <!--end::Label-->

                                            <!--begin::Col-->
                                            <div class="col-lg-8">
                                                <span
                                                    class="fw-bold fs-6 text-dark"><?= ucwords(strtolower(trim($minePermit['jabatan']))); ?></span>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Mekanik
                                        <!--begin::Input group-->
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-semibold text-muted">Company</label>
                                            <!--end::Label-->

                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <span
                                                    class="fw-semibold fs-6"><?= ucwords($minePermit['company']); ?></span>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-semibold text-muted">Masa Berlaku</label>
                                            <!--end::Label-->

                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <span
                                                    class="fw-semibold fs-6"><?= ucwords($minePermit['masaberlakuformat']); ?></span>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-semibold text-muted d-flex align-items-center">
                                                Nomor Telepon

                                                <span class="d-flex align-items-center ms-1" data-bs-toggle="tooltip"
                                                    title="Phone number must be active">
                                                    <i class="ki-duotone ki-information fs-3"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> </span>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Col-->
                                            <div class="col-lg-8 d-flex align-items-center">
                                                <span
                                                    class="fw-bold fs-6 me-2"><?= ucwords($minePermit['no_telp'] ? $minePermit['no_telp'] : '-'); ?></span>


                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <div class="row mb-7">
                                            <!--begin::Label-->
                                            <label class="col-lg-4 fw-semibold text-muted">Golongan Darah</label>
                                            <!--end::Label-->

                                            <!--begin::Col-->
                                            <div class="col-lg-8 fv-row">
                                                <span
                                                    class="fw-semibold fs-6"><?= strtoupper($minePermit['gol_darah']); ?></span>
                                            </div>
                                            <!--end::Col-->
                                        </div>


                                        <!--begin::Notice-->
                                        <!-- <div
                                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-5 px-1 pe-3 p-md-6 px-md-3 ">

                                            <i class="ki-duotone ki-information-5 fs-2tx text-primary me-4"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i>

                                            <div class="d-flex flex-stack flex-grow-1 ">
                                                <div class=" fw-semibold">
                                                    <div class="m-0 ">
                                                        <div style="font-weight: bold !important;"
                                                            class="d-flex align-items-center collapsible py-0 toggle  mb-2"
                                                            data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
                                                            <div
                                                                class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i
                                                                    class="bi bi-clipboard-minus toggle-on text-primary fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i>
                                                                <i class="bi bi-clipboard-plus toggle-off fs-1"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i>
                                                            </div>

                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                Unit Recomendations
                                                            </h4>
                                                        </div>
                                                        <div id="kt_job_4_1" class="collapse show fs-6 ms-1">
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                <button type="button"
                                                                    style="font-size: 0.8em !important;"
                                                                    class="btn mt-1 btn-secondary"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-custom-class="tooltip-inverse"
                                                                    data-bs-placement="top" title="Full Operation">
                                                                    DH
                                                                </button>

                                                                <button style="font-size: 0.8em !important;"
                                                                    type="button" class="btn mt-1 btn-secondary"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-custom-class="tooltip-inverse"
                                                                    data-bs-placement="top" title="Restricted">
                                                                    Exavator
                                                                </button>

                                                                <button style="font-size: 0.8em !important;"
                                                                    type="button" class="btn mt-1 btn-secondary"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-custom-class="tooltip-inverse"
                                                                    data-bs-placement="top" title="Learning Only">
                                                                    Mobil Jimper
                                                                </button>

                                                                <button style="font-size: 0.8em !important;"
                                                                    type="button" class="btn mt-1 btn-secondary"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-custom-class="tooltip-inverse"
                                                                    data-bs-placement="top" title="Instruktur">
                                                                    Forklift
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="separator separator-dashed"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> -->


                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::details View-->




                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Layout - Overview-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Container-->

                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class=" container-xxl  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2024&copy;</span>
                            <a href="https://keenthemes.com" target="_blank"
                                class="text-gray-800 text-hover-primary">United Tractors</a>
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
    <!--end::Root-->
    <!--end::Drawers-->
    <!--end::Main-->
    <!--begin::Engage drawers-->


    <!--end::Exolore drawer-->
    <!--begin::Help drawer-->
    <div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">

        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_help_header">
                <h5 class="card-title fw-semibold text-gray-600">
                    Learn & Get Inspired
                </h5>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
                        <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                    </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body" id="kt_help_body">
                <!--begin::Content-->
                <div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"
                    data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">

                    <!--begin::Support-->
                    <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                        <!--begin::Heading-->
                        <h2 class="fw-bold mb-5">Support at <a href="https://devs.keenthemes.com"
                                class="">devs.keenthemes.com</a></h2>
                        <!--end::Heading-->

                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold mb-5">
                            <span class="text-gray-500">Join our developers community to find answer to your question
                                and help others.</span>
                            <a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
                        </div>
                        <!--end::Description-->

                        <!--begin::Link-->
                        <a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get
                            Support</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Support-->

                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/ceres-html-pro/docs"
                        class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                            <i class="ki-duotone ki-abstract-26 text-warning fs-2x fs-lg-3x"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Documentation </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    From guides and how-tos, to live demos and code examples to get started right away.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/ceres-html-pro/docs/base/utilities"
                        class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                            <i class="ki-duotone ki-wallet text-primary fs-2x fs-lg-3x"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Plugins & Components </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Check out our 300+ in-house components and customized 3rd-party plugins. </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="<?=base_url()?>/layout-builder.html" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                            <i class="ki-duotone ki-design text-info fs-2x fs-lg-3x"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Layout Builder </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Build your layout, preview it and export the HTML for server side integration.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/ceres-html-pro/docs/getting-started/changelog"
                        class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                            <i class="ki-duotone ki-keyboard text-danger fs-2x fs-lg-3x"><span
                                    class="path1"></span><span class="path2"></span></i>
                        </div>
                        <!--end::Icon-->



                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Help drawer-->
    <!--end::Engage drawers-->

    <!--begin::Engage toolbar-->
    <div
        class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">




    </div>
    <!--end::Engage toolbar-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->

    <!--end::Modal - Create Campaign-->
    <!--begin::Modal - Users Search-->

    <!--begin::Javascript-->
    <script>
    var hostUrl = "/assets/";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?=base_url()?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?=base_url()?>/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="<?=base_url()?>/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="<?=base_url()?>/assets/js/custom/pages/user-profile/general.js"></script>
    <script src="<?=base_url()?>/assets/js/widgets.bundle.js"></script>
    <script src="<?=base_url()?>/assets/js/custom/widgets.js"></script>
    <script src="<?=base_url()?>/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="<?=base_url()?>/assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="<?=base_url()?>/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: CeresProduct Version: 1.1.7
Purchase: https://keenthemes.com/products
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
    <title>Hepi GO</title>
    <link rel="shortcut icon" href="<?=base_url()?>/image/logo-cropped.png" />
    <meta charset="utf-8" />
    <meta name="description"
        content="Ceres admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Ceres theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Ceres HTML Pro- Bootstrap 5 HTML Multipurpose Admin Dashboard Theme by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/products" />
    <meta property="og:site_name" content="Ceres HTML Pro by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/authentication/sign-in/basic.html" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->



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

<body id="kt_body" class="auth-bg">
    <!--begin::Theme mode setup on page load-->
    <script>
    var defaultThemeMode = "light";
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
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <!--begin::Image placeholder-->
        <style>
        .auth-page-bg {
            background-image: url('<?=base_url()?>/assets/media/illustrations/dozzy-1/14.png');
        }

        [data-bs-theme="dark"] .auth-page-bg {
            background-image: url('<?=base_url()?>/assets/media/illustrations/dozzy-1/14-dark.png');
        }
        </style>
        <!--end::Image placeholder-->

        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed auth-page-bg">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <!--end::Logo-->
                <!--begin::Heading-->
                <div class="text-center">
                    <img alt="Logo" src="<?=base_url()?>/image/logo-removebg.png"
                        class="h-60px mb-3 theme-light-show rounded-3" />
                    <!--begin::Title-->
                    <!--end::Link-->
                </div>
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

                    <form class="form w-100" id="kt_sign_up_form" action="<?= base_url()?>/auth/register/post-register"
                        method="post">
                        <?= csrf_field(); ?>

                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Register</h1>
                            <div class="text-gray-400 fw-semibold fs-4">
                                <a href="#" class="link-info fw-bold">
                                    Daftar untuk membuat akun baru
                                </a>
                            </div>
                        </div>

                        <div class="fv-row mb-10">
                            <label class="form-label required fs-6 fw-bold text-gray-900">Nama Lengkap</label>
                            <input class="form-control form-control-lg form-control-solid"
                                placeholder="masukkan nama lengkap" type="text" name="full_name" autocomplete="off"
                                required />
                        </div>

                        <div class="fv-row mb-10">
                            <label class="form-label required fs-6 fw-bold text-gray-900">Username</label>
                            <input class="form-control form-control-lg form-control-solid"
                                placeholder="masukkan username" type="text" name="username" autocomplete="off"
                                required />
                        </div>

                        <div class="fv-row mb-10">
                            <label class="form-label required fs-6 fw-bold text-gray-900">Email</label>
                            <input class="form-control form-control-lg form-control-solid" placeholder="masukkan email"
                                type="email" name="email" autocomplete="off" required />
                        </div>

                        <div class="fv-row mb-10">
                            <label class="form-label required fs-6 fw-bold text-gray-900">Password</label>
                            <input class="form-control form-control-lg form-control-solid"
                                placeholder="masukkan password" type="password" name="password" autocomplete="off"
                                required />
                        </div>

                        <div class="fv-row mb-10">
                            <label class="form-label required fs-6 fw-bold text-gray-900">Konfirmasi Password</label>
                            <input class="form-control form-control-lg form-control-solid"
                                placeholder="konfirmasi password" type="password" name="confirm_password"
                                autocomplete="off" required />
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-info w-100 mb-5">
                                <span class="indicator-label fw-bold text-white">
                                    Register
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>

                        <p>Sudah punya akun? <a href="/auth/login">masuk sekarang</a></p>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->

            <!--begin::Footer-->

            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->


    <!--begin::Javascript-->
    <script>
    var hostUrl = "<?=base_url()?>/assets/";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?=base_url()?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?=base_url()?>/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--begin::Custom Javascript(used for this page only)-->
    <script src="<?=base_url()?>/assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->
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

    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
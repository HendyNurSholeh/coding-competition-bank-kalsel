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
    <title>Event App Bank Kalsel</title>
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
            /* background-image: url('<?=base_url()?>/assets/media/illustrations/dozzy-1/14.png'); */
        }

        [data-bs-theme="dark"] .auth-page-bg {
            /* background-image: url('<?=base_url()?>/assets/media/illustrations/dozzy-1/14-dark.png'); */
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
                    <img alt="Logo" src="<?=base_url()?>/image/logo.png"
                        class="h-60px mb-3 theme-light-show rounded-3" />
                    <!--begin::Title-->
                    <!--end::Link-->
                </div>
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                        action="<?= base_url()?>/auth/login/post-login<?= isset($_GET['id']) ? '?id=' . $_GET['id'] : ''; ?>"
                        method="post">
                        <?= csrf_field(); ?>

                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Login</h1>
                            <!--end::Title-->

                            <!--begin::Link-->
                            <div class="text-gray-400 fw-semibold fs-4">
                                <a href="#" class="link-info fw-bold">
                                    masuk untuk melanjutkan
                                </a>
                            </div>
                            <!--end::Linkroutes-->
                        </div>

                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label required fs-6 fw-bold text-gray-900">Username</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid"
                                placeholder="masukkan username" type="text" name="username"
                                value="<?= session('username') ?? ''; ?>" autocomplete="off" required />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label required fw-bold text-gray-900 fs-6 mb-0">Password</label>
                                <!--end::Label-->

                                <!--begin::Link-->
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid"
                                placeholder="masukkan password" value="<?= session('password') ?? ''; ?>"
                                type="password" name="password" autocomplete="off" required />
                            <!--end::Input-->

                        </div>
                        <!-- <p>Belum punya akun? <a href="/auth/register">daftar sekarang</a></p> -->
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <!-- <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5"> -->
                            <button type="submit" class="btn btn-lg btn-info w-100 mb-5">
                                <span class="indicator-label fw-bold text-white">
                                    Login
                                </span>


                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                            <!--end::Submit button-->

                            <!--end::Google link-->
                        </div>
                        <!--end::Actions-->
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
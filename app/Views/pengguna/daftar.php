<?= $this->extend('layouts/pengguna_layout') ?>
<?= $this->section('css') ?>
<style>
/* Custom CSS for enhancing the layout */
.badge-responsive {
    display: inline-block;
    max-width: 100%;
    word-wrap: break-word;
    white-space: normal;
    text-align: center;
}

.card-custom {
    border-radius: 15px;
    border: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

.card-custom:hover {
    transform: translateY(-8px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

.icon-large {
    font-size: 55px;
    margin-bottom: 10px;
}

.btn-custom {
    border-radius: 30px;
    padding: 10px 25px;
}

.alert-custom {
    background-color: #f3f7ff;
    border-color: #d0e3ff;
    color: #0056b3;
}

.text-muted-custom {
    color: #6c757d;
}

.section-heading {
    font-size: 24px;
    font-weight: bold;
    color: #2e3b4e;
}

.image-preview {
    display: block;
    margin: 0 auto 20px;
    width: 100px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.info-box {
    padding: 30px;
    background-color: #f9fafb;
    border-radius: 15px;
    margin-bottom: 20px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
}

.info-title {
    font-weight: 600;
    font-size: 18px;
}

.info-description {
    color: #555;
    line-height: 1.6;
}

.definition-section {
    padding: 40px;
    background-color: #f1f5f9;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    margin-top: 30px;
}

.definition-title {
    font-size: 22px;
    font-weight: bold;
    color: #34495e;
    margin-bottom: 15px;
}

.definition-content {
    font-size: 16px;
    color: #555;
    line-height: 1.8;
    text-align: left;
}

.definition-highlight {
    color: #007bff;
    font-weight: 600;
}

.image-idcard-simper {
    width: 150px;
    margin-bottom: 20px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Media query for responsive font size */
@media (max-width: 576px) {
    .section-heading {
        font-size: 20px !important;
        /* Ukuran font untuk heading */
    }

    .text-muted-custom {
        font-size: 16px !important;
        /* Ukuran font untuk teks muted */
    }

    .card-title {
        font-size: 16px !important;
        /* Ukuran font untuk judul kartu */
    }

    .card-text {
        font-size: 14px !important;
        /* Ukuran font untuk teks di kartu */
    }

    .badge {
        font-size: 10px !important;
        /* Ukuran font untuk badge */
    }
}
</style>
<link rel="canonical" href="https://preview.keenthemes.com/html/ceres-html-pro/docs/general/stepper" />
<link rel="shortcut icon" href="/assets/media/logos/metronic.ico" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
<!--begin::Vendor Stylesheets(used for this page only)-->
<link href="<?= base_url(); ?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
<style>
/* Sembunyikan stepper-nav di tampilan perangkat mobile */
@media (max-width: 768px) {
    .hide-mobile {
        display: none !important;
    }
}
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start  container-xxl ">

    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">

        <!--begin::Layout - Settings-->
        <div class="d-flex flex-column flex-xl-row">

            <!--begin::Content-->
            <div class="flex-lg-row-fluid mb-10">

                <form class="form form-pengajuan" id="kt_modal_add_pengajuan"
                    action="<?= base_url("pengguna/post-daftar"); ?>" enctype="multipart/form-data" method="post">
                    <?= csrf_field(); ?>
                    <div class="card card-custom h-100 bg-light-primary text-center">
                        <div class="card-body p-5 mb-5">
                            <div class="mb-4" style="padding-top: 8px">
                                <i class="fas fa-calendar-alt icon-large text-primary"></i>
                            </div>
                            <h4 class="card-title text-primary mb-3" style="padding-top: 8px">Pendaftaran Event</h4>
                            <p class="card-text text-muted">
                                Lengkapi seluruh data untuk mendaftar ke event yang tersedia.
                            </p>
                            <!--begin::Stepper-->
                            <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                                <!--begin::Nav-->
                                <div id="stepper-navigate" class="stepper-nav flex-center flex-wrap mb-10">
                                    <!--begin::Step 1-->
                                    <div class="stepper-item mx-8 my-4 current hide-mobile"
                                        data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">1</span>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 1
                                                </h3>

                                                <div class="stepper-desc">
                                                    Isi Data Diri
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 1-->

                                    <!--begin::Step 2-->
                                    <div class="stepper-item mx-8 my-4 hide-mobile" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">2</span>
                                            </div>
                                            <!--begin::Icon-->

                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 2
                                                </h3>

                                                <div class="stepper-desc">
                                                    Konfirmasi Data
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 2-->

                                    <!--begin::Step 3-->
                                    <div class="stepper-item mx-8 my-4 hide-mobile" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">3</span>
                                            </div>
                                            <!--begin::Icon-->

                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 3
                                                </h3>

                                                <div class="stepper-desc">
                                                    Selesai
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Line-->
                                        <div class="stepper-line h-40px"></div>
                                        <!--end::Line-->
                                    </div>
                                    <!--end::Step 3-->
                                </div>
                                <!--end::Nav-->

                                <!--begin::Form-->
                                <div class="mx-auto px-lg-5 mx-lg-5">
                                    <!--begin::Group-->
                                    <div class="mb-5">
                                        <!--begin::Step 1-->
                                        <div class="flex-column current" data-kt-stepper-element="content">


                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                style="text-align: left !important;" id="kt_modal_add_anggota_scroll"
                                                data-kt-scroll-max-height="auto"
                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                data-kt-scroll-wrappers="#kt_modal_add_anggota_scroll"
                                                data-kt-scroll-offset="300px">
                                                <h4 class="card-title text-primary mb-3" style="padding-top: 8px">
                                                    Isi Data Diri</h4>
                                                <div class="row mb-1  bg-white border border-primary mt-3 con-question p-3 pb-5 px-lg-5 "
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-semibold fs-6 mb-2">Nama
                                                                    Event</label>
                                                                <input type="text" name="event_name"
                                                                    value="<?= $event['title']; ?>"
                                                                    class="form-control form-control mb-3 mb-lg-0"
                                                                    placeholder="Masukkan Nama" required disabled />
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-12">
                                                            <div class="fv-row mb-7">
                                                                <label
                                                                    class="required fw-semibold fs-6 mb-2">Nama</label>
                                                                <input type="text" name="name"
                                                                    class="form-control form-control mb-3 mb-lg-0"
                                                                    placeholder="Masukkan Nama" required />
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="fv-row mb-7">
                                                                <label
                                                                    class="required fw-semibold fs-6 mb-2">NPP</label>
                                                                <input type="text" name="npp"
                                                                    class="form-control form-control mb-3 mb-lg-0"
                                                                    placeholder="Masukkan NPP" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="fv-row mb-7">
                                                                <label
                                                                    class="required fw-semibold fs-6 mb-2">Email</label>
                                                                <input type="email" name="email"
                                                                    class="form-control form-control mb-3 mb-lg-0"
                                                                    placeholder="Masukkan Email" required />
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="event_id" value="<?= $_GET['id']; ?>"
                                                            class="form-control form-control mb-3 mb-lg-0"
                                                            placeholder="Masukkan Event ID" required />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <button type="submit"
                                                                class="btn btn-primary">Daftar</button>
                                                        </div>
                                                    </div>




                                                </div>
                                                <!--end::Scroll-->

                                                <!--begin::Actions-->
                                                <!-- <div class="text-center pt-10">

                                                <div>
                                                    <a href="<?php base_url(); ?>karyawan/ajukan-minepermit"
                                                        class="btn btn-primary btn-custom mt-4">Submit</a>
                                                    <br>
                                                    <span class="badge badge-warning mt-3 text-dark"
                                                        style="font-size: 0.7em;">Klik
                                                        Submit untuk
                                                        melanjutkan ke tahap
                                                        Post Test</span>
                                                </div>
                                            </div> -->
                                                <!--end::Actions-->
                                            </div>

                                        </div>
                                    </div>
                                    <!--begin::Step 1-->

                                </div>
                                <!--end::Group-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-light-primary"
                                            data-kt-stepper-action="previous">
                                            Kembali
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                            <span class="indicator-label">
                                                Submit
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>

                                        <!-- <button type="submit" class="btn btn-primary">
                                            Berikutnya
                                        </button> -->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                                <!--end::Form-->
                            </div>
                            <!--end::Stepper-->


                        </div>
                </form>
            </div>

            <!--end::Notifications-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout - Settings-->
</div>
<!--end::Post-->
</div>
<!--end::Container-->
<?= $this->endSection() ?>
<?= $this->section('js') ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>




<script>
// Mengatur zona waktu Asia/Makassar
const now = new Date();
const yearFromNow = new Date(now.setFullYear(now.getFullYear() + 1));

// Format tanggal dalam bentuk YYYY-MM-DD
const formattedDate = yearFromNow.toISOString().split('T')[0];

// Mengatur nilai default
document.getElementById('masa_berlaku1').value = formattedDate;
</script>
<!--end::Custom Javascript-->
<!--end::Custom Javascript-->
<!--begin::Javascript-->
<script>
var hostUrl = "/assets/";
</script>

<!--begin::Vendors Javascript(used for this page only)-->
<!-- <script src="/assets/plugins/custom/prismjs/prismjs.bundle.js"></script> -->
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<!-- <script src="/assets/js/custom/documentation/general/stepper.js"></script> -->
<?= $this->endSection() ?>
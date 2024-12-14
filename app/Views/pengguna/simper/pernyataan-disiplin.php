<?= $this->extend('layouts/karyawan_layout') ?>
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
<link rel="shortcut icon" href="<?= base_url(); ?>/assets/media/logos/metronic.ico" />

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

                <form class="form " action="<?= base_url("karyawan/simper/post-pernyataan-disiplin/$simperId"); ?>"
                    method="post">
                    <?= csrf_field(); ?>
                    <div class="card card-custom h-100 bg-light-primary text-center">
                        <div class="card-body p-5 mb-5">
                            <div class="mb-4" style="padding-top: 8px">
                                <i class="fas fa-car icon-large text-primary"></i>
                            </div>
                            <h4 class="card-title text-primary mb-3" style="padding-top: 8px">Pengajuan Simper
                                Karyawan</h4>
                            <p class="card-text text-muted">
                                Lengkapi seluruh data dalam melakukan proses pengajuan untuk
                                persyaratan penerbitan ijin berkendara yang baru/perpanjangan.
                            </p>
                            <!--begin::Stepper-->
                            <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                                <!--begin::Nav-->
                                <div id="stepper-navigate" class="stepper-nav flex-center flex-wrap mb-10">
                                    <!--begin::Step 1-->
                                    <div class="stepper-item mx-8 my-4 " data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="fas fa-check text-primary"></i>
                                                <!-- <i class="stepper-check fas fa-check"></i> -->
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 1
                                                </h3>

                                                <div class="stepper-desc">
                                                    Isi Biodata
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
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
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
                                                    Pernyataan Disiplin
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
                                                    Pertanyaan Post Test
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

                                    <!--begin::Step 4-->
                                    <div class="stepper-item mx-8 my-4 hide-mobile" data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">

                                                <span class="stepper-number">4</span>
                                            </div>
                                            <!--begin::Icon-->

                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 4
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
                                    <!--end::Step 4-->
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
                                                    Surat Pernyataan Disiplin Karyawan (SPDK)</h4>

                                                <div
                                                    class="alert alert-dismissible alert-custom border-primary d-flex align-items-center p-5 ">
                                                    <i class="far fa-lightbulb  icon-large text-primary  me-4"
                                                        style="font-size: 50px"></i>
                                                    <div class="d-flex flex-column">
                                                        <h6 class="mb-1 text-primary me-lg-3">Pernyataan disiplin dalam
                                                            pengoprasian kendaraan</h6>
                                                        <small class="mb-0">
                                                            Bahwa saya bersedia untuk mentaati dan melaksanakan
                                                            peraturan yang berlaku dalam hal pengoperasian kendaraan dan
                                                            apabila saya melanggar, saya siap menerima sanksi sesuai
                                                            peraturan yang berlaku.
                                                        </small>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>


                                                <div class="row  bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5 "
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">

                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No
                                                                1</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">Tingkat
                                                                1: Simper Dilubang 1,
                                                                Surat Teguran dan Penahanan Simper 2 Minggu
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label" for="">
                                                                Tidak melaksanakan prosedur prestart checklist atau
                                                                pemeriksaan harian kendaraan untuk memastikan kondisi
                                                                kendaraan sebelum digunakan
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label" for="">
                                                                Tidak membawa kelengkapan seperti: Bendera, Safety Cont,
                                                                Rotary, Radio, dll., saat berkendara ke area tambang
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label" for="">
                                                                Tidak membuat form penggunaan atau pemakaian kendaraan
                                                                saat pengoperasian kendaraan
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label" for="">
                                                                Tidak menyalakan radio dan rotary saat berada di area
                                                                tambang

                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label" for="">
                                                                Tidak membawa simper

                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label" for="">
                                                                Mengoperasikan kendaraan dengan simper yang sudah
                                                                berakhir masa berlakunya
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Tingkat 2 -->
                                                <div class="row bg-white border border-primary mt-3 mb-3 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 2</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">Tingkat
                                                                2: Simper Dilubang 2, Surat Peringatan (Sesuai PKB &
                                                                Golden Rules) dan Penahanan Simper 4 Minggu</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Melanggar aturan dan rambu -
                                                                rambu jalan/ lalulintas yang berlaku</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Tidak melaporkan kecelakaan
                                                                1x24 jam</label>
                                                        </div>
                                                        <!-- Add more checkboxes for other statements in Tingkat 2 as listed in the question -->
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Mendahului kendaraan di
                                                                tikungan, tanjakan, dan turunan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Berhenti atau meninggalkan
                                                                unit yang rusak/ breakdown di lokasi tanpa menerapkan
                                                                prosedur yang benar</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tingkat 3 -->
                                                <div class="row bg-white border border-primary mt-3 mb-3 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 3</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">Tingkat
                                                                3: Simper Dilubang 3, Surat Peringatan (Sesuai PKB &
                                                                Golden Rules) dan Penahanan Simper 6 Minggu</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Tidak menggunakan
                                                                seatbelt</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Menabrak mundur</label>
                                                        </div>
                                                        <!-- Add more checkboxes for other statements in Tingkat 3 as listed in the question -->
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Menggunakan telepon genggam
                                                                saat mengoperasikan kendaraan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Mengoperasikan kendaraan
                                                                dengan kecepatan tinggi sesuai aturan</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Tingkat 4 -->
                                                <div class="row bg-white border border-primary mt-3 mb-3 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 4</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">Tingkat
                                                                4: Simper Dicabut, Surat Peringatan (Sesuai PKB & Golden
                                                                Rules)</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Mengoperasikan kendaraan
                                                                dengan kecepatan tinggi yang menyebabkan
                                                                kecelakaan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Tidak membuat form
                                                                penggunaan kendaraan saat terjadi kecelakaan</label>
                                                        </div>
                                                        <!-- Add more checkboxes for other statements in Tingkat 4 as listed in the question -->
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Mengendarai unit dalam
                                                                keadaan mabuk</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                required />
                                                            <label class="form-check-label">Mengoperasikan kendaraan
                                                                dalam kondisi fatigue/ sakit yang menyebabkan
                                                                kecelakaan</label>
                                                        </div>
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
                                    <!--begin::Step 1-->

                                </div>
                                <!--end::Group-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <a href="<?= base_url(); ?>/karyawan/simper/<?= $simperId; ?>"
                                            class="btn btn-light-primary">
                                            Kembali
                                        </a>
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

                                        <button type="submit" class="btn btn-primary">
                                            Berikutnya
                                        </button>
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

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    // Menyembunyikan Croppie container pada awal halaman
    $('#cropie-demo').hide();
    $('.text-crop').hide();

    // Inisialisasi Croppie
    $uploadCrop = $('#cropie-demo').croppie({
        enableExif: true,
        enableZoom: true, // Aktifkan zoom untuk gambar
        viewport: {
            width: 150, // Menyesuaikan lebar viewport
            height: 176, // Menyesuaikan tinggi viewport
            type: 'square' // Atau 'circle' jika ingin bentuk lingkaran
        },
        boundary: {
            width: 200, // Boundary lebih besar dari viewport
            height: 200
        }
    });

    // Ketika file dipilih
    $('#upload').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            // Menampilkan Croppie container setelah gambar dipilih
            $('#cropie-demo').show();
            $('.text-crop').show();

            // Bind gambar ke Croppie dan set zoom default
            $uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function() {
                console.log('Gambar sudah di-bind');

                // Set zoom ke 0 untuk zoom-out maksimal
                $uploadCrop.croppie('setZoom', 0);
            });
        }
        reader.readAsDataURL(this.files[0]);
    });

    // Ketika form disubmit
    $('.form-pengajuan').on('submit', function(e) {
        e.preventDefault(); // Mencegah form submit default

        // Nonaktifkan tombol submit untuk mencegah klik dua kali
        var submitButton = $('button[type="submit"]');
        submitButton.prop('disabled', true); // Nonaktifkan tombol submit
        submitButton.find('.indicator-progress').show(); // Menampilkan indikator progress

        // Ambil hasil crop dalam format base64
        $uploadCrop.croppie('result', {
            type: 'base64', // Atau 'canvas' jika ingin hasil dalam bentuk canvas
            size: {
                width: 700,
                height: 600
            } // Ukuran output crop
        }).then(function(response) {
            // Masukkan gambar hasil crop ke dalam input tersembunyi (cropped-image)
            $('#cropped-image').val(response); // Masukkan base64 ke input tersembunyi

            // Setelah itu submit form
            $('.form-pengajuan')[0].submit(); // Submit form setelah data gambar siap
        });
    });
});
</script>




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
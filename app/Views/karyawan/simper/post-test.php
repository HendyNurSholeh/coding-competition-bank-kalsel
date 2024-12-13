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

                <form class="form" action="<?= base_url("karyawan/simper/post-post-test/$simperId/$id"); ?>"
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
                                    <div class="stepper-item mx-8 my-4 " data-kt-stepper-element="nav">
                                        <!--begin::Wrapper-->
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <!-- <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">2</span> -->
                                                <i class="fas fa-check text-primary"></i>
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
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
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
                                                <h4 id="pertanyaan-title" class="card-title text-primary mb-3"
                                                    style="padding-top: 8px">
                                                    Pertanyaan Post Test
                                                </h4>

                                                <div
                                                    class="alert alert-dismissible alert-custom border-primary d-flex align-items-center p-5 ">
                                                    <i class="far fa-lightbulb icon-large text-primary me-4"
                                                        style="font-size: 35px"></i>
                                                    <div class="d-flex flex-column">
                                                        <h6 class="mb-1 text-primary me-lg-3">Pilihan Ganda</h6>
                                                        <small class="mb-0">
                                                            Pilihlah jawaban yang paling tepat dari pertanyaan berikut:
                                                        </small>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>

                                                <?php if($id==1): ?>
                                                <?php foreach($quizzes as $index => $quiz): ?>
                                                <!-- Soal 1 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No <?= $index+1; ?></span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question1"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                <?= $quiz['question']; ?>
                                                            </label>
                                                        </div>
                                                        <?php foreach($quiz['options'] as $option): ?>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="quiz_<?= $quiz['id']; ?>"
                                                                value="<?= $option['id']; ?>" required />
                                                            <label class="form-check-label"
                                                                for=""><?= $option['option_text'] ?></label>
                                                        </div>
                                                        <?php endforeach; ?>

                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                                <?php elseif($id==2): ?>

                                                <!-- Soal 9 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 9</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question9"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Pengemudi diminta untuk mengenal dan memahami 3
                                                                kelompok
                                                                penting dari sebuah kendaraan sebelum ia
                                                                mengoperasikannya, sebutkan 3 kelompok tersebut,
                                                                kecuali?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question9" value="A" required />
                                                            <label class="form-check-label" for="">A. Sistim
                                                                kontrol</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question9" value="B" required />
                                                            <label class="form-check-label" for="">B. Fisik
                                                                kendaraan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question9" value="C" required />
                                                            <label class="form-check-label" for="">C. Karakter
                                                                pengemudi</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question9" value="D" required />
                                                            <label class="form-check-label" for="">D. Karakter
                                                                kendaraan</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 10 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 10</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question10"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Sebagaimana yang diajarkan, waktu reaksi manusia
                                                                adalah?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question10" value="A" required />
                                                            <label class="form-check-label" for="">A. 1/2
                                                                detik</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question10" value="B" required />
                                                            <label class="form-check-label" for="">B. 3
                                                                detik</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question10" value="C" required />
                                                            <label class="form-check-label" for="">C. 1
                                                                detik</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 11 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 11</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question11"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Fungsi rem kaki?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question11" value="A" required />
                                                            <label class="form-check-label" for="">A. Mengarahkan
                                                                kendaraan sesuai dengan keinginan si
                                                                pengemudi</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question11" value="B" required />
                                                            <label class="form-check-label" for="">B. Mengatur
                                                                kenyamanan pengemudi dan penumpang</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question11" value="C" required />
                                                            <label class="form-check-label" for="">C. Memperlambat
                                                                dan
                                                                memberhentikan kendaraan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question11" value="D" required />
                                                            <label class="form-check-label" for="">D. Memperlambat
                                                                dan
                                                                memberhentikan putaran roda kendaraan</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 12 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 12</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question12"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Fungsi rem ABS?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question12" value="A" required />
                                                            <label class="form-check-label" for="">A. Sistim rem
                                                                yang
                                                                menggunakan hidrolis pada rem-rem tromol</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question12" value="B" required />
                                                            <label class="form-check-label" for="">B. Sistem rem
                                                                yang
                                                                mengatur agar roda-roda tidak terkunci pada
                                                                pengereman
                                                                mendadak/panic braking</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question12" value="C" required />
                                                            <label class="form-check-label" for="">C. Sistem rem
                                                                yang
                                                                menggunakan hidrolis pada rem-rem cakram dan
                                                                kombinasi</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 13 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 13</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question13"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Apakah fungsi indicator-indicator pada kendaraan?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question13" value="A" required />
                                                            <label class="form-check-label" for="">A. Sebagai alat
                                                                pemantauan keadaan kendaraan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question13" value="B" required />
                                                            <label class="form-check-label" for="">B. Sebagai alat
                                                                komunikasi antar pengemudi dan kendaraan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question13" value="C" required />
                                                            <label class="form-check-label" for="">C. Sebagai
                                                                pemberi
                                                                isyarat jika sesuatu yang tidak normal pada
                                                                kendaraan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php elseif($id==3): ?>

                                                <!-- Soal 14 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 14</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question14"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Pengertian selip?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question14" value="A" required />
                                                            <label class="form-check-label" for="">A. Mobil tidak
                                                                terkendali pada lintasan licin</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question14" value="B" required />
                                                            <label class="form-check-label" for="">B. Permukaan
                                                                lintasan
                                                                licin berlumpur sehingga cengkraman roda
                                                                berkurang</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question14" value="C" required />
                                                            <label class="form-check-label" for="">C. Berkurangnya/
                                                                terlepasnya cengkraman roda-roda dari permukaan /
                                                                lintasan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question14" value="D" required />
                                                            <label class="form-check-label" for="">D. Bagian
                                                                belakang
                                                                kendaraan bergerak kearah depan</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 15 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 15</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question15"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Pada kondisi permukaan jalan kerikil dan ada ancaman
                                                                dimana anda harus mendapatkan jarak terdekat maka,
                                                                teknik pengereman yang digunakan untuk type fondasi
                                                                rem
                                                                Cakram/Disc seluruhnya dengan system ABS adalah:
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question15" value="A" required />
                                                            <label class="form-check-label" for="">A. Injak dengan
                                                                dalam
                                                                dan keras-keras</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question15" value="B" required />
                                                            <label class="form-check-label" for="">B.
                                                                Snub/Threshold</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question15" value="C" required />
                                                            <label class="form-check-label" for="">C.
                                                                Squeeze</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question15" value="D" required />
                                                            <label class="form-check-label" for="">D. Stab</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 16 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 16</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question16"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Pada kendaraan (fisik kendaraan relatif tinggi)
                                                                seperti
                                                                Jeep, Pick Up, Bus atau Truck, pusat berat jauh dari
                                                                permukaan jalan oleh karena itu kendaraan tersebut
                                                                cenderung:
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question16" value="A" required />
                                                            <label class="form-check-label" for="">A. Stabil</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question16" value="B" required />
                                                            <label class="form-check-label" for="">B. Tidak
                                                                stabil</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question16" value="C" required />
                                                            <label class="form-check-label" for="">C. Aman</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 17 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 17</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question17"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Ketika anda sedang menjalani kendaraan dengan
                                                                kecepatan
                                                                yang tinggi tiba-tiba ban depan anda pecah, tindakan
                                                                aman apa yang anda harus ambil?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question17" value="A" required />
                                                            <label class="form-check-label" for="">A. Jangan panik -
                                                                Lepas Gas - injak rem segera - putar roda kemudi ke
                                                                arah
                                                                kiri dan tahan - berhenti</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question17" value="B" required />
                                                            <label class="form-check-label" for="">B. Jangan panik -
                                                                tahan roda kemudi - Lepas gas - injak rem dan
                                                                berhenti</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question17" value="C" required />
                                                            <label class="form-check-label" for="">C. Jangan panik -
                                                                tahan kecepatan - tahan roda kemudi sesuai arah
                                                                lintasan
                                                                yang dituju - kurangi kecepatan secara bertahap -
                                                                Arahkan kendaraan kelintasan aman - berhenti</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 18 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 18</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question18"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Pada pembahasan mengenai menikung, cara
                                                                mengoperasikan
                                                                roda kemudi sangat membantu pengemudi mendapatkan
                                                                hasil
                                                                dan kontrol kendaraan dengan aman, sebutkan cara
                                                                mengoperasikan roda kemudi yang aman dan efektif :
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question18" value="A" required />
                                                            <label class="form-check-label" for="">A. Dorong dan
                                                                tarik
                                                                (Push & Pull) secara bertahap dan halus</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question18" value="B" required />
                                                            <label class="form-check-label" for="">B. Tarik dan
                                                                dorong
                                                                (Pull & Push) Secara bertahap dan halus</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question18" value="C" required />
                                                            <label class="form-check-label" for="">C. Dorong saja
                                                                dengan
                                                                satu tangan secara bertahap dan halus</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 19 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 19</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question19"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Pada kendaraan 4WD posisi 4H digunakan saat:
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question19" value="A" required />
                                                            <label class="form-check-label" for="">A. Lintasan
                                                                ringan
                                                                yang memungkinkan kecepatan kendaraan dipacu diatas
                                                                40km/jam</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question19" value="B" required />
                                                            <label class="form-check-label" for="">B. Lintasan berat
                                                                yang memungkinkan kecepatan kendaraan dipacu hanya
                                                                di
                                                                bawah 40km/jam</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question19" value="C" required />
                                                            <label class="form-check-label" for="">C. Lintasan
                                                                menanjak
                                                                curam (off-road) dan licin</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 20 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 20</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question20"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Posisi level 4WD yang digunakan ketika melintasi
                                                                medan
                                                                berat/berlumpur dalam tujuan pemberian traksi roda
                                                                yang
                                                                efektif sehingga dapat bergerak seakan-akan
                                                                merangkak?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question20" value="A" required />
                                                            <label class="form-check-label" for="">A. 4 H</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question20" value="B" required />
                                                            <label class="form-check-label" for="">B. 4 L</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question20" value="C" required />
                                                            <label class="form-check-label" for="">C. 2 H</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 21 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 21</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question21"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Posisi level 4WD yang digunakan ketika melintasi
                                                                medan
                                                                licin dan tidak berat dalam tujuan pemberian traksi
                                                                roda
                                                                yang efektif?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question21" value="A" required />
                                                            <label class="form-check-label" for="">A. 4 H</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question21" value="B" required />
                                                            <label class="form-check-label" for="">B. 4 L</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question21" value="C" required />
                                                            <label class="form-check-label" for="">C. 2 H</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 22 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 22</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question22"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Saat anda menurun di turunan yang curam dengan
                                                                permukaan
                                                                lintasan gravel/tanah licin dimana posisi transmisi
                                                                sudah ditempatkan pada posisi rendah (gigi 2) kaki
                                                                kanan
                                                                anda tidak menginjak pedal gas, tiba-tiba bagian
                                                                belakang kendaraan anda lari kedepan. Tindakan apa
                                                                yang
                                                                harus anda lakukan seketika?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question22" value="A" required />
                                                            <label class="form-check-label" for="">A. Injak pedal
                                                                gas
                                                                seketika dan konter stir</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question22" value="B" required />
                                                            <label class="form-check-label" for="">B. Pindahkan gigi
                                                                transmisi ke gigi yang lebih rendah dan injak gas
                                                                serta
                                                                konter stir</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question22" value="C" required />
                                                            <label class="form-check-label" for="">C. Konter stir,
                                                                injak
                                                                pedal kopling dan injak pedal rem dengan halus
                                                                (bukan
                                                                untuk memberhentikan kendaraan)/pindahkan gigi
                                                                transmisi
                                                                ke gigi yang lebih tinggi</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question22" value="D" required />
                                                            <label class="form-check-label" for="">D. Rem
                                                                seketika!!</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 23 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 23</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question23"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Apakah dibenarkan perpindahan 4H ke 4L atau
                                                                sebaliknya
                                                                pada saat kendaraan sedang berjalan pada sebuah
                                                                kendaraan?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question23" value="A" required />
                                                            <label class="form-check-label" for="">A.
                                                                Dibenarkan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question23" value="B" required />
                                                            <label class="form-check-label" for="">B. Tidak
                                                                dibenarkan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question23" value="C" required />
                                                            <label class="form-check-label" for="">C. Ikuti sesuai
                                                                buku
                                                                petunjuk cara mengoperasikan kendaraan</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 24 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 24</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question24"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Pada kendaraan 4WD berapa tingkatan kecepatan pada
                                                                level
                                                                penggeraknya pilih yang benar:
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question24" value="A" required />
                                                            <label class="form-check-label" for="">A. N-H-L</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question24" value="B" required />
                                                            <label class="form-check-label" for="">B.
                                                                4N-4L-4H</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question24" value="C" required />
                                                            <label class="form-check-label" for="">C.
                                                                2H-4H-4L</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 25 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 25</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question25"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Apakah dibenarkan/direkomendasikan pengaktifan
                                                                4WD/perpindahan dari kondisi normal ke 4L pada
                                                                kecepatan
                                                                diatas 40km/jam dilakukan saat kendaraan bergerak?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question25" value="A" required />
                                                            <label class="form-check-label" for="">A.
                                                                Dibenarkan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question25" value="B" required />
                                                            <label class="form-check-label" for="">B. Tidak
                                                                dibenarkan</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question25" value="C" required />
                                                            <label class="form-check-label" for="">C. Dibenarkan
                                                                khususnya pada lintasan beraspal</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Soal 26 -->
                                                <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="col-12">
                                                        <div class="d-flex mt-2 justify-content-end align-items-center">
                                                            <span class="badge badge-primary">No 26</span>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label for="question26"
                                                                class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                Teknik melintasi medan licin salah satunya adalah
                                                                menggunakan pedal gas secara?
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question26" value="A" required />
                                                            <label class="form-check-label" for="">A.
                                                                Menghentak-hentak
                                                                agar kendaraan memiliki energi dorong yang
                                                                baik</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question26" value="B" required />
                                                            <label class="form-check-label" for="">B. Halus dan
                                                                merata</label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="question26" value="C" required />
                                                            <label class="form-check-label" for="">C. Kecepatan
                                                                tinggi</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php elseif($id==4): ?>
                                                <div>
                                                    <!-- Soal 27 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 27</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question27"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apakah yang harus kita lakukan supaya kita aman
                                                                    pada
                                                                    saat kita mengoperasikan kendaraan bermotor?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question27" value="A" required />
                                                                <label class="form-check-label" for="">A. Mengetahui
                                                                    kondisi kita - kondisi kendaraan - mengetahui
                                                                    bahaya
                                                                    dan resiko dan mengaplikasikan teknik mengemudi
                                                                    aman</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question27" value="B" required />
                                                                <label class="form-check-label" for="">B. Jangan
                                                                    ngebut</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question27" value="C" required />
                                                                <label class="form-check-label" for="">C. Tidak
                                                                    mengemudikan kendaraan bermotor</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question27" value="D" required />
                                                                <label class="form-check-label" for="">D. Tertib
                                                                    berlalu
                                                                    lintas dan selalu membawa SIM</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 28 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 28</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question28"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Seorang pengemudi defensive wajib juga menjaga
                                                                    jarak
                                                                    antara kendaraan didepannya maupun yang
                                                                    dibelakangnya. Sebutkan jarak aman mengikuti
                                                                    pada
                                                                    kondisi ideal untuk sebuah kendaraan ringan?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question28" value="A" required />
                                                                <label class="form-check-label" for="">A. 60 meter
                                                                    untuk
                                                                    setiap kecepatan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question28" value="B" required />
                                                                <label class="form-check-label" for="">B. 2-3
                                                                    detik</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question28" value="C" required />
                                                                <label class="form-check-label" for="">C. 10 meter
                                                                    untuk
                                                                    setiap</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 29 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 29</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question29"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Sebutkan ke 3 elemen utama yang harus dimiliki
                                                                    mengemudi defensive sebagaimana yang diajarkan
                                                                    oleh
                                                                    JDDC?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question29" value="A" required />
                                                                <label class="form-check-label" for="">A. Pandangan
                                                                    aman
                                                                    - Lingkaran Aman - Sikap</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question29" value="B" required />
                                                                <label class="form-check-label" for="">B. Sehat -
                                                                    tertib
                                                                    - sabar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question29" value="C" required />
                                                                <label class="form-check-label" for="">C. Trampil -
                                                                    Aman
                                                                    - Benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 30 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 30</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question30"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Bagaimana prosedur melewati unit yang sedang
                                                                    melakukan aktivitas kerja seperti dozer, grader
                                                                    (kontak positif)?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question30" value="A" required />
                                                                <label class="form-check-label" for="">A. Gunakan
                                                                    radio
                                                                    untuk meminta izin melewati</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question30" value="B" required />
                                                                <label class="form-check-label" for="">B. Gunakan
                                                                    kontak
                                                                    positif dengan operator</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question30" value="C" required />
                                                                <label class="form-check-label" for="">C. Lewati
                                                                    saja
                                                                    dengan pelan-pelan dan hati-hati asalkan
                                                                    aman</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question30" value="D" required />
                                                                <label class="form-check-label" for="">D. Jawaban A
                                                                    & B
                                                                    yang benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 31 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 31</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question31"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Bagaimana langkah-langkah yang benar dan aman
                                                                    ketika
                                                                    harus memundurkan kendaraan?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question31" value="A" required />
                                                                <label class="form-check-label" for="">A. Kalau
                                                                    memungkinkan sebaiknya ada spotter dan di
                                                                    tempat-tempat tertentu</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question31" value="B" required />
                                                                <label class="form-check-label" for="">B. Memastikan
                                                                    kondisi dibelakang/area tujuan mundur
                                                                    benar-benar
                                                                    aman dengan melihat/menoleh sebelum bergerak
                                                                    mundur</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question31" value="C" required />
                                                                <label class="form-check-label" for="">C. Mundur
                                                                    secara
                                                                    perlahan/pelan dengan selalu mengontrol/mengecek
                                                                    kaca spion kanan-kiri sampai kendaraan
                                                                    berhenti</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question31" value="D" required />
                                                                <label class="form-check-label" for="">D. Jawaban
                                                                    diatas
                                                                    semua benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 32 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 32</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question32"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pada saat anda akan berpapasan ataupun melihat
                                                                    ada
                                                                    kendaraan parkir ditanjakan atau turunan
                                                                    bagaimanakah tindakan defensive agar agar tidak
                                                                    terjaid kecelakaan?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question32" value="A" required />
                                                                <label class="form-check-label" for="">A. Kontrol
                                                                    spion
                                                                    - sesuaikan kecepatan - pastikan ia melihat
                                                                    (komunikasi) - siap-siap untuk
                                                                    menghindari</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question32" value="B" required />
                                                                <label class="form-check-label" for="">B. Pastikan
                                                                    ia
                                                                    melihat - sesuaikan kecepatan - check spion -
                                                                    siap-siap untuk menghindari</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question32" value="C" required />
                                                                <label class="form-check-label" for="">C. Siap-siap
                                                                    untuk menghindari - check spion - sesuakan
                                                                    kecepatan
                                                                    - pastikan ia melihat</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question32" value="D" required />
                                                                <label class="form-check-label" for="">D. Tidak
                                                                    melakukan apa-apa lewati saja pelan-pelan
                                                                    asalkan
                                                                    aman</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 33 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 33</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question33"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Sebutkan sisi-sisi yang disekitar kendaraan anda
                                                                    yang harus selalu diperhatikan & di kontrol?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question33" value="A" required />
                                                                <label class="form-check-label" for="">A. Depan -
                                                                    belakang - kanan - kiri - atas - bawah</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question33" value="B" required />
                                                                <label class="form-check-label" for="">B. Kanan -
                                                                    kiri -
                                                                    depan - belakang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question33" value="C" required />
                                                                <label class="form-check-label" for="">C. Kanan -
                                                                    kiri -
                                                                    depan - belakang - dalam</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 34 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 34</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question34"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Sebagaimana yang di ajarkan oleh JDDC berkaitan
                                                                    untuk mengontrol sekeliling kendaraan anda, anda
                                                                    diminta untuk selalu mengecheck kaca spion
                                                                    setiap?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question34" value="A" required />
                                                                <label class="form-check-label" for="">A. 2 -3
                                                                    detik</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question34" value="B" required />
                                                                <label class="form-check-label" for="">B. 4 - 6
                                                                    detik</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question34" value="C" required />
                                                                <label class="form-check-label" for="">C. 5 - 8
                                                                    detik</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 35 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 35</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question35"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pada saat anda berhenti dibelakang sebuah
                                                                    kendaraan
                                                                    ringan anda diminta untuk mejaga jarak aman,
                                                                    sebutkan teknik memberikan jarak minimal yang
                                                                    harus
                                                                    anda lakukan jika berada di lalu lintas padat
                                                                    (kota)?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question35" value="A" required />
                                                                <label class="form-check-label" for="">A. 1 panjang
                                                                    kendaraan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question35" value="B" required />
                                                                <label class="form-check-label" for="">B. 1 1/2.
                                                                    Panjang
                                                                    bedan kendaraan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question35" value="C" required />
                                                                <label class="form-check-label" for="">C. Dimana
                                                                    roda
                                                                    belakang kendaraan didepan menapak permukaan
                                                                    lintasan terlihat dengan jelas</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 36 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 36</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question36"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pada praktek PLS (Commentari Drive) kita diminta
                                                                    untuk berkomentar, apa yang anda komentari
                                                                    selama
                                                                    praktek tersebut?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question36" value="A" required />
                                                                <label class="form-check-label" for="">A. Kondisi
                                                                    pengemudi - kondisi kendaraan - kondisi
                                                                    penumpang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question36" value="B" required />
                                                                <label class="form-check-label" for="">B. Apa yang
                                                                    anda
                                                                    lihat - apa yang anda lakukan - mengapa anda
                                                                    lakukan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question36" value="C" required />
                                                                <label class="form-check-label" for="">C. Bahaya -
                                                                    Bahaya di jalan - pejalan kaki - kendaraan
                                                                    bermotor
                                                                    lainnya</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 37 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 37</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question37"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Berapa kilometer kendaraan harus dikencangkan
                                                                    kembali baut rodanya setelah mengganti roda?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question37" value="A" required />
                                                                <label class="form-check-label" for="">A. 50
                                                                    KM</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question37" value="B" required />
                                                                <label class="form-check-label" for="">B. 100
                                                                    KM</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question37" value="C" required />
                                                                <label class="form-check-label" for="">C. 150
                                                                    KM</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 38 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 38</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question38"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Sewaktu anda mengemudi kendaran ringan pada
                                                                    medan
                                                                    yag licin/hujan berapa jarak aman anda?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question38" value="A" required />
                                                                <label class="form-check-label" for="">A. Lebih dari
                                                                    2 -
                                                                    3 detik</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question38" value="B" required />
                                                                <label class="form-check-label" for="">B. Cukup 2 -
                                                                    3
                                                                    detik</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question38" value="C" required />
                                                                <label class="form-check-label" for="">C. 15
                                                                    meter</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 39 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 39</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question39"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Bagaimana prosedur yang benar memarkirkan
                                                                    kendaraan
                                                                    di tambang?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question39" value="A" required />
                                                                <label class="form-check-label" for="">A. Tidak area
                                                                    tikungan ataupun tanjakan (area blind
                                                                    spot)</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question39" value="B" required />
                                                                <label class="form-check-label" for="">B. Didaerah
                                                                    yang
                                                                    aman dan mudah terlihat oleh pengguna jalan
                                                                    diarea
                                                                    tersebut dengan jarak minimal 50 M dari segala
                                                                    arah
                                                                    dan menginformasikan kepada pekerja diarea
                                                                    tersebut</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question39" value="C" required />
                                                                <label class="form-check-label" for="">C. Jawaban
                                                                    diatas
                                                                    semua benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 40 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 40</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question40"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Prosedur menyalib yang benar dan aman adalah?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question40" value="A" required />
                                                                <label class="form-check-label" for="">A. Tidak
                                                                    ditikungan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question40" value="B" required />
                                                                <label class="form-check-label" for="">B. Tidak
                                                                    ditanjakan/turunan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question40" value="C" required />
                                                                <label class="form-check-label" for="">C. Tidak di
                                                                    pandangan gelap</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question40" value="D" required />
                                                                <label class="form-check-label" for="">D. semua
                                                                    diatas
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 41 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 41</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question41"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Saat mengemudi kita diminta untuk selalu
                                                                    konsentrasi
                                                                    dan focus, ini juga berarti kita tidak boleh
                                                                    melakukan apa-apa saat memundurkan kendaraan,
                                                                    seperti menggunakan radio
                                                                    komunikasi/makan-makanan
                                                                    ringan karena ini akan sangat berbahaya dan bisa
                                                                    menyebabkan kecelakaan :
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question41" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question41" value="B" required />
                                                                <label class="form-check-label" for="">B. Tidak
                                                                    benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question41" value="C" required />
                                                                <label class="form-check-label" for="">C. Tidak
                                                                    tau</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question41" value="D" required />
                                                                <label class="form-check-label" for="">D. Boleh
                                                                    sambil
                                                                    menggunakan radio/makan-makanan asalkan
                                                                    aman</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 42 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 42</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question42"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pada saat anda berhenti dibelakang sebuah
                                                                    kendaraan
                                                                    anda diminta untuk menjaga jarak aman kesamping
                                                                    kiri
                                                                    atau kanan minimal 1/4 bodi kendaraan menjorok
                                                                    keluar sehingga bisa menghilangkan bentuk blind
                                                                    spot, benar atau salah :
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question42" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Salah</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question42" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 43 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 43</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question43"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Ketika kita mengemudi kendaraan di jalan
                                                                    hauling/jalan angkut batu bara sesuai aturan
                                                                    pengemudi tidak diperkenankan parkir, jawablah
                                                                    dengan benar atau salah:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question43" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question43" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 44 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 44</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question44"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Ketika kita mengemudi kendaraan dijalan
                                                                    hauling/jalan angkut batu bara sesuai aturan
                                                                    pengemudi tidak diperkenankan parkir, kalaupun
                                                                    harus
                                                                    parkir dikarenakan kendraan mengalami masalah
                                                                    atau
                                                                    kendaraan darurat, maka pengemudi diminta untuk:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question44" value="A" required />
                                                                <label class="form-check-label" for="">A. Memasang
                                                                    safety cone, drum dan tanda-tanda lain yang
                                                                    diperlukan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question44" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Meninggalkan
                                                                    kendaraan dengan kodisi aman</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question44" value="C" required />
                                                                <label class="form-check-label" for="">C. Melaporkan
                                                                    kepengawas</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question44" value="D" required />
                                                                <label class="form-check-label" for="">D. Tidak
                                                                    melakukan apa-apa</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 45 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 45</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question45"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Ada 3 jenis kontruksi rem pada jaman ini yaitu:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question45" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Tromol-tromol,
                                                                    kombinasi, disc/cakram</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question45" value="B" required />
                                                                <label class="form-check-label" for="">B. Hydrolic,
                                                                    cakram, tromol</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question45" value="C" required />
                                                                <label class="form-check-label" for="">C. Cakram,
                                                                    disc,
                                                                    kombinasi</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question45" value="D" required />
                                                                <label class="form-check-label" for="">D.
                                                                    Tromol-tromol,
                                                                    hydrolic, kombinasi</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 46 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 46</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question46"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pada saat anda megemudi dijalan tambang yang
                                                                    sempit,
                                                                    dan didepan anda ada kendaraan yang sedang
                                                                    berhenti,
                                                                    kendaraan yang anda kemudikan diminta untuk :
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question46" value="A" required />
                                                                <label class="form-check-label" for="">A. Memberikan
                                                                    horn untuk memberi tanda dan memberikan ruang
                                                                    untuk
                                                                    kendaraan lain</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question46" value="B" required />
                                                                <label class="form-check-label" for="">B. Mengurangi
                                                                    kecepatan dan memberi ruang untuk kendaraan lain
                                                                    agar kendaraan bisa lewat</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question46" value="C" required />
                                                                <label class="form-check-label" for="">C. Memberikan
                                                                    lampu indikasi peringatan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question46" value="D" required />
                                                                <label class="form-check-label" for="">D. Tidak
                                                                    melakukan apa-apa dan terus berjalan</label>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <?php elseif($id==5): ?>
                                                <div>
                                                    <!-- Soal 47 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 47</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question47"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Defensive Driving adalah mengemudi dengan cara
                                                                    yang
                                                                    aman dan mempertahankannya pada setiap saat
                                                                    dalam
                                                                    kondisi dan cuaca yang baik maupun tidak.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question47" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question47" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 48 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 48</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question48"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Salah satu ciri-ciri pengemudi defensive adalah
                                                                    melakukan persiapan yang cukup sebelum
                                                                    mengemudi,
                                                                    sabar dan berusaha menghindari dari kemungkinan
                                                                    kecelakaan.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question48" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question48" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 49 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 49</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question49"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Saat mengemudi diperbolehkan menggunakan Hand
                                                                    Phone
                                                                    karena dilengkapi dengan Head Set.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question49" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question49" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 50 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 50</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question50"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Semua kendaraan wajib memberi kesempatan kepada
                                                                    semua kendaraan pelayanan keadaan darurat.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question50" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question50" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 51 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 51</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question51"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Sekarang anda harus berhenti sesaat di jalan
                                                                    yang
                                                                    menanjak, cara yang benar untuk menggerakkan
                                                                    kendaraan maju kembali adalah: tekan clutch,
                                                                    pilih
                                                                    gear pada posisi 1, lepas rem tangan, angkat
                                                                    pedal
                                                                    kopling perlahan diiringi menekan gas tanpa
                                                                    menyentak kendaraan.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question51" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question51" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 52 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 52</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question52"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Ketika anda akan menggerakkan kendaraan untuk
                                                                    mundur, maka anda harus membunyikan klakson 3
                                                                    kali.
                                                                    Agar orang atau sesuatu disekeliling kendaraan
                                                                    tersebut mengetahui dan menjauh dari kendaraan.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question52" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question52" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 53 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 53</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question53"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Batas kecepatan kendaraan ringan di area parkir,
                                                                    perkantoran, workshop adalah 30 KM/jam.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question53" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question53" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 54 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 54</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question54"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Procedure mendahului kendaraan didepannya salah
                                                                    satunya adalah memastikan tidak ada kendaraan
                                                                    lain
                                                                    dari arah berlawanan/depan.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question54" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question54" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 55 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 55</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question55"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pemeriksaan unit, harus dilakukan setiap hari,
                                                                    hal
                                                                    ini dimaksudkan untuk mengetahui bahwa unit
                                                                    layak
                                                                    untuk dioperasikan.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question55" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question55" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 56 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 56</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question56"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pemeriksaan oli engine dan yang lainnya terhadap
                                                                    unit yang masih baru tidak perlu dilakukan,
                                                                    karena
                                                                    unit tersebut sudah terjamin mutu dan
                                                                    keselamatannya
                                                                    dari pabrik.
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question56" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Benar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question56" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Salah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <?php elseif($id==6): ?>
                                                <div>
                                                    <!-- Soal 57 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 57</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question57"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Siapa yang paling bertanggung jawab melakukan
                                                                    pemeriksaan unit sebelum mengoperasikannya?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question57" value="A" required />
                                                                <label class="form-check-label" for="">A. Driver
                                                                    (pengemudi)</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question57" value="B" required />
                                                                <label class="form-check-label" for="">B. Mechanic
                                                                    (montir)</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question57" value="C" required />
                                                                <label class="form-check-label" for="">C. Pemilik
                                                                    kendaraan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 58 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 58</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question58"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Berikut ini adalah cara menggunakan rem yang
                                                                    efisien
                                                                    saat kendaraan menurun bukit/turunan yang
                                                                    panjang,
                                                                    kecuali?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question58" value="A" required />
                                                                <label class="form-check-label" for="">A. Gunakan
                                                                    rem
                                                                    secara terus menerus sampai akhir
                                                                    turunan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question58" value="B" required />
                                                                <label class="form-check-label" for="">B. Variasikan
                                                                    tekanan rem sesuai kondisi permukaan
                                                                    jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question58" value="C" required />
                                                                <label class="form-check-label" for="">C. Gunakan
                                                                    rem
                                                                    engine untuk membantu kendaraan mengerem tanpa
                                                                    overdriving</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 59 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 59</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question59"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pengemudi dengan kecepatan yang sangat tinggi
                                                                    adalah
                                                                    suatu tindakan yang tidak aman dan mengandung
                                                                    potensi untuk terjadinya kecelakaan, alasannya
                                                                    adalah seperti yang disebutkan dibawah ini,
                                                                    kecuali:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question59" value="A" required />
                                                                <label class="form-check-label" for="">A. Semakin
                                                                    anda
                                                                    kencang, akan semakin sedikit waktu bereaksi
                                                                    saat
                                                                    darurat</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question59" value="B" required />
                                                                <label class="form-check-label" for="">B. Semakin
                                                                    anda
                                                                    kencang, akan semakin serius kecelakaan
                                                                    terjadi</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question59" value="C" required />
                                                                <label class="form-check-label" for="">C. Semakin
                                                                    anda
                                                                    kencang akan semakin cepat sampai tujuan dengan
                                                                    aman</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 60 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 60</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question60"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Berikut adalah cara mengganti gear ke posisi
                                                                    yang
                                                                    lebih rendah:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question60" value="A" required />
                                                                <label class="form-check-label" for="">A. Terlebih
                                                                    dahulu memperlambat laju kendaraan agar
                                                                    menghasilkan
                                                                    keselarasan antara kecepatan dan rpm pada gear
                                                                    lebih
                                                                    rendah</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question60" value="B" required />
                                                                <label class="form-check-label" for="">B. Tambah
                                                                    sedikit
                                                                    kecepatan agar menghasilkan keselarasan antara
                                                                    kecepatan dan rpm pada gear yang lebih
                                                                    rendah</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question60" value="C" required />
                                                                <label class="form-check-label" for="">C. Langsung
                                                                    turunkan gear agar menghasilkan keselarasan
                                                                    antara
                                                                    kecepatan dan rpm pada gear yang lebih
                                                                    rendah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 61 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 61</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question61"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Hal yang perlu anda perhatikan pada saat akan
                                                                    memarkir dan meninggalkan kendaraan adalah:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question61" value="A" required />
                                                                <label class="form-check-label" for="">A. Mesin
                                                                    dimatikan dan semua sistem elektrik
                                                                    dimatikan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question61" value="B" required />
                                                                <label class="form-check-label" for="">B. Rem parkir
                                                                    diaktifkan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question61" value="C" required />
                                                                <label class="form-check-label" for="">C. Jawaban A
                                                                    dan
                                                                    B benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 62 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 62</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question62"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Jika anda terpaksa parkir di jalan yang menurun
                                                                    serta di kiri dan kanan jalan terdapat tanggul
                                                                    maka
                                                                    cara parkir yang benar adalah:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question62" value="A" required />
                                                                <label class="form-check-label" for="">A. Pasang rem
                                                                    parkir, masukkan gear mundur, arahkan roda ke
                                                                    kiri</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question62" value="B" required />
                                                                <label class="form-check-label" for="">B. Pasang rem
                                                                    parkir, masukkan gear 1, arahkan roda ke
                                                                    kanan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question62" value="C" required />
                                                                <label class="form-check-label" for="">C. Pasang rem
                                                                    parkir, masukkan gear mundur, arahkan roda ke
                                                                    kanan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 63 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 63</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question63"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Berbalik arah atau 'U' turn dapat dilakukan pada
                                                                    kondisi jalan yang disebutkan dibawah ini:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question63" value="A" required />
                                                                <label class="form-check-label" for="">A. Ada
                                                                    kendaraan
                                                                    lain melintas pada jarak 100 meter dari depan
                                                                    dan
                                                                    belakang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question63" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Dipersimpangan
                                                                    dimana lampu lalu-lintas
                                                                    beroperasi/aktif</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question63" value="C" required />
                                                                <label class="form-check-label" for="">C. Tidak ada
                                                                    kendaraan lain melintas pada jarak 100 meter
                                                                    dari
                                                                    semua arah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 64 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 64</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question64"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Bila bertemu kendaraan lain di saat anda akan
                                                                    melewati jalan yang sempit maka yang harus anda
                                                                    lakukan adalah:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question64" value="A" required />
                                                                <label class="form-check-label" for="">A. Menambah
                                                                    kecepatan dan memberi tanda-tanda</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question64" value="B" required />
                                                                <label class="form-check-label" for="">B. Mengurangi
                                                                    kecepatan/menghentikan kendaraan dan memberi
                                                                    kesempatan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question64" value="C" required />
                                                                <label class="form-check-label" for="">C. Menepi dan
                                                                    menambah kecepatan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 65 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 65</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question65"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Jika melewati punggung jalan / pandangan
                                                                    terhalang
                                                                    maka tindakan yang harus diambil:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question65" value="A" required />
                                                                <label class="form-check-label" for="">A. Mengurangi
                                                                    kecepatan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question65" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Memposisikan
                                                                    kendaraan lebih ke kanan badan jalan agar
                                                                    pengendara
                                                                    di depan tahu posisi kita</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question65" value="C" required />
                                                                <label class="form-check-label" for="">C.
                                                                    Memposisikan
                                                                    kendaraan lebih ke kiri badan jalan, kurangi
                                                                    kecepatan dan bunyikan klakson</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 66 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 66</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question66"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Hidupkan engine, injak pedal rem dan kopling,
                                                                    masukkan transmisi pada posisi tertinggi, tekan
                                                                    pedal gas dan angkat pedal kopling perlahan
                                                                    serta
                                                                    dilakukan sekitar tiga detik adalah teknik
                                                                    pengetesan:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question66" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Transmisi</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question66" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Kopling</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question66" value="C" required />
                                                                <label class="form-check-label" for="">C.
                                                                    Engine</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <?php elseif($id==7): ?>

                                                <div>
                                                    <!-- Soal 67 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 67</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question67"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Sim polisi diperlukan:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question67" value="A" required />
                                                                <label class="form-check-label" for="">A. Hanya pada
                                                                    waktu mengendarai kendaraan di daerah tambang
                                                                    saja</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question67" value="B" required />
                                                                <label class="form-check-label" for="">B. Pada waktu
                                                                    mengendarai kendaraan di jalan umum dan jalan
                                                                    tambang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question67" value="C" required />
                                                                <label class="form-check-label" for="">C. Hanya pada
                                                                    waktu mengendarai kendaraan di daerah
                                                                    pelabuhan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question67" value="D" required />
                                                                <label class="form-check-label" for="">D. Hanya pada
                                                                    waktu mengendarai kendaraan berat saja</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 68 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 68</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question68"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Semua kendaraan ringan yang memasuki daerah
                                                                    tambang
                                                                    harus:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question68" value="A" required />
                                                                <label class="form-check-label" for="">A. Melewati
                                                                    Access Control resmi</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question68" value="B" required />
                                                                <label class="form-check-label" for="">B. Menyalakan
                                                                    lampu depan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question68" value="C" required />
                                                                <label class="form-check-label" for="">C. Menyalakan
                                                                    lampu rotari</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question68" value="D" required />
                                                                <label class="form-check-label" for="">D. Semua
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 69 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 69</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question69"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Sebelum mengoperasikan kendaraan, anda harus:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question69" value="A" required />
                                                                <label class="form-check-label" for="">A. Memberi
                                                                    tanda
                                                                    peringatan setelah menghidupkan mesin</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question69" value="B" required />
                                                                <label class="form-check-label" for="">B. Melakukan
                                                                    pemeriksaan keselamatan pada akhir shift</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question69" value="C" required />
                                                                <label class="form-check-label" for="">C. Melapor
                                                                    setiap
                                                                    kerusakan pada waktu giliran shift anda
                                                                    berikutnya</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question69" value="D" required />
                                                                <label class="form-check-label" for="">D. Melakukan
                                                                    pemeriksaan kendaraan sebelum menjalankan
                                                                    kendaraan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 70 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 70</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question70"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Batas kecepatan maksimum untuk semua kendaraan
                                                                    di
                                                                    daerah tambang adalah:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question70" value="A" required />
                                                                <label class="form-check-label" for="">A. 60 KM/Jam
                                                                    atau
                                                                    sesuai rambu yang terpasang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question70" value="B" required />
                                                                <label class="form-check-label" for="">B. 40 KM/Jam
                                                                    atau
                                                                    sesuai rambu yang terpasang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question70" value="C" required />
                                                                <label class="form-check-label" for="">C. 50 KM/Jam
                                                                    atau
                                                                    sesuai rambu yang terpasang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question70" value="D" required />
                                                                <label class="form-check-label" for="">D. 70 KM/Jam
                                                                    atau
                                                                    sesuai rambu yang terpasang</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 71 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 71</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question71"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Memberi jalan kepada kendaraan pelayanan keadaan
                                                                    darurat adalah keharusan bagi setiap
                                                                    pengemudi/operator kendaraan. Sebutkan beberapa
                                                                    jenis yang dimaksud dengan kendaraan pelayanan
                                                                    kendaraan darurat?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question71" value="A" required />
                                                                <label class="form-check-label" for="">A. Mobil
                                                                    pemadam
                                                                    kebakaran, ambulans, Rescue</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question71" value="B" required />
                                                                <label class="form-check-label" for="">B. Truk bahan
                                                                    peledak, DT</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question71" value="C" required />
                                                                <label class="form-check-label" for="">C. Pemandu
                                                                    kendaraan yang bermuatan lebar, Alat
                                                                    berat</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question71" value="D" required />
                                                                <label class="form-check-label" for="">D. Semua
                                                                    kendaraan berat</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Soal 72 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 72</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question72"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Tanda klakson yang harus dibunyikan sebelum
                                                                    bergerak
                                                                    mundur adalah:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question72" value="A" required />
                                                                <label class="form-check-label" for="">A. Satu
                                                                    kali</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question72" value="B" required />
                                                                <label class="form-check-label" for="">B. Dua
                                                                    kali</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question72" value="C" required />
                                                                <label class="form-check-label" for="">C. Tiga
                                                                    kali</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question72" value="D" required />
                                                                <label class="form-check-label" for="">D. Satu kali
                                                                    panjang</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 73 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 73</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question73"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Yang termasuk pelanggaran lalu lintas area
                                                                    pertambangan dan pelabuhan adalah, kecuali:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question73" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Mengoperasikan
                                                                    kendaraan tanpa SIM</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question73" value="B" required />
                                                                <label class="form-check-label" for="">B.
                                                                    Mengoperasikan
                                                                    kendaraan tanpa memakai seat belt</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question73" value="C" required />
                                                                <label class="form-check-label" for="">C.
                                                                    Mengoperasikan
                                                                    kendaraan dengan SIM orang lain</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question73" value="D" required />
                                                                <label class="form-check-label" for="">D.
                                                                    Mengoperasikan
                                                                    kendaraan ringan dengan menyalakan lampu
                                                                    depan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 74 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 74</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question74"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pada saat anda mengemudi kendaraan ringan dan
                                                                    hendak
                                                                    mendahului kendaraan lain di daerah tambang:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question74" value="A" required />
                                                                <label class="form-check-label" for="">A. Lakukan di
                                                                    perempatan jalan saja</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question74" value="B" required />
                                                                <label class="form-check-label" for="">B. Pastikan
                                                                    jalan
                                                                    aman, tidak ada kendaraan dari depan dan aman
                                                                    untuk
                                                                    mendahului, dan telah mendapat isyarat yang
                                                                    sesuai
                                                                    dari kendaraan yang akan didahului</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question74" value="C" required />
                                                                <label class="form-check-label" for="">C. Anda tidak
                                                                    diijinkan mendahului dozer atau crane</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question74" value="D" required />
                                                                <label class="form-check-label" for="">D. Anda tidak
                                                                    diijinkan mendahului manhaul</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 75 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 75</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question75"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apabila memarkir kendaraan ringan dekat
                                                                    kendaraan
                                                                    berat, yang mana dari pernyataan di bawah ini
                                                                    yang
                                                                    berlaku:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question75" value="A" required />
                                                                <label class="form-check-label" for="">A. Jangan
                                                                    memarkir kendaraan disekitar alat yang tidak
                                                                    dapat
                                                                    dilihat oleh operator kendaraan berat</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question75" value="B" required />
                                                                <label class="form-check-label" for="">B. Jangan
                                                                    memarkir kendaraan pada jarak kurang dari 30
                                                                    meter
                                                                    dari kendaraan berat yang sedang bekerja</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question75" value="C" required />
                                                                <label class="form-check-label" for="">C. Jangan
                                                                    memarkir kendaraan ringan dibelakang kendaraan
                                                                    berat</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question75" value="D" required />
                                                                <label class="form-check-label" for="">D. Semua
                                                                    pernyataan di atas benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 76 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 76</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question76"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pada saat anda memundurkan kendaraan, apa yang
                                                                    harus
                                                                    anda perhatikan?
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question76" value="A" required />
                                                                <label class="form-check-label" for="">A. Periksa
                                                                    belakang dan samping kiri-kanan kendaraan anda
                                                                    sebelum mundur</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question76" value="B" required />
                                                                <label class="form-check-label" for="">B. Bunyikan
                                                                    klakson satu kali sebelum mundur</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question76" value="C" required />
                                                                <label class="form-check-label" for="">C. Gunakan
                                                                    Spion
                                                                    kanan dan kiri untuk melihat area
                                                                    belakang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question76" value="D" required />
                                                                <label class="form-check-label" for="">D. Jawaban A
                                                                    dan
                                                                    C benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 77 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 77</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question77"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Sebelum memutar balik kendaraan, anda harus:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question77" value="A" required />
                                                                <label class="form-check-label" for="">A. Menepikan
                                                                    kendaraan ke sebelah kanan jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question77" value="B" required />
                                                                <label class="form-check-label" for="">B. Menepikan
                                                                    kendaraan ke sebelah kiri jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question77" value="C" required />
                                                                <label class="form-check-label" for="">C. Pastikan
                                                                    tidak
                                                                    ada kendaraan lain di belakang anda atau
                                                                    kendaraan
                                                                    yang mendekat dalam jarak paling dekat 100
                                                                    meter</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question77" value="D" required />
                                                                <label class="form-check-label" for="">D. Jawaban B
                                                                    dan
                                                                    C benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 78 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 78</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question78"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Tanda rambu "STOP" berarti anda:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question78" value="A" required />
                                                                <label class="form-check-label" for="">A. Berhenti
                                                                    hanya
                                                                    saat ada kendaraan lain melintas</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question78" value="B" required />
                                                                <label class="form-check-label" for="">B. Boleh
                                                                    jalan
                                                                    terus asalkan tidak ada kendaraan lain</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question78" value="C" required />
                                                                <label class="form-check-label" for="">C. Berhenti
                                                                    hanya
                                                                    bila kendaraan yang akan melintas jauh lebih
                                                                    besar</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question78" value="D" required />
                                                                <label class="form-check-label" for="">D. Berhenti
                                                                    terlebih dahulu, ada maupun tidak ada kendaraan
                                                                    lain</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 79 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 79</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question79"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Pada waktu mendekati pertigaan yang tidak
                                                                    dipasangi
                                                                    rambu lalu lintas, anda harus:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question79" value="A" required />
                                                                <label class="form-check-label" for="">A.
                                                                    Membunyikan
                                                                    klakson</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question79" value="B" required />
                                                                <label class="form-check-label" for="">B. Memberikan
                                                                    kesempatan kepada setiap kendaraan yang mendekat
                                                                    dari arah sisi kanan maupun kiri</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question79" value="C" required />
                                                                <label class="form-check-label" for="">C. Memberikan
                                                                    jalan kepada kendaraan yang berada di arah
                                                                    sebelah
                                                                    kiri anda saja</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question79" value="D" required />
                                                                <label class="form-check-label" for="">D.
                                                                    Mengedipkan
                                                                    lampu kendaraan anda</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 80 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 80</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question80"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Di daerah-daerah yang tidak dilengkapi dengan
                                                                    rambu-rambu maka:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question80" value="A" required />
                                                                <label class="form-check-label" for="">A. Kendaraan
                                                                    ringan mempunyai hak untuk melintas lebih
                                                                    dulu</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question80" value="B" required />
                                                                <label class="form-check-label" for="">B. Kendaraan
                                                                    ringan harus memberi jalan kepada semua
                                                                    kendaraan
                                                                    berat yang sedang beroperasi</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question80" value="C" required />
                                                                <label class="form-check-label" for="">C. Berikan
                                                                    jalan
                                                                    kepada kendaraan di sebelah kiri anda</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question80" value="D" required />
                                                                <label class="form-check-label" for="">D. Jika
                                                                    ragu-ragu, melintaslah lebih dulu</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 81 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 81</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question81"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apabila mengendarai kendaraan pada malam hari,
                                                                    agar
                                                                    tidak membuat silau pemakai jalan lainnya maka:
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question81" value="A" required />
                                                                <label class="form-check-label" for="">A. Selalu
                                                                    gunakan
                                                                    lampu dekat</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question81" value="B" required />
                                                                <label class="form-check-label" for="">B. Ganti
                                                                    lampu
                                                                    jadi lampu dekat pada jarak kira-kira 200 meter
                                                                    dari
                                                                    kendaraan yang sedang mendekat dari arah
                                                                    berlawanan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question81" value="C" required />
                                                                <label class="form-check-label" for="">C. Nyalakan
                                                                    lampu
                                                                    besar dan matikan lampu putar/isyarat yang
                                                                    berlawanan oranye</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question81" value="D" required />
                                                                <label class="form-check-label" for="">D. Gunakan
                                                                    lampu
                                                                    jauh untuk mendapatkan jarak pandang yang
                                                                    terbaik</label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <?php elseif($id==8): ?>

                                                <div>
                                                    <!-- Soal 82 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 82</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question1"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang1.png'); ?>"
                                                                    alt="Gambar 1" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question1" value="A" required />
                                                                <label class="form-check-label">A. Larangan
                                                                    kecepatan
                                                                    kendaraan lebih dari 20 KM/Jam</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question1" value="B" required />
                                                                <label class="form-check-label">B. Larangan
                                                                    kecepatan
                                                                    kendaraan kurang dari 20 KM/Jam</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question1" value="C" required />
                                                                <label class="form-check-label">C. Wajib kecepatan
                                                                    kendaraan lebih dari 20Km/jam</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 83 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 83</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question2"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang2.png'); ?>"
                                                                    alt="Gambar 2" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question2" value="A" required />
                                                                <label class="form-check-label">A. Penyempitan
                                                                    dikiri
                                                                    jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question2" value="B" required />
                                                                <label class="form-check-label">B. Penyempitan
                                                                    dikanan
                                                                    jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question2" value="C" required />
                                                                <label class="form-check-label">C. Penyempitan
                                                                    jalan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Soal 84 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 84</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question3"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang3.png'); ?>"
                                                                    alt="Gambar 3" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question3" value="A" required />
                                                                <label class="form-check-label">A. Bebas
                                                                    parkir</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question3" value="B" required />
                                                                <label class="form-check-label">B. Larangan
                                                                    parkir</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question3" value="C" required />
                                                                <label class="form-check-label">C. Semua jawaban
                                                                    diatas
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 85 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 85</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question4"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang4.png'); ?>"
                                                                    alt="Gambar 4" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question4" value="A" required />
                                                                <label class="form-check-label">A. Persimpangan tiga
                                                                    serong kanan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question4" value="B" required />
                                                                <label class="form-check-label">B. Persimpangan tiga
                                                                    serong kiri</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question4" value="C" required />
                                                                <label class="form-check-label">C. Simpang 3</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 86 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 86</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question5"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang5.png'); ?>"
                                                                    alt="Gambar 5" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question5" value="A" required />
                                                                <label class="form-check-label">A. Wajib berjalan
                                                                    terus
                                                                    apabila mengakibatkan rintangan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question5" value="B" required />
                                                                <label class="form-check-label">B. Dimohon berjalan
                                                                    terus apabila mengakibatkan rintangan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question5" value="C" required />
                                                                <label class="form-check-label">C. Dilarang berjalan
                                                                    terus apabila mengakibatkan rintangan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 87 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 87</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question6"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang6.png'); ?>"
                                                                    alt="Gambar 6" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question6" value="A" required />
                                                                <label class="form-check-label">A. Wajib
                                                                    parkir</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question6" value="B" required />
                                                                <label class="form-check-label">B. Dilarang
                                                                    parkir</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question6" value="C" required />
                                                                <label class="form-check-label">C. Tempat
                                                                    parkir</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 88 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 88</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question7"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang7.png'); ?>"
                                                                    alt="Gambar 7" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question7" value="A" required />
                                                                <label class="form-check-label">A. Dilarang
                                                                    menggunakan
                                                                    Handphone</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question7" value="B" required />
                                                                <label class="form-check-label">B. Wajib Menggunakan
                                                                    Handphone</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question7" value="C" required />
                                                                <label class="form-check-label">C. Jawaban a dan b
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 89 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 89</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question8"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang8.png'); ?>"
                                                                    alt="Gambar 8" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question8" value="A" required />
                                                                <label class="form-check-label">A. Hati-hati
                                                                    lintasan
                                                                    truck</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question8" value="B" required />
                                                                <label class="form-check-label">B. Hati-hati
                                                                    lintasan
                                                                    Bus</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question8" value="C" required />
                                                                <label class="form-check-label">C. Hati-hati
                                                                    lintasan
                                                                    Motor</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 90 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 90</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question9"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang9.png'); ?>"
                                                                    alt="Gambar 9" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question9" value="A" required />
                                                                <label class="form-check-label">A. Banyak tikungan
                                                                    pertama kekiri</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question9" value="B" required />
                                                                <label class="form-check-label">B. Banyak tikungan
                                                                    pertama kekanan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question9" value="C" required />
                                                                <label class="form-check-label">C. Banyak
                                                                    tanjakan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 91 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 91</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question10"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang10.png'); ?>"
                                                                    alt="Gambar 10" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question10" value="A" required />
                                                                <label class="form-check-label">A. Dilarang
                                                                    berhenti,
                                                                    wajib meneruskan perjalanan dan tanpa
                                                                    mendahulukan
                                                                    kendaraan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question10" value="B" required />
                                                                <label class="form-check-label">B. Dilarang berjalan
                                                                    terus, wajib berhenti sesaat sebelum bagian
                                                                    jalan
                                                                    tertentu dan meneruskan perjalanan setelah
                                                                    mendahulukan kendaraan yang datang dari arah
                                                                    depan
                                                                    secara bersamaan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question10" value="C" required />
                                                                <label class="form-check-label">C. Dilarang berjalan
                                                                    terus, wajib berhenti dan mendahulukan kendaraan
                                                                    yang datang dari arah depan secara bersamaan dan
                                                                    memastikan bahwa jalan benar-benar aman</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Soal 92 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 92</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question11"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang11.png'); ?>"
                                                                    alt="Gambar 11" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question11" value="A" required />
                                                                <label class="form-check-label">A. Banyak
                                                                    anak-anak</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question11" value="B" required />
                                                                <label class="form-check-label">B. Tempat
                                                                    penyebrangan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question11" value="C" required />
                                                                <label class="form-check-label">C. Jawaban a dan b
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 93 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 93</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question12"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang12.png'); ?>"
                                                                    alt="Gambar 12" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question12" value="A" required />
                                                                <label class="form-check-label">A. Larangan Berbelok
                                                                    kiri</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question12" value="B" required />
                                                                <label class="form-check-label">B. Larangan Belok
                                                                    kanan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question12" value="C" required />
                                                                <label class="form-check-label">C. Wajib belok
                                                                    kanan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 94 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 94</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question13"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang13.png'); ?>"
                                                                    alt="Gambar 13" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question13" value="A" required />
                                                                <label class="form-check-label">A. Tikungan ganda
                                                                    pertama ke kiri</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question13" value="B" required />
                                                                <label class="form-check-label">B. Tikungan ganda
                                                                    pertama ke kanan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question13" value="C" required />
                                                                <label class="form-check-label">C. Tikungan ganda
                                                                    pertama kiri kanan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 95 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 95</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question14"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang14.png'); ?>"
                                                                    alt="Gambar 14" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question14" value="A" required />
                                                                <label class="form-check-label">A. Wajib mengikuti
                                                                    arah
                                                                    kekiri</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question14" value="B" required />
                                                                <label class="form-check-label">B. Wajib
                                                                    terus</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question14" value="C" required />
                                                                <label class="form-check-label">C. Wajib
                                                                    Belok</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 96 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 96</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question15"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang15.png'); ?>"
                                                                    alt="Gambar 15" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question15" value="A" required />
                                                                <label class="form-check-label">A. Wajib
                                                                    terus</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question15" value="B" required />
                                                                <label class="form-check-label">B. Dilarang
                                                                    belok</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question15" value="C" required />
                                                                <label class="form-check-label">C. Dilarang berbalik
                                                                    arah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 97 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 97</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question16"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang16.png'); ?>"
                                                                    alt="Gambar 16" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question16" value="A" required />
                                                                <label class="form-check-label">A. Persimpangan
                                                                    empat</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question16" value="B" required />
                                                                <label class="form-check-label">B. Jalan berbagai
                                                                    arah</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question16" value="C" required />
                                                                <label class="form-check-label">C. Jawaban a dan b
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 98 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 98</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question17"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang17.png'); ?>"
                                                                    alt="Gambar 17" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question17" value="A" required />
                                                                <label class="form-check-label">A. Wajib mengikuti
                                                                    arah
                                                                    yang di tentukan pada bundaran</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question17" value="B" required />
                                                                <label class="form-check-label">B. Tidak wajib
                                                                    mengikuti
                                                                    arah yag ditentukan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question17" value="C" required />
                                                                <label class="form-check-label">C. Jawaban a dan b
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 99 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 99</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question18"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang18.png'); ?>"
                                                                    alt="Gambar 18" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question18" value="A" required />
                                                                <label class="form-check-label">A. Hati-hati jalan
                                                                    runtuh</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question18" value="B" required />
                                                                <label class="form-check-label">B. Jalan menuju
                                                                    tepian
                                                                    air</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question18" value="C" required />
                                                                <label class="form-check-label">C. pelan-pelan jalan
                                                                    belobang</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 100 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 100</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question19"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang19.png'); ?>"
                                                                    alt="Gambar 19" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question19" value="A" required />
                                                                <label class="form-check-label">A. Wajib
                                                                    berhenti</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question19" value="B" required />
                                                                <label class="form-check-label">B. Larangan
                                                                    berhenti</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question19" value="C" required />
                                                                <label class="form-check-label">C. Terserah
                                                                    saja</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 101 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 101</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question20"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang20.png'); ?>"
                                                                    alt="Gambar 20" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question20" value="A" required />
                                                                <label class="form-check-label">A. Longsoran tanah
                                                                    atau
                                                                    batu yang berjatuhan dari sebelah kiri
                                                                    jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question20" value="B" required />
                                                                <label class="form-check-label">B. Longsoran tanah
                                                                    atau
                                                                    batu yang berjatuhan dari sebelah kanan
                                                                    jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question20" value="C" required />
                                                                <label class="form-check-label">C. Jawaban a dan b
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Soal 102 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 102</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question21"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang21.png'); ?>"
                                                                    alt="Gambar 21" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question21" value="A" required />
                                                                <label class="form-check-label">A. Awas</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question21" value="B" required />
                                                                <label class="form-check-label">B. Hati-hati</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question21" value="C" required />
                                                                <label class="form-check-label">C. Cepat</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 103 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 103</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question22"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang22.png'); ?>"
                                                                    alt="Gambar 22" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question22" value="A" required />
                                                                <label class="form-check-label">A. Larangan
                                                                    masuk</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question22" value="B" required />
                                                                <label class="form-check-label">B. Wajib masuk bagi
                                                                    mobil barang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question22" value="C" required />
                                                                <label class="form-check-label">C. Larangan masuk
                                                                    bagi
                                                                    mobil barang</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 104 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 104</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question23"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang23.png'); ?>"
                                                                    alt="Gambar 23" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question23" value="A" required />
                                                                <label class="form-check-label">A. Jembatan atau
                                                                    penyempitan jembatan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question23" value="B" required />
                                                                <label class="form-check-label">B. Penyempitan
                                                                    jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question23" value="C" required />
                                                                <label class="form-check-label">C. Jawaban a dan b
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 105 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 105</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question24"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang24.png'); ?>"
                                                                    alt="Gambar 24" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question24" value="A" required />
                                                                <label class="form-check-label">A. Wajib
                                                                    berhenti</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question24" value="B" required />
                                                                <label class="form-check-label">B. Wajib
                                                                    terus</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question24" value="C" required />
                                                                <label class="form-check-label">C. Terserah
                                                                    saja</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 106 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 106</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question25"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang25.png'); ?>"
                                                                    alt="Gambar 25" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question25" value="A" required />
                                                                <label class="form-check-label">A. Penyempitan
                                                                    dikiri
                                                                    jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question25" value="B" required />
                                                                <label class="form-check-label">B. Penyempitan
                                                                    dikanan
                                                                    jalan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question25" value="C" required />
                                                                <label class="form-check-label">C. Penyempitan
                                                                    jembatan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 107 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 107</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question26"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang26.png'); ?>"
                                                                    alt="Gambar 26" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question26" value="A" required />
                                                                <label class="form-check-label">A. Dilarang
                                                                    masuk</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question26" value="B" required />
                                                                <label class="form-check-label">B. Dilarang
                                                                    berhenti</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question26" value="C" required />
                                                                <label class="form-check-label">C. Wajib mengikuti
                                                                    arah</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 108 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 108</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question27"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang27.png'); ?>"
                                                                    alt="Gambar 27" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question27" value="A" required />
                                                                <label class="form-check-label">A. Ada orang di
                                                                    depan</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question27" value="B" required />
                                                                <label class="form-check-label">B. Pelan-pelan
                                                                    banyak
                                                                    orang</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question27" value="C" required />
                                                                <label class="form-check-label">C. Ada pekerjaan
                                                                    jalan</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 109 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 109</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question28"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang28.png'); ?>"
                                                                    alt="Gambar 28" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question28" value="A" required />
                                                                <label class="form-check-label">A. Larangan masuk
                                                                    bagi
                                                                    kendaraan bermotor roda empat atau lebih</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question28" value="B" required />
                                                                <label class="form-check-label">B. Larangan masuk
                                                                    bagi
                                                                    kendaraan roda dua</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question28" value="C" required />
                                                                <label class="form-check-label">C. Jawaban a dan b
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 110 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 110</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question29"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang29.png'); ?>"
                                                                    alt="Gambar 29" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question29" value="A" required />
                                                                <label class="form-check-label">A. Tempat berjalan
                                                                    kaki</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question29" value="B" required />
                                                                <label class="form-check-label">B. Banyak
                                                                    anak-anak</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question29" value="C" required />
                                                                <label class="form-check-label">C. Jawaban a dan b
                                                                    benar</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Soal 111 -->
                                                    <div class="row bg-white border border-primary mb-3 mt-0 con-question p-3 pb-5 px-lg-5"
                                                        style="border-radius: 15px; margin-inline: 0.05rem;">
                                                        <div class="col-12">
                                                            <div
                                                                class="d-flex mt-2 justify-content-end align-items-center">
                                                                <span class="badge badge-primary">No 111</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="question30"
                                                                    class="fw-bold mb-0 pb-0 mt-2 mb-lg-2 required">
                                                                    Apa arti gambar berikut?
                                                                </label>
                                                                <br>
                                                                <img src="<?= base_url('uploads/post-test/plang30.png'); ?>"
                                                                    alt="Gambar 30" />
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question30" value="A" required />
                                                                <label class="form-check-label">A. Jalan
                                                                    Berbelok</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question30" value="B" required />
                                                                <label class="form-check-label">B. Jalan
                                                                    Zig-zag</label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-custom px-lg-5 mb-3 form-check-success form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="question30" value="C" required />
                                                                <label class="form-check-label">C. Jalan
                                                                    Licin</label>
                                                            </div>
                                                        </div>
                                                    </div>





                                                </div>
                                                <?php endif; ?>


                                            </div>



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
                                        <?php if($id==1): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/pernyataan-disiplin"
                                            class="btn btn-light-primary">
                                            Kembali
                                        </a>
                                        <?php elseif($id==2): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/1"
                                            class="btn btn-light-primary">
                                            Kembali
                                        </a>
                                        <?php elseif($id==3): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/2"
                                            class="btn btn-light-primary">
                                            Kembali
                                        </a>
                                        <?php elseif($id==4): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/3"
                                            class="btn btn-light-primary">
                                            Kembali
                                        </a>
                                        <?php elseif($id==5): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/4"
                                            class="btn btn-light-primary">
                                            Kembali
                                        </a>
                                        <?php elseif($id==6): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/5"
                                            class="btn btn-light-primary">
                                            Kembali
                                        </a>
                                        <?php elseif($id==7): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/6"
                                            class="btn btn-light-primary">
                                            Kembali
                                        </a>
                                        <?php elseif($id==8): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/7"
                                            class="btn btn-light-primary">
                                            Kembali
                                        </a>
                                        <?php endif; ?>

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

                                        <?php if($id==1): ?>
                                        <button type="submit" class="btn btn-primary">
                                            Berikutnya
                                        </button>
                                        <!-- <a href="<?php base_url(); ?>/karyawan/simper/post-test/2"
                                            class="btn btn-primary">
                                            Berikutnya
                                        </a> -->
                                        <?php elseif($id==2): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/3"
                                            class="btn btn-primary">
                                            Berikutnya
                                        </a>
                                        <?php elseif($id==3): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/4"
                                            class="btn btn-primary">
                                            Berikutnya
                                        </a>
                                        <?php elseif($id==4): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/5"
                                            class="btn btn-primary">
                                            Berikutnya
                                        </a>
                                        <?php elseif($id==5): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/6"
                                            class="btn btn-primary">
                                            Berikutnya
                                        </a>
                                        <?php elseif($id==6): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/7"
                                            class="btn btn-primary">
                                            Berikutnya
                                        </a>
                                        <?php elseif($id==7): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-test/8"
                                            class="btn btn-primary">
                                            Berikutnya
                                        </a>
                                        <?php elseif($id==8): ?>
                                        <a href="<?= base_url(); ?>/karyawan/simper/post-pengajuan"
                                            class="btn btn-primary">
                                            Kirim
                                        </a>
                                        <?php endif; ?>
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
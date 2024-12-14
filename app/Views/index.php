<?= $this->extend('layouts/freeuser_layout') ?>
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

@media (max-width: 576px) {
    .definition-content {
        font-size: 14px !important;
        /* Ukuran font untuk teks definisi */
    }
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.05);
    }

    100% {
        transform: scale(1);
    }
}

@media (max-width: 576px) {
    .section-heading {
        font-size: 18px !important;
    }

    .text-muted-custom {
        font-size: 14px !important;
    }

    .btn-info {
        padding: 10px 20px !important;
        font-size: 14px !important;
    }
}
</style>
<?= $this->endSection('css') ?>
<?= $this->section('content') ?>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">

        <!--begin::Intro Section-->
        <div class="card card-page mb-5 card-custom mt-3"
            style="background: linear-gradient(135deg, #f3f7ff, #e3e9ff); box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <div class="card-body text-center py-5">
                <div class="text-center mb-5">
                    <img src="<?= base_url(); ?>image/logo-cropped.png"
                        class="img-fluid border border-dark border-1 rounded-circle" alt="Bank Logo"
                        style="width: 100px;">
                </div>
                <h2 class="section-heading mt-3"
                    style="font-size: 23px; font-weight: 700; color: #2e3b4e; text-transform: uppercase; letter-spacing: 1px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);">
                    Selamat Datang di Dashboard Pengajuan Kredit Bank
                </h2>
                <p class="text-muted-custom fs-5 mt-3" style="font-size: 18px; color: #555; line-height: 1.8;">
                    Ajukan kredit pinjaman dengan mudah dan cepat melalui platform ini. Dapatkan akses ke berbagai
                    fasilitas keuangan yang kami tawarkan.
                </p>
                <a href="<?= base_url("auth/register"); ?>" class="btn btn-info btn-sm mt-4"
                    style="background-color: #3498db; border: none; border-radius: 30px; padding: 15px 30px; font-size: 16px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: background-color 0.3s ease; animation: pulse 5s infinite;">
                    Mari memulai pengajuan kredit Anda!
                </a>
            </div>

            <!-- Responsive adjustments for mobile -->

        </div>


        <!--end::Animated Section-->
        <!--end::Intro Section-->

        <!-- Pengajuan Kredit -->
        <div class="card card-page mb-5">
            <div class="card-body">
                <div class="row gy-5 g-xl-8">
                    <div class="col-md-6 mb-4">
                        <div class="card card-custom h-100 bg-light-primary text-center">
                            <div class="card-body p-5">
                                <div class="mb-4" style="padding-top: 8px">
                                    <i class="fas fa-hand-holding-usd icon-large text-primary"></i>
                                </div>
                                <h4 class="card-title text-primary mb-3" style="padding-top: 8px">Pengajuan Kredit
                                    Personal</h4>
                                <p class="card-text text-muted">
                                    Ajukan kredit personal untuk kebutuhan pribadi Anda dengan bunga rendah dan proses
                                    cepat.
                                </p>
                                <span class="badge bg-warning text-dark mt-3">Kredit Personal</span>
                                <div>
                                    <a href="<?= base_url("auth/register"); ?>"
                                        class="btn btn-primary btn-custom mt-4">Ajukan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card card-custom h-100 bg-light-success text-center">
                            <div class="card-body p-5">
                                <div class="mb-4">
                                    <i style="font-size: 70px;" class="fas fa-building icon-large text-success"></i>
                                </div>
                                <h4 class="card-title text-success mb-3">Pengajuan Kredit Bisnis</h4>
                                <p class="card-text text-muted">
                                    Ajukan kredit bisnis untuk mengembangkan usaha Anda dengan fasilitas dan layanan
                                    terbaik.
                                </p>
                                <span class="badge bg-danger mt-3">Kredit Bisnis</span>
                                <div>
                                    <a href="<?= base_url("auth/register"); ?>"
                                        class="btn btn-success btn-custom mt-4 border border-success">Ajukan
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Pengajuan Kredit-->

        <!--begin::Panduan Pengajuan-->
        <div class="alert alert-dismissible alert-custom d-flex align-items-center p-5">
            <i class="far fa-lightbulb icon-large text-primary me-4" style="font-size: 50px"></i>
            <div class="d-flex flex-column">
                <h6 class="mb-1 text-primary">Panduan Pengajuan Kredit</h6>
                <small class="mb-0">
                    Pastikan Anda telah melengkapi seluruh data yang dibutuhkan sebelum melakukan pengajuan. Informasi
                    yang akurat membantu mempercepat proses verifikasi dan persetujuan kredit Anda.
                </small>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!--end::Panduan Pengajuan-->

        <!--begin::Pengertian Section-->
        <div class="definition-section">
            <h4 class="definition-title mb-3 text-center">Kredit Bank</h4>
            <div class="row justify-content-center">
                <!-- Contoh Kredit Personal -->
                <!-- <div class="col-md-6 justify-content-center text-center mb-4">
                    <img src="<?= base_url(); ?>image/kredit_personal.jpg" class="image-idcard-simper mb-2"
                        alt="Contoh Kredit Personal">
                    <span class="badge bg-warning">Contoh Kredit Personal</span>
                </div> -->
                <!-- Contoh Kredit Bisnis -->
                <!-- <div class="col-md-6 justify-content-center text-center mb-4">
                    <img src="<?= base_url(); ?>image/kredit_bisnis.jpg" class="image-idcard-simper mb-2"
                        alt="Contoh Kredit Bisnis">
                    <span class="badge bg-danger">Contoh Kredit Bisnis</span>
                </div> -->
            </div>
            <!-- Penjelasan Kredit Personal -->
            <p class="definition-content mt-4" style="text-align: justify;">
                <span class="definition-highlight">Kredit Personal</span> adalah pinjaman yang diberikan kepada individu
                untuk kebutuhan pribadi seperti renovasi rumah, pendidikan, atau liburan. Kredit ini biasanya memiliki
                bunga yang kompetitif dan tenor yang fleksibel.
            </p>
            <!-- Penjelasan Kredit Bisnis -->
            <p class="definition-content mt-3" style="text-align: justify;">
                <span class="definition-highlight">Kredit Bisnis</span> adalah pinjaman yang diberikan kepada pelaku
                usaha untuk mengembangkan atau memperluas bisnis mereka. Kredit ini dapat digunakan untuk modal kerja,
                pembelian aset, atau ekspansi usaha.
            </p>

        </div>
        <!--end::Pengertian Section-->

    </div>
    <!--end::Post-->
</div>
<?= $this->endSection() ?>
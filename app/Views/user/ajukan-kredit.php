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
                    action="<?= base_url("karyawan/simper/post-create-biodata"); ?>" enctype="multipart/form-data"
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
                                    <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
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
                                                <!-- <i class="fas fa-check text-primary"></i> -->
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
                                                    Isi Biodata</h4>
                                                <div class="row mb-1  bg-white border border-primary mt-3 con-question p-3 pb-5 px-lg-5 "
                                                    style="border-radius: 15px; margin-inline: 0.05rem;">
                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-semibold fs-6 mb-2">Jumlah
                                                                    Pengajuan Kredit</label>
                                                                <input type="number" name="jumlah_pengajuan"
                                                                    class="form-control form-control mb-3 mb-lg-0"
                                                                    placeholder="Masukkan Jumlah Pengajuan Kredit"
                                                                    required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="fv-row mb-7">
                                                                <label class="required fw-semibold fs-6 mb-2">Jumlah
                                                                    Bulan Pengajuan</label>
                                                                <select name="jumlah_bulan"
                                                                    class="form-select form-control mb-3 mb-lg-0"
                                                                    required>
                                                                    <option value="6">6 Bulan</option>
                                                                    <option value="12">12 Bulan</option>
                                                                    <option value="24">24 Bulan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="fv-row mb-7">
                                                                <label class="fw-semibold fs-6 mb-2">Bunga yang
                                                                    Diterapkan</label>
                                                                <input type="text" name="bunga"
                                                                    class="form-control form-control mb-3 mb-lg-0"
                                                                    placeholder="Bunga (%)" value="5%" readonly />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="fv-row mb-7">
                                                                <label class="fw-semibold fs-6 mb-2">Total Kredit
                                                                    (Termasuk Bunga)</label>
                                                                <input type="text" name="total_kredit"
                                                                    class="form-control form-control mb-3 mb-lg-0"
                                                                    placeholder="Total Kredit Setelah Bunga" readonly />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <button type="submit" class="btn btn-primary">Ajukan
                                                                Kredit</button>
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
                                        <button class="btn btn-primary">
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
$(document).ready(function() {
    // Inisialisasi Select2
    $('.form-select').select2();

    $('#kt_modal_add_pengajuan #unit_recommendation_container').on('change', '.type-kendaraan', function() {
        var selectedValue = $(this).val();
        var unitRecommendationRow = $(this).closest('.unit-recommendation');

        if (selectedValue === 'alat berat') {
            unitRecommendationRow.find('.unit_recomendations_con').show();
            unitRecommendationRow.find('.mobil_selection').addClass('d-none');
            unitRecommendationRow.find('.unit-recomendations').attr('required', true);
            unitRecommendationRow.find('.unit-recomendations-mobil').removeAttr('required');
        } else if (selectedValue === 'mobil') {
            unitRecommendationRow.find('.unit_recomendations_con').hide();
            unitRecommendationRow.find('.mobil_selection').removeClass('d-none').show();
            unitRecommendationRow.find('.unit-recomendations').removeAttr('required');
            unitRecommendationRow.find('.unit-recomendations-mobil').attr('required', true);
        }

        // Reset pilihan
        if (selectedValue === 'mobil') {
            unitRecommendationRow.find('.unit-recomendations').val('FD30').trigger(
                'change'); // Set default value for alat berat
        } else {
            unitRecommendationRow.find('.unit-recomendations-mobil').val("LV").trigger('change');
        }
    });

    // Tambah Unit
    $('#kt_modal_add_pengajuan #add_unit').click(function() {
        var unitCount = $('#kt_modal_add_pengajuan #unit_recommendation_container .unit-recommendation')
            .length; // Hitung jumlah unit yang ada
        var newUnit = `
            <div class="border border-2 rounded-3 mt-3 unit-recommendation" data-index="${unitCount}">
                <label class="fw-semibold fs-6 mb-2 mt-2 d-flex justify-content-end mx-3">
                    <span class="badge badge-info">No ${unitCount + 1}</span>
                </label>
                <div class="row mx-3">
                    <div class="col-md-6 mb-3">
                        <select class="form-select form-select" name="jenis_simper[]" data-control="select2" data-placeholder="Pilih Jenis Simper" data-hide-search="true" required>
                            <option></option>
                            <option value="FO" selected>FO - Full Operation</option>
                            <option value="RT">RT - Restricted</option>
                            <option value="LO">LO - Learning Only</option>
                            <option value="IR">IR - Instruktur</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <select class="form-select form-select type-kendaraan" name="type_kendaraan[]" data-control="select2" data-placeholder="Pilih Type Kendaraan" data-hide-search="true" required>
                            <option value="alat berat">Alat Berat</option>
                            <option value="mobil">Mobil</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="unit_recomendations_con">
                            <select class="form-select form-select unit-recomendations" data-control="select2" data-placeholder="Pilih Unit" name="alat_berat[]" required>
                                <option value="FD30" selected>FD30</option>
                                <option value="HD KOMATSU">HD KOMATSU</option>
                                <option value="PC SMALL">PC SMALL</option>
                                <option value="PC BIG">PC BIG</option>
                                <option value="B.DOZER SMALL">B.DOZER SMALL</option>
                                <option value="B.DOZER BIG">B.DOZER BIG</option>
                                <option value="W.LOADER SMALL">W.LOADER SMALL</option>
                                <option value="W.LOADER BIG">W.LOADER BIG</option>
                                <option value="GRADER SMALL">GRADER SMALL</option>
                                <option value="GRADER BIG">GRADER BIG</option>
                                <option value="COMPACTOR">COMPACTOR</option>
                                <option value="TADANO">TADANO</option>
                                <option value="GENERATOR SET">GENERATOR SET</option>
                                <option value="OVERHEAD CRANE">OVERHEAD CRANE</option>
                            </select>
                        </div>
                        <div class="mobil_selection d-none">
                            <select class="form-select form-select unit-recomendations-mobil" data-control="select2" data-placeholder="Pilih Unit" name="mobil[]" required>
                                <option value="LV" selected>LV</option>
                                <option value="SCANIA">SCANIA</option>
                                <option value="UD TRUCK">UD TRUCK</option>
                                <option value="MINIBUS">MINIBUS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fv-row mb-7">
                            <input type="text" name="type_unit[]" class="form-control form-control mb-lg-0" placeholder="Masukkan type unit" />
                        </div>
                    </div>
                </div>
            </div>
        `;
        $('#kt_modal_add_pengajuan #unit_recommendation_container').append(
            newUnit); // Tambahkan unit baru
        $('.form-select').select2(); // Reinitialize Select2 untuk elemen baru

        // Set default value for new selects
        $('#kt_modal_add_pengajuan #unit_recommendation_container .unit-recomendations').last().val(
            'FD30').trigger('change');
        $('#kt_modal_add_pengajuan #unit_recommendation_container .unit-recomendations-mobil').last()
            .val('LV').trigger(
                'change');

        if ($('#kt_modal_add_pengajuan #unit_recommendation_container .unit-recommendation').length >=
            11) {
            $('#kt_modal_add_pengajuan #add_unit').hide();
        }
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
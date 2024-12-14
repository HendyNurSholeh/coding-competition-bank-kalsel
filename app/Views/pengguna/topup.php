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

                <div class="card card-custom h-100 bg-white text-center">
                    <div class="card-header py-3 d-flex justify-content-center">
                        <h3 class="card-title text-primary mb-0">Top Up Saldo</h3>
                    </div>
                    <div class="card-body p-5 pt-0 pt-lg-3 mb-5 mx-5">
                        <div class="mb-4" style="padding-top: 8px">
                            <i class="fas fa-wallet icon-large text-primary"></i>
                        </div>
                        <p class="card-text text-muted">
                            Isi saldo Anda dengan mudah menggunakan QR Code. Scan QR Code di bawah ini untuk
                            melakukan top up.
                        </p>
                        <div class="mb-4">
                            <img src="<?= base_url('uploads/qrcode/1.png'); ?>" alt="QR Code" class="image-preview">
                        </div>
                        <form action="<?= base_url('pengguna/topup/post-topup'); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="mb-4 mx-lg-5 px-lg-5">
                                <label class="form-label">Jumlah Top Up</label>
                                <input type="number" name="amount" class="form-control form-control-lg"
                                    placeholder="Masukkan jumlah top up" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-custom">Top Up Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--end::Notifications-->
    </div>
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
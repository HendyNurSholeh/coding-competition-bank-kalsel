<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('css') ?>
<style>
/* Untuk input search */
.dataTables_filter input {
    background-color: white !important;
    color: black !important;
    /* Optional: mengubah warna teks jika diperlukan */
}

/* Untuk select show */
.dataTables_length select {
    background-color: white !important;
    color: black !important;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Layout - Overview-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                <!--begin::Card-->
                <div class="card card-flush" data-kt-sticky="true" data-kt-sticky-name="account-navbar"
                    data-kt-sticky-offset="{default: false, xl: '80px'}" data-kt-sticky-height-offset="50"
                    data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-animation="false"
                    data-kt-sticky-left="auto" data-kt-sticky-top="90px" data-kt-sticky-animation="false"
                    data-kt-sticky-zindex="95">

                    <!--begin::Card header-->
                    <div class="card-header justify-content-between">
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <small class="text-gray-400">Telah aktif:
                                22 Desc 2024</small>

                            <!--end::Menu 3-->
                        </div>
                        <div class="card-toolbar">
                            <!-- <span class="badge badge-danger">Expired</span> -->
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
                                    src="<?= base_url('uploads/pas_foto/') . $profileData['pas_foto'] ?? 'blank.png'?>" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-2 text-gray-800 text-hover-primary fw-bold mb-1">
                                <?= esc(ucwords($profileData['username']) ?? '') ?>
                            </a>
                            <!--end::Name-->

                            <!--begin::Position-->
                            <div class="fs-6 fw-semibold text-gray-400 mb-2">
                                <?= esc(ucwords($profileData['nama']) ?? ' ') ?>
                            </div>
                            <!--end::Position-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-center">
                                <a href="#" class="btn btn-sm btn-light-primary py-2 px-4 fw-bold me-2"
                                    data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">Nasabah</a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Summary-->

                        <!--begin::Menu-->
                        <!-- <ul
                            class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bold fs-5 mb-10">
                            <li class="menu-item mb-1">
                                <a class="menu-link px-6 py-4 active mt-3 mt-lg-0" href="#">
                                    <span class="menu-bullet"><span class="bullet"></span></span>
                                    <span class="menu-title">
                                        Overview </span>
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
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Profile Detail</h3>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Action-->
                        <!--end::Action-->

                    </div>
                    <!--begin::Card header-->
                    <!--begin::Card body-->
                    <form action="profile/post-edit" class="form-edit" method="post" enctype="multipart/form-data">
                        <div class="card-body p-9 ">
                            <div class="row mb-7 align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Username <i
                                        class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="Country of origination"></i></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="username" class="form-control form-control-lg form-control"
                                        value="<?= esc($profileData['username'] ?? '') ?>" disabled />
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7 align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Nama Lengkap <i
                                        class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="Country of origination"></i></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="nama" class="form-control form-control-lg form-control"
                                        placeholder="Nama Lengkap" value="<?= esc($profileData['nama'] ?? '') ?>" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7 align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Email <i
                                        class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="Country of origination"></i></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="email" name="email" class="form-control form-control-lg form-control"
                                        value="<?= esc($profileData['email'] ?? '') ?>" disabled />
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7 align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Tanggal Dibuat <i
                                        class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="Country of origination"></i></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="created_at"
                                        class="form-control form-control-lg form-control"
                                        value="<?= esc(date('d M Y, H:i', strtotime($profileData['created_at'])) ?? '-') ?>"
                                        disabled />
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7 align-items-center">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-bold text-muted">Ubah Pas Foto <i
                                        class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                        title="Upload your new profile picture"></i></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="file" id="upload" name="pas_foto"
                                        class="form-control form-control border border-1 mb-3 mb-lg-0"
                                        placeholder="Unggah Pas Foto" />
                                    <small class="text-muted text-crop">Sesuaikan Posisi
                                        Foto</small>

                                    <!-- Input tersembunyi untuk menyimpan hasil crop -->
                                    <input type="hidden" id="cropped-image" name="cropped_pas_foto" value="">

                                    <div id="cropie-demo" style="width:200px; display: none;">
                                    </div>

                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <div class="card-footer d-flex justify-content-end  py-6 pt-0 pb-5 mb-5 mb-lg-0 px-9 pe-0 ">
                                <a href="profile" class="btn btn-light active-light-primary me-2">
                                    Batal
                                </a>
                                <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Simpan
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                            </div>

                            <!--end::Modal - Add task-->
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <!--end::Input group-->
                            <!--begin::Notice-->
                            <!--end::Notice-->
                        </div>
                    </form>
                    <!--end::Card body-->
                </div>
                <!--end::List Widget 4-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Layout - Overview-->
    </div>
    <!--end::Post-->
</div>
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
            height: 150, // Menyesuaikan tinggi viewport
            type: 'square' // Atau 'circle' jika ingin bentuk lingkaran
        },
        boundary: {
            width: 180, // Boundary lebih besar dari viewport
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
    $('.form-edit').on('submit', function(e) {
        e.preventDefault(); // Mencegah form submit default

        // Nonaktifkan tombol submit untuk mencegah klik dua kali
        var submitButton = $('button[type="submit"]');
        submitButton.prop('disabled', true); // Nonaktifkan tombol submit
        submitButton.find('.indicator-progress').show(); // Menampilkan indikator progress

        // Cek apakah ada file yang diunggah
        if ($('#upload').val()) {
            // Ambil hasil crop dalam format base64
            $uploadCrop.croppie('result', {
                type: 'base64', // Atau 'canvas' jika ingin hasil dalam bentuk canvas
                size: {
                    width: 600,
                    height: 600
                } // Ukuran output crop
            }).then(function(response) {
                // Masukkan gambar hasil crop ke dalam input tersembunyi (cropped-image)
                $('#cropped-image').val(response); // Masukkan base64 ke input tersembunyi

                // Setelah itu submit form
                $('.form-edit')[0].submit(); // Submit form setelah data gambar siap
            });
        } else {
            // Jika tidak ada file yang diunggah, langsung submit form
            $('.form-edit')[0].submit();
        }
    });
});
</script>

<!--end::Custom Javascript-->
<!--end::Custom Javascript-->
<?= $this->endSection() ?>
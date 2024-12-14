<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('css') ?>
<style>
/* Untuk input search */
.dataTables_filter input {
    background-color: white !important;
    color: black !important;
}

/* Untuk select show */
.dataTables_length select {
    background-color: white !important;
    color: black !important;
}
</style>
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
                        <a href="profile-edit"
                            class="btn btn-sm btn-light-primary border border-primary align-self-center">Edit
                            Profile</a>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-9 ">

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Username <i
                                    class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Country of origination"></i></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6"><?= esc($profileData['username'] ?? '') ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Nama Lengkap <i
                                    class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Country of origination"></i></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6"><?= esc($profileData['nama'] ?? '') ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Email <i
                                    class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Country of origination"></i></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6"><?= esc($profileData['email'] ?? '') ?></span>
                            </div>
                            <!--end::Col-->
                        </div>

                        <div class="row mb-7" style="margin-bottom: 50px !important;">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-bold text-muted">Tanggal Dibuat <i
                                    class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                    title="Country of origination"></i></label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-bold fs-6">
                                    <?= esc(date('d M Y, H:i', strtotime($profileData['created_at'])) ?? '-') ?>
                                </span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-7">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_reset_password">Reset
                                    password?</a>
                                <a href="<?= base_url(); ?>logout" class="btn btn-danger align-self-center">Logout</a>
                            </div>
                        </div>

                        <!--begin::Modal - Reset Password-->
                        <div class="modal fade" id="kt_modal_reset_password" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_reset_password_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Form Ubah Password</h2>
                                        <!--end::Modal title-->

                                        <!--begin::Close-->
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->

                                    <!--begin::Modal body-->
                                    <div class="modal-body px-5 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_reset_password_form" class="form"
                                            action="<?= base_url(); ?>esr/profile/reset-password" method="post">
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10"
                                                id="kt_modal_reset_password_scroll" data-kt-scroll-max-height="auto"
                                                data-kt-scroll-dependencies="#kt_modal_reset_password_header"
                                                data-kt-scroll-wrappers="#kt_modal_reset_password_scroll"
                                                data-kt-scroll-offset="300px">

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fw-semibold fs-6 mb-2">Password
                                                                Lama</label>
                                                            <input type="password" name="old_password"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="Masukkan password lama" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fw-semibold fs-6 mb-2">Password
                                                                Baru</label>
                                                            <input type="password" name="new_password"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="Masukkan password baru" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="fv-row mb-7">
                                                            <label class="required fw-semibold fs-6 mb-2">Konfirmasi
                                                                Password Baru</label>
                                                            <input type="password" name="confirm_password"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="Masukkan konfirmasi password baru"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end::Scroll-->

                                            <!--begin::Actions-->
                                            <div class="text-center pt-10">
                                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                                                    Batal
                                                </button>

                                                <button type="submit" class="btn btn-danger"
                                                    data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">
                                                        Ubah Password
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - Reset Password-->
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
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script>
$("#kt_datatable_dom_positioning").DataTable({
    "language": {
        "lengthMenu": "Show _MENU_",
    },
    "dom": "<'row mb-2'" +
        "<'col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar'l>" +
        "<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
        ">" +

        "<'table-responsive'tr>" +

        "<'row'" +
        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
        ">",
    "scrollX": true,
});

// modal modalDelete$(document).ready(function() {
// Ketika tombol hapus diklik
$('#modalDelete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget); // Tombol yang memicu modal
    var id = button.data('id'); // Ambil ID dari atribut data-id
    var modal = $(this);
    console.log(id);
    modal.find('#id').val(id); // Isi ID ke input hidden dalam modal
});
</script>
<!--end::Custom Javascript-->
<!--end::Custom Javascript-->
<?= $this->endSection() ?>
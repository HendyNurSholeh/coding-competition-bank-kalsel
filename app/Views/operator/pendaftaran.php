<?= $this->extend('layouts/operator_layout') ?>
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
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Index-->
        <div class="card card-page">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">

                    <!--begin::Col-->
                    <div>
                        <!--begin::Table Widget 1-->
                        <div class="card card-xxl-stretch">

                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5 pb-3">
                                <!--begin::Card title-->
                                <h3 class="card-title fw-bolder text-gray-800 fs-2">Daftar Peserta
                                </h3>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <!-- <div class="card-toolbar">
                                                    <div class="my-1">
                                                        <select data-dropdown-parent="#kt_modal_add_user" class="form-select fw-bold w-125px"
                                                            data-control="select2" data-placeholder="Status"
                                                            data-hide-search="true">
                                                            <option value="1" selected="selected">Status</option>
                                                            <option value="2">Pending</option>
                                                            <option value="3">In Progress</option>
                                                            <option value="3">Complete</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <div class="row">
                                    <div class="col-12 pb-xxl-5 mb-4">
                                        <div class="d-flex justify-content-end mb-3">
                                            <!-- <button type="button" class="btn btn-info btn-sm me-lg-3"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                                <i class="bi bi-plus fw-bold"></i> Tambah
                                            </button> -->
                                        </div>

                                        <table id="kt_datatable_dom_positioning"
                                            class="table align-middle table-row-bordered table-row-dashed gy-5"
                                            width="100%">
                                            <thead>
                                                <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                    <th>No</th>
                                                    <th>Nama Event</th>
                                                    <th>Nama Peserta</th>
                                                    <th>NPP</th>
                                                    <th>Email</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($participants as $key => $participant): ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td><?= $participant['title'] ?></td>
                                                    <td><?= $participant['name'] ?></td>
                                                    <td><?= $participant['npp'] ?></td>
                                                    <td><?= $participant['email'] ?></td>
                                                    <td><?= date('d M Y H:i', strtotime($participant['created_at'])) ?>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <!--end::Table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Table Widget 1-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Index-->
    </div>
    <!--end::Post-->

    <!-- modal delete -->
    <div class="modal fade" tabindex="-1" id="modalDelete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <ny class="modal-title">Konfirmasi Hapus Pendaftaran</ny>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                </div>

                <div class="modal-footer">
                    <form action="/admin/pendaftaran/post-delete" method="post">
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-lg">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Tambah Pendaftaran</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body px-5 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_add_broker_form" class="form" action="/admin/pendaftaran/post-add" method="post">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_broker_scroll"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_broker_header"
                            data-kt-scroll-wrappers="#kt_modal_add_broker_scroll" data-kt-scroll-offset="300px">

                            <!-- Broker Name -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Judul</label>
                                        <input type="text" name="title"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan judul acara" required />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Tanggal Acara</label>
                                        <input type="date" name="pendaftaran_date"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan tanggal acara" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Lokasi</label>
                                        <input type="text" name="location"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan lokasi acara" required />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Jenis Acara</label>
                                        <input type="text" name="pendaftaran_type"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan jenis acara" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Kuota</label>
                                        <input type="number" name="qouta"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan kuota acara" required />
                                    </div>
                                </div>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Deskripsi</label>
                                <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Masukkan deskripsi acara" required></textarea>
                            </div>
                            <!-- <div class="fv-row mb-7">
                                <label class="required fw-semibold fs-6 mb-2">Status</label>
                                <select name="status" class="form-select form-select-solid" required>
                                    <option value="active">Open</option>
                                    <option value="inactive">Close</option>
                                </select>
                            </div> -->

                        </div>
                        <!--end::Scroll-->

                        <!--begin::Actions-->
                        <div class="text-center pt-10">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                                Batal
                            </button>

                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">
                                    Submit
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
    <!--end::Modal - Add task-->


    <!--begin::Modal - Edit task-->
    <div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-lg">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Edit Pendaftaran</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body px-5 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_edit_broker_form" class="form" action="/admin/pendaftaran/post-edit"
                        method="post">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_broker_scroll"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_broker_header"
                            data-kt-scroll-wrappers="#kt_modal_add_broker_scroll" data-kt-scroll-offset="300px">

                            <!-- Broker Name -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Nama Perusahaan</label>
                                        <input type="text" name="pendaftaran_name"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan nama perusahaan" required />
                                    </div>
                                </div>
                                <!-- <div class="col-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Username</label>
                                        <input type="text" name="username"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan username" required />
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="row">
                                <div class="col-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Password</label>
                                        <input type="password" name="password"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan password" required />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Konfirmasi Password</label>
                                        <input type="password" name="confirm_password"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan konfirmasi password" required />
                                    </div>
                                </div>
                            </div> -->

                            <!-- Province -->


                            <!-- Kecamatan -->


                            <!-- PIC -->
                            <div class="fv-row mb-7">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="fw-semibold fs-6 mb-2">PIC</label>
                                        <input type="text" name="pic"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan nama PIC" />
                                    </div>
                                </div>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="fw-semibold fs-6 mb-2">No. Telp PIC</label>
                                <input type="text" name="no_telp_pic"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Masukkan nomor telepon PIC" />
                            </div>

                        </div>
                        <!--end::Scroll-->

                        <!--begin::Actions-->
                        <div class="text-center pt-10">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <input type="hidden" name="id" id="id">

                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">
                                    Submit
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
    <!--end::Modal - Add task-->

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
$('#kt_modal_edit_user').on('show.bs.modal', function(e) {
    var button = $(e.relatedTarget);
    var id = button.data('id');
    var pendaftaran_name = button.data('pendaftaran-name');
    var pic = button.data('pic');
    var no_telp_pic = button.data('no-telp-pic');
    var $id = $(this).find('input[name="id"]');
    var $pendaftaran_name = $(this).find('input[name="pendaftaran_name"]');
    var $pic = $(this).find('input[name="pic"]');
    var $no_telp_pic = $(this).find('input[name="no_telp_pic"]');
    $id.val(id);
    $pendaftaran_name.val(pendaftaran_name);
    $pic.val(pic);
    $no_telp_pic.val(no_telp_pic);
});

// modal modalDelete$(document).ready(function() {
// Ketika tombol hapus diklik
$('#modalDelete').on('show.bs.modal', function(pendaftaran) {
    var button = $(pendaftaran.relatedTarget); // Tombol yang memicu modal
    var id = button.data('id'); // Ambil ID dari atribut data-id
    var modal = $(this);
    console.log(id);
    modal.find('#id').val(id); // Isi ID ke input hidden dalam modal
});
</script>
<!--end::Custom Javascript-->
<!--end::Custom Javascript-->
<?= $this->endSection() ?>
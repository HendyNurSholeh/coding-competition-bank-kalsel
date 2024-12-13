<?= $this->extend('layouts/main_layout') ?>
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
                                <h3 class="card-title fw-bolder text-gray-800 fs-3">Daftar Karyawan
                                </h3>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <!-- <div class="card-toolbar">
                                                    <div class="my-1">
                                                        <select class="form-select fw-bold w-125px"
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
                                        <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-info btn-sm me-lg-3"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                                <i class="bi bi-plus fw-bold"></i> Tambah
                                            </button>
                                        </div>

                                        <table id="kt_datatable_dom_positioning" width="100%"
                                            class="table align-middle table-row-bordered table-row-dashed gy-5"
                                            id="kt_table_widget_1">
                                            <thead>
                                                <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                    <th>No</th>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th>Nama</th>
                                                    <th>NRP</th>
                                                    <th>Jabatan</th>
                                                    <th>Gol. Darah</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($anggota as $index => $row): ?>
                                                <tr>
                                                    <td><?= $index+1; ?></td>
                                                    <td><?= $row['uniq_id']; ?></td>
                                                    <td><?= $row['username']; ?></td>
                                                    <td><?= $row['nama']; ?></td>
                                                    <td><?= $row['jabatan']; ?></td>
                                                    <td><?= $row['nrp']; ?></td>
                                                    <td><?= $row['gol_darah']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn py-1 btn-light-info btn-sm"
                                                            data-bs-toggle="modal" data-bs-target="#modalDelete"
                                                            data-id="<?= $row['id']; ?>">
                                                            <i class="bi bi-trash fs-6 fw-bold"></i>
                                                        </button>
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
                    <h3 class="modal-title">Konfirmasi Hapus Unit</h3>

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
                    <form action="/admin/anggota/post-delete" method="post">
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
                    <h2 class="fw-bold">Tambah Karyawan</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body px-5 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_add_anggota_form" class="form"
                        action="/admin/management_account/karyawan/post-add" method="post"
                        enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_anggota_scroll"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header"
                            data-kt-scroll-wrappers="#kt_modal_add_anggota_scroll" data-kt-scroll-offset="300px">

                            <!-- Nama -->
                            <div class="row">
                                <div class="col-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Username</label>
                                        <input type="text" name="username"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan username" required />
                                    </div>

                                </div>
                                <div class="col-6">
                                    <!-- NRP -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Password</label>
                                        <input type="text" name="password"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan password" required />
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Nama</label>
                                        <input type="text" name="nama"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Nama" required />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <!-- NRP -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">NRP</label>
                                        <input type="text" name="nrp"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan NRP" required />
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6">
                                    <!-- Jabatan -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Jabatan</label>
                                        <input type="text" name="jabatan"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Jabatan" required />
                                    </div>


                                </div>
                                <div class="col-6">
                                    <!-- Golongan Darah -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Golongan Darah</label>
                                        <input type="text" name="gol_darah"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Golongan Darah" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <!-- Pas Foto -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Pas Foto</label>
                                        <input type="file" name="pas_foto"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Unggah Pas Foto" required />
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
                    <h2 class="fw-bold">Edit Unit</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz-->
                <div class="modal-body px-5 my-7">
                    <!--begin::Form-->

                    <form id="kt_modal_add_anggota_form" class="form" action="/admin/anggota/post-edit" method="post">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_anggota_scroll"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header"
                            data-kt-scroll-wrappers="#kt_modal_add_anggota_scroll" data-kt-scroll-offset="300px">
                            <div class="fv-row mb-7">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="required fw-semibold fs-6 mb-2">Unit</label>
                                        <input type="text" name="unit"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Unit" required />
                                    </div>
                                </div>
                            </div>

                            <div class="fv-row mb-7">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="required fw-semibold fs-6 mb-2">PIC Unit</label>
                                        <input type="text" name="pic_unit"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan PIC Unit" required />
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

// modal modalDelete$(document).ready(function() {
// Ketika tombol hapus diklik

$('#kt_modal_edit_user').on('show.bs.modal', function(e) {
    var button = $(e.relatedTarget);
    var id = button.data('id');
    var unit = button.data('unit');
    var pic_unit = button.data('pic-unit');
    var $id = $(this).find('input[name="id"]');
    var $unit = $(this).find('input[name="unit"]');
    var $pic_unit = $(this).find('input[name="pic_unit"]');
    $id.val(id);
    $unit.val(unit);
    $pic_unit.val(pic_unit);
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
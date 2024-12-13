<?= $this->extend('layouts/soh_layout') ?>
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

.promo-card {
    max-width: 350px;
    margin: 50px auto;
    background-color: #2A2AC4;
    color: white;
    text-align: center;
    border-radius: 10px;
    padding: 20px;
}

.promo-logo {
    margin-bottom: 20px;
}

.promo-title {
    font-size: 1.5rem;
    font-weight: 600;
}

.promo-text {
    font-size: 1rem;
    margin: 20px 0;
}

.btn-buy {
    background-color: #ffffff;
    color: #2A2AC4;
    border-radius: 50px;
    font-weight: 600;
    padding: 10px 20px;
}

.btn-buy:hover {
    background-color: #f8f9fa;
    color: #2A2AC4;
}
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php 
            // Set zona waktu Asia/Makassar
            date_default_timezone_set('Asia/Makassar');
                
            // Mendapatkan tanggal hari ini dalam format yang sama
            $today = date('Y-m-d');
        ?>
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
                        <!-- <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                            <li class="nav-item fs-7">
                                <a class="nav-link  active bg-light-primary text-primary fw-bold" data-bs-toggle="tab"
                                    href="#kt_tab_pane_4">
                                    Pengajuan Simper
                                    <sup>
                                        <small>
                                            <span class="badge bg-primary">Tahap 1</span>
                                        </small>
                                    </sup>
                                </a>
                            </li>
                            <li class="nav-item fs-7">
                                <a class="nav-link " data-bs-toggle="tab" href="#kt_tab_pane_5">
                                    Post Test
                                    <sup>
                                        <small>
                                            <span class="badge  bg-light-primary text-primary">Tahap 2</span>
                                        </small>
                                    </sup>
                                </a>
                            </li>
                            <li class="nav-item fs-7">
                                <a class="nav-link " data-bs-toggle="tab" href="#kt_tab_pane_5">
                                    Test Drive
                                    <sup>
                                        <small>
                                            <span class="badge  bg-light-primary text-primary">Tahap 3</span>
                                        </small>
                                    </sup>
                                </a>
                            </li>
                            <li class="nav-item fs-7">
                                <a class="nav-link " data-bs-toggle="tab" href="#kt_tab_pane_6">
                                    Hasil Akhir
                                    <sup>
                                        <small>
                                            <span class="badge  bg-light-primary text-primary">Selesai</span>
                                        </small>
                                    </sup>
                                </a>
                            </li>
                        </ul> -->

                        <!--begin::Table Widget 1-->
                        <div class="card card-xxl-stretch">
                            <div class="card-body py-0">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane " id="kt_tab_pane_4" role="tabpanel">
                                        <div class="row mt-3">
                                            <div class="col-12 pb-xxl-5 mb-4">
                                                <table id="kt_datatable_dom_positioning" width="100%"
                                                    class="table align-middle table-row-bordered table-row-dashed gy-5"
                                                    id="kt_table_widget_1">
                                                    <thead>
                                                        <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                            <th>No</th>
                                                            <th>NRP</th>
                                                            <th>Nama</th>
                                                            <th>Masa Berlaku</th>
                                                            <th>ID Card</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
                                        <div class="row mt-3">
                                            <div class="row">
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-info btn-sm me-lg-3"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                                        <i class="bi bi-gear fw-bold"></i> Ubah Soal

                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-xxl-5 mb-4">
                                                <table id="kt_datatable_dom_positioning2" width="100%"
                                                    class="table align-middle table-row-bordered table-row-dashed gy-5"
                                                    id="kt_table_widget_1">
                                                    <thead>
                                                        <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                            <th>No</th>
                                                            <th>ID</th>
                                                            <th>Nama</th>
                                                            <th>NRP</th>
                                                            <th>Masa Berlaku</th>
                                                            <th>Gol. Darah</th>
                                                            <th>ID Card</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade fade show active" id="kt_tab_pane_6" role="tabpanel">
                                        <div class="row mt-3 mb-5 mb-lg-0 pb-5">
                                            <div class="row">
                                                <div class="d-flex justify-content-end">
                                                    <!-- <button type="button" class="btn btn-info mt-3 btn-sm me-lg-3"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                                        <span class="menu-icon">
                                                            <i class="bi bi-plus"></i>
                                                        </span>Tambah

                                                    </button> -->
                                                </div>
                                            </div>
                                            <div class="col-12 pb-xxl-5 mb-4 mt-2">
                                                <table id="kt_datatable_dom_positioning3" width="100%"
                                                    class="table align-middle table-row-bordered table-row-dashed gy-5"
                                                    id="kt_table_widget_1">
                                                    <thead>
                                                        <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                            <th>No</th>
                                                            <th>NRP</th>
                                                            <th>Nama</th>
                                                            <th>Jabatan</th>
                                                            <th>Masa Berlaku</th>
                                                            <th>Corpu</th>
                                                            <th>ESR</th>
                                                            <th><span class="badge badge-light-primary"
                                                                    style="font-size: 1em;">SOH
                                                                </span> </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php foreach($simpers as $index => $row): ?>
                                                        <tr>
                                                            <td><?= $index+1; ?></td>
                                                            <td><?= $row['nrp']; ?></td>
                                                            <td><?= $row['nama']; ?></td>
                                                            <td><?= $row['jabatan']; ?></td>
                                                            <td><?= $row['masa_berlaku']; ?></td>
                                                            <td>
                                                                <?php if($row['approval_corpo'] == "accepted"): ?>
                                                                <span class="badge badge-light-success">Approved</span>
                                                                <?php elseif($row['approval_corpo'] == "rejected"): ?>

                                                                <span class="badge badge-light-danger">Rejected</span>
                                                                <?php elseif($row['approval_corpo'] == "not_applicable"): ?>

                                                                <span class="badge badge-light-dark">-</span>
                                                                <?php else: ?>
                                                                <span
                                                                    class="badge badge-light-warning">Menunggu..</span>

                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php if($row['approval_esr'] == "accepted"): ?>
                                                                <span class="badge badge-light-success">Approved</span>
                                                                <?php elseif($row['approval_esr'] == "rejected"): ?>

                                                                <span class="badge badge-light-danger">Rejected</span>
                                                                <?php else: ?>
                                                                <span
                                                                    class="badge badge-light-warning">Menunggu..</span>

                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php if($row['approval_soh'] == "accepted"): ?>
                                                                <span class="badge badge-light-success">Approved</span>
                                                                <?php elseif($row['approval_soh'] == "rejected"): ?>

                                                                <span class="badge badge-light-danger">Rejected</span>
                                                                <?php else: ?>
                                                                <span
                                                                    class="badge badge-light-warning">Menunggu..</span>

                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?=base_url()?>/soh/simper/detail-pengajuan/<?=$row['id']?>"
                                                                    type="button"
                                                                    class="btn py-1 btn-light-info btn-sm me-2">
                                                                    <i class="bi bi-person-badge-fill"></i>
                                                                </a>
                                                                <!-- <button type="button"
                                                                    class="btn py-1 btn-light-info btn-sm me-2" data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_edit_user">
                                                                    <i class="bi bi-pen fs-6 fw-bold"></i>
                                                                </button> -->
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <h3 class="modal-title">Konfirmasi Hapus Simper</h3>

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
                    <form action="<?=base_url()?>/soh/simper/post-delete" method="post">
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
                    <h2 class="fw-bold">Buat Simper Instan</h2>
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
                        action="<?=base_url()?>/soh/simper/post-instan-create" method="post"
                        enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_anggota_scroll"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header"
                            data-kt-scroll-wrappers="#kt_modal_add_anggota_scroll" data-kt-scroll-offset="300px">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Nama</label>
                                        <input type="text" name="nama"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Nama" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <!-- Jabatan -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Jabatan</label>
                                        <input type="text" name="jabatan"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Jabatan" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Golongan Darah -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Company</label>
                                        <input type="text" name="company"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Company" required />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Golongan Darah -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Golongan Darah</label>
                                        <input type="text" name="gol_darah"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Golongan Darah" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Golongan Darah -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Masa Berlaku</label>
                                        <input type="date" id="masa_berlaku" name="masa_berlaku"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Masa Berlaku" required />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Nomor Telepon</label>
                                        <input type="text" name="no_telp"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Nomor Telepon" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Pas Foto -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Pas Foto</label>
                                        <input type="file" name="pas_foto"
                                            class="form-control form-control mb-3 mb-lg-0" placeholder="Unggah Pas Foto"
                                            required />
                                        <small class="text-muted" style="font-size: 0.8em !important;">Disarankan ukuran
                                            foto: <strong>7 cm</strong> (Tinggi)
                                            x
                                            <strong>6 cm</strong> (Lebar)</small>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <hr>
                                <h4>Unit Recommendations</h4>
                                <div id="unit_recommendation_container">
                                    <div class="border border-2 mt-3 rounded-3 unit-recommendation" data-index="0">
                                        <label class="fw-semibold fs-6 mb-2 mt-2 d-flex justify-content-end mx-3">
                                            <span class="badge badge-info">No 1</span>
                                        </label>
                                        <div class="row mx-3">
                                            <div class="col-md-6 mb-3">
                                                <select class="form-select form-select" data-control="select2"
                                                    data-placeholder="Pilih Jenis Simper" name="jenis_simper[]"
                                                    data-hide-search="true" required>
                                                    <option></option>
                                                    <option value="FO">FO - Full Operation</option>
                                                    <option value="RT">RT - Restricted</option>
                                                    <option value="LO">LO - Learning Only</option>
                                                    <option value="IR">IR - Instruktur</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <select class="form-select form-select type-kendaraan"
                                                    data-control="select2" name="type_kendaraan[]"
                                                    data-placeholder="Pilih Type Kendaraan" data-hide-search="true"
                                                    required>
                                                    <option value="alat berat">Alat Berat</option>
                                                    <option value="mobil">Mobil</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="unit_recomendations_con">
                                                    <select class="form-select form-select unit-recomendations"
                                                        data-control="select2" data-placeholder="Pilih Unit"
                                                        name="alat_berat[]" required>
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
                                                        <option value="TADANO">TADANO</option>
                                                        <option value="GENERATOR SET">GENERATOR SET</option>
                                                    </select>
                                                </div>
                                                <div class="mobil_selection d-none">
                                                    <select class="form-select form-select unit-recomendations-mobil"
                                                        data-control="select2" data-placeholder="Pilih Unit"
                                                        name="mobil[]" required>
                                                        <option value="LV" selected>LV</option>
                                                        <option value="SCANIA">SCANIA</option>
                                                        <option value="UD TRUCK">UD TRUCK</option>
                                                        <option value="MINIBUS">MINIBUS</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="fv-row mb-7">
                                                    <input type="text" name="type_unit[]"
                                                        class="form-control form-control mb-lg-0"
                                                        placeholder="Masukkan type unit" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mx-5 px-2 d-flex justify-content-end">
                                        <button type="button" id="add_unit"
                                            class="btn btn-sm btn-light-info border border-1 border-info mt-3 "
                                            style="font-size: 0.8em"><i class="bi bi-plus-circle fw-bold"></i></button>
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

                    <form id="kt_modal_add_anggota_form" class="form" action="<?=base_url()?>/admin/anggota/post-edit"
                        method="post">
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
$(document).ready(function() {
    // Inisialisasi Select2
    $('.form-select').select2();

    $('#unit_recommendation_container').on('change', '.type-kendaraan', function() {
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
    $('#add_unit').click(function() {
        var unitCount = $('#unit_recommendation_container .unit-recommendation')
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
                            <option value="FO">FO - Full Operation</option>
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
                                <option value="TADANO">TADANO</option>
                                <option value="GENERATOR SET">GENERATOR SET</option>
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
        $('#unit_recommendation_container').append(newUnit); // Tambahkan unit baru
        $('.form-select').select2(); // Reinitialize Select2 untuk elemen baru

        // Set default value for new selects
        $('#unit_recommendation_container .unit-recomendations').last().val('FD30').trigger('change');
        $('#unit_recommendation_container .unit-recomendations-mobil').last().val('LV').trigger(
            'change');

        if ($('#unit_recommendation_container .unit-recommendation').length >= 11) {
            $('#add_unit').hide();
        }
    });
});
</script>

<script>
const now = new Date();
const yearFromNow = new Date(now.setFullYear(now.getFullYear() + 1));

// Format tanggal dalam bentuk YYYY-MM-DD
const formattedDate = yearFromNow.toISOString().split('T')[0];

// Mengatur nilai default
document.getElementById('masa_berlaku').value = formattedDate;
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Ambil semua elemen nav-link
    const navLinks = document.querySelectorAll('.nav-link');

    // Fungsi untuk mengubah tab menjadi aktif
    function activateNavLink(selectedLink) {
        // Loop semua nav-link untuk menghilangkan kelas 'active' dan mereset badge
        navLinks.forEach(link => {
            link.classList.remove('active', 'fw-bold', 'text-primary');
            const badge = link.querySelector('.badge');
            badge.classList.remove('bg-primary', 'text-light');
            badge.classList.add('bg-light-primary', 'text-primary');
        });

        // Tambahkan kelas 'active' dan bold pada tab yang dipilih
        selectedLink.classList.add('active', 'fw-bold', 'text-primary');

        // Ubah warna badge pada tab yang aktif
        const activeBadge = selectedLink.querySelector('.badge');
        activeBadge.classList.remove('bg-light-primary', 'text-primary');
        activeBadge.classList.add('bg-primary', 'text-light');
    }

    // Set default 'Pengajuan Simper' sebagai active
    const defaultActiveLink = document.querySelector('.nav-link.active');
    activateNavLink(defaultActiveLink);

    // Event listener untuk hover dan klik
    navLinks.forEach(link => {
        // Tambah event hover (optional jika ingin menambahkan efek hover)
        link.addEventListener('mouseover', function() {
            this.classList.add('fw-bold');
        });

        link.addEventListener('mouseout', function() {
            if (!this.classList.contains('active')) {
                this.classList.remove('fw-bold');
            }
        });

        // Tambah event klik untuk mengaktifkan link
        link.addEventListener('click', function() {
            activateNavLink(this);
        });
    });
});
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
$("#kt_datatable_dom_positioning2").DataTable({
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
});
$("#kt_datatable_dom_positioning3").DataTable({
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
<?= $this->endSection() ?>
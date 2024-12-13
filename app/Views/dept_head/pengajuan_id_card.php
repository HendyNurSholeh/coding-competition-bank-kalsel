<?= $this->extend('layouts/dept_head_layout') ?>
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
                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">

                            <li class="nav-item fs-7">
                                <a class="nav-link active    bg-light-primary text-primary fw-bold" data-bs-toggle="tab"
                                    href="#kt_tab_pane_6">
                                    Pengajuan Mine P.
                                    <sup>
                                        <small>
                                            <span class="badge bg-primary">Tahap
                                                1</span>
                                        </small>
                                    </sup>
                                </a>
                            </li>
                            <!-- <li class="nav-item fs-7">
                                <a class="nav-link " data-bs-toggle="tab" href="#kt_tab_pane_5">
                                    Post Test
                                    <sup>
                                        <small>
                                            <span class="badge  bg-light-primary text-primary">Tahap 2</span>
                                        </small>
                                    </sup>
                                </a>
                            </li> -->
                            <li class="nav-item fs-7">
                                <a class="nav-link " data-bs-toggle="tab" href="#kt_tab_pane_4">
                                    Mine Permit
                                    <sup>
                                        <small>
                                            <span class="badge  bg-light-primary text-primary">Selesai</span>
                                        </small>
                                    </sup>
                                </a>
                            </li>

                        </ul>

                        <!--begin::Table Widget 1-->
                        <div class="card card-xxl-stretch">
                            <div class="card-body py-0">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade  show active" id="kt_tab_pane_6" role="tabpanel">
                                        <div class="row mt-3 mb-5 mb-lg-0 pb-5">

                                            <div class="col-12 pb-xxl-5 mb-4 mt-4">
                                                <div class="row">
                                                    <div class="d-flex justify-content-end">
                                                        <button type="button" class="btn btn-info mt-3 btn-sm me-lg-3"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_add_pengajuan">
                                                            <span class="menu-icon">
                                                                <i class="bi bi-plus"></i>
                                                            </span>Tambah

                                                        </button>
                                                    </div>
                                                </div>
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
                                                            <th>ESR</th>
                                                            <th>SOH</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php foreach($mine_permits_waiting as $index => $row): ?>
                                                        <tr>
                                                            <td><?= $index+1; ?></td>
                                                            <td><?= $row['nrp']; ?></td>
                                                            <td><?= $row['nama']; ?>
                                                            </td>
                                                            <td><?= $row['jabatan']; ?>
                                                            </td>
                                                            <td><?= $row['masa_berlaku']; ?>
                                                            </td>

                                                            <td>
                                                                <?php if($row['approval_esr'] == "accepted"): ?>
                                                                <span class="badge badge-light-success">Approved</span>
                                                                <?php elseif($row['approval_esr'] == "rejected"): ?>

                                                                <span class="badge badge-light-danger">Rejected</span>
                                                                <?php else: ?>
                                                                <span class="badge badge-light-warning">Menunggu</span>

                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <?php if($row['approval_soh'] == "accepted"): ?>
                                                                <span class="badge badge-light-success">Approved</span>
                                                                <?php elseif($row['approval_soh'] == "rejected"): ?>

                                                                <span class="badge badge-light-danger">Rejected</span>
                                                                <?php else: ?>
                                                                <span class="badge badge-light-warning">Menunggu</span>

                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?=base_url()?>/dept_head/id_card/detail/<?=$row['id']?>"
                                                                    type="button"
                                                                    class="btn py-1 btn-light-info btn-sm me-2">
                                                                    <i class="bi bi-person-badge-fill"></i>
                                                                </a>
                                                                <!-- <button type="button"
                                                                    class="btn py-1 btn-light-info btn-sm me-2" data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_edit_user">
                                                                    <i class="bi bi-pen fs-6 fw-bold"></i>
                                                                </button> -->
                                                                <button type="button"
                                                                    class="btn py-1 btn-light-info btn-sm me-2"
                                                                    data-bs-toggle="modal" data-bs-target="#modalDelete"
                                                                    data-id="<?= $row['id'] ?>">
                                                                    <i class="bi bi-trash fs-6 fw-bold"></i>
                                                                </button>
                                                                <?php if($row['approval_esr'] == "accepted" && $row['approval_soh'] == "accepted"): ?>
                                                                <button type="button"
                                                                    class="btn py-1 btn-success btn-sm me-2"
                                                                    data-bs-toggle="modal" data-id="<?= $row['id'] ?>"
                                                                    data-bs-target="#modalDone">
                                                                    <i class="bi bi-check-circle fs-6 fw-bold"></i>
                                                                </button>
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
                                        <div class="row mt-3">
                                            <div class="row">
                                                <div class="d-flex justify-content-end">
                                                    <button type="button" class="btn btn-info btn-sm me-lg-3"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                                        <i class="bi bi-gear fw-bold"></i>
                                                        Ubah Soal

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
                                    <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel">
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
                                            <div class="col-12 pb-xxl-5 mb-5 mt-3">
                                                <table id="kt_datatable_dom_positioning" width="100%"
                                                    class="table align-middle table-row-bordered table-row-dashed gy-5"
                                                    id="kt_table_widget_1">
                                                    <thead>
                                                        <tr class="fw-bold fs-6 text-gray-800 px-7">
                                                            <th>No</th>
                                                            <th>NRP</th>
                                                            <th>Nama</th>
                                                            <th>Jabatan</th>
                                                            <th>Masa Berlaku</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php foreach($mine_permits_accept as $index => $row): ?>
                                                        <tr>
                                                            <td><?= $index+1; ?></td>
                                                            <td><?= $row['nrp']; ?></td>
                                                            <td><?= $row['nama']; ?>
                                                            </td>
                                                            <td><?= $row['jabatan']; ?>
                                                            </td>
                                                            <td><?= $row['masa_berlaku']; ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($row['masa_berlaku'] < $today) :?>
                                                                <span class="badge badge-danger">Expired</span>
                                                                <?php else: ?>
                                                                <span class="badge badge-success">Active</span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?=base_url()?>/dept_head/id_card/detail/<?=$row['id']?>"
                                                                    type="button"
                                                                    class="btn py-1 btn-light-info btn-sm me-2">
                                                                    <i class="bi bi-person-badge-fill"></i>
                                                                </a>
                                                                <!-- <button type="button"
                                                                    class="btn py-1 btn-light-info btn-sm me-2" data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_edit_user">
                                                                    <i class="bi bi-pen fs-6 fw-bold"></i>
                                                                </button> -->
                                                                <button type="button"
                                                                    class="btn py-1 btn-light-info btn-sm me-2"
                                                                    data-bs-toggle="modal" data-bs-target="#modalDelete"
                                                                    data-id="<?= $row['id'] ?>">
                                                                    <i class="bi bi-trash fs-6 fw-bold"></i>
                                                                </button>
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
                    <form action="<?=base_url()?>/dept_head/id_card/post-delete" method="post">
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal delete -->
    <div class="modal fade" tabindex="-1" id="modalDone">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Buat Kartu</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <!-- <p>Lanjutkan <span>Klik 1x</span> untuk membuat <span class="fw-bold">Kartu</span> Mine Permit.</p> -->
                    <p>Lanjutkan untuk membuat <span class="fw-bold">ID Card /
                            Kartu</span> Mine Permit.</p>
                </div>

                <div class="modal-footer">
                    <form action="<?=base_url()?>/dept_head/id_card/post-continue-done" method="post">
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Buat Kartu</button>
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
                <div class="modal-header " id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold ">Buat Mine Permit Instan</h2>
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
                        action="<?=base_url()?>/dept_head/id_card/post-instan-create" method="post"
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
                                        <label class="required fw-semibold fs-6 mb-2">Golongan
                                            Darah</label>
                                        <input type="text" name="gol_darah"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Golongan Darah" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Golongan Darah -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Masa
                                            Berlaku</label>
                                        <input type="date" id="masa_berlaku" name="masa_berlaku"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Masa Berlaku" required />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Nomor
                                            Telepon</label>
                                        <input type="text" name="no_telp"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Nomor Telepon" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Pas Foto -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Pas
                                            Foto</label>
                                        <input type="file" name="pas_foto"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Unggah Pas Foto" required />

                                        <small class="text-muted" style="font-size: 0.8em !important;">Disarankan
                                            ukuran
                                            foto: <strong>7 cm</strong> (Tinggi)
                                            x
                                            <strong>6 cm</strong> (Lebar)</small>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-12">
                                    <label for="unit_recomendations "
                                        class="form-label required fw-semibold fs-6 mb-2">Unit
                                        Recomendation</label>
                                    <select class="form-select form-select-solid" data-control="select2"
                                        data-placeholder="Pilih Unit/Tipe Kendaraan" data-allow-clear="true"
                                        data-dropdown-parent="#kt_modal_add_anggota_form" data-close-on-select="false"
                                        name="alat_berat[]" multiple="multiple" required>

                                        <option value="Excavator*pembatasvalue*Full Operation">Excavator (Full
                                            Operation)</option>
                                        <option value="Excavator*pembatasvalue*Restricted">Excavator (Restricted)
                                        </option>
                                        <option value="Excavator*pembatasvalue*Learning Only">Excavator (Learning Only)
                                        </option>
                                        <option value="Excavator*pembatasvalue*Instruktur">Excavator (Instruktur)
                                        </option>

                                        <option value="Bulldozer*pembatasvalue*Full Operation">Bulldozer (Full
                                            Operation)</option>
                                        <option value="Bulldozer*pembatasvalue*Restricted">Bulldozer (Restricted)
                                        </option>
                                        <option value="Bulldozer*pembatasvalue*Learning Only">Bulldozer (Learning Only)
                                        </option>
                                        <option value="Bulldozer*pembatasvalue*Instruktur">Bulldozer (Instruktur)
                                        </option>

                                        <option value="Loader*pembatasvalue*Full Operation">Loader (Full Operation)
                                        </option>
                                        <option value="Loader*pembatasvalue*Restricted">Loader (Restricted)</option>
                                        <option value="Loader*pembatasvalue*Learning Only">Loader (Learning Only)
                                        </option>
                                        <option value="Loader*pembatasvalue*Instruktur">Loader (Instruktur)</option>

                                        <option value="Dump_truck*pembatasvalue*Full Operation">Dump Truck (Full
                                            Operation)</option>
                                        <option value="Dump_truck*pembatasvalue*Restricted">Dump Truck (Restricted)
                                        </option>
                                        <option value="Dump_truck*pembatasvalue*Learning Only">Dump Truck (Learning
                                            Only)</option>
                                        <option value="Dump_truck*pembatasvalue*Instruktur">Dump Truck (Instruktur)
                                        </option>

                                        <option value="Grader*pembatasvalue*Full Operation">Grader (Full Operation)
                                        </option>
                                        <option value="Grader*pembatasvalue*Restricted">Grader (Restricted)</option>
                                        <option value="Grader*pembatasvalue*Learning Only">Grader (Learning Only)
                                        </option>
                                        <option value="Grader*pembatasvalue*Instruktur">Grader (Instruktur)</option>

                                        <option value="Compactor*pembatasvalue*Full Operation">Compactor (Full
                                            Operation)</option>
                                        <option value="Compactor*pembatasvalue*Restricted">Compactor (Restricted)
                                        </option>
                                        <option value="Compactor*pembatasvalue*Learning Only">Compactor (Learning Only)
                                        </option>
                                        <option value="Compactor*pembatasvalue*Instruktur">Compactor (Instruktur)
                                        </option>

                                        <option value="Backhoe*pembatasvalue*Full Operation">Backhoe (Full Operation)
                                        </option>
                                        <option value="Backhoe*pembatasvalue*Restricted">Backhoe (Restricted)</option>
                                        <option value="Backhoe*pembatasvalue*Learning Only">Backhoe (Learning Only)
                                        </option>
                                        <option value="Backhoe*pembatasvalue*Instruktur">Backhoe (Instruktur)</option>

                                        <option value="Articulated_dump_truck*pembatasvalue*Full Operation">Articulated
                                            Dump Truck (Full Operation)</option>
                                        <option value="Articulated_dump_truck*pembatasvalue*Restricted">Articulated Dump
                                            Truck (Restricted)</option>
                                        <option value="Articulated_dump_truck*pembatasvalue*Learning Only">Articulated
                                            Dump Truck (Learning Only)</option>
                                        <option value="Articulated_dump_truck*pembatasvalue*Instruktur">Articulated Dump
                                            Truck (Instruktur)</option>

                                        <option value="Scraper*pembatasvalue*Full Operation">Scraper (Full Operation)
                                        </option>
                                        <option value="Scraper*pembatasvalue*Restricted">Scraper (Restricted)</option>
                                        <option value="Scraper*pembatasvalue*Learning Only">Scraper (Learning Only)
                                        </option>
                                        <option value="Scraper*pembatasvalue*Instruktur">Scraper (Instruktur)</option>

                                        <option value="Paver*pembatasvalue*Full Operation">Paver (Full Operation)
                                        </option>
                                        <option value="Paver*pembatasvalue*Restricted">Paver (Restricted)</option>
                                        <option value="Paver*pembatasvalue*Learning Only">Paver (Learning Only)</option>
                                        <option value="Paver*pembatasvalue*Instruktur">Paver (Instruktur)</option>

                                        <option value="Skid_steer_loader*pembatasvalue*Full Operation">Skid Steer Loader
                                            (Full Operation)</option>
                                        <option value="Skid_steer_loader*pembatasvalue*Restricted">Skid Steer Loader
                                            (Restricted)</option>
                                        <option value="Skid_steer_loader*pembatasvalue*Learning Only">Skid Steer Loader
                                            (Learning Only)</option>
                                        <option value="Skid_steer_loader*pembatasvalue*Instruktur">Skid Steer Loader
                                            (Instruktur)</option>

                                        <option value="Crane*pembatasvalue*Full Operation">Cranes (Full Operation)
                                        </option>
                                        <option value="Crane*pembatasvalue*Restricted">Cranes (Restricted)</option>
                                        <option value="Crane*pembatasvalue*Learning Only">Cranes (Learning Only)
                                        </option>
                                        <option value="Crane*pembatasvalue*Instruktur">Cranes (Instruktur)</option>

                                        <option value="Drill_rig*pembatasvalue*Full Operation">Drill Rig (Full
                                            Operation)</option>
                                        <option value="Drill_rig*pembatasvalue*Restricted">Drill Rig (Restricted)
                                        </option>
                                        <option value="Drill_rig*pembatasvalue*Learning Only">Drill Rig (Learning Only)
                                        </option>
                                        <option value="Drill_rig*pembatasvalue*Instruktur">Drill Rig (Instruktur)
                                        </option>

                                    </select>

                                </div>
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
                                <span class="indicator-progress" style="display:none;"><span
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

    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_pengajuan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-lg">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header " id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold ">Buat Pengajuan Mine Permit</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body px-5 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_add_anggota_form" class="form form-pengajuan"
                        action="<?=base_url()?>/dept_head/id_card/post-ajukan-minepermit" method="post"
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
                                        <label class="required fw-semibold fs-6 mb-2">Golongan
                                            Darah</label>
                                        <input type="text" name="gol_darah"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Golongan Darah" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Golongan Darah -->
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Masa
                                            Berlaku</label>
                                        <input type="date" id="masa_berlaku1" name="masa_berlaku"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Masa Berlaku" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">


                                <div class="col-md-6">
                                    <!-- Pas Foto -->
                                    <div class="fv-row mb-7 text-start">
                                        <label class="required fw-semibold fs-6 mb-2">Pas Foto</label>
                                        <input type="file" id="upload" name="pas_foto"
                                            class="form-control form-control-solid border border-1 mb-3 mb-lg-0"
                                            placeholder="Unggah Pas Foto" required />
                                        <small class="text-muted text-crop"
                                            style="font-size: 0.8em !important;">Sesuaikan Posisi Foto</small>

                                        <!-- Input tersembunyi untuk menyimpan hasil crop -->
                                        <input type="hidden" id="cropped-image" name="cropped_pas_foto" value="">

                                        <div id="cropie-demo" style="width:200px; display: none;"></div>
                                        <!-- Tampilkan setelah gambar dipilih -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="fv-row mb-7">
                                        <label class="required fw-semibold fs-6 mb-2">Nomor
                                            Telepon</label>
                                        <input type="text" name="no_telp"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Masukkan Nomor Telepon" required />
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
                                        <label class="required fw-semibold fs-6 mb-2">PIC
                                            Unit</label>
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
document.getElementById('masa_berlaku').value = formattedDate;
document.getElementById('masa_berlaku1').value = formattedDate;
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
    // Ketika tombol hapus diklik
});
</script>




<script>
$('#modalDelete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget); // Tombol yang memicu modal
    var id = button.data('id'); // Ambil ID dari atribut data-id
    var modal = $(this);
    modal.find('#id').val(id); // Isi ID ke input hidden dalam modal
});
$('#modalDone').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget); // Tombol yang memicu modal
    var id = button.data('id'); // Ambil ID dari atribut data-id
    var modal = $(this);
    console.log(id);
    modal.find('#id').val(id); // Isi ID ke input hidden dalam modal
});

// modal modalDelete$(document).ready(function() {
// Ketika tombol hapus diklik
</script>
<!--end::Custom Javascript-->
<!--end::Custom Javascript-->
<?= $this->endSection() ?>
<?= $this->extend('layouts/corpo_layout') ?>
<?= $this->section('css') ?>
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<?php 
            // Set zona waktu Asia/Makassar
            date_default_timezone_set('Asia/Makassar');
                
            // Mendapatkan tanggal hari ini dalam format yang sama
            $today = date('Y-m-d');
        ?>

<!--begin::Main-->
<!--begin::Root-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start   container-xxl ">

    <!--begin::Panduan Pengajuan-->
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">


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
                            <small class="text-gray-400">Masa Berlaku:
                                <?= $simper['masaberlakuformatindo']; ?></small>

                            <!--end::Menu 3-->
                        </div>
                        <div class="card-toolbar">
                            <?php if($simper['approval_corpo'] == "approved"): ?>
                            <?php if ($simper['masa_berlaku'] < $today) :?>
                            <span class="badge badge-danger">Expired</span>
                            <?php else: ?>
                            <span class="badge badge-success">Active</span>
                            <?php endif; ?>
                            <?php endif; ?>
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
                                    src="<?= base_url(); ?>/uploads/pas_foto/<?= $simper['pas_foto_image']; ?>" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-2 text-gray-800 text-hover-primary fw-bold mb-1">
                                <?= ucwords(strtolower(trim($simper['nama']))); ?>
                            </a>
                            <!--end::Name-->

                            <!--begin::Position-->
                            <div class="fs-6 fw-semibold text-gray-400 mb-2">
                                <?= ucwords(strtolower(trim($simper['jabatan']))); ?>
                            </div>
                            <!--end::Position-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-center">
                                <a href="#" class="btn btn-sm btn-light-primary py-2 px-4 fw-bold me-2"
                                    data-kt-drawer-show="true"
                                    data-kt-drawer-target="#kt_drawer_chat"><?= $simper['company']; ?></a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Summary-->

                        <!--begin::Menu-->
                        <ul
                            class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bold fs-5 mb-10">
                            <li class="menu-item mb-1">
                                <a class="menu-link px-6 py-4 active mt-3 mt-lg-0" href="#">
                                    <span class="menu-bullet"><span class="bullet"></span></span>
                                    <span class="menu-title">
                                        Overview </span>
                                </a>
                            </li>
                            <li class="menu-item mb-1">
                                <?php if($simper['approval_status'] == "approved"): ?>
                                <a class="menu-link px-6 py-4 "
                                    href="<?=base_url()?>/corpo/simper/detail/simper/<?=$simper['id']?>">
                                    <span class="menu-bullet"><span class="bullet"></span></span>
                                    <span class="menu-title">
                                        ID Card </span>
                                </a>
                                <?php endif; ?>
                            </li>
                        </ul>
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

                    <div class="card-header cursor-pointer">

                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Profile Details</h3>
                        </div>
                    </div>
                    <!--begin::Card body-->
                    <div class="card-body p-9 <?= $simper['approval_corpo'] == "waiting" ? "pt-0" : ""; ?>">
                        <!--begin::Row-->
                        <?php if($simper['approval_corpo'] == "waiting"): ?>
                        <div class="row mb-7 pt-0 mt-0 px-3">
                            <div
                                class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                                <!--begin::Icon-->
                                <i class="far fa-lightbulb  icon-large text-warning  me-5" style="font-size: 50px"></i>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1 ">
                                    <!--begin::Content-->
                                    <div class=" fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Approve Simper?</h4>
                                        <div class="d-flex gap-3">
                                            <button class="btn btn-sm btn-light-success  border border-success"
                                                data-bs-toggle="modal" data-bs-target="#modalApprove">
                                                Setujui
                                            </button>
                                            <button class="btn btn-sm btn-light-danger  border border-danger"
                                                data-bs-toggle="modal" data-bs-target="#modalRejected">
                                                Tolak
                                            </button>

                                        </div>
                                    </div>
                                    <!--end::Content-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Nama Lengkap</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span
                                    class="fw-bold fs-6 text-dark"><?= ucwords(strtolower(trim($simper['nama']))); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">NRP</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-dark"><?= ucwords($simper['nrp']); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Jabatan</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span
                                    class="fw-bold fs-6 text-dark"><?= ucwords(strtolower(trim($simper['jabatan']))); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Mekanik
                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Company</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-semibold fs-6"><?= ucwords($simper['company']); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Masa Berlaku</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-semibold fs-6"><?= ucwords($simper['masaberlakuformat']); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted d-flex align-items-center">
                                Nomor Telepon

                                <span class="d-flex align-items-center ms-1" data-bs-toggle="tooltip"
                                    title="Phone number must be active">
                                    <i class="ki-duotone ki-information fs-3"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i> </span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 d-flex align-items-center">
                                <span
                                    class="fw-bold fs-6 me-2"><?= ucwords($simper['no_telp'] ? $simper['no_telp'] : '-'); ?></span>


                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Golongan Darah</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-semibold fs-6"><?= strtoupper($simper['gol_darah']); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--begin::Notice-->
                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-5 px-1 pe-3 p-md-6 px-md-3 ">

                            <i class="ki-duotone ki-information-5 fs-2tx text-primary me-4"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span></i>

                            <div class="d-flex flex-stack flex-grow-1 ">
                                <div class=" fw-semibold">
                                    <div class="m-0 ">
                                        <div style="font-weight: bold !important;"
                                            class="d-flex align-items-center collapsible py-0 toggle  mb-2"
                                            data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                <i class="bi bi-clipboard-minus toggle-on text-primary fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <i class="bi bi-clipboard-plus toggle-off fs-1"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i>
                                            </div>

                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                Unit Recomendations
                                            </h4>
                                        </div>
                                        <div id="kt_job_4_1" class="collapse show fs-6 ms-1">
                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                <?php foreach($unitRecomendations as $unitRecomendation): ?>
                                                <button type="button" style="font-size: 0.8em !important;"
                                                    class="btn mt-1 btn-secondary" data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse" data-bs-placement="top"
                                                    title="<?=$unitRecomendation['jenis_simper']?>">
                                                    <?= $unitRecomendation['jenis_alat'] . " " . $unitRecomendation['type_unit']; ?>
                                                </button>
                                                <?php endforeach;?>

                                            </div>
                                        </div>

                                        <div class="separator separator-dashed"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--begin::Notice-->
                        <!-- <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-5 px-1 pe-3 p-md-6 px-md-3 ">

                            <i class="ki-duotone ki-information-5 fs-2tx text-primary me-4"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span></i>

                            <div class="d-flex flex-stack flex-grow-1 ">
                                <div class=" fw-semibold">
                                    <div class="m-0 ">
                                        <div style="font-weight: bold !important;"
                                            class="d-flex align-items-center collapsible py-0 toggle  mb-2"
                                            data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
                                            <div
                                                class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                <i
                                                    class="bi bi-clipboard-minus toggle-on text-primary fs-1"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>
                                                <i class="bi bi-clipboard-plus toggle-off fs-1"><span
                                                        class="path1"></span><span
                                                        class="path2"></span><span
                                                        class="path3"></span></i>
                                            </div>

                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                Unit Recomendations
                                            </h4>
                                        </div>
                                        <div id="kt_job_4_1" class="collapse show fs-6 ms-1">
                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                <button type="button"
                                                    style="font-size: 0.8em !important;"
                                                    class="btn mt-1 btn-secondary"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse"
                                                    data-bs-placement="top" title="Full Operation">
                                                    DH
                                                </button>

                                                <button style="font-size: 0.8em !important;"
                                                    type="button" class="btn mt-1 btn-secondary"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse"
                                                    data-bs-placement="top" title="Restricted">
                                                    Exavator
                                                </button>

                                                <button style="font-size: 0.8em !important;"
                                                    type="button" class="btn mt-1 btn-secondary"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse"
                                                    data-bs-placement="top" title="Learning Only">
                                                    Mobil Jimper
                                                </button>

                                                <button style="font-size: 0.8em !important;"
                                                    type="button" class="btn mt-1 btn-secondary"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-custom-class="tooltip-inverse"
                                                    data-bs-placement="top" title="Instruktur">
                                                    Forklift
                                                </button>
                                            </div>
                                        </div>

                                        <div class="separator separator-dashed"></div>
                                    </div>
                                </div>

                            </div>
                        </div> -->


                        <!--end::Notice-->
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



<div class="modal fade" tabindex="-1" id="modalApprove">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Konfirmasi Approval Simper</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p>Apakah anda yakin ingin menyetujui Simper ini?</p>
            </div>

            <div class="modal-footer">
                <form action="<?=base_url()?>/corpo/simper/post-ajukan-approve" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $simper['id']; ?>">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Setujui</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="modalRejected">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Konfirmasi Approval Simper</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p>Apakah anda yakin ingin menolak approval Simper ini?</p>
            </div>

            <div class="modal-footer">
                <form action="<?=base_url()?>/corpo/simper/post-ajukan-reject" method="post">
                    <input type="hidden" name="id" id="id" value="<?= $simper['id']; ?>">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--end::Container-->
<?= $this->endSection() ?>
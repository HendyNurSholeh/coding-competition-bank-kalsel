<?= $this->extend('layouts/dept_head_layout') ?>
<?= $this->section('content') ?>
<?php 
            // Set zona waktu Asia/Makassar
            date_default_timezone_set('Asia/Makassar');
                
            // Mendapatkan tanggal hari ini dalam format yang sama
            $today = date('Y-m-d');
        ?>
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start  container-xxl ">

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
                            <small class="text-gray-400">Masa Berlaku:
                                <?= $simper['masaberlakuformatindo']; ?></small>

                            <!--end::Menu 3-->
                        </div>
                        <div class="card-toolbar">
                            <?php if ($simper['masa_berlaku'] < $today) :?>
                            <span class="badge badge-danger">Expired</span>
                            <?php else: ?>
                            <span class="badge badge-success">Active</span>
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
                                    src="<?=base_url()?>/uploads/pas_foto/<?= $simper['pas_foto_image']; ?>" />
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
                                <a class="menu-link px-6 py-4 mt-3 mt-lg-0"
                                    href="<?=base_url()?>/dept_head/simper/detail/<?=$simper['id']?>">
                                    <span class="menu-bullet"><span class="bullet"></span></span>
                                    <span class="menu-title">
                                        Overview </span>
                                </a>
                            </li>
                            <li class="menu-item mb-1 active">
                                <a class="menu-link px-6 py-4 "
                                    href="<?=base_url()?>/dept_head/simper/detail/simper/<?=$simper['id']?>">
                                    <span class="menu-bullet"><span class="bullet bg-primary"></span></span>
                                    <span class="menu-title">
                                        ID Card </span>
                                </a>
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
                            <h3 class="fw-bold m-0">ID Card Simper</h3>
                        </div>
                    </div>
                    <!--begin::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body p-9">


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
                        <!--begin::Slider-->
                        <div class="tns tns-default mb-10">
                            <!--begin::Wrapper-->
                            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                                data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                                data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                                data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next"
                                data-tns-responsive="{1200: {items: 2}, 992: {items: 2}}">

                                <!--begin::Item-->
                                <div class="text-center">
                                    <!--begin::Photo-->
                                    <div class="mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                        style="background-image:url('<?=base_url()?>/<?= $simper['simper']; ?>')">
                                    </div>
                                    <!--end::Photo-->

                                    <!--begin::Person-->
                                    <div class="mb-0">
                                        <!--begin::Name-->
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">ID
                                            Card Depan</a>
                                        <!--end::Name-->

                                        <!--begin::Position-->

                                        <br>
                                        <a href="<?= base_url() . '/' . $simper['simper']; ?>"
                                            class="mt-1 btn btn-light-info" download>
                                            <i class="bi bi-download me-2"></i> Download
                                        </a>

                                        <!--begin::Position-->
                                    </div>
                                    <!--end::Person-->
                                </div>
                                <div class="text-center">
                                    <!--begin::Photo-->
                                    <div class="mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                        style="background-image:url('<?= base_url() . $simper['simper_belakang']; ?>')">
                                    </div>
                                    <!--end::Photo-->

                                    <!--begin::Person-->
                                    <div class="mb-0">
                                        <!--begin::Name-->
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">ID
                                            Card Belakang</a>
                                        <!--end::Name-->

                                        <!--begin::Position-->

                                        <br>
                                        <a href="<?= base_url() . $simper['simper_belakang']; ?>"
                                            class="mt-1 btn btn-light-info" download>
                                            <i class="bi bi-download me-2"></i> Download
                                        </a>
                                        <!--begin::Position-->
                                    </div>
                                    <!--end::Person-->
                                </div>
                                <div class="text-center">
                                    <!--begin::Photo-->
                                    <div class="mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                        style="background-image:url('<?=base_url()?>/<?= $simper['simper']; ?>')">
                                    </div>
                                    <!--end::Photo-->

                                    <!--begin::Person-->
                                    <div class="mb-0">
                                        <!--begin::Name-->
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">ID
                                            Card Depan</a>
                                        <!--end::Name-->

                                        <!--begin::Position-->

                                        <br>
                                        <a href="<?= base_url() . '/' . $simper['simper']; ?>"
                                            class="mt-1 btn btn-light-info" download>
                                            <i class="bi bi-download me-2"></i> Download
                                        </a>
                                        <!--begin::Position-->
                                    </div>
                                    <!--end::Person-->
                                </div>
                                <div class="text-center">
                                    <!--begin::Photo-->
                                    <div class="mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                        style="background-image:url('<?= base_url() . $simper['simper_belakang']; ?>')">
                                    </div>
                                    <!--end::Photo-->

                                    <!--begin::Person-->
                                    <div class="mb-0">
                                        <!--begin::Name-->
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">ID
                                            Card Belakang</a>
                                        <!--end::Name-->

                                        <!--begin::Position-->

                                        <br>
                                        <a href="<?= base_url() . $simper['simper_belakang']; ?>"
                                            class="mt-1 btn btn-light-info" download>
                                            <i class="bi bi-download me-2"></i> Download
                                        </a>
                                        <!--begin::Position-->
                                    </div>
                                    <!--end::Person-->
                                </div>
                                <!--end::Item-->
                                <!--end::Item-->
                                <!--begin::Item-->

                                <!--end::Item-->

                            </div>
                            <!--end::Wrapper-->

                            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                                <i class="fas fa-chevron-left fs-3x"></i>
                            </button>
                            <!--end::Button-->

                            <!--begin::Button-->
                            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                                <i class="fas fa-chevron-right fs-3x"></i>
                            </button>
                        </div>
                        <!--end::Slider-->
                        <!--end::Team-->


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
<!--end::Container-->
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script>
function downloadFile(filePath) {
    fetch(filePath)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.blob();
        })
        .then(blob => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.style.display = 'none';
            a.href = url;
            a.download = filePath.split('/').pop(); // Mendapatkan nama file dari path
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
            document.body.removeChild(a);
        })
        .catch(error => console.error('There has been a problem with your fetch operation:', error));
}
</script>
<?= $this->endSection() ?>
<?= $this->extend('layouts/corpo_layout') ?>
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

.card:hover {
    cursor: pointer;
}
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Layout - Overview-->
        <div class="d-flex flex-column flex-xl-row bg-white card-rounded">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-325px mb-10">
                <!--begin::Card-->

                <div class="card card-flush pb-0" data-kt-sticky="true" data-kt-sticky-name="account-navbar"
                    data-kt-sticky-offset="{default: false, xl: '80px'}"
                    data-kt-sticky-width="{lg: '250px', xl: '325px'}" data-kt-sticky-left="auto"
                    data-kt-sticky-top="90px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                    <!--begin::Card header-->
                    <!--end::Card header-->
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <a href="<?=base_url()?>/corpo/id_card">

                        <div class="card-body p-10 rounded">
                            <!--begin::Summary-->
                            <div class="d-flex flex-center flex-column py-10"
                                style="background: linear-gradient(45deg, #0047AB, #20B2AA)">
                                <!--begin::Avatar-->
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="fs-3 fw-bold text-gray-400 py-10"> <span
                                        class="me-2 card-rounded text-white">Mine Permit</span></div>
                                <!--end::Position-->
                                <!--begin::Actions-->
                                <!--end::Actions-->
                            </div>
                            <!--end::Summary-->
                            <!--begin::Menu-->
                            <!--end::Menu-->
                            <!--end::Account info-->
                        </div>

                    </a>
                    <!--end::Card body-->
                </div>
                <div class="card card-flush pb-0 pt-0" data-kt-sticky="true" data-kt-sticky-name="account-navbar"
                    data-kt-sticky-offset="{default: false, xl: '80px'}"
                    data-kt-sticky-width="{lg: '250px', xl: '325px'}" data-kt-sticky-left="auto"
                    data-kt-sticky-top="90px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                    <!--begin::Card header-->
                    <!--end::Card header-->
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <a href="<?=base_url()?>/corpo/simper">

                        <div class="card-body p-10">
                            <!--begin::Summary-->
                            <div class="d-flex flex-center flex-column py-10"
                                style="background: linear-gradient(45deg, #2196f3, #6C48C5)">
                                <!--begin::Avatar-->
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="fs-3 fw-bold text-gray-600 py-10"> <span
                                        class="me-2 card-rounded  text-white">Simper</span></div>
                                <!--end::Position-->
                                <!--begin::Actions-->
                                <!--end::Actions-->
                            </div>
                            <!--end::Summary-->
                            <!--begin::Menu-->
                            <!--end::Menu-->
                            <!--end::Account info-->
                        </div>

                    </a>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
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
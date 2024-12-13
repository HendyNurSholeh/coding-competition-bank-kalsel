<?= $this->extend('layouts/pengguna_layout') ?>
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
<div id="kt_content_container"
    class="content-mobile d-flex flex-column-fluid align-items-start container-xxl d-lg-none">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Layout - Overview-->
        <div class="d-flex flex-column flex-xl-row   bg-white card-rounded">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-325px mb-10 ">
                <!--begin::Card-->
                <div class="card card-flush  pb-0" data-kt-sticky="true" data-kt-sticky-name="account-navbar"
                    data-kt-sticky-offset="{default: false, xl: '80px'}"
                    data-kt-sticky-width="{lg: '250px', xl: '325px'}" data-kt-sticky-left="auto"
                    data-kt-sticky-top="90px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                    <!--begin::Card header-->
                    <!--end::Card header-->
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body p-10 pb-0">
                        <!--begin::Summary-->
                        <div class="d-flex flex-center flex-column py-10"
                            style="background: linear-gradient(45deg, #FFD700, #FF8C00)">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-100px symbol-circle mb-7">
                                <img src="<?= base_url('assets/media/avatars/150-1.jpg') ?>" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <div class="fs-2 fw-bold text-white mb-2 text-center">Hai, Hendy!</div>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fs-4 text-white mb-2 text-center">Saldo Anda</div>
                            <div class="fs-1 fw-bold text-white text-center">Rp
                                <?= number_format("2000000", 0, ',', '.') ?>
                            </div>
                            <!--end::Position-->
                            <!--begin::Actions-->
                            <div class="d-flex mt-4 justify-content-center">
                                <a href="<?= base_url('pengguna/topup') ?>" class="btn btn-light-primary me-2">Top
                                    Up</a>
                                <a href="<?= base_url('pengguna/transfer') ?>"
                                    class="btn btn-light-warning">Transfer</a>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Summary-->
                    </div>
                    <div class="card-body p-10 pt-0">
                        <!--begin::Summary-->
                        <div class="d-flex flex-column py-10 bg-white border rounded">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="fs-4 text-dark">Transaksi Terakhir</div>
                                <a href="<?= base_url('pengguna/riwayat_transaksi') ?>"
                                    class="btn btn-sm btn-light-primary border border-primary btn-sm text-sm py-1 px-2"
                                    style="font-size: 0.9em">Lihat Semua</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Transaction List-->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-column">
                                    <div class="text-dark">Joko Ariyansyah</div>
                                    <div class="text-muted">01 Oct 2023</div>
                                </div>
                                <div class="d-flex flex-column text-end">
                                    <div class="text-dark">-Rp 50.000</div>
                                    <div class="text-muted">Outgoing</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-column">
                                    <div class="text-dark">Budi Santoso</div>
                                    <div class="text-muted">02 Oct 2023</div>
                                </div>
                                <div class="d-flex flex-column text-end">
                                    <div class="text-dark">-Rp 150.000</div>
                                    <div class="text-muted">Outgoing</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-column">
                                    <div class="text-dark">Top Up</div>
                                    <div class="text-muted">03 Oct 2023</div>
                                </div>
                                <div class="d-flex flex-column text-end">
                                    <div class="text-dark">+Rp 200.000</div>
                                    <div class="text-muted">Incoming</div>
                                </div>
                            </div>
                            <!--end::Transaction List-->
                        </div>
                        <!--end::Summary-->
                    </div>
                </div>
            </div>
            <!--end::Summary-->

            <!--end::Card-->
        </div>
    </div>
    <!--end::Sidebar-->
    <!--end::Content-->
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
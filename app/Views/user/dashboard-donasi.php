<?= $this->extend('layouts/user_layout') ?>
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
        <!--begin::Index-->
        <div class="card card-page shadow-sm mb-5 bg-white rounded">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8 px-4 py-3">
                    <div class="col-lg-4">
                        <div class="d-flex flex-center flex-column py-10 "
                            style="background: linear-gradient(45deg, #FFD700, #FF8C00); border-radius: 10px;">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-100px symbol-circle mb-7">
                                <img src="<?= base_url('assets/media/avatars/150-1.jpg') ?>"
                                    src="<?= base_url('uploads/pas_foto/') . session('pas_foto') ?? 'blank.png'?>"
                                    alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <div class="fs-2 fw-bold text-white mb-2 text-center">Hai,
                                <?= ucwords(strtolower(session('nama'))); ?>!</div>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fs-4 text-white mb-2 text-center">Total Donasi Anda</div>
                            <div class="fs-1 fw-bold text-white text-center">Rp
                                <?= number_format(5000000, 0, ',', '.') ?>
                            </div>
                            <!--end::Position-->
                            <!--begin::Actions-->
                            <div class="d-flex mt-4 justify-content-center">
                                <a href="<?= base_url('user/ajukan_donasi') ?>"
                                    class="btn btn-light-primary me-2">Ajukan Donasi</a>
                                <a href="<?= base_url('user/riwayat_donasi') ?>" class="btn btn-light-warning">Riwayat
                                    Donasi</a>
                            </div>
                            <!--end::Actions-->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex flex-column pt-3 py-10 bg-white rounded">
                            <!--begin::Donation Details-->
                            <div class="d-flex justify-content-between align-items-center mb-4 flex-column flex-md-row">
                                <div class="fs-4 text-dark">Detail Donasi Anda</div>
                                <div class="fs-6 text-muted mt-2 mt-md-0">No. Donasi: 1234567890</div>
                            </div>
                            <!--end::Donation Details-->

                            <!--begin::Last Donation-->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="fs-4 text-dark">Donasi Terakhir</div>
                                <a href="<?= base_url('user/riwayat_donasi') ?>"
                                    class="btn btn-sm btn-light-primary border border-primary text-sm py-1 px-2"
                                    style="font-size: 0.9em">Lihat Semua</a>
                            </div>
                            <!--end::Last Donation-->

                            <!--begin::Donation List-->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-column">
                                    <div class="text-dark">Donasi Bulan September</div>
                                    <div class="text-muted">25 Sep 2023 14:30</div>
                                </div>
                                <div class="d-flex flex-column text-end">
                                    <div class="text-dark">Rp <?= number_format(1000000, 0, ',', '.') ?></div>
                                    <div class="text-muted">Incoming</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-column">
                                    <div class="text-dark">Donasi Bulan Agustus</div>
                                    <div class="text-muted">25 Aug 2023 14:30</div>
                                </div>
                                <div class="d-flex flex-column text-end">
                                    <div class="text-dark">Rp <?= number_format(1000000, 0, ',', '.') ?></div>
                                    <div class="text-muted">Incoming</div>
                                </div>
                            </div>
                            <!--end::Donation List-->

                            <!--begin::Total Outstanding-->
                            <!-- <div class="d-flex justify-content-between align-items-center mt-4 pt-4 border-top">
                                <div class="fs-4 text-dark">Total Tunggakan</div>
                                <div class="fs-4 text-dark">Rp <?php number_format(3000000, 0, ',', '.') ?></div>
                            </div> -->
                            <!--end::Total Outstanding-->

                            <!--begin::Upcoming Donations-->
                            <div
                                class="d-flex justify-content-between align-items-center mt-4 pt-4 border-top flex-column flex-md-row">
                                <div class="d-flex flex-column mb-3 mb-md-0">
                                    <div class="fs-4 text-dark">Donasi Berikutnya</div>
                                    <div class="text-muted">Jatuh Tempo: 25 Okt 2023</div>
                                </div>
                                <div class="d-flex flex-column text-lg-end">
                                    <div class="fs-4 text-dark">Rp <?= number_format(1000000, 0, ',', '.') ?></div>
                                    <a href="<?= base_url('user/ajukan_donasi') ?>"
                                        class="btn btn-sm btn-primary mt-2">Donasi Sekarang</a>
                                </div>
                            </div>
                            <!--end::Upcoming Donations-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Index-->
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
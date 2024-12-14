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
                                <img src="<?= base_url('assets/media/avatars/150-1.jpg') ?>" alt="image" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <div class="fs-2 fw-bold text-white mb-2 text-center">Hai,
                                <?= ucwords(strtolower(session('nama'))); ?>!</div>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fs-4 text-white mb-2 text-center">Saldo Anda</div>
                            <div class="fs-1 fw-bold text-white text-center">Rp
                                <?= number_format($rekening['saldo'], 0, ',', '.') ?>
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
                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex flex-column pt-3 py-10  bg-white rounded">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-center mb-4 flex-column flex-md-row">
                                <div class="fs-4 text-dark">Rekening Anda</div>
                                <div class="fs-6 text-muted mt-2 mt-md-0">No. Rekening: <?= $rekening['no_rek'] ?></div>
                            </div>
                            <!--end::Title-->
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="fs-4 text-dark">Transaksi Terakhir</div>
                                <a href="<?= base_url('pengguna/riwayat_transaksi') ?>"
                                    class="btn btn-sm btn-light-primary border border-primary btn-sm text-sm py-1 px-2"
                                    style="font-size: 0.9em">Lihat Semua</a>
                            </div>
                            <!--end::Title-->
                            <!--begin::Transaction List-->
                            <?php if (empty($history)): ?>
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <div class="text-muted">Tidak ada transaksi terbaru.</div>
                            </div>
                            <?php else: ?>
                            <?php foreach ($history as $transaction): ?>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex flex-column">
                                    <div class="text-dark"><?= ucwords(strtolower($transaction['deskripsi'])) ?></div>
                                    <div class="text-muted">
                                        <?= date('d M Y H:i', strtotime($transaction['created_at'])) ?>
                                    </div>
                                </div>
                                <div class="d-flex flex-column text-end">
                                    <div class="text-dark"><?= $transaction['type'] == 'Incoming' ? '+' : '-' ?>Rp
                                        <?= number_format($transaction['jumlah'], 0, ',', '.') ?></div>
                                    <div class="text-muted"><?= ucfirst($transaction['type']) ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <!--end::Transaction List-->
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
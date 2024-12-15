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
                    <div class="col-lg-12">
                        <div class="d-flex flex-column pt-3 py-10 bg-white rounded">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-center mb-4 flex-column flex-md-row">
                                <div class="fs-4 text-dark">Daftar Event Kantor Bank Kalsel</div>
                                <div class="fs-6 text-muted mt-2 mt-md-0">Filter:
                                    <select id="eventFilter" class="form-select">
                                        <option value="all">Semua</option>
                                        <option value="pelatihan">Pelatihan</option>
                                        <option value="seminar">Seminar</option>
                                        <option value="workshop">Workshop</option>
                                    </select>
                                </div>
                            </div>
                            <!--end::Title-->
                            <!--begin::Event List-->
                            <div id="eventList">
                                <?php foreach ($events as $event): ?>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex flex-column">
                                        <div class="text-dark"><?= $event['title'] ?></div>
                                        <div class="text-muted">Tanggal:
                                            <?= date('d M Y', strtotime($event['event_date'])) ?>
                                        </div>
                                        <div class="text-muted">Kuota:
                                            <?= $event['registered'] ?>/<?= $event['qouta'] ?>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column text-end">
                                        <a href="/pengguna/daftar" class="btn btn-sm btn-light-primary">Daftar</a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <!--end::Event List-->
                            <!--begin::View All Button-->
                            <div class="d-flex justify-content-center mt-4">
                                <a href="#" class="btn btn-light-primary border border-primary">Lihat Semua</a>
                            </div>
                            <!--end::View All Button-->
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
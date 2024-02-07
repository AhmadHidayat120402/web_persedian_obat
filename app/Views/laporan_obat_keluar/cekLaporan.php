<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="" class="btn btn-success" id="btn-cetak" targe="_blank" onclick="this.href='<?= base_url('admin/laporan/cetak/') ?>'+ document.getElementById('tglMulai').value + '/' + document.getElementById('tglSelesai').value">Cetak
                Laporan</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mb-3">
        <div class="col-md-3">
            <label for="" class="form-label">Dari Tanggal</label>
            <input type="date" class="form-control" name="dariTanggal" id="tglMulai" value="<?= date('Y-m-d') ?>">
        </div>
        <div class="col-md-3">
            <label for="" class="form-label">Sampai Tanggal</label>
            <input type="date" class="form-control" name="sampaiTanggal" id="tglSelesai" value="<?= $tglSelesai ?>">
        </div>
        <div class="col-md-2">
            <label for="btn-cetak" class="form-label">&nbsp;</label><br>
            <a href="" class="btn btn-warning text-white" id="btn-cetak" onclick="this.href='<?= base_url('admin/ceklaporan/cetak/') ?>' + document.getElementById('tglMulai').value + '/' + document.getElementById('tglSelesai').value">Tampilkan</a>
        </div>
    </div>
</div>
<div class="table mt-2 p-3 table-responsive">
    <table class="table table-bordered table-striped" id="table-obatMasuk">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Harga Beli</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $d['no'] ?></td>
                    <td><?= $d['nama'] ?></td>
                    <td><?= $d['satuan'] ?></td>
                    <td><?= $d['jumlah'] ?></td>
                    <td><?= $d['harga'] ?></td>
                    <td>
                        <?= $d['jumlah'] * $d['harga'] ?>
                    </td>
                </tr>

        </tbody>
    <?php endforeach ?>
    </table>

</div>

<?= $this->endsection() ?>

<?= $this->section('script') ?>
<script>
    $(document).ready(function() {
        $('#table-obatMasuk').DataTable();
    });
</script>
<?= $this->endsection() ?>
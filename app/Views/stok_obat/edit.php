<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <form action="<?= base_url('admin/stok-obat/' . $stok_obat['id'] . '/edit') ?>" method="post" id="text-editor">
        <input type="hidden" name="id" value="<?= $stok_obat['id'] ?>" />
        <div class="form-group">
            <label for="no">No</label>
            <input type="text" name="no" class="form-control" placeholder="Masukkan Nomor" required value="<?= $stok_obat['no'] ?>">
        </div>
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" placeholder="Masukkan Nama Obat" required value="<?= $stok_obat['nama_obat'] ?>">
        </div>
        <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" name="satuan" class="form-control" placeholder="Masukkan Satuan" required value="<?= $stok_obat['satuan'] ?>">
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" placeholder="Masukkan Harga Jual" required value="<?= $stok_obat['harga_jual'] ?>">
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <?php
            // Konversi format tanggal
            $tanggal_masuk = date('Y-m-d', strtotime($stok_obat['tanggal_masuk']));
            ?>
            <input type="date" name="tanggal_masuk" class="form-control" placeholder="Masukkan Tanggal Masuk" required value="<?= $tanggal_masuk ?>">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" placeholder="Masukkan Stok" required value="<?= $stok_obat['stok'] ?>">
        </div>
        <div class="form-group">
            <button type="submit" name="status" value="published" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
<?= $this->endsection() ?>
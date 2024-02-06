<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <form action="<?= base_url('admin/obat-masuk/' . $obat_masuk['id'] . '/edit') ?>" method="post" id="text-editor">
        <input type="hidden" name="id" value="<?= $obat_masuk['id'] ?>" />
        <div class="form-group">
            <label for="no">No</label>
            <input type="text" name="no" class="form-control" placeholder="Masukkan Nomor" required value="<?= $obat_masuk['no'] ?>">
        </div>
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" placeholder="Masukkan Nama Obat" required value="<?= $obat_masuk['nama_obat'] ?>">
        </div>
        <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" name="satuan" class="form-control" placeholder="Masukkan Satuan" required value="<?= $obat_masuk['satuan'] ?>">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" placeholder="Masukkan Jumlah" required value="<?= $obat_masuk['jumlah'] ?>">
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <?php
            // Konversi format tanggal
            $tanggal_masuk = date('Y-m-d', strtotime($obat_masuk['tanggal_masuk']));
            ?>
            <input type="date" name="tanggal_masuk" class="form-control" placeholder="Masukkan Tanggal Masuk" required value="<?= $tanggal_masuk ?>">
        </div>
        <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input type="number" name="harga_beli" class="form-control" placeholder="Masukkan Harga Beli" required value="<?= $obat_masuk['harga_beli'] ?>">
        </div>
        <div class="form-group">
            <button type="submit" name="status" value="published" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
<?= $this->endsection() ?>
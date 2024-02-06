<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <form action="<?= base_url('admin/obat-keluar/' . $obat_keluar['id'] . '/edit') ?>" method="post" id="text-editor">
        <input type="hidden" name="id" value="<?= $obat_keluar['id'] ?>" />
        <div class="form-group">
            <label for="no">No</label>
            <input type="text" name="no" class="form-control" placeholder="Masukkan Nomor" required value="<?= $obat_keluar['no'] ?>">
        </div>
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" placeholder="Masukkan Nama Obat" required value="<?= $obat_keluar['nama_obat'] ?>">
        </div>
        <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" name="satuan" class="form-control" placeholder="Masukkan Satuan" required value="<?= $obat_keluar['satuan'] ?>">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" placeholder="Masukkan Jumlah" required value="<?= $obat_keluar['jumlah'] ?>">
        </div>
        <div class="form-group">
            <label for="tanggal_keluar">Tanggal Keluar</label>
            <?php
            // Konversi format tanggal
            $tanggal_keluar = date('Y-m-d', strtotime($obat_keluar['tanggal_keluar']));
            ?>
            <input type="date" name="tanggal_keluar" class="form-control" placeholder="Masukkan Tanggal Keluar" required value="<?= $tanggal_keluar ?>">
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" placeholder="Masukkan Harga Jual" required value="<?= $obat_keluar['harga_jual'] ?>">
        </div>
        <div class="form-group">
            <button type="submit" name="status" value="published" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
<?= $this->endsection() ?>
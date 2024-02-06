<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <form action="<?= base_url('admin/obat-masuk/new') ?>" method="post" id="text-editor">
        <div class="form-group">
            <label for="no">No</label>
            <input type="number" name="no" class="form-control" placeholder="Masukkan Nomor" required>
        </div>
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" placeholder="Masukkan Nama Obat" required>
        </div>
        <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" name="satuan" class="form-control" placeholder="Masukkan Satuan" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" placeholder="Masukkan Jumlah" required>
        </div>
        <div class="form-group">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" placeholder="Masukkan Tanggal Masuk" required>
        </div>
        <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input type="number" name="harga_beli" class="form-control" placeholder="Masukkan Harga Beli" required>
        </div>
        <div class="form-group">
            <button type="submit" name="status" value="published" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endsection() ?>
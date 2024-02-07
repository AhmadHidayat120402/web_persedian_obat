<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-auto">
            <a href="<?= base_url('admin/obat-masuk/newObatMasuk') ?>" class="btn btn-success ">Tambah Data</a>
            <!-- <button type="button" class="btn btn-success p-2">Tambah Data</button> -->
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
                <th>Tanggal Masuk</th>
                <th>Harga Beli</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($obat_masuk as $d) : ?>
                <tr>
                    <td><?= $d['no'] ?></td>
                    <td><?= $d['nama_obat'] ?></td>
                    <td><?= $d['satuan'] ?></td>
                    <td><?= $d['jumlah'] ?></td>
                    <td><?= $d['tanggal_masuk'] ?></td>
                    <td><?= $d['harga_beli'] ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-1">
                            <a href="<?= base_url('admin/obat-masuk/' . $d['id'] . '/edit') ?>" class="btn btn-success">
                                <i class="mdi mdi-table-edit"></i> Edit</a>
                            <a href="<?= base_url('admin/obat-masuk/' . $d['id'] . '/delete') ?>" class="btn btn-danger delete-buttons" onclick="confirmToDelete(this)">
                                <i class="mdi mdi-table-edit"></i> Delete</a>
                        </div>
                    </td>
                </tr>
                <script>
                    const deleteButtons = document.querySelectorAll('.delete-buttons');

                    deleteButtons.forEach(button => {
                        button.addEventListener('click', function(event) {
                            event.preventDefault();

                            const id = this.parentNode.querySelector('input[name="id"]').value;

                            Swal.fire({
                                title: 'Hapus Data?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Hapus',
                                cancelButtonText: 'Batal',
                                showCloseButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                customClass: {
                                    container: 'my-swal'
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    this.parentNode.action = '/admin/bph/' + id;
                                    this.parentNode.submit();
                                }
                            });
                        });
                    });
                </script>
            <?php endforeach ?>
        </tbody>
    </table>

    <div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="h2">yakin ingin menghapus data ini ?</h2>
                    <p>Jika menghapus data ini maka data akan terhapus dari sistem</p>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('admin/obat-masuk/' . $d['id'] . '/delete') ?>" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmToDelete(el) {
            $("#delete-button").attr("href", el.dataset.href);
            $("#confirm-dialog").modal('show');
        }
    </script>

</div>

<?= $this->endsection() ?>

<?= $this->section('script') ?>
<script>
    $(document).ready(function() {
        $('#table-obatMasuk').DataTable();
    });
</script>
<?= $this->endsection() ?>
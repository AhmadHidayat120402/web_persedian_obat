<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-end">
        <div class="col-auto">
            <button type="button" class="btn btn-success p-2">Tambah Data</button>
        </div>
    </div>
</div>
<div class="table mt-2 p-3 table-responsive">
    <table class="table table-bordered table-striped" id="table-stokObat">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Satuan</th>
                <th>Harga Jual</th>
                <th>Tanggal Masuk</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stok_obat as $d) : ?>
                <tr>
                    <td><?= $d['no'] ?></td>
                    <td><?= $d['nama_obat'] ?></td>
                    <td><?= $d['satuan'] ?></td>
                    <td><?= $d['harga_jual'] ?></td>
                    <td><?= $d['tanggal_masuk'] ?></td>
                    <td><?= $d['stok'] ?></td>
                    <td>
                        <div class="d-flex align-items-center gap-1">
                            <a href="" class="btn btn-success" style="color: white;" data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}">
                                <i class="mdi mdi-table-edit"></i> Edit</a>

                            <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}" class="btn btn-warning">Edit</button> -->
                            <form action="/admin/bph/{{ $item->id }}" method="post" class="delete-form m-0">
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button class="btn btn-danger delete-buttons" style="box-sizing: 0" type="submit">
                                    <i class="mdi mdi-delete"></i> Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>

                <!-- edit Modal -->
                <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog bg-white">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="mdi mdi-table-edit"></i>
                                    Edit
                                    Data Bph</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admin/bph/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="nama" class="mb-1">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir" class="mb-1">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $item->tanggal_lahir }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jabatan" class="mb-1">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $item->jabatan }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="foto" class="mb-1">Foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto" value="{{ $item->foto }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="moto" class="mb-1">Moto</label>
                                        <textarea name="moto" id="moto" cols="30" rows="3" class="form-control">{{ $item->moto }}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach ?>
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
        </tbody>
    </table>
</div>

<?= $this->endsection() ?>

<script>
    $(document).ready(function() {
        $('#table-stokObat').DataTable();
    });
</script>
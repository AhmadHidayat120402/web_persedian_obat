<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apotek | Cetak Laporan Obat Masuk</title>
    <link rel="shortcut icon" href="{{ url(asset('img/logo-kotak.png')) }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        @media print {
            .table-dark {
                background-color: #fff !important;
                color: #000 !important;
            }

            th {
                border-top: 1px solid #ccc;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-3">
        <h5 style="text-align:center;" class=" mb-0">LAPORAN OBAT MASUK</h5>
        <h3 style="text-align:center;" class="fw-bold mb-0">"APOTEK"</h3>
        <h5 style="text-align:center;" class="mb-4">AMANAH KARYA FARMA</h5>
        <hr style="border-top: solid black" class="mb-2 mt-3">
        <div style="display: flex; align-items: center;">
            <p class="mb-0" style="margin-bottom: 0; margin-left: 25px;">Dari Tanggal</p>
            <p class="mb-0" style="margin-bottom: 0; margin-left: 38px;">: <?= $tglMulai ?> </p>

        </div>
        <div style="display: flex; align-items: center;">
            <p class="mb-0" style="margin-left: 25px;">Sampai Tanggal</p>
            <p class="mb-0" style="margin-left: 15px;">: <?= $tglSelesai ?></p>
        </div>
        <div class="table-responsive bg-white p-4" style="border-radius: 20px; height:76% !important;">
            <table class="table table-striped table-hover w-100 nowrap" width="100%" id="table-menu" style="height: 100% !important">
                <thead class="table-dark">
                    <tr>
                        <th style="text-align: center; white-space: normal; vertical-align: middle;">No</th>
                        <th style="text-align: center; white-space: normal; vertical-align: middle;">Nama Obat</th>
                        <th style="text-align: center; white-space: normal; vertical-align: middle;">Satuan</th>
                        <th style="text-align: center; white-space: normal; vertical-align: middle;">Jumlah</th>
                        <th style="text-align: center; white-space: normal; vertical-align: middle;">Harga Beli</th>
                        <th style="text-align: center; white-space: normal; vertical-align: middle;">Total</th>
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
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
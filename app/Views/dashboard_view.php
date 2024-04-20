<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="content" style="display: <?php echo (session('role') === 'pemilik') ? 'none' : 'bloc'; ?>;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-12">
        <div class="small-box bg-info" style="border-radius: 20px;">
          <div class="inner">
            <h3 class="text-center">Selamat Datang di Aplikasi Persediaan Obat</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4">
        <a href="<?= base_url('admin/stok-obat') ?>" class="nav-link">
          <div class="card" style="border-radius: 30px;">
            <div class="card-body bg-primary rounded-2" style="border-radius: 30px;">
              <div class="d-flex justify-content-beetwen text-align-center" style="gap: 50px;">
                <div>
                  <h1 class="text-white text-center" style="font-weight: bold;"><?= $totalStokObat ?></h1>
                  <p class="text-white text-center">Stok Obat</p>
                </div>
                <img src="../../public/assets/dist/img/img_pil4.jpg" alt="" style="width: 100px; border-radius: 30px; opacity: 0.5;">
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 ">
        <a href="<?= base_url('admin/obat-masuk') ?>" class="nav-link">
          <div class="card" style="border-radius: 30px;">
            <div class="card-body bg-secondary rounded-2" style="border-radius: 30px;">
              <div class="d-flex justify-content-beetwen text-align-center" style="gap: 50px;">
                <div>
                  <h1 class="text-white text-center" style="font-weight: bold;"><?= $ObatMasuk ?></h1>
                  <p class="text-white text-center">Obat Masuk</p>
                </div>
                <img src="../../public/assets/dist/img/img_pil.jpg" alt="" style="width: 100px; border-radius: 30px; opacity: 0.5;">
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 ">
        <a href="<?= base_url('admin/obat-keluar') ?>" class="nav-link">
          <div class="card" style="border-radius: 30px;">
            <div class="card-body bg-success rounded-2" style="border-radius: 30px;">
              <div class="d-flex justify-content-beetwen text-align-center" style="gap: 50px;">
                <div>
                  <h1 class="text-white text-center" style="font-weight: bold;"><?= $ObatKeluar ?></h1>
                  <p class="text-white text-center">Obat Keluar</p>
                </div>
                <img src="../../public/assets/dist/img/img_pil5.jpg" alt="" style="width: 100px; border-radius: 30px; opacity: 0.5; background-size: cover;">
              </div>

            </div>
          </div>
        </a>
      </div>
    </div>
</section>
<section class="content" style="display: <?php echo (session('role') === 'admin') ? 'none' : ''; ?>;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-12">
        <div class="small-box bg-info" style="border-radius: 20px;">
          <div class="inner">
            <h3 class="text-center">Selamat Datang di Aplikasi Persediaan Obat</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4">
        <!-- <div class="col-md-4"> -->
        <a href="<?= base_url('admin/laporan-obat-masuk') ?>" class="nav-link">
          <div class="card" style="border-radius: 30px;">
            <div class="card-body bg-primary rounded-2" style="border-radius: 30px;">
              <div class="d-flex justify-content-beetwen text-align-center" style="gap: 50px;">
                <div>
                  <h4 class="text-white text-center" style="font-weight: bold;">Laporan Obat Masuk</h4>

                </div>
                <img src="../../public/assets/dist/img/img_pil4.jpg" alt="" style="width: 100px; border-radius: 30px; opacity: 0.5;">
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 <?php echo (session('role') === 'pemilik') ? 'disabled-div' : ''; ?>">
        <a href="<?= base_url('admin/laporan-obat-keluar') ?>" class="nav-link">
          <div class="card" style="border-radius: 30px;">
            <div class="card-body bg-secondary rounded-2" style="border-radius: 30px;">
              <div class="d-flex justify-content-beetwen text-align-center" style="gap: 50px;">
                <div>
                  <h4 class="text-white text-center" style="font-weight: bold;">Laporan Obat Keluar</h4>
                </div>
                <img src="../../public/assets/dist/img/img_pil.jpg" alt="" style="width: 100px; border-radius: 30px; opacity: 0.5;">
              </div>
            </div>
          </div>
        </a>
      </div>
</section>
<?= $this->endSection() ?>
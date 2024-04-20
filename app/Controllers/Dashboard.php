<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatKeluar;
use App\Models\ObatMasuk;
use App\Models\StokObat;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        $jumlahStokObat = new StokObat();
        $totalStokObat = $jumlahStokObat->countAll();

        $jumlahObatMasuk = new ObatMasuk();
        $ObatMasuk = $jumlahObatMasuk->countAll();

        $jumlahObatKeluar = new ObatKeluar();
        $ObatKeluar = $jumlahObatKeluar->countAll();

        

        return view('dashboard_view', ['totalStokObat' => $totalStokObat, 'ObatMasuk' => $ObatMasuk, 'ObatKeluar' => $ObatKeluar]);
    }
}

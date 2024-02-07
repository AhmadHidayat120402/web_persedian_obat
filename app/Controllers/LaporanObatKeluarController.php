<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatKeluar;
use CodeIgniter\HTTP\ResponseInterface;

class LaporanObatKeluarController extends BaseController
{
    public function index()
    {
        $LaporanObatKeluar = new ObatKeluar();
        $data['obat_keluar'] = $LaporanObatKeluar->findAll();
        echo view('laporan_obat_keluar/index', $data);
    }

    public function cekLaporan($tglMulai, $tglSelesai)
    {
        $LaporanObatMasuk = new ObatKeluar();
        $data = $LaporanObatMasuk->select('obat_keluar.no as no, obat_keluar.nama_obat as nama, obat_keluar.satuan as satuan, obat_keluar.jumlah as jumlah, obat_keluar.tanggal_keluar as tanggal, obat_keluar.harga_jual as harga')
            ->where('obat_keluar.tanggal_keluar >=', $tglMulai)
            ->where('obat_keluar.tanggal_keluar <=', $tglSelesai)
            ->orderBy('obat_keluar.id', 'desc')
            ->findAll();

        // Pastikan menambahkan $tglMulai dan $tglSelesai ke dalam array data
        return view('laporan_obat_keluar/cekLaporan', ['data' => $data, 'tglMulai' => $tglMulai, 'tglSelesai' => $tglSelesai]);
    }


    public function cetak($tglMulai, $tglSelesai)
    {
        $LaporanObatMasuk = new ObatKeluar();
        $data = $LaporanObatMasuk->select('obat_keluar.no as no, obat_keluar.nama_obat as nama, obat_keluar.satuan as satuan, obat_keluar.jumlah as jumlah, obat_keluar.tanggal_keluar as tanggal, obat_keluar.harga_jual as harga')
            ->where('obat_keluar.tanggal_keluar >=', $tglMulai)
            ->where('obat_keluar.tanggal_keluar <=', $tglSelesai)
            ->orderBy('obat_keluar.id', 'desc')
            ->findAll();

        // Pastikan menambahkan $tglMulai dan $tglSelesai ke dalam array data
        return view('laporan_obat_keluar/cetak_laporan', ['data' => $data, 'tglMulai' => $tglMulai, 'tglSelesai' => $tglSelesai]);
    }
}

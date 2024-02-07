<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatMasuk as ModelsObatMasuk;
use CodeIgniter\HTTP\ResponseInterface;

class LaporanObatMasukController extends BaseController
{
    public function index()
    {
        $LaporanObatMasuk = new ModelsObatMasuk();
        $data['obat_masuk'] = $LaporanObatMasuk->findAll();
        echo view('laporan_obat_masuk/index', $data);
    }

    public function cekLaporan($tglMulai, $tglSelesai)
    {
        $LaporanObatMasuk = new ModelsObatMasuk();
        $data = $LaporanObatMasuk->select('obat_masuk.no as no, obat_masuk.nama_obat as nama, obat_masuk.satuan as satuan, obat_masuk.jumlah as jumlah, obat_masuk.tanggal_masuk as tanggal, obat_masuk.harga_beli as harga')
            ->where('obat_masuk.tanggal_masuk >=', $tglMulai)
            ->where('obat_masuk.tanggal_masuk <=', $tglSelesai)
            ->orderBy('obat_masuk.id', 'desc')
            ->findAll();

        // Pastikan menambahkan $tglMulai dan $tglSelesai ke dalam array data
        return view('laporan_obat_masuk/cekLaporan', ['data' => $data, 'tglMulai' => $tglMulai, 'tglSelesai' => $tglSelesai]);
    }


    public function cetak($tglMulai, $tglSelesai)
    {
        $LaporanObatMasuk = new ModelsObatMasuk();
        $data = $LaporanObatMasuk->select('obat_masuk.no as no, obat_masuk.nama_obat as nama, obat_masuk.satuan as satuan, obat_masuk.jumlah as jumlah, obat_masuk.tanggal_masuk as tanggal, obat_masuk.harga_beli as harga')
            ->where('obat_masuk.tanggal_masuk >=', $tglMulai)
            ->where('obat_masuk.tanggal_masuk <=', $tglSelesai)
            ->orderBy('obat_masuk.id', 'desc')
            ->findAll();

        // Pastikan menambahkan $tglMulai dan $tglSelesai ke dalam array data
        return view('laporan_obat_masuk/cetak_laporan', ['data' => $data, 'tglMulai' => $tglMulai, 'tglSelesai' => $tglSelesai]);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatKeluar as ModelsObatKeluar;
use CodeIgniter\HTTP\ResponseInterface;

class ObatKeluar extends BaseController
{
    public function index()
    {
        $ObatKeluar = new ModelsObatKeluar();
        $data['obat_keluar'] = $ObatKeluar->findAll();
        echo view('obat_keluar/index', $data);
    }

    public function formCreate()
    {
        return view('obat_keluar/create');
    }

    public function create()
    {
        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules(['no' => 'required', 'nama_obat' => 'required', 'satuan' => 'required', 'jumlah' => 'required', 'tanggal_keluar' => 'required', 'harga_jual' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid maka simpan ke dalam database
        if ($isDataValid) {
            $ObatKeluar = new ModelsObatKeluar();
            $ObatKeluar->insert([
                "no" => $this->request->getPost('no'),
                "nama_obat" => $this->request->getPost('nama_obat'),
                "satuan" => $this->request->getPost('satuan'),
                "jumlah" => $this->request->getPost('jumlah'),
                "tanggal_keluar" => $this->request->getPost('tanggal_keluar'),
                "harga_jual" => $this->request->getPost('harga_jual'),
            ]);

            return redirect('admin/obat-keluar');
        }

        echo view('obat-keluar/create');
    }

    public function edit($id)
    {
        $obat_keluar = new ModelsObatKeluar();
        $data['obat_keluar'] = $obat_keluar->where('id', $id)->first();

        // lakukan validasi datanya
        $validation = \Config\Services::validation();
        $validation->setRules(['no' => 'required', 'nama_obat' => 'required', 'satuan' => 'required', 'jumlah' => 'required', 'tanggal_keluar' => 'required', 'harga_jual' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, maka simpan ke dalam database
        if ($isDataValid) {
            $obat_keluar->update($id, [
                "no" => $this->request->getPost('no'),
                "nama_obat" => $this->request->getPost('nama_obat'),
                "satuan" => $this->request->getPost('satuan'),
                "jumlah" => $this->request->getPost('jumlah'),
                "tanggal_keluar" => $this->request->getPost('tanggal_keluar'),
                "harga_jual" => $this->request->getPost('harga_jual'),
            ]);
            return redirect('admin/obat-keluar');
        }

        // tampilkan form edit
        echo view('obat_keluar/edit', $data);
    }

    public function delete($id)
    {
        $ObatKeluar = new ModelsObatKeluar();
        $ObatKeluar->delete($id);
        return redirect('admin/obat-keluar');
    }
}

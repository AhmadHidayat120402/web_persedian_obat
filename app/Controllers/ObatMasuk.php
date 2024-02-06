<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatMasuk as ModelsObatMasuk;
use CodeIgniter\HTTP\ResponseInterface;

class ObatMasuk extends BaseController
{
    public function index()
    {
        $ObatMasuk = new ModelsObatMasuk();
        $data['obat_masuk'] = $ObatMasuk->findAll();
        echo view('obat_masuk/index', $data);
    }

    public function formCreate()
    {
        return view('obat_masuk/create');
    }

    public function create()
    {
        // lakukan validasi
        $validation = \Config\Services::validation();
        $validation->setRules(['no' => 'required', 'nama_obat' => 'required', 'satuan' => 'required', 'jumlah' => 'required', 'tanggal_masuk' => 'required', 'harga_beli' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid maka simpan ke dalam database
        if ($isDataValid) {
            $obatMasuk = new ModelsObatMasuk();
            $obatMasuk->insert([
                "no" => $this->request->getPost('no'),
                "nama_obat" => $this->request->getPost('nama_obat'),
                "satuan" => $this->request->getPost('satuan'),
                "jumlah" => $this->request->getPost('jumlah'),
                "tanggal_masuk" => $this->request->getPost('tanggal_masuk'),
                "harga_beli" => $this->request->getPost('harga_beli'),
            ]);

            return redirect('admin/obat-masuk');
        }

        echo view('obat-masuk/create');
    }


    public function edit($id)
    {
        $obat_masuk = new ModelsObatMasuk();
        $data['obat_masuk'] = $obat_masuk->where('id', $id)->first();

        // lakukan validasi datanya
        $validation = \Config\Services::validation();
        $validation->setRules(['no' => 'required', 'nama_obat' => 'required', 'satuan' => 'required', 'jumlah' => 'required', 'tanggal_masuk' => 'required', 'harga_beli' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, maka simpan ke dalam database
        if ($isDataValid) {
            $obat_masuk->update($id, [
                "no" => $this->request->getPost('no'),
                "nama_obat" => $this->request->getPost('nama_obat'),
                "satuan" => $this->request->getPost('satuan'),
                "jumlah" => $this->request->getPost('jumlah'),
                "tanggal_masuk" => $this->request->getPost('tanggal_masuk'),
                "harga_beli" => $this->request->getPost('harga_beli'),
            ]);
            return redirect('admin/obat-masuk');
        }

        // tampilkan form edit
        echo view('obat_masuk/edit', $data);
    }

    public function delete($id)
    {
        $obatMasuk = new ModelsObatMasuk();
        $obatMasuk->delete($id);
        return redirect('admin/obat-masuk');
    }
}

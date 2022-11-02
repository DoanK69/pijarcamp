<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $data['produk'] = $db->table('produk')->get()->getResult();
        return view('welcome_message', $data);
    }
    public function hapus($id)
    {
        $db = db_connect();
        $hapus = $db->query("delete from produk where id = '$id'");
        if($hapus==true){
            echo "<script>
            alert('Data Berhasil dihapus');
            window.location = '/';
            </script>";
        }
    }

    public function simpan()
    {
        $db = db_connect();
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'keterangan' => $this->request->getPost('keterangan'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah')
        ];

        $db->table('produk')->insert($data);
        return redirect()->to('/');
    }
}
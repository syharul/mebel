<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataBarang extends Seeder
{
    public function run()
    {
        $data = [
            'barang_title' => 'JERSEY DORTMUND HOME 2020/2021 ORIGINAL BNWT',
            'barang_description'    => 'selama masih bisa di order barang ready.
                                          silahkan cek langsung ketersedianan stok.
                                          barang berkualitas dijamin nyaman kalau di pakek.
                                          100% original.',  
            'barang_harga'    => '1.350.000',
            'barang_stok'    => '100 pcs',
            'barang_img'    => 'arsendal.jpg'
        ];

        $data = [
            'barang_title' => 'JERSEY JERMAN HOME 2020/2021 ORIGINAL BNWT',
            'barang_description'    => 'selama masih bisa di order barang ready.
                                          silahkan cek langsung ketersedianan stok.
                                          barang berkualitas dijamin nyaman kalau di pakek.
                                          100% original.',  
            'barang_harga'    => '1.650.000',
            'barang_stok'    => '100 pcs',
            'barang_img'    => 'jersey jerman.jpg'
        ];

     // Simple Queries
    //$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

    // Using Query Builder
    $this->db->table('barang')->insert($data);
    }
}

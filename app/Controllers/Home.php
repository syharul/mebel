<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $barangModel = model('App\Models\BarangModel');
        helper('date');
        
        $dataBarang['dataBarang'] = $barangModel->findAll();

        echo view('template/header.php');
        echo view('template/body.php', $dataBarang);
        echo view('template/footer.php');
        
    }
}

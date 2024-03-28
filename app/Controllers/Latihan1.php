<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Model;

class latihan1 extends BaseController
{
    public function index()
    {
        echo "selamat datang.. selamat belajar web programming II di UBSI";
    }
    public function penjumlahan($n1, $n2)
    {
        $model = model(\App\Models\Model_latihan1::class);
        $hasil = $model->jumlah($n1, $n2);
        $data['n1']=$n1;
        $data['n2']=$n2;
        $data['hasil']=$hasil;

        return view("view-latihan.php", $data);
    }
}
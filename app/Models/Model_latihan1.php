<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_latihan1 extends Model
{
    public $n1, $n2, $hasil;
    public function jumlah($nilai1 = null, $nilai2 = null)
    {
        $this->n1 = $nilai1;
        $this->n2 = $nilai2;
        $this->hasil = $this -> n1 + $this -> n2;
        return $this -> hasil;
    }
}
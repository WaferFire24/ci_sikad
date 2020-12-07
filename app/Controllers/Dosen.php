<?php


namespace App\Controllers;

use App\Models\ModelDosen;

class Dosen extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelDosen = new ModelDosen();
    }

    // inisialisasi method index
    public function index()
    {
        $data = [
            'title' => 'Dosen',
            'dosen' => $this->ModelDosen->allData(),
            'isi' => 'admin/dosen/v_index',
        ];
        return view('layout/v_wrapper', $data);
    }
}
<?php

namespace App\Controllers;

class Admin extends BaseController
{
    // inisialisasi method index 
    public function index()
    {
        $data = [
            'title' => 'Admin',
            'isi' => 'v_admin',
        ];
        return view('layout/v_wrapper', $data);
    }

    //--------------------------------------------------------------------

}
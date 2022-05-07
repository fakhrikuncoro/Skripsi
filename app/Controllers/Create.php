<?php 
namespace App\Controllers;

use App\Models\PenjadwalanModel;
class Create extends BaseController
{


    public function index()
    {
        $data = [
            'title' => 'Form Tambah Data Jurusan'
        ];

        return view('Tambahdata/index', $data);
    }
}
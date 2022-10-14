<?php

namespace App\Controllers;

use App\Models\PelajaranModel;
class detail extends BaseController
{
    protected $pelajaranmodel;
    public function __construct()
    {
        $this->pelajaranmodel = new PelajaranModel();
    }
    
    public function index($pelajaran)
    {
        $pelajaran = $this->pelajaranmodel->where(['kelas' =>$pelajaran ])->findAll();
        $data = [
            'title' => "Jadwal Pelajaran Kelas",
            'hari'=> $pelajaran,
            'mapel'=> $pelajaran,
            'jam'=> $pelajaran,
            'pelajaran' => $pelajaran,
            'dosen'=> $pelajaran,
            'slug'=> $pelajaran,
            
        ];

        

        return view('pages/detail', $data);
    
    } 
    
}

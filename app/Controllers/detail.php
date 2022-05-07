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
        
        $pelajaran = $this->pelajaranmodel->where (['slug'=> $pelajaran])->find();
        $data = [
            'title' => "Jadwal Pelajaran Kelas",
            'hari'=> $pelajaran ? $pelajaran[0]['hari'] : "Unkonwn",
            'mapel'=> $pelajaran ? $pelajaran[0]['mapel'] : "Unkonwn",
            'jam'=> $pelajaran ? $pelajaran[0]['jam'] : "Unkonwn",
            'pelajaran' => $pelajaran,
            'pembimbing'=> $pelajaran ? $pelajaran[0]['pembimbing'] : "Unkonwn",
            'nama_dosen'=> $pelajaran ? $pelajaran[0]['nama_dosen'] : "Unkonwn",
            'slug'=> $pelajaran ? $pelajaran[0]['slug'] : "Unkonwn",
            
        ];

        

        return view('pages/detail', $data);
    
    } 
    
}

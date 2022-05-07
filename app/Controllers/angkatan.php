<?php

namespace App\Controllers;

use App\Models\AngkatanModel;

class angkatan extends BaseController 
{
    protected $angkatanmodel;
    public function __construct()
    {
        $this->angkatanmodel = new AngkatanModel();
    }
    
    public function index($angkatan)
    {
        
        $angkatan = $this->angkatanmodel->where(['slug' => $angkatan])->findAll();
        $data = [
            'title' => "angkatan Kelas",
            'angkatan'=> $angkatan ? $angkatan[0]['angkatan'] : "Unkonwn",
            'pembimbing'=> $angkatan ? $angkatan[0]['pembimbing'] : "Unkonwn",
            'kelas'=> $angkatan ? $angkatan[0]['kelas'] : "Unkonwn",
            'slug'=> $angkatan ? $angkatan[0]['slug'] : "Unkonwn",
            'angkatan' => $angkatan
            
        ];

        return view('pages/angkatan', $data);

    }

        public function delete ($id_angkatan)
        {
            $this->AngkatanModel->delete($id_angkatan);
            return redirect() -> to ('/angkatan');
        }
}


        //$db = \Config\Database::connect();
        // $komik = $db->query('SELECT * FROM skripsi');
        // foreach($komik->getResultArray()as $row){
        //     d($row);
        // }
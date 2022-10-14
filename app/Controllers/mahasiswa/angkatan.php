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
    
    public function index()
    {
        
        $angkatan = $this->angkatanmodel->findAll();

        $data = [
            'title' => "Jurusan Kampus",
            'jurusan' => $angkatan,
            'angkatan' => $angkatan,
            'pembimbing'=> $angkatan,
            'kelas' => $angkatan,
            'slug' => $angkatan
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
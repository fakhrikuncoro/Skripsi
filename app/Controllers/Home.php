<?php

namespace App\Controllers;

use App\Models\JurusanModel;
use phpDocumentor\Reflection\Types\This;

class Home extends BaseController 
{
    protected $JurusanModel;
    public function __construct()
    {
        $this->JurusanModel = new JurusanModel();
    }
    
    public function index()
    {
        
        $jurusan = $this->JurusanModel->findAll();

        $data = [
            'title' => "Jurusan Kampus",
            'jurusan' => $jurusan
        ];

        return view('pages/home', $data);

    } 
    public function delete ($id_jurusan)
        {
            $this->JurusanModel->delete($id_jurusan); 
            return redirect() -> to ('/home');
        }
}


        //$db = \Config\Database::connect();
        // $komik = $db->query('SELECT * FROM skripsi');
        // foreach($komik->getResultArray()as $row){
        //     d($row);
        // }
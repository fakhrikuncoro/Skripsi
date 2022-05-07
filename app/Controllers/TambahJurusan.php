<?php

namespace App\Controllers;

use App\Models\JurusanModel;
use App\Models\AngkatanModel;

class TambahJurusan extends BaseController
{
    protected $JurusanModel;
    protected $AngkatanModel;
    public function __construct()
    {
        $this->JurusanModel = new JurusanModel();
        $this->AngkatanModel = new AngkatanModel();
    }
    
    public function index()
    {
        
        $jurusan = $this->JurusanModel->findAll();

        $data = [
            'title' => "tambah jurusan",
            'jurusan'=>$jurusan
        ];

        return view('pages/tambah_jurusan', $data);

    } 
   
    public function save ()
    {
        $slug = url_title($this->request->getVar('jurusan'), '-', true);
        $this->JurusanModel->save([
            'jurusan' => $this->request->getVar('jurusan'),
            'slug' => $slug
            
        ]);
        $this->AngkatanModel->save([
            'angkatan' => $this->request->getVar('angkatan'),
            'pembimbing' => $this->request->getVar('pembimbing'),
            'slug' => $slug
            
        ]);
        return redirect() -> to ('/home');
    }  
    public function delete ($jurusan)
        {
            $this->JurusanModel->delete($jurusan); 
            return redirect() -> to ('/home');
        }
}
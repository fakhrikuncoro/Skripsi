<?php

namespace App\Controllers;

use App\Models\PelajaranModel;

class TambahPelajaran extends BaseController
{
    protected $pelajaran;
    public function __construct()
    {
        $this->PelajaranModel = new PelajaranModel();
    }
    
    public function index()
    {
        
        $pelajaran = $this->PelajaranModel->findAll();

        $data = [
            'title' => "tambah pelajaran",
            'pelajaran'=>$pelajaran,
            'mapel' => $this->request->getVar('mapel'),
            'hari' => $this->request->getVar('hari'),
            'jam' => $this->request->getVar('jam'),
            'jenis' => $this->request->getVar('jenis'),
            'kelas' => $this->request->getVar('kelas'),
        ];

        return view('pages/tambah_pelajaran', $data);

    } 
   
    public function save ()
    {
        $slug = url_title($this->request->getVar('pembimbing'), '-', true);

        $this->PelajaranModel->save([
            'mapel' => $this->request->getVar('mapel'),
            'hari' => $this->request->getVar('hari'),
            'jam' => $this->request->getVar('jam'),
            'jenis' => $this->request->getVar('jenis'),
            'dosen' => $this->request->getVar('nama_dosen'),
            'kelas' => $this->request->getVar('kelas'),
            'slug' => $slug
            
        ]);
        return redirect() -> to ('/home');
    }  
    public function delete ($pelajaran)
        {
            $this->PelajaranModel->delete($pelajaran); 
            return redirect() -> to ('/home');
        }
}
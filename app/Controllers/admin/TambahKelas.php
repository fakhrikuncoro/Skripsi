<?php

namespace App\Controllers;

use App\Models\AngkatanModel;

class TambahKelas extends BaseController
{
    protected $AngkatanModel;
    public function __construct()
    {
        $this->AngkatanModel = new AngkatanModel();
    }
    
    public function index()
    {
        $AngkatanModel = $this->AngkatanModel->findAll();
        $keyword = $this->request->getvar('keyword');
        if ($keyword) {
            $AngkatanModel = $this-> AngkatanModel -> search($keyword);
        } else {
            $AngkatanModel = $this-> AngkatanModel;
        }
        
        $angkatan = $this->AngkatanModel->findAll();

        $data = [
            'title' => "Jurusan Kampus",
            'jurusan' => $angkatan,
            'angkatan' => $angkatan,
            'pembimbing'=> $angkatan,
            'slug' => $angkatan,
            'kelas' =>$this->AngkatanModel->paginate(2,'tambah_kelas'),
            'pager'=>$this->AngkatanModel->pager
        ];
        return view('pages/tambah_kelas', $data);

    }  
    public function save ()
    {
        $db = \Config\Database::connect();
        if ($db->table('angkatan')->where('kelas', $this->request->getVar('kelas'))->countAllResults(false))
            return redirect()-> to ('/tambahkelas');
        $slug = url_title($this->request->getVar('kelas'), true);
        $this->AngkatanModel->save([
            'jurusan' => $this->request->getVar('jurusan'),
            'angkatan' => $this->request->getVar('angkatan'),
            'pembimbing' => $this->request->getVar('pembimbing'),
            'kelas' => $this->request->getVar('kelas'),
            'slug' => $slug
            
        ]);
        return redirect() -> to ('/TambahKelas');
    }  
    public function delete ($jurusan)
        {
            $this->AngkatanModel->delete($jurusan); 
            return redirect() -> to ('/TambahKelas');
        }
}
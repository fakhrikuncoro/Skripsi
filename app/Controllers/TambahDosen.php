<?php

namespace App\Controllers;

use App\Models\DosenModel;

class TambahDosen extends BaseController
{
    protected $DosenModel;
    public function __construct()
    {
        $this->DosenModel = new DosenModel();
    }
    
    public function index()
    {
        
        //$dosen = $this->DosenModel->findAll();
        $model =  $this->DosenModel;
        $data = [
            'title' => "tambah dosen",
            //'dosen'=>$dosen
            'dosen'=>$model->paginate(2),
            'pager'=>$model->pager
        ];

        return view('pages/tambah_dosen', $data);

    } 
   
    public function save ()
    {
        $this->DosenModel->save([
            'nama_dosen' => $this->request->getVar('nama_dosen'),true,
            'kontak' => $this->request->getVar('kontak'),true,
            'email' => $this->request->getVar('email'),true
            
        ]);
        return redirect() -> to ('/home');
    }  
    public function delete ($dosen)
        {
            $this->DosenModel->delete($dosen); 
            return redirect() -> to ('/home');
        }
}
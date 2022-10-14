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
        $DosenModel = $this->DosenModel->findAll();
        $keyword = $this->request->getvar('keyword');
        if ($keyword) {
            $DosenModel = $this-> DosenModel -> search($keyword);
        } else {
            $DosenModel = $this-> DosenModel;
        }
        
        //$dosen = $this->DosenModel->findAll();
        $model =  $this->DosenModel;
        $data = [
            'title' => "tambah dosen",
            //'dosen'=>$dosen
            'dosen'=>$this->DosenModel->paginate(2,'tambah_dosen'),
            'pager'=>$this->DosenModel->pager
        ];

        return view('pages/tambah_dosen', $data);

    } 
   
    public function save ()
    {
        if (!$this->validate([
            'kontak'=> 'required|min_length[11]|max_length[13]',
            'email'=> 'required|is_unique[dosen.email]'
            ])) {
                return redirect()->to('/tambahdosen');
            }
        $db = \Config\Database::connect();
        if ($db->table('dosen')->where('email', $this->request->getVar('email'))->countAllResults(false))
            return redirect()-> to ('/tambahdosen');

            $this->DosenModel->save([
                'nama_dosen' => $this->request->getVar('nama_dosen'),true,
                'kontak' => $this->request->getVar('kontak'),true,
                'email' => $this->request->getVar('email'),true
                
            ]);
        return redirect() -> to ('/tambahdosen');
    }  
    public function delete ($dosen)
        {
            $this->DosenModel->delete($dosen); 
            return redirect() -> to ('/tambahdosen');
        }
}
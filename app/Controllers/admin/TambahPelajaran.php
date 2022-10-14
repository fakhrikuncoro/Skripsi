<?php

namespace App\Controllers;

use App\Models\PelajaranModel;
use phpDocumentor\Reflection\Types\This;

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
        $keyword = $this->request->getvar('keyword');
        if ($keyword) {
            $jadwal = $this-> PelajaranModel -> search($keyword);
        } else {
            $jadwal = $this-> PelajaranModel;
        }
        $data = [
            'title' => "tambah pelajaran",
            'pelajaran'=>$pelajaran,
            'mapel' => $this->request->getVar('mapel'),
            'hari' => $this->request->getVar('hari'),
            'jam' => $this->request->getVar('jam'),
            'jenis' => $this->request->getVar('jenis'),
            'kelas' => $this->request->getVar('kelas'),
            'ruangan' => $this->request->getVar('ruangan'),
            'dosen' => $this->request->getVar('dosen'),
            'pelajaran' =>$jadwal->paginate(2,'tambah_pelajaran'),
            'pager'=>$jadwal->pager
        ];

        return view('pages/tambah_pelajaran', $data);

    } 
   
    public function save ()
    {
        $db = \Config\Database::connect();
        if ($db->table('pelajaran')->where('jam', $this->request->getVar('jam'))->where('dosen', $this->request->getVar('dosen'))->where('hari', $this->request->getVar('hari'))->countAllResults(false))
            return redirect()-> to ('/tambahpelajaran');

        $slug = url_title($this->request->getVar('kelas'), '-', true);
        $this->PelajaranModel->save([
            'mapel' => $this->request->getVar('mapel'),
            'hari' => $this->request->getVar('hari'),
            'jam' => $this->request->getVar('jam'),
            'jenis' => $this->request->getVar('jenis'),
            'dosen' => $this->request->getVar('dosen'),
            'kelas' => $this->request->getVar('kelas'),
            'ruangan' => $this->request->getVar('ruangan'),
            'slug' => $slug
            
        ]);
        return redirect() -> to ('/tambahpelajaran');
    }  
    public function delete ($pelajaran)
        {
            $this->PelajaranModel->delete($pelajaran); 
            return redirect() -> to ('/tambahpelajaran');
        }
}
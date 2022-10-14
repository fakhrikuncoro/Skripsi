<?php

namespace App\Models;

use CodeIgniter\Model;

class PelajaranModel extends Model
{
    protected $table      = 'pelajaran';
    protected $useTimeStamps = true ;
    protected $primaryKey= 'id_pelajaran';
    protected $allowedFields = ['id_pelajaran','dosen','pembimbing','mapel','hari','kelas','ruangan','jam','jenis','semester','slug'];

    public function search($keyword)
    {
        return $this-> table ('jadwal')-> like('mapel', $keyword);
    }
}
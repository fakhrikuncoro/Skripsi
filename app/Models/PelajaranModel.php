<?php

namespace App\Models;

use CodeIgniter\Model;

class PelajaranModel extends Model
{
    protected $table      = 'pelajaran';
    protected $useTimeStamps = true ;
    protected $primaryKey= 'id_pelajaran';
    protected $allowedFields = ['id_pelajaran','nama_dosen','pembimbing','mapel','hari','kelas','jam','jenis','semester','slug'];
}
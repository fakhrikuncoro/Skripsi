<?php

namespace App\Models;

use CodeIgniter\Model;

class AngkatanModel extends Model
{
    protected $table            = 'angkatan';
    protected $useTimeStamps    = true ;
    protected $primaryKey       = 'id_kelas';
    protected $allowedFields    = ['jurusan','angkatan','kelas','pembimbing','slug'];
}
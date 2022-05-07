<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table      = 'jurusan';
    protected $useTimeStamps = true ;
    protected $primaryKey= 'id_jurusan';
    protected $allowedFields = ['id_jurusan','jurusan','slug'];
}
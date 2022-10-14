<?php 

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table ='user';
    protected $primarykey ='id';
    protected $returnType ='object';
    protected $allowedFields = [
        'username',
        'email',
        'password',
        'akses',
    ];
}
?>
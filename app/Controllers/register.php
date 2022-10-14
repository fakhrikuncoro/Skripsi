<?php

namespace App\Controllers;

use Config\Email;

class register extends BaseController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new \App\Models\User();
    }

    public function index()
    {
        return view("login/register");
    }

    public function insert_user()
    {
        $user = $this->request->getPost("user"); 
        $email = $this->request->getPost("email"); 
        $pass = $this->request->getPost("pass"); 

        $akses = $this->request->getPost("akses");
        $pass_ens = password_hash($pass, PASSWORD_DEFAULT);

        $data = ([
            "username" => $user,
            "email" => $email,
            "password" => $pass_ens,
            "akses" => $akses
        ]); 
        $tambah = $this->userModel->insert($data);
        if ($tambah) {
            return redirect()->to(base_url("/login"));
        }else {
            return redirect()->to(base_url("/register"));
        }
    }
    
}
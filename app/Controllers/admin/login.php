<?php

namespace App\Controllers;

use Config\Email;

class login extends BaseController
{
    private $userModel;
    private $session;
    public function __construct()
    {
        $this->userModel = new \App\Models\User();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view("login/login");
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
    public function auth()
    {
        $email = $this->request->getPost("email"); 
        $pass = $this->request->getPost("pass");

        $cek_data = $this->userModel->where("email", $email)->first();

        if($cek_data ->akses == 1){
            return view ('/admin/angkatan');

        } elseif ($cek_data->akses == 2 ){
            return view ('mahasiswa/angkatan');

        } else {
            return view("/login");   
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
    
}
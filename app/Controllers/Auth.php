<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Hash;
use PHPUnit\Util\Xml\Validator;

class Auth extends BaseController
{
    public function __construct()
    {   
        helper(['url', 'form']);
    }
    public function index() {
        return view ('auth/login2');
    }
    public function register(){
        return view('auth/register');
    }
    public function save () {
        // $validation = $this->validate([
        //     'name' => 'required',
        //     'email' => 'required|valid_email|is_unique[users.email]',
        //     'password' => 'required|min_length[5]|max_length[12]',
        //     'cpassword' => 'required|min_length[5]|max_length[12]|matches[password]'

        // ]);

        $validation = $this->validate([
            'name'=> [
                'rules'=>'required',
                'errors'=>[
                    'required' => 'Your full name required'
                ]
                ],
            'email' => [
                'rules'=> 'required|valid_email|is_unique[users.email]',
                'errors'=> [
                    'required' => 'Email is required',
                    'valid_email' => 'You must enter a valid email',
                    'is_unique' => 'Email already registered'
                ]
                ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors'=> [
                    'required' => 'Password is required',
                    'min_length' => 'Password must have at least 5 characters',
                    'max_length' => 'Password must not have more than 12 characters'
                ]
                ],
            'cpassword' => [
                'rules' => 'required|min_length[5]|max_length[12]|matches[password]',
                'errors' => [
                    'required' => 'Confirm password is required',
                    'min_length' => 'Password must have at least 5 characters',
                    'max_length' => 'Password must not have more than 12 characters',
                    'matches' => 'Confirm password not matches to password'
                ]
            ]        

                ]);

        if(!$validation){
            return view('auth/register',['validation'=>$this->validator]);

        } else {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $values = [
                'name' => $name,
                'email' => $email,
                'password' => Hash::make ($password),
            ];

            $usersModel = new \App\Models\UsersModel();
            $query = $usersModel->insert($values);
            if(!$query) {
                return redirect()->back()->with('fail', 'Something went wrong');
                // return redirect()->to('register')->with('fail', 'Something went wrong');
            } else {
                return redirect()->to('/register')->with('success', 'You are now registered');
            }
        }
    }

    function check(){
        $validation = $this->validate([
            'email'=>[
                'rules'=> 'required|valid_email|is_not_unique[users.email]',
                'errors'=> [
                    'required' => 'Email is required',
                    'valid_email' => 'Enter a valid email address',
                    'is_not_unique' => 'This email is not registered'
                ]
                ],
            'password'=>[
                'rules'=>'required|min_length[5]|max_length[12]',
                'errors'=>[
                    'required'=>'Password is required',
                    'min_length'=>'Password must have at least 5 characters',
                    'max_length'=>'Password must not have more than 12 characters'
                ]
            ]
            ]);
            if(!$validation){
                return view ('auth/login2',['validation'=>$this->validator]);
            }else{
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $usersModel = new \App\Models\UsersModel();
                $user_info = $usersModel->where('email', $email)->first();
                $check_password = Hash::check($password, $user_info['password']);

                if(!$check_password){
                    session()->setFlashdata('fail', 'Incorrect password');
                    return redirect()->to('/auth')->withInput();
                }else{
                    $user_id = $user_info['id'];
                    session()->set('loggedUser', $user_id);
                    return redirect()->to('/dashboard');
                }
            }
    }
}
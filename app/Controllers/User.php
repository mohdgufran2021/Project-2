<?php

namespace App\Controllers;

use App\Models\UserModel;
use Faker\Core\File;

class User extends BaseController
{


    public function login()
    {
        $session = \Config\Services::session();
        if ($session->get('is_logged_in')) {
            return redirect()->to('/user/profile');
        }
        $data = ['title' => 'login form', 'success' => false, 'error' => false];
        if ($this->request->getMethod() == 'post' && $this->validate([
                'email' => 'required|valid_email',
                'password' => 'required',
            ])) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $obj = new UserModel();
            $result = $obj->where(['email' => $email, 'password' => md5($password)])
                ->get()->getResult('array');
            if (count($result) > 0) {
                /* echo '<pre>';
                 print_r($result);die();*/
                $session->set(['is_logged_in' => true, 'user_id' => $result[0]['id']]);
                $data['success'] = true;
                return redirect()->to('/user/profile');
            } else {
                $data['error'] = true;
            }
        }
        echo view('templates/header', $data);
        echo view('pages/login', $data);
        echo view('templates/footer', $data);
    }


    public function profile()
    {
        $session = session();
        if (!$session->get('is_logged_in')) {
            return redirect()->to('/user/login');
        }
        $userid = $session->get('user_id');
        $obj = new UserModel();
        $user = $obj->find($userid);
        $data = ['title' => 'Profile', 'user' => $user];
        echo view('templates/header', $data);
        echo view('pages/profile', $data);
        echo view('templates/footer', $data);
    }


    public function register()
    {
        helper('form');
        $data = ['title' => 'registration form', 'success' => false];
        if ($this->request->getMethod() == 'post' && $this->validate([
                'name' => 'required|min_length[3]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[4]',
                'confirm_password' => 'required|matches[password]',
                //'image' => ''
            ])) {

            $insert = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => md5($this->request->getPost('password')),
        ];
            $file = $this->request->getFile('image');
            if ($file->isValid()) {
                $newName = $file->getRandomName();
                $moved = $file->move(WRITEPATH . '/upload', $newName);

                if ($moved) {
                   $insert['image']=$newName;
                }
            }

            $obj = new UserModel();
            if ($obj->insert($insert)) {
                $data['success'] = true;
            }

        }
        echo view('templates/header', $data);
        echo view('pages/register', $data);
        echo view('templates/footer', $data);
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/user/login');
    }


    public function edit_profile()
    {
        $data = ['title' => 'Edit Profile', 'success' => false, 'error' => false];
        $session = session();
        if (!$session->get('is_logged_in')) {
            return redirect()->to('/user/login');
        }
        $obj = new UserModel();
        $userid = $session->get('user_id');
        if ($this->request->getMethod() == 'post' && $this->validate([
                'name' => 'required|min_length[3]', 'email' => 'required|valid_email|is_unique[users.email,users.id,' . $userid . ']'
            ], ['email' => [
                'is_unique' => 'Email is Already Taken.'
            ]])) {
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            if ($obj->update($userid, ['name' => $name, 'email' => $email])) {
                $data['success'] = true;
            } else {
                $data['error'] = true;
            }
        }
        $user = $obj->find($userid);
        $data['user'] = $user;
        echo view('templates/header', $data);
        echo view('pages/edit_profile', $data);
        echo view('templates/footer', $data);
    }

}

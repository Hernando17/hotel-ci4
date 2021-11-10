<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AuthModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Hotel | Login',
        ];

        return view('login', $data);
    }

    public function login()
    {
        $model = new AuthModel;
        $table = 'users';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($username, $table);
        // var_dump($row);

        if ($row == NULL) {
            session()->setFlashdata('pesan', 'username anda salah');
            return redirect()->to('/login/index');
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'level' => $row->level,
                'username' => $row->username,
                'slug' => $row->slug,
            );
            session()->set($data);
            session()->setFlashdata('pesan', 'Berhasil Login');
            return redirect()->to('/dashboard/index');
        };
        session()->setFlashdata('pesan', 'Password salah');
        return redirect()->to('/login/index');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan', 'berhasil logout');
        return redirect()->to('/login/index');
    }
}

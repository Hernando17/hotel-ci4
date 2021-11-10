<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Hotel | Register',
            'validation' => \Config\Services::validation(),
        ];

        return view('register', $data);
    }

    public function register()
    {
        //validasi input
        if (!$this->validate([
            'username' => [
                'rules'  => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username is Required',
                    'is_unique' => 'Username Registered',
                ]
            ],
            'nik' => [
                'rules'  => 'required|is_unique[users.nik]',
                'errors' => [
                    'required' => 'NIK is Required',
                    'is_unique' => 'NIK Registered'
                ]
            ],
            'jenis_kelamin' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus diisi',
                ]
            ],
            'password' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'password harus diisi',
                ]
            ],
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/Home/create/')->withInput()->with('validation', $validation);
            return redirect()->to('/register/index')->withInput();
        }
        $slug = url_title($this->request->getVar('username'), '-', true);
        $this->UserModel->save([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'nik' => $this->request->getVar('nik'),
            'level' => 'member',
            'slug' => $slug,
        ]);

        session()->setFlashdata('pesan', 'Data pengguna berhasil ditambahkan');

        return redirect()->to('/login/index');
    }
}

<?php

namespace App\Controllers;

use App\Models\MessageModel;

class Home extends BaseController
{
    protected $MessageModel;
    public function __construct()
    {
        $this->MessageModel = new MessageModel();
    }

    public function index()
    {
        $data = [
            'title' => 'The Esthetic | Home',
        ];

        return view('home/index', $data);
    }

    public function message()
    {
        //validasi input
        if (!$this->validate([
            'name' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Name is Required',
                ]
            ],
            'phone' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Phone Number is Required',
                ]
            ],
            'email' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Email is Required',
                ]
            ],
            'message' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Message is Required',
                ]
            ],
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/Home/create/')->withInput()->with('validation', $validation);
            return redirect()->to('/')->withInput();
        }
        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->MessageModel->save([
            'name' => $this->request->getVar('name'),
            'phone' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email'),
            'message' => $this->request->getVar('message'),
            'slug' => $slug,
        ]);

        session()->setFlashdata('pesan', 'Message sent successfully');

        return redirect()->to('/');
    }
}

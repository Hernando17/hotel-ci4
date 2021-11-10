<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoomModel;
use App\Models\CountModel;
use App\Models\BookModel;
use App\Models\MessageModel;

class Dashboard extends BaseController
{
    protected $UserModel;
    protected $BookModel;
    protected $CountModel;
    protected $RoomModel;
    protected $MessageModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->RoomModel = new RoomModel();
        $this->BookModel = new BookModel();
        $this->CountModel = new CountModel();
        $this->MessageModel = new MessageModel();
    }

    public function index()
    {
        $data = [
            'title' => 'The Esthetic | Dashboard',
            'tot_book' => $this->CountModel->tot_book(),
            'tot_room' => $this->CountModel->tot_room(),
        ];

        return view('dashboard/index', $data);
    }

    public function user()
    {
        $data = [
            'title' => 'The Esthetic | User Account',
            'user' => $this->UserModel->getUser()
        ];

        //jika buku tidak ada di tabel
        if (empty($data['user'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User ' . $slug . ' not found');
        }

        return view('dashboard/user', $data);
    }

    public function useredit($slug)
    {
        $data = [
            'title' => 'The Esthetic | User Edit',
            'validation' => \Config\Services::validation(),
            'user' => $this->UserModel->getUser($slug)
        ];

        return view('dashboard/useredit', $data);
    }

    public function userupdate($id)
    {
        //cek username
        $userLama = $this->UserModel->getUser($this->request->getVar('slug'));
        if ($userLama['username'] == $this->request->getVar('username')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[users.username]';
        }
        // cek nik
        $userLama = $this->UserModel->getUser($this->request->getVar('slug'));
        if ($userLama['nik'] == $this->request->getVar('nik')) {
            $rule_nik = 'required';
        } else {
            $rule_nik = 'required|is_unique[users.nik]';
        }

        if (!$this->validate([
            'level' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Level is Required'

                ]
            ],
            'username' => [
                'rules'  => $rule_username,
                'errors' => [
                    'required' => 'Username is Required',
                    'is_unique' => 'Username already used',
                ]
            ],
            'nik' => [
                'rules'  => $rule_nik,
                'errors' => [
                    'required' => 'NIK is Required',
                    'is_unique' => 'NIK already used',
                ]
            ],
            'jenis_kelamin' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Gender is Required'

                ]
            ],
        ])) {
            return redirect()->to('/dashboard/useredit/' . $this->request->getVar('slug'))->withInput();
        }

        $slug = url_title($this->request->getVar('username'), '-', true);
        $this->UserModel->save([
            'id' => $id,
            'level' => $this->request->getVar('level'),
            'username' => $this->request->getVar('username'),
            'nik' => $this->request->getVar('nik'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data pengguna berhasil diubah');

        return redirect()->to('/dashboard/user');
    }

    public function userdelete($id)
    {
        $this->UserModel->delete($id);
        session()->setFlashdata('pesan', 'User data deleted successfully');
        return redirect()->to('/dashboard/user');
    }

    public function message()
    {
        $data = [
            'title' => 'The Esthetic | Message',
            'message' => $this->MessageModel->getMessage()
        ];

        return view('dashboard/message', $data);
    }

    public function messagedetail($slug)
    {
        $data = [
            'title' => 'The Esthetic | Message Detail',
            'message' => $this->MessageModel->getMessage($slug)
        ];

        //jika buku tidak ada di tabel
        if (empty($data['message'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Message ' . $slug . ' not found');
        }

        return view('dashboard/messagedetail', $data);
    }

    public function messagedelete($id)
    {
        $this->MessageModel->delete($id);
        session()->setFlashdata('pesan', 'Data pengguna berhasil dihapus');
        return redirect()->to('/dashboard/message');
    }

    public function room()
    {
        $data = [
            'title' => 'The Esthetic | Room',
            'room' => $this->RoomModel->getRoom()
        ];

        return view('dashboard/room', $data);
    }

    public function roomcreate()
    {
        $data = [
            'title' => 'The Esthetic | Room Create',
            'validation' => \Config\Services::validation(),
        ];

        return view('dashboard/roomcreate', $data);
    }

    public function roomadd()
    {
        //validasi input
        if (!$this->validate([
            'number' => [
                'rules'  => 'required|is_unique[rooms.number]',
                'errors' => [
                    'required' => 'Username harus diisi',
                    'is_unique' => 'Username sudah terdaftar',
                ]
            ],
            'class' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Role harus diisi'

                ]
            ],

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/Home/create/')->withInput()->with('validation', $validation);
            return redirect()->to('/dashboard/room/create')->withInput();
        }

        $slug = url_title($this->request->getVar('number'), '-', true);
        $this->RoomModel->save([
            'number' => $this->request->getVar('number'),
            'class' => $this->request->getVar('class'),
            'floor' => $this->request->getVar('floor'),
            'status' => $this->request->getVar('status'),
            'slug' => $slug,
        ]);

        session()->setFlashdata('pesan', 'Room added successfully');

        return redirect()->to('/dashboard/room');
    }

    public function roomedit($slug)
    {
        $data = [
            'title' => 'The Esthetic | Room Edit',
            'validation' => \Config\Services::validation(),
            'room' => $this->RoomModel->getRoom($slug)
        ];

        return view('dashboard/roomedit', $data);
    }

    public function roomupdate($id)
    {
        //cek number
        $roomLama = $this->RoomModel->getRoom($this->request->getVar('slug'));
        if ($roomLama['number'] == $this->request->getVar('number')) {
            $rule_number = 'required';
        } else {
            $rule_number = 'required|is_unique[rooms.number]';
        }

        if (!$this->validate([
            'status' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Status is Required'

                ]
            ],
            'floor' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Floor is Required'

                ]
            ],
            'class' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Class is Required'

                ]
            ],
            'number' => [
                'rules'  => $rule_number,
                'errors' => [
                    'required' => 'Number is Required',
                    'is_unique' => 'Number is Registered',
                ]
            ],
        ])) {
            return redirect()->to('/dashboard/room/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $slug = url_title($this->request->getVar('number'), '-', true);
        $this->RoomModel->save([
            'id' => $id,
            'status' => $this->request->getVar('status'),
            'number' => $this->request->getVar('number'),
            'class' => $this->request->getVar('class'),
            'slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Room data registered successfully');

        return redirect()->to('/dashboard/room');
    }

    public function roomdelete($id)
    {
        $this->RoomModel->delete($id);
        session()->setFlashdata('pesan', 'Room deleted');
        return redirect()->to('/dashboard/room');
    }

    public function book()
    {
        $data = [
            'title' => 'The Esthetic | Book History',
            'book' => $this->BookModel->getBook(),
        ];

        return view('dashboard/book', $data);
    }

    public function bookcreate()
    {
        $data = [
            'title' => 'The Esthetic | Book Create',
            'room' => $this->RoomModel->getRoom(),
            'validation' => \Config\Services::validation(),
        ];

        return view('dashboard/bookcreate', $data);
    }

    public function bookadd()
    {
        //validasi input
        if (!$this->validate([
            'name' => [
                'rules'  => 'required|is_unique[books.name]',
                'errors' => [
                    'required' => 'Username is Required',
                    'is_unique' => 'Username already in book',
                ]
            ],
            'number' => [
                'rules'  => 'required|is_unique[books.number]',
                'errors' => [
                    'required' => 'Room Number is Required',
                    'is_unique' => 'Room Number already in book',
                ]
            ],

        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/Home/create/')->withInput()->with('validation', $validation);
            return redirect()->to('/dashboard/book/create')->withInput();
        }

        $slug = url_title($this->request->getVar('number'), '-', true);
        $this->BookModel->save([
            'number' => $this->request->getVar('number'),
            'name' => $this->request->getVar('name'),
            'checkin' => $this->request->getVar('checkin'),
            'checkout' => $this->request->getVar('checkout'),
            'slug' => $slug,
        ]);

        session()->setFlashdata('pesan', 'Booking successfully');

        return redirect()->to('/dashboard/index');
    }

    public function bookdelete($id)
    {
        $this->BookModel->delete($id);
        session()->setFlashdata('pesan', 'Book History deleted');
        return redirect()->to('/dashboard/book');
    }
}

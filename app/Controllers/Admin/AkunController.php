<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\AccountModel;
use App\Models\AdminModel;
use App\Models\EventModel;

class AkunController extends BaseController
{
    public function index(): string
    {
        $accountModel = new AccountModel();

        // Ambil semua data account
        $data = [
            "activeMenu" => "akun",
            'accounts' => $accountModel->findAll()
        ];
        
        return view('admin/akun', $data);
    }

    public function postAdd()
    {
        $validation = \Config\Services::validation();

        // Aturan validasi
        $validation->setRules([
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[accounts.username]',
                'errors' => [
                    'required' => 'Username harus diisi.',
                    'is_unique' => 'Username sudah terdaftar.',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'Password harus memiliki minimal 8 karakter.',
                ],
            ],
            'confirm_password' => [
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi Password harus diisi.',
                    'matches' => 'Konfirmasi Password tidak cocok dengan Password.',
                ],
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[accounts.email]',
                'errors' => [
                    'required' => 'Email harus diisi.',
                    'valid_email' => 'Email tidak valid.',
                    'is_unique' => 'Email sudah terdaftar.',
                ],
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required|in_list[admin,operator]',
                'errors' => [
                    'required' => 'Level harus diisi.',
                    'in_list' => 'Level harus salah satu dari: admin, operator.',
                ],
            ],
        ]);

        if (!$this->validate($validation->getRules())) {
            // Ambil pesan error
            $errors = $validation->getErrors();
            $firstError = array_values($errors)[0]; // Ambil error pertama

            return redirect()->back()->withInput()->with('error', "Failed! " . $firstError);
        }

        $accountModel = new AccountModel();
        $accountData = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'email' => $this->request->getPost('email'),
            'level' => $this->request->getPost('level'),
        ];

        // Simpan data akun
        $accountModel->save($accountData);

        return redirect()->to('/admin/akun')->with('success', 'Success! User berhasil ditambahkan');
    }

    public function postEdit()
    {

        $validation = \Config\Services::validation();

        // Aturan validasi
        $validation->setRules([
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[accounts.username,id,{id}]',
                'errors' => [
                    'required' => 'Username harus diisi.',
                    'is_unique' => 'Username sudah terdaftar.',
                ],
            ],
            'id' => [
                'label' => 'id',
                'rules' => 'required',
                'errors' => [
                    'required' => 'id harus diisi.',
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'permit_empty|min_length[8]',
                'errors' => [
                    'min_length' => 'Password harus memiliki minimal 8 karakter.',
                ],
            ],
            'confirm_password' => [
                'label' => 'Konfirmasi Password',
                'rules' => 'permit_empty|matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak cocok dengan Password.',
                ],
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[accounts.email,id,{id}]',
                'errors' => [
                    'required' => 'Email harus diisi.',
                    'valid_email' => 'Email tidak valid.',
                    'is_unique' => 'Email sudah terdaftar.',
                ],
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required|in_list[admin,operator]',
                'errors' => [
                    'required' => 'Level harus diisi.',
                    'in_list' => 'Level harus salah satu dari: admin, operator.',
                ],
            ],
        ]);
        $id = $this->request->getPost(index: 'id');

        if (!$this->validate($validation->getRules())) {
            // Ambil pesan error
            $errors = $validation->getErrors();
            $firstError = array_values($errors)[0]; // Ambil error pertama

            return redirect()->back()->withInput()->with('error', "Failed! " . $firstError);
        }

        
        $accountModel = new AccountModel();
        $accountData = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'level' => $this->request->getPost('level'),
        ];

        if ($this->request->getPost('password')) {
            $accountData['password'] = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
        }

        // Update data akun
        $accountModel->update($id, $accountData);

        return redirect()->to('/admin/akun')->with('success', 'Success! User berhasil diupdate');
    }


public function postDelete()
    {
        // Mendapatkan ID dari request
        $id = $this->request->getPost('id');

        $accountModel = new AccountModel();
        // Menghapus data berdasarkan ID
        $accountModel->delete($id);

        // Redirect kembali ke halaman size list dengan flash message
        return redirect()->to('/admin/akun')->with('success', 'Success! data berhasil dihapus.');
    }

}
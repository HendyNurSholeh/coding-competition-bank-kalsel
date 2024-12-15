<?php

namespace App\Controllers\Operator;
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
        
        return view('operator/akun', $data);
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

        return redirect()->to('/operator/akun')->with('success', 'Success! User berhasil ditambahkan');
    }

    public function postEdit()
{
    $validation = \Config\Services::validation();

        // Aturan validasi
        $validation->setRules([
            'company_name' => [
                'label' => 'Nama perusahaan',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Perusahaan harus diisi.',
                ],
            ],
            // 'username' => 'required|is_unique[accounts.username]',
            // 'prov' => [
            //     'label' => 'Provinsi',
            //     'rules' => 'permit_empty',
            // ],
            // 'kota' => [
            //     'label' => 'Kab/Kota',
            //     'rules' => 'permit_empty',
            // ],
            // 'kec' => [
            //     'label' => 'Kecamatan',
            //     'rules' => 'permit_empty',
            // ],
            // 'kelurahan' => [
            //     'label' => 'Kelurahan',
            //     'rules' => 'permit_empty',
            // ],
            // 'pic' => [
            //     'label' => 'PIC',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'PIC harus diisi.',
            //     ],
            // ],
            // 'no_telp_pic' => [
            //     'label' => 'No. Telp PIC',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'No. Telp PIC harus diisi.',
            //     ],
            // ],
            // 'password' => 'required|min_length[8]',
        ]);

        if (!$this->validate($validation->getRules())) {
            // Ambil pesan error
            $errors = $validation->getErrors();
            $firstError = array_values($errors)[0]; // Ambil error pertama
    
            return redirect()->back()->withInput()->with('error', "Failed! " . $firstError);
        }

        $accountModel = new AccountModel();

        // Ambil data dari form
        $CompanyData = [
            'company_name' => $this->request->getPost('company_name'),
            // 'id_prov' => ucwords(strtolower($this->request->getPost('id_prov')))?: null,
            // 'prov' => ucwords(strtolower($this->request->getPost('prov'))) ?: null,
            // 'id_kota' => ucwords(strtolower($this->request->getPost('id_kota')))?: null,
            // 'kota' => preg_replace('/^(Kabupaten|Kota)\s+/i', '', ucwords(strtolower($this->request->getPost('kota'))))?: null,
            // 'id_kec' => ucwords(strtolower($this->request->getPost('id_kec')))?: null,
            // 'kec' => ucwords(strtolower($this->request->getPost('kec'))) ?: null,
            // 'id_kelurahan' => ucwords(strtolower($this->request->getPost('id_kelurahan')))?: null,
            // 'kelurahan' => ucwords(strtolower($this->request->getPost('kelurahan'))) ?: null,
            'pic' => $this->request->getPost('pic'),
            'no_telp_pic' => $this->request->getPost('no_telp_pic'),
            // 'id_admin' => session("admin_id"), // Mendapatkan ID admin dari session
            // 'id_admin' => session()->get('id_admin'), // Mendapatkan ID admin dari session
        ];

        $id= $this->request->getPost('id');
        // Simpan data ke model
        $accountModel->update($id, $CompanyData);
    return redirect()->to('/operator/akun')->with('success', 'Succes! Company berhasil diperbarui   ');
}

public function postDelete()
    {
        // Mendapatkan ID dari request
        $id = $this->request->getPost('id');

        $accountModel = new AccountModel();
        // Menghapus data berdasarkan ID
        $accountModel->delete($id);

        // Redirect kembali ke halaman size list dengan flash message
        return redirect()->to('/operator/akun')->with('success', 'Success! data berhasil dihapus.');
    }

}
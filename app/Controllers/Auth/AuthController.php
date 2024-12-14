<?php

namespace App\Controllers\Auth;

use App\Models\AccountModel;
use App\Models\AdminModel;
use App\Models\AnggotaModel;
use App\Models\CompanyModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function index(): string
    {
        return view('auth/login');
    }

    public function postlogin()
    {
        $session = session();
        $accountModel = new AccountModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // Cari user berdasarkan username
        $account = $accountModel->getAccountByUsername($username);

        // Jika user ditemukan dan password cocok
        if ($account && password_verify($password, $account['password'])) {
            $session->set('is_login', true);
            $session->set('user_id', $account['id']);
            $session->set('username', $account['username']);
            if ($account['level'] == "pengguna") {
                return redirect()->to('../../pengguna/dashboard');
            } else if ($account['level'] == "admin") {
                return redirect()->to('../../admin/dashboard');
            }
        } else {
            // Jika login gagal
            $session->setFlashdata('error', 'Failed! Username atau password salah.');
            return redirect()->to("/auth/login");
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    
    public function postRegister()
    {
        $session = session();
        $accountModel = new AccountModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');
        $fullName = $this->request->getPost('full_name');
        $email = $this->request->getPost('email');

        // Validasi data input
        if ($password !== $confirmPassword) {
            $session->setFlashdata('error', 'Password dan konfirmasi password tidak cocok.');
            return redirect()->back()->withInput();
        }

        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'nama' => $fullName,
            'email' => $email,
            'level' => 'pengguna',
        ];

        // Simpan akun baru
        $accountModel->insert($data);

        // Menyiapkan session untuk login langsung setelah registrasi
        $session->set('is_login', true);
        $session->set('user_id', $accountModel->insertID());
        $session->set('username', $username);
        $session->set('role', 'user');

        // Redirect ke halaman setelah login berhasil
        return redirect()->to('/auth/login')->with('success', 'Berhasil daftar akun!, silahkan login.');
    }
}
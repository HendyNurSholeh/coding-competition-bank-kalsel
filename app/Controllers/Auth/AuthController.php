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
            if ($username == "karyawan") {
                return redirect()->to('../../karyawan/dashboard');
            } else if ($username == "esr") {
                return redirect()->to('../../esr/id_card');
            } else{
                return redirect()->to('../../dept_head/id_card');
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
}
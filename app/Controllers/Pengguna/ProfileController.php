<?php

namespace App\Controllers\Pengguna;
use App\Controllers\BaseController;
use App\Models\AccountModel;

class ProfileController extends BaseController
{
    public function index(): string
    {
        $session = session();
        $accountModel = new AccountModel();

        $userId = $session->get('user_id');

        // Inisialisasi variabel yang akan dipakai di view
        $profileData = [];
        // Tambahkan data username dari akun ke profileData
        $profileData = $accountModel->find($userId);


        // Render view dengan data yang sudah diambil
        return view('pengguna/profile', ['profileData' => $profileData, 'activeMenu' => 'profile']);
    }

    public function resetPassword() {
        $oldPassword = $this->request->getPost('old_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');
    
        // Validasi password baru
        if (strlen($newPassword) < 8) {
            return redirect()->back()->with('error', 'Password baru harus minimal 8 karakter.');
        }

        // Validasi konfirmasi password
        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with('error', 'Password baru dan konfirmasi password tidak cocok.');
        }
    
        // Ambil user dari database
        $accountModel = new AccountModel();
        $user = $accountModel->find(session()->get('user_id'));
    
        // Validasi password lama
        if (!password_verify($oldPassword, $user['password'])) {
            return redirect()->back()->with('error', 'Failed!, Password lama tidak cocok.');
        }
    
        // Update password baru
        $newPasswordHashed = password_hash($newPassword, PASSWORD_BCRYPT);
        $accountModel->update(session()->get('user_id'), ['password' => $newPasswordHashed]);
    
        return redirect()->to('/pengguna/profile')->with('success', 'Success!, Password berhasil diubah.');
    }


    public function profileEdit (): string
    {
        $session = session();
        $accountModel = new AccountModel();

        $userId = $session->get('user_id');

        // Inisialisasi variabel yang akan dipakai di view
        $profileData = [];
        // Tambahkan data username dari akun ke profileData
        $profileData = $accountModel->find($userId);
        

        // Render view dengan data yang sudah diambil
        return view('pengguna/profile-edit', ['profileData' => $profileData, 'activeMenu' => 'profile']);
    }

    public function postEdit()
{
    $validation = \Config\Services::validation();

    // Validasi input
    $validation->setRules([
        'nama' => 'required|string',
    ]);

    if (!$this->validate($validation->getRules())) {
        // Ambil pesan error pertama
        $errors = $validation->getErrors();
        $firstError = array_values($errors)[0]; // Ambil error pertama

        return redirect()->back()->withInput()->with('error', "Failed! " . $firstError);
    }

    $accountModel = new AccountModel();

    // Data untuk tabel admin
    $data = [
        'nama' => $this->request->getPost('nama'),
       
    ];

    // Simpan data admin
    $accountModel->update(session("user_id"), $data);
    session()->set("nama", $data['nama']);

    return redirect()->to('/pengguna/profile')->with('success', 'Berhasil! profile berhasil diperbarui.');
}
}
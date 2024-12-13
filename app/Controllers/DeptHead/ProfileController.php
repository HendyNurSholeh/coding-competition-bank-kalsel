<?php

namespace App\Controllers\DeptHead;
use App\Controllers\BaseController;
use App\Models\AccountModel;
use App\Models\AdminModel;

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
        $account = $accountModel->find($userId);
        $profileData['username'] = $account['username'];
        $profileData['created_at'] = $account['created_at'];

        // Render view dengan data yang sudah diambil
        return view('dept_head/profile', ['profileData' => $profileData, 'activeMenu' => 'profile']);
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
    
        return redirect()->to('/dept_head/profile')->with('success', 'Success!, Password berhasil diubah.');
    }

    
    

}
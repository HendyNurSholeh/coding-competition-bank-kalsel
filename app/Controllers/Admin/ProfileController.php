<?php

namespace App\Controllers\Admin;
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
        return view('admin/profile', ['profileData' => $profileData, 'activeMenu' => 'profile']);
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
    
        return redirect()->to('/admin/profile')->with('success', 'Success!, Password berhasil diubah.');
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
        return view('admin/profile-edit', ['profileData' => $profileData, 'activeMenu' => 'profile']);
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

    
    $file = $this->request->getFile('pas_foto');
    $filePath = '';

    // Data untuk tabel admin
    $updateData = [
        'nama' => $this->request->getPost('nama'),
       
    ];

    

   // Ambil base64 dari input
   $croppedImage = $this->request->getPost('cropped_pas_foto'); // Ini adalah base64 string
        
   $filePath = '';
   if (!empty($croppedImage)) {
       // Memisahkan base64 data dan headernya (menghapus bagian 'data:image/png;base64,')
       list($type, $data) = explode(';', $croppedImage); // Pisahkan bagian tipe MIME
       list(, $data) = explode(',', $data); // Pisahkan bagian base64 data

       // Decode base64 menjadi data gambar
       $imageData = base64_decode($data);
       
       // Cek jika data gambar berhasil didekodekan
       if ($imageData === false) {
           // Jika gagal mendecode base64
           return redirect()->back()->with('error', 'Gagal mendekode gambar');
       }

       // Tentukan nama file dan path untuk menyimpan gambar
       $imageName = uniqid() . '.jpg'; // Atau format lain sesuai kebutuhan
       $uploadDir = 'uploads/pas_foto/'; // Tentukan folder untuk menyimpan gambar
       $updateData['pas_foto'] = $imageName; // Simpan nama file ke dalam data
    session()->set("pas_foto", $updateData['pas_foto']);
       
       // Pastikan folder untuk menyimpan gambar ada
       if (!is_dir($uploadDir)) {
           mkdir($uploadDir, 0777, true); // Membuat folder jika belum ada
       }

       $filePath = $uploadDir . $imageName; // Path lengkap untuk menyimpan gambar
       file_put_contents($filePath, $imageData);

       
   }
   

    // Simpan data admin
    $accountModel->update(session("user_id"), $updateData);
    session()->set("nama", $updateData['nama']);

    return redirect()->to('/admin/profile')->with('success', 'Berhasil! profile berhasil diperbarui.');
}
}
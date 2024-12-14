<?php

namespace App\Controllers\Auth;

use App\Models\AccountModel;
use App\Models\AdminModel;
use App\Models\AnggotaModel;
use App\Models\CompanyModel;
use App\Models\RekeningModel;
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
            $session->set('nama', $account['nama']);
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
        $rekeningModel = new RekeningModel();

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
        $accountId = $accountModel->insertID();

        // Simpan data rekening baru
        $rekeningData = [
            'account_id' => $accountId,
            'saldo' => 0,
            'status' => 'menunggu',
            'no_rek' => mt_rand(1000000000, 9999999999),
        ];
        $rekeningModel->insert($rekeningData);

        // Menyiapkan session untuk login langsung setelah registrasi
        $session->set('is_login', true);
        $session->set('user_id', $accountId);
        $session->set('username', $username);
        $session->set('role', 'user');

        // Redirect ke halaman setelah login berhasil
        return redirect()->to('/auth/login')->with('success', 'Berhasil daftar akun!, silahkan login.');
    }

    private function generateQRCode($data)
    {
        $logoPath = "image/greater-satui.png"; // Path ke logo Anda   

        // Buat QR Code
        $qrCode = QrCode::create(base_url("scan/simper/" . $data)) // Ganti dengan URL yang diinginkan
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(ErrorCorrectionLevel::High) // Gunakan tingkat koreksi yang lebih tinggi
            ->setSize(630) // Ukuran QR Code
            ->setMargin(5) // Margin yang lebih kecil
            ->setForegroundColor(new Color(0, 0, 0)) // Warna foreground
            ->setBackgroundColor(new Color(255, 255, 255)); // Warna background

        // Buat logo
        $logo = Logo::create($logoPath)
            ->setResizeToWidth(150) // Ukuran logo (lebar) yang lebih besar
            ->setPunchoutBackground(true); // Buat background logo transparan

        // Inisialisasi writer
        $writer = new PngWriter();

        // Tulis QR Code dengan logo
        $result = $writer->write($qrCode, $logo);

        // Simpan QR code ke file dengan nama unik
        $uniqueFileName = uniqid('qrcode_', true) . '.png';
        $outputPath = 'public/' . $uniqueFileName;
        file_put_contents($outputPath, $result->getString());

        return $uniqueFileName; // Kembali ke nama file yang unik
    }
}
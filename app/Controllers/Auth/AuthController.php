<?php

namespace App\Controllers\Auth;

use App\Models\AccountModel;
use App\Models\AdminModel;
use App\Models\AnggotaModel;
use App\Models\CompanyModel;
use App\Models\RekeningModel;
use CodeIgniter\Controller;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

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
        // dd($password);

        // Jika user ditemukan dan password cocok
        if ($account && password_verify($password, $account['password'])) {
            $session->set('is_login', true);
            $session->set('user_id', $account['id']);
            $session->set('username', $account['username']);
            $session->set('pas_foto', $account['pas_foto']);
            $session->set('level', $account['level']);
            $session->set('nama', $account['nama']);
            if ($account['level'] == "pengguna") {
                    return redirect()->to('../../user/dashboard');
            } else if ($account['level'] == "admin") {
                return redirect()->to('../../admin/dashboard');
            }
        } else {
            // Jika login gagal
            $session->setFlashdata('error', 'Failed! Username atau password salah.');
            return redirect()->to("/auth/login");
        }
    }
    public function postlogin2()
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
                if(isset($_GET['id'])){
                    return redirect()->to('../../pengguna/transfer?no_rek=' .  $_GET['id']);
                } else{
                    return redirect()->to('../../pengguna/dashboard');
                }
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
        $accountId = $accountModel->insertID();
        // Menyiapkan session untuk login langsung setelah registrasi
        // $session->set('is_login', true);
        // $session->set('user_id', $accountId);
        $session->set('username', $username);
        $session->set('password', $password);
        // $session->set('role', 'user');

        // Redirect ke halaman setelah login berhasil
        return redirect()->to('/auth/login')->with('success', 'Berhasil daftar akun!, silahkan login.');
    }
    
    public function postRegister2()
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

        $no_rek =  mt_rand(1000000000, 9999999999);
        $qrfilename = $this->generateQRCode($no_rek);
        // Simpan data rekening baru
        $rekeningData = [
            'account_id' => $accountId,
            'saldo' => 0,
            'status' => 'menunggu',
            'qr_code' => $qrfilename,
            'no_rek' =>$no_rek,
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

    private function generateQRCode($id)
    {
        $logoPath = "image/logo-cropped-circle.png"; // Path ke logo Anda   

        // Buat QR Code
        $qrCode = QrCode::create(base_url("auth/login?id=" . $id)) // Ganti dengan URL yang diinginkan
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
        $outputPath = 'uploads/qrcode/' . $uniqueFileName;

        // Simpan file menggunakan move_uploaded_file
        if (!is_dir('uploads/qrcode')) {
            mkdir('uploads/qrcode', 0777, true);
        }
        file_put_contents($outputPath, $result->getString());

        return $uniqueFileName; // Kembali ke nama file yang unik
    }
}
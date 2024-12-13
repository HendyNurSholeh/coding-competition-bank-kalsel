<?php

namespace App\Controllers\Admin\ManagementAccount;

use App\Controllers\BaseController;
use App\Models\AccountModel;
use App\Models\KaryawanModel;
use CodeIgniter\HTTP\ResponseInterface;

class KaryawanController extends BaseController
{
    protected $anggotaModel;

    public function __construct()
    {
        // Inisialisasi model Anggota
        $this->anggotaModel = new KaryawanModel();
    }

    public function index(): string
    {
        // session()->set("company_id", $companyId);
        // $companyModel = new CompanyModel();
        // $anggotaModel = new AnggotaModel();
        $data = [
            "activeMenu" => "account management"
        ];
        $data['anggota'] = $this->anggotaModel->join("accounts", "accounts.id=karyawan.account_id")->findAll();
        // $data['company'] = $companyModel->find($companyId);
        // $data['anggota'] = $anggotaModel->getAnggotaData($companyId);
        return view('admin/management_account/karyawan', $data);
    }

    public function postAdd()
    {
        // Validasi input form
        $validation = $this->validate([
            'username' => 'required|min_length[3]|is_unique[accounts.username]',
            'password' => 'required|min_length[5]',
            'nama'     => 'required',
            'nrp'      => 'required',
            'jabatan'  => 'required',
            'gol_darah'=> 'required',
            'pas_foto' => 'uploaded[pas_foto]|max_size[pas_foto,2048]|is_image[pas_foto]',
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembali ke form dengan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Buat instance model
        $karyawanModel = new KaryawanModel();
        $accountModel = new AccountModel();

        // Simpan file pas foto
        $pasFoto = $this->request->getFile('pas_foto');
        $pasFotoName = $pasFoto->getRandomName();
        $pasFoto->move('uploads/pas_foto/', $pasFotoName);

        // Simpan data account (username dan password)
        $accountData = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
        $accountModel->insert($accountData);
        $accountId = $accountModel->getInsertID(); // Mendapatkan ID akun baru yang ditambahkan

        // Simpan data karyawan
        $karyawanData = [
            'nama'      => $this->request->getPost('nama'),
            'nrp'       => $this->request->getPost('nrp'),
            'jabatan'   => $this->request->getPost('jabatan'),
            'gol_darah' => $this->request->getPost('gol_darah'),
            'pas_foto_image' => $pasFotoName,
            'account_id' => $accountId, // Relasi ke tabel accounts
        ];

        $karyawanModel->insert($karyawanData);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->to('/admin/management_account/karyawan')->with('success', 'Data karyawan berhasil ditambahkan.');
    }

}
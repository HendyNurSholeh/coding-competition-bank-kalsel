<?php

namespace App\Controllers\Pengguna;

use App\Controllers\BaseController;
use App\Models\RekeningModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index(): string
    {
        // session()->set("company_id", $companyId);
        // $companyModel = new CompanyModel();
        $rekeningModel = new RekeningModel();
        $data = [
            "activeMenu" => "dashboard",
            "rekening" => $rekeningModel->where("account_id", session('user_id'))->first()
        ];
        // $data['company'] = $companyModel->find($companyId);
        // $data['anggota'] = $anggotaModel->getAnggotaData($companyId);
        return view('pengguna/dashboard', $data);
    }
        public function ajukanMinePermit(): string
    {
        // session()->set("company_id", $companyId);
        // $companyModel = new CompanyModel();
        // $anggotaModel = new AnggotaModel();
        $data = [
            "activeMenu" => "dashboard"
        ];
        // $data['company'] = $companyModel->find($companyId);
        // $data['anggota'] = $anggotaModel->getAnggotaData($companyId);
        return view('pengguna/ajukan-minepermit', $data);
    }
}
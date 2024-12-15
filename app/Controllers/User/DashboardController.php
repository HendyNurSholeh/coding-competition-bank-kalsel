<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\HistoryModel;
use App\Models\RekeningModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $data = [
            "activeMenu" => "dashboard",
        ];
        return view('user/dashboard', $data);
    }
    
    public function ajukanKredit(): string
    {
        $data = [
            "activeMenu" => "dashboard",
        ];
        return view('user/ajukan-kredit', $data);
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
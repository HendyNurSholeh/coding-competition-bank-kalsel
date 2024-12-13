<?php

namespace App\Controllers\corpo;

use App\Controllers\BaseController;
use App\Models\MinePermitModel;

class DashboardController extends BaseController
{
    protected MinePermitModel $minePermitModel;

    public function __construct()
    {
        // Inisialisasi model Anggota
        $this->minePermitModel = new MinePermitModel();
    }
    public function index(): string
    {
        // session()->set("company_id", $companyId);
        // $companyModel = new CompanyModel();
        // $anggotaModel = new AnggotaModel();
        $data = [
            "activeMenu" => "dashboard",
        ];

    
        // DD($data);
        // $data['company'] = $companyModel->find($companyId);
        // $data['anggota'] = $anggotaModel->getAnggotaData($companyId);
        return view('corpo/dashboard', $data);
    }

}
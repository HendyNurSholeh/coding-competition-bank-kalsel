<?php

namespace App\Controllers\Karyawan;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MinePermitController extends BaseController
{
    public function index(): string
    {
        // session()->set("company_id", $companyId);
        // $companyModel = new CompanyModel();
        // $anggotaModel = new AnggotaModel();
        $data = [
            "activeMenu" => "pengajuan id card",
        ];
        // $data['company'] = $companyModel->find($companyId);
        // $data['anggota'] = $anggotaModel->getAnggotaData($companyId);
        return view('karyawan/minepermit/biodata', $data);
    }
}
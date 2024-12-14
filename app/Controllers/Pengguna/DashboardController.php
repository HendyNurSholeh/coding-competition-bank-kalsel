<?php

namespace App\Controllers\Pengguna;

use App\Controllers\BaseController;
use App\Models\HistoryModel;
use App\Models\RekeningModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $rekeningModel = new RekeningModel();
        $historyModel = new HistoryModel();
        $rekening = $rekeningModel->where("account_id", session('user_id'))->first();
        $history = $historyModel->where("no_rek", $rekening['no_rek'])->orderBy('created_at', 'DESC')->limit(3)->findAll();

        $data = [
            "activeMenu" => "dashboard",
            "rekening" => $rekening,
            "history" => $history
        ];

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
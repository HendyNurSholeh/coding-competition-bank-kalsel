<?php

namespace App\Controllers\Pengguna;

use App\Controllers\BaseController;
use App\Models\EventModel;
use App\Models\HistoryModel;
use App\Models\RekeningModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $eventModel = new EventModel();
        $events = $eventModel->findAll();

        $data = [
            "activeMenu" => "dashboard",
            "events" => $events
        ];
        // dd($data);

        return view('pengguna/dashboard', $data);
    }
    public function daftar()
    {
        $eventModel = new EventModel();
        $events = $eventModel->findAll();

        $data = [
            "activeMenu" => "dashboard",
            "events" => $events
        ];
        // dd($data);

        return view('pengguna/daftar', $data);
    }
    public function getEvents()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->post('https://wcc.bankkalsel.co.id/event', [
            'form_params' => [
                'KEY' => 'WCC2024'
            ]
        ]);

        $events = json_decode($response->getBody(), true);

        $data = [
            "activeMenu" => "dashboard",
            "events" => $events
        ];

        return view('pengguna/events', $data);
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
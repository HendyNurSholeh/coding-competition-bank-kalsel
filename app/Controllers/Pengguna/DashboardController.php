<?php

namespace App\Controllers\Pengguna;

use App\Controllers\BaseController;
use App\Models\EventModel;
use App\Models\HistoryModel;
use App\Models\PendaftaranModel;
use App\Models\RekeningModel;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $eventModel = new EventModel();

        // Check if event_type is set in the query parameters
        if ($this->request->getGet("event_type") && $this->request->getGet("event_type") != "all") {
            $eventType = $this->request->getGet("event_type");
            $events = $eventModel->where('event_type', $eventType)->findAll();
        } else {
            $events = $eventModel->findAll();
        }

        $data = [
            "activeMenu" => "dashboard",
            "events" => $events
        ];

        return view('pengguna/dashboard', $data);
    }
    public function daftar()
    {
        $eventModel = new EventModel();
        $event = $eventModel->find($_GET['id']);

        $data = [
            "activeMenu" => "dashboard",
            "event" => $event
        ];
        // dd($data);

        return view('pengguna/daftar', $data);
    }


    public function postDaftar()
    {
        $registrationModel = new PendaftaranModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'npp' => $this->request->getPost('npp'),
            'email' => $this->request->getPost('email'),
            'event_id' => $this->request->getPost('event_id')
        ];

        // Validate input
        if (!$this->validate([
            'name' => 'required',
            'npp' => 'required',
            'email' => 'required|valid_email',
            'event_id' => 'required'
        ])) {
            return redirect()->back()->withInput()->with('error', 'Validation failed');
        }

        // Check if NPP already exists for the same event
        $existingRegistration = $registrationModel->where('npp', $data['npp'])
                              ->where('event_id', $data['event_id'])
                              ->first();

        if ($existingRegistration) {
            return redirect()->back()->withInput()->with('error', 'Failed!, Anda telah terdaftar pada event ini!');
        }

        // Check if the event is full
        $eventModel = new EventModel();
        $event = $eventModel->find($data['event_id']);

        if ($event['registered'] >= $event['qouta']) {
            return redirect()->back()->withInput()->with('error', 'Failed!, Kuota event telah penuh!');
        }

        // Update the registered count
        $eventModel->update($data['event_id'], ['registered' => $event['registered'] + 1]);

        if ($registrationModel->insert($data)) {
            return redirect()->to('/pengguna/dashboard')->with('success', 'Pendaftaran Berhasil dilakukan!');
        } else {
            // Rollback the registered count update if registration fails
            $eventModel->update($data['event_id'], ['registered' => $event['registered']]);
            return redirect()->back()->with('error', 'Registration failed');
        }
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
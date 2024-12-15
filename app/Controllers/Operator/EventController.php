<?php

namespace App\Controllers\Operator;
use App\Controllers\BaseController;
use App\Models\AccountModel;
use App\Models\AdminModel;
use App\Models\EventModel;

class EventController extends BaseController
{
    public function index(): string
    {
        $eventModel = new eventModel();

        // Ambil semua data event
        $data = [
            "activeMenu" => "event",
            'events' => $eventModel->findAll()
        ];
        
        return view('operator/event', $data);
    }
    public function postAdd()
    {
        $validation = \Config\Services::validation();

        // Aturan validasi
        $validation->setRules([
            'title' => [
                'label' => 'Judul',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                ],
            ],
            'event_date' => [
                'label' => 'Tanggal Acara',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Acara harus diisi.',
                ],
            ],
            'location' => [
                'label' => 'Lokasi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Lokasi harus diisi.',
                ],
            ],
            'event_type' => [
                'label' => 'Jenis Acara',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Acara harus diisi.',
                ],
            ],
            'qouta' => [
                'label' => 'Kuota',
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Kuota harus diisi.',
                    'integer' => 'Kuota harus berupa angka.',
                ],
            ],
            'description' => [
                'label' => 'Deskripsi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.',
                ],
            ],
        ]);

        if (!$this->validate($validation->getRules())) {
            // Ambil pesan error
            $errors = $validation->getErrors();
            $firstError = array_values($errors)[0]; // Ambil error pertama

            return redirect()->back()->withInput()->with('error', "Failed! " . $firstError);
        }

        $eventModel = new EventModel();
        $eventData = [
            'title' => $this->request->getPost('title'),
            'event_date' => $this->request->getPost('event_date'),
            'location' => $this->request->getPost('location'),
            'event_type' => $this->request->getPost('event_type'),
            'qouta' => $this->request->getPost('qouta'),
            'registered' => 0,
            'description' => $this->request->getPost('description'),
            'status' => "active",
        ];

        // Simpan data event
        $eventModel->save($eventData);

        return redirect()->to('/operator/event')->with('success', 'Success! Event berhasil ditambahkan');
    }


    public function postEdit()
    {
        $validation = \Config\Services::validation();

        // Aturan validasi
        $validation->setRules([
            'title' => [
                'label' => 'Judul',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                ],
            ],
            'event_date' => [
                'label' => 'Tanggal Acara',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Acara harus diisi.',
                ],
            ],
            'location' => [
                'label' => 'Lokasi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Lokasi harus diisi.',
                ],
            ],
            'event_type' => [
                'label' => 'Jenis Acara',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Acara harus diisi.',
                ],
            ],
            'qouta' => [
                'label' => 'Kuota',
                'rules' => 'required|integer',
                'errors' => [
                    'required' => 'Kuota harus diisi.',
                    'integer' => 'Kuota harus berupa angka.',
                ],
            ],
            'description' => [
                'label' => 'Deskripsi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.',
                ],
            ],
        ]);

        if (!$this->validate($validation->getRules())) {
            // Ambil pesan error
            $errors = $validation->getErrors();
            $firstError = array_values($errors)[0]; // Ambil error pertama
    
            return redirect()->back()->withInput()->with('error', "Failed! " . $firstError);
        }

        $eventModel = new EventModel();

        // Ambil data dari form
        $eventData = [
            'title' => $this->request->getPost('title'),
            'event_date' => $this->request->getPost('event_date'),
            'location' => $this->request->getPost('location'),
            'event_type' => $this->request->getPost('event_type'),
            'qouta' => $this->request->getPost('qouta'),
            'description' => $this->request->getPost('description'),
        ];
        

        $id = $this->request->getPost('id');
        // Simpan data ke model
        $eventModel->update($id, $eventData);
        return redirect()->to('/operator/event')->with('success', 'Success! Event berhasil diperbarui');
    }

public function postDelete()
    {
        // Mendapatkan ID dari request
        $id = $this->request->getPost('id');

        $eventModel = new EventModel();
        // Menghapus data berdasarkan ID
        $eventModel->delete($id);

        // Redirect kembali ke halaman size list dengan flash message
        return redirect()->to('/operator/event')->with('success', 'Success! data berhasil dihapus.');
    }

}
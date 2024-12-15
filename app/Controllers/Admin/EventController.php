<?php

namespace App\Controllers\Admin;
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
        
        return view('admin/event', $data);
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

        return redirect()->to('/admin/event')->with('success', 'Success! Event berhasil ditambahkan');
    }


    public function postEdit()
{
    $validation = \Config\Services::validation();

        // Aturan validasi
        $validation->setRules([
            'company_name' => [
                'label' => 'Nama perusahaan',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Perusahaan harus diisi.',
                ],
            ],
            // 'username' => 'required|is_unique[accounts.username]',
            // 'prov' => [
            //     'label' => 'Provinsi',
            //     'rules' => 'permit_empty',
            // ],
            // 'kota' => [
            //     'label' => 'Kab/Kota',
            //     'rules' => 'permit_empty',
            // ],
            // 'kec' => [
            //     'label' => 'Kecamatan',
            //     'rules' => 'permit_empty',
            // ],
            // 'kelurahan' => [
            //     'label' => 'Kelurahan',
            //     'rules' => 'permit_empty',
            // ],
            // 'pic' => [
            //     'label' => 'PIC',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'PIC harus diisi.',
            //     ],
            // ],
            // 'no_telp_pic' => [
            //     'label' => 'No. Telp PIC',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => 'No. Telp PIC harus diisi.',
            //     ],
            // ],
            // 'password' => 'required|min_length[8]',
        ]);

        if (!$this->validate($validation->getRules())) {
            // Ambil pesan error
            $errors = $validation->getErrors();
            $firstError = array_values($errors)[0]; // Ambil error pertama
    
            return redirect()->back()->withInput()->with('error', "Failed! " . $firstError);
        }

        $eventModel = new EventModel();

        // Ambil data dari form
        $CompanyData = [
            'company_name' => $this->request->getPost('company_name'),
            // 'id_prov' => ucwords(strtolower($this->request->getPost('id_prov')))?: null,
            // 'prov' => ucwords(strtolower($this->request->getPost('prov'))) ?: null,
            // 'id_kota' => ucwords(strtolower($this->request->getPost('id_kota')))?: null,
            // 'kota' => preg_replace('/^(Kabupaten|Kota)\s+/i', '', ucwords(strtolower($this->request->getPost('kota'))))?: null,
            // 'id_kec' => ucwords(strtolower($this->request->getPost('id_kec')))?: null,
            // 'kec' => ucwords(strtolower($this->request->getPost('kec'))) ?: null,
            // 'id_kelurahan' => ucwords(strtolower($this->request->getPost('id_kelurahan')))?: null,
            // 'kelurahan' => ucwords(strtolower($this->request->getPost('kelurahan'))) ?: null,
            'pic' => $this->request->getPost('pic'),
            'no_telp_pic' => $this->request->getPost('no_telp_pic'),
            // 'id_admin' => session("admin_id"), // Mendapatkan ID admin dari session
            // 'id_admin' => session()->get('id_admin'), // Mendapatkan ID admin dari session
        ];

        $id= $this->request->getPost('id');
        // Simpan data ke model
        $eventModel->update($id, $CompanyData);
        return redirect()->to('/admin/event')->with('success', 'Succes! Company berhasil diperbarui   ');
}

public function postDelete()
    {
        // Mendapatkan ID dari request
        $id = $this->request->getPost('id');

        $eventModel = new EventModel();
        // Menghapus data berdasarkan ID
        $eventModel->delete($id);

        // Redirect kembali ke halaman size list dengan flash message
        return redirect()->to('/admin/event')->with('success', 'Success! data berhasil dihapus.');
    }

}
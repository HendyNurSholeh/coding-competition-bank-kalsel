<?php

namespace App\Controllers\Pengguna;

use App\Controllers\BaseController;
use App\Models\AnswerHistoryModel;
use App\Models\HistoryModel;
use App\Models\OptionModel;
use App\Models\QuizModel;
use App\Models\RekeningModel;
use App\Models\SimperModel;
use App\Models\UnitRecomendationModel;
use CodeIgniter\HTTP\ResponseInterface;
use DateTime;

class TransferController extends BaseController
{

    private SimperModel $simperModel;
    private UnitRecomendationModel $unitRecomendationModel;
    private AnswerHistoryModel $answerHistoryModel;
    private OptionModel $optionModel;
    
    public function __construct() {
        $this->simperModel = new SimperModel();
        $this->unitRecomendationModel = new UnitRecomendationModel();
        $this->answerHistoryModel = new AnswerHistoryModel();
        $this->optionModel = new OptionModel();
    }
    public function index(): string
    {
        // session()->set("company_id", $companyId);
        // $companyModel = new CompanyModel();
        // $anggotaModel = new AnggotaModel();
        $rekeningModel = new RekeningModel();
        $data = [
            "activeMenu" => "transfer",
            "rekening" => $rekeningModel->where("account_id", session('user_id'))->first()
        ];
        if(isset($_GET["no_rek"])){
            $data['no_rek'] = $_GET['no_rek'];
            $data['account_name'] = $rekeningModel
                ->select('accounts.nama')
                ->join('accounts', 'accounts.id = rekenings.account_id')
                ->where('rekenings.no_rek', $_GET['no_rek'])
                ->first()['nama'];
        }
        // $data['company'] = $companyModel->find($companyId);
        // $data['anggota'] = $anggotaModel->getAnggotaData($companyI
        return view('pengguna/transfer', $data);
    }
    public function postTransfer()
    {
        $rekeningModel = new RekeningModel();
        $historyModel = new HistoryModel();
        $db = \Config\Database::connect();
        // $db->transStart();
        

        $accountNumber = $this->request->getPost('account_number');
        $amount = $this->request->getPost('amount');
        $userId = session()->get('user_id');

        // Validate amount
        if ($amount <= 0 || $amount < 10000) {
            return redirect()->back()->with('error', 'Jumlah transfer tidak valid. Minimal transfer adalah 10000.');
        }

        // Retrieve sender's account
        $senderAccount = $rekeningModel->where('account_id', $userId)->first();
        if (!$senderAccount) {
            return redirect()->back()->with('error', 'Akun pengirim tidak ditemukan.');
        }

        // Check if sender has enough balance
        if ($senderAccount['saldo'] < $amount) {
            return redirect()->back()->with('error', 'Saldo tidak mencukupi untuk melakukan transfer.');
        }

        // Check if the recipient account is the same as the sender's account
        if ($senderAccount['no_rek'] == $accountNumber) {
            return redirect()->back()->with('error', 'Tidak dapat melakukan transfer ke rekening sendiri.');
        }

        $recipientAccount = $rekeningModel
                ->select('rekenings.*, accounts.nama')
                ->join('accounts', 'accounts.id = rekenings.account_id')
                ->where('no_rek', $accountNumber)
                ->first();
        
        if (!$recipientAccount) {
            return redirect()->back()->with('error', 'Nomor rekening tujuan tidak ditemukan.');
        }

        // Deduct amount from sender's account
        $rekeningModel->update($senderAccount['id'], ['saldo' => $senderAccount['saldo'] - $amount]);

        // Add amount to recipient's account
        $rekeningModel->update($recipientAccount['id'], ['saldo' => $recipientAccount['saldo'] + $amount]);

        // Insert history for sender
        $historyModel->insert([
            'no_rek' => $senderAccount['no_rek'],
            'deskripsi' => $recipientAccount['nama'],
            'type' => 'Outgoing',
            'jumlah' => $amount,
        ]);

        // Insert history for recipient
        $historyModel->insert([
            'no_rek' => $recipientAccount['no_rek'],
            'deskripsi' => session('nama'),
            'type' => 'Incoming',
            'jumlah' => $amount,
        ]);

        // $db->transComplete();

        // if ($db->transStatus() === FALSE) {
        //     return redirect()->back()->with('error', 'Terjadi kesalahan saat melakukan transfer.');
        // }

        return redirect()->to('/pengguna/transfer')->with('success', 'Transfer berhasil dilakukan.');
    }
    public function pernyataanDisiplin($simperId): string
    {
        // session()->set("company_id", $companyId);
        // $companyModel = new CompanyModel();
        // $anggotaModel = new AnggotaModel();
        $data = [
            "activeMenu" => "pengajuan simper",
            "simperId" => $simperId,
        ];
        // $data['company'] = $companyModel->find($companyId);
        // $data['anggota'] = $anggotaModel->getAnggotaData($companyId);
        return view('pengguna/simper/pernyataan-disiplin', $data);
    }
    public function postPernyataanDisiplin($simperId)
    {
        return redirect()->to("pengguna/simper/post-test/$simperId/1");
    }
    public function postTest($simperId, $id): string
    {
        // session()->set("company_id", $companyId);
        // $companyModel = new CompanyModel();
        // $anggotaModel = new AnggotaModel();
        $quizModel = new QuizModel();

        $optionModel = new OptionModel();
        if($id = 1){
            $quizzes = $quizModel->limit(8)->findAll();
            foreach($quizzes as &$quiz){
                $quiz['options'] = $optionModel->where("quiz_id", $quiz['id'])->findAll();
            }
        }
        $data = [
            "activeMenu" => "pengajuan simper",
            "id" => $id,
            "simperId" => $simperId,
            "quizzes" => $quizzes,
        ];
        
        // $data['company'] = $companyModel->find($companyId);
        // $data['anggota'] = $angg otaModel->getAnggotaData($companyId);
        return view('pengguna/simper/post-test', $data);
    }

    public function postPostTest($simperId, $id){
        // Mendapatkan ID pengguna (misalnya, dari session)
        $userId = session()->get('user_id');
        
        // Mendapatkan semua data yang di-submit
        $posts = $this->request->getPost();

        unset($posts['csrf_test_name']);

        $answerHistories = [];
        foreach ($posts as $key => $answer) {
            // Ambil ID quiz berdasarkan key (misalnya: quiz_1)
            $quizId = str_replace('quiz_', '', $key);  // Mengambil ID kuis dari nama input field
            
            // Ambil data pilihan berdasarkan option ID
            $option = $this->optionModel->find($answer); // Mendapatkan pilihan berdasarkan ID option yang dipilih
            
            // Menentukan apakah jawaban yang dipilih benar atau salah
            $isCorrect = $option['is_correct'];

            // Simpan jawaban pengguna ke dalam tabel `user_answers`
            $answerHistories[] = [
                'user_id'   => $userId,
                'quiz_id'   => $quizId,
                'option_id' => $answer,
                'is_correct' => $isCorrect
            ];
        }

        $this->answerHistoryModel->insert();

        
        if($id ==1){
            return redirect()->to("/pengguna/simper/post-test/$simperId/2");
        }
        return redirect()->to("/pengguna/simper/post-test/$simperId/2");
    }
    public function postCreateBiodata(){
        // dd($this->request->getPost());

        $employeeName =  $this->request->getPost("nama");
        $nrp = $this->request->getPost("nrp");
        $no_telp = $this->request->getPost("no_telp");
        $jabatan = $this->request->getPost("jabatan");
        $company = $this->request->getPost("company");
        $gol_darah = $this->request->getPost("gol_darah");
        $inputMasaBerlaku = $this->request->getPost("masa_berlaku");
        $masa_berlakuformat = DateTime::createFromFormat('Y-m-d', $inputMasaBerlaku);
        $masa_berlakuformat = $masa_berlakuformat->format('d/m/Y');

        $file = $this->request->getFile('pas_foto');
        $filePath = '';

        // Cek apakah file ada dan valid
        if ($file->isValid() && !$file->hasMoved()) {
            // Simpan file sementara
            $filePath = $file->getRandomName();
            $file->move('uploads/pas_foto', $filePath);
        }

        $qr_code = uniqid();
        // $outputPathMinePermit = $this->generateIdCard(strtoupper($employeeName), strtoupper($nrp), strtoupper($jabatan), strtoupper($company), strtoupper($gol_darah), $masa_berlakuformat, $filePath, $qr_code);
        
        // dd($outputPathMinePermitBelakang);
        // Siapkan data untuk disimpan

        
        $data = [
            'nama' => $employeeName,
            'nrp' => $nrp,
            'no_telp' => $no_telp,
            'jabatan' => $jabatan,
            'company' => $company,
            'gol_darah' => $gol_darah,
            'masa_berlaku' => $inputMasaBerlaku,
            'pas_foto_image' => $filePath, // Menyimpan path file
            // 'simper' => $outputPathMinePermit, // Menyimpan path file
            // 'simper_belakang' => "/". $outputPathMinePermitBelakang, // Menyimpan path file
            'qr_code' => $qr_code, // Menyimpan path file
            'approval_status' => "waiting", // Menyimpan path file
        'approval_soh' => "waiting", // Menyimpan path file
        'approval_esr' => "waiting", // Menyimpan path file
        ];
        $lastId = $this->simperModel->insert( $data);
        
        

        $unitRecomendations = [];
        $typeKendaraans = $this->request->getPost("type_kendaraan");
        $jenis_simpers = $this->request->getPost("jenis_simper");
        $alatberats = $this->request->getPost("alat_berat");
        $mobils = $this->request->getPost("mobil");
        $type_units = $this->request->getPost("type_unit");
        $isExistAlatBerat = false;
        foreach($typeKendaraans as $index => $typeKendaraan){
            if($typeKendaraan == "alat berat"){
                $unitRecomendations[] = [
                      "simper_id" => $lastId,
                      "type_kendaraan" => $typeKendaraan,
                      "jenis_alat" => $alatberats[$index],
                      "jenis_simper" => $jenis_simpers[$index],
                      "type_unit" => $type_units[$index],
                ];
                $isExistAlatBerat = true;
            } else if($typeKendaraan == "mobil"){
                $unitRecomendations[] = [
                    "simper_id" => $lastId,
                    "type_kendaraan" => $typeKendaraan,
                    "jenis_alat" => $mobils[$index],
                    "jenis_simper" => $jenis_simpers[$index],
                    "type_unit" => $type_units[$index],
                ];
            }
        }
        // dd($lastId);
    
        $this->unitRecomendationModel->insertBatch($unitRecomendations);

        // $outputPathMinePermitBelakang = $this->generateIdCardBelakang($unitRecomendations);
        // $data = (object) [
        //     'simper_belakang' => "/". $outputPathMinePermitBelakang,
        // ];
        // $lastId = $this->simperModel->update( $lastId, $data);

        if($isExistAlatBerat){
            $data['approval_corpo'] = "waiting";
        }else{
            $data['approval_corpo'] = "not_applicable";
        }
        $lastId = $this->simperModel->update( $lastId, $data);
        return redirect()->to("/pengguna/simper/pernyataan-disiplin/$lastId");
        // return redirect()->to("/" . $outputPathMinePermit)->with("success", "Success! Simper berhasil ditambah.");
    
}


}
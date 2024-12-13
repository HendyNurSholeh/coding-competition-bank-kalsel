<?php

namespace App\Controllers\corpo;

use App\Controllers\BaseController;
use App\Models\KaryawanModel;
use App\Models\MinePermitModel;
use CodeIgniter\HTTP\ResponseInterface;
use DateTime;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class PengajuanMinePermitController extends BaseController
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
            "activeMenu" => "pengajuan id card",
            'mine_permits_waiting' => $this->minePermitModel->orderBy("created_at", "DESC")->findAll(),
            'mine_permits_accept' => $this->minePermitModel->where("approval_status", "approved")->orderBy("created_at", "DESC")->findAll()
        ];
    
        // DD($data);
        // $data['company'] = $companyModel->find($companyId);
        // $data['anggota'] = $anggotaModel->getAnggotaData($companyId);
        return view('corpo/pengajuan_id_card', $data);
    }

    public function detail($id)
    {
        $minePermit = $this->minePermitModel->find($id);
        if($minePermit){
            // Mengubah format tanggal
            $date = new DateTime($minePermit['masa_berlaku']);
            $minePermit['masaberlakuformat'] = $date->format('d/m/Y'); // Format 17/06/2024
            
            // Mendapatkan bulan dalam bahasa Indonesia
            $bulanIndo = [
                1 => 'Januari', 
                2 => 'Februari', 
                3 => 'Maret', 
                4 => 'April', 
                5 => 'Mei', 
                6 => 'Juni', 
                7 => 'Juli', 
                8 => 'Agustus', 
                9 => 'September', 
                10 => 'Oktober', 
                11 => 'November', 
                12 => 'Desember'
            ];
        
            $bulan = (int)$date->format('n'); // Mendapatkan nomor bulan
            $tahun = $date->format('Y');
            $minePermit['masaberlakuformatindo'] = $date->format('d') . ' ' . $bulanIndo[$bulan] . ' ' . $tahun; // Format 17 Januari 2024
            
            $data = [   
                "minePermit" => $minePermit,
                "activeMenu" => "pengajuan id card",
            ];
            return view('corpo/detail.php', $data);
        }else{
            echo "id card tidak ditemukan";
        }
    }
    
    public function detailPengajuan($id)
    {
        $minePermit = $this->minePermitModel->find($id);
        if($minePermit){
            // Mengubah format tanggal
            $date = new DateTime($minePermit['masa_berlaku']);
            $minePermit['masaberlakuformat'] = $date->format('d/m/Y'); // Format 17/06/2024
            
            // Mendapatkan bulan dalam bahasa Indonesia
            $bulanIndo = [
                1 => 'Januari', 
                2 => 'Februari', 
                3 => 'Maret', 
                4 => 'April', 
                5 => 'Mei', 
                6 => 'Juni', 
                7 => 'Juli', 
                8 => 'Agustus', 
                9 => 'September', 
                10 => 'Oktober', 
                11 => 'November', 
                12 => 'Desember'
            ];
        
            $bulan = (int)$date->format('n'); // Mendapatkan nomor bulan
            $tahun = $date->format('Y');
            $minePermit['masaberlakuformatindo'] = $date->format('d') . ' ' . $bulanIndo[$bulan] . ' ' . $tahun; // Format 17 Januari 2024
            
            $data = [   
                "minePermit" => $minePermit,
                "activeMenu" => "pengajuan id card",
            ];
            return view('corpo/detail-pengajuan.php', $data);
        }else{
            echo "id card tidak ditemukan";
        }
    }
    
    public function detailIDCard($id)
    {
        $minePermit = $this->minePermitModel->find($id);
        if($minePermit){
            // Mengubah format tanggal
            $date = new DateTime($minePermit['masa_berlaku']);
            $minePermit['masaberlakuformat'] = $date->format('d/m/Y'); // Format 17/06/2024
            
            // Mendapatkan bulan dalam bahasa Indonesia
            $bulanIndo = [
                1 => 'Januari', 
                2 => 'Februari', 
                3 => 'Maret', 
                4 => 'April', 
                5 => 'Mei', 
                6 => 'Juni', 
                7 => 'Juli', 
                8 => 'Agustus', 
                9 => 'September', 
                10 => 'Oktober', 
                11 => 'November', 
                12 => 'Desember'
            ];
        
            $bulan = (int)$date->format('n'); // Mendapatkan nomor bulan
            $tahun = $date->format('Y');
            $minePermit['masaberlakuformatindo'] = $date->format('d') . ' ' . $bulanIndo[$bulan] . ' ' . $tahun; // Format 17 Januari 2024
            
            $data = [   
                "minePermit" => $minePermit,
                "activeMenu" => "pengajuan id card",
            ];
            return view('corpo/detailIDCard.php', $data);
        }else{
            echo "id card tidak ditemukan";
        }
    }
    


    public function postInstanCreate()
    {
        // $alatBerat = $this->request->getPost('alat_berat');

        // if ($alatBerat) {
        //     foreach ($alatBerat as $item) {
        //         list($jenis, $operation) = explode('*pembatasvalue*', $item);
        //         // Lakukan sesuatu dengan $jenis dan $operation
        //         echo $jenis . " - " . $operation;
        //         echo "<br>---------<br>";
        //     }
        // }
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
        $outputPathMinePermit = $this->generateIdCard(strtoupper($employeeName), strtoupper($nrp), strtoupper($jabatan), strtoupper($company), strtoupper($gol_darah), $masa_berlakuformat, $filePath, $qr_code);
        $outputPathMinePermitBelakang = $this->generateIdCardBelakang();
        // dd($outputPathMinePermitBelakang);
        // Siapkan data untuk disimpan
        $data = (object) [
            'nama' => $employeeName,
            'nrp' => $nrp,
            'no_telp' => $no_telp,
            'jabatan' => $jabatan,
            'company' => $company,
            'gol_darah' => $gol_darah,
            'masa_berlaku' => $inputMasaBerlaku,
            'pas_foto_image' => $filePath, // Menyimpan path file
            'mine_permit' => $outputPathMinePermit, // Menyimpan path file
            'mine_permit_belakang' => "/". $outputPathMinePermitBelakang, // Menyimpan path file
            'qr_code' => $qr_code, // Menyimpan path file
        ];

        $this->minePermitModel->insert( $data);

        return redirect()->to("/corpo/id_card")->with("success", "Success! Mine permit berhasil ditambah.");
        // return redirect()->to("/" . $outputPathMinePermit)->with("success", "Success! mine permit berhasil ditambah.");
    }



    public function postAjukanMinePermit()
    {
        // $alatBerat = $this->request->getPost('alat_berat');

        // if ($alatBerat) {
        //     foreach ($alatBerat as $item) {
        //         list($jenis, $operation) = explode('*pembatasvalue*', $item);
        //         // Lakukan sesuatu dengan $jenis dan $operation
        //         echo $jenis . " - " . $operation;
        //         echo "<br>---------<br>";
        //     }
        // }
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
        $outputPathMinePermit = $this->generateIdCard(strtoupper($employeeName), strtoupper($nrp), strtoupper($jabatan), strtoupper($company), strtoupper($gol_darah), $masa_berlakuformat, $filePath, $qr_code);
        $outputPathMinePermitBelakang = $this->generateIdCardBelakang();
        // dd($outputPathMinePermitBelakang);
        // Siapkan data untuk disimpan
        $data = (object) [
            'nama' => $employeeName,
            'nrp' => $nrp,
            'no_telp' => $no_telp,
            'jabatan' => $jabatan,
            'company' => $company,
            'gol_darah' => $gol_darah,
            'masa_berlaku' => $inputMasaBerlaku,
            'pas_foto_image' => $filePath, // Menyimpan path file
            'mine_permit' => $outputPathMinePermit, // Menyimpan path file
            'mine_permit_belakang' => "/". $outputPathMinePermitBelakang, // Menyimpan path file
            'qr_code' => $qr_code, // Menyimpan path file
            'approval_status' => "waiting", // Menyimpan path file
            'approval_soh' => "waiting", // Menyimpan path file
            'approval_corpo' => "waiting", // Menyimpan path file
        ];

        $this->minePermitModel->insert( $data);

        return redirect()->to("/corpo/id_card")->with("success", "Success! Mine permit berhasil ditambah.");
        // return redirect()->to("/" . $outputPathMinePermit)->with("success", "Success! mine permit berhasil ditambah.");
    }
    
    public function postAjukanApprove()
    {
        $id = $this->request->getPost("id");
        $data = (object) [
            'approval_corpo' => "accepted", // Menyimpan path file
        ];

        $this->minePermitModel->update($id,  $data);

        return redirect()->to("/corpo/id_card")->with("success", "Success! Mine permit berhasil disetujui.");
        // return redirect()->to("/" . $outputPathMinePermit)->with("success", "Success! mine permit berhasil ditambah.");
    }
    public function postAjukanReject()
    {
        $id = $this->request->getPost("id");
        $data = (object) [
            'approval_corpo' => "rejected", // Menyimpan path file
        ];

        $this->minePermitModel->update($id,  $data);

        return redirect()->to("/corpo/id_card")->with("success", "Success! Mine permit berhasil ditolak.");
        // return redirect()->to("/" . $outputPathMinePermit)->with("success", "Success! mine permit berhasil ditambah.");
    }
    

    private function generateIdCardBelakang()
    {
        $backgroundPath = 'id_card/id_card_belakang_bg.png';

        // Cek keberadaan background
        if (!file_exists($backgroundPath)) {
            die('Background image not found.');
        }
        $bgImage = imagecreatefrompng($backgroundPath);
        if (!$bgImage) {
            die('Failed to create image from background.');
        }

        // Menyiapkan ukuran gambar dan warna teks
        $width = imagesx($bgImage);
        $textColor = imagecolorallocate($bgImage, 32, 56, 100);
        $fontExtraBold = 'fonts/Open_Sans/static/OpenSans_Condensed-ExtraBold.ttf';
        $fontPath = 'fonts/Open_Sans/static/OpenSans_Condensed-Bold.ttf';
        $fontSemi = 'fonts/Open_Sans/static/OpenSans_Condensed-SemiBold.ttf';

        if (!file_exists($fontPath) || !file_exists($fontSemi)) {
            die('Font file not found.');
        }

        
        // today
        $fontSize3 = 55;
        $spacing3 = 10;
        $spacing4 = 6;
        date_default_timezone_set('Asia/Makassar');
        $date = new DateTime();

        // Mendapatkan bulan dalam bahasa Indonesia
        $bulanIndo = [
            1 => 'Januari', 
            2 => 'Februari', 
            3 => 'Maret', 
            4 => 'April', 
            5 => 'Mei', 
            6 => 'Juni', 
            7 => 'Juli', 
            8 => 'Agustus', 
            9 => 'September', 
            10 => 'Oktober', 
            11 => 'November', 
            12 => 'Desember'
        ];

        $bulan = (int)$date->format('n'); // Mendapatkan nomor bulan
        $tahun = $date->format('Y');
        $todayFormat = $date->format('d') . ' ' . $bulanIndo[$bulan] . ' ' . $tahun; // Format 17 Januari 2024

        // today
        $xPosition3 = 1440;
        foreach (str_split(string: $todayFormat) as $char3) {
            imagettftext($bgImage, $fontSize3, 0, $xPosition3, 3859, $textColor, $fontSemi, $char3);
            $xPosition3 += imagettfbbox($fontSize3, 0, $fontSemi, $char3)[2] + $spacing4;
        }
        // Tentukan path untuk menyimpan gambar
        $outputPath = 'uploads/id_card/belakang_' . uniqid() . '.png';


        // Simpan gambar
        imagepng($bgImage, $outputPath);

        // Hapus gambar dari memori
        imagedestroy($bgImage);
        return $outputPath;
    }
//     private function generateIdCardBelakang()
// {
//     $backgroundPath = 'id_card/id_card_belakang_bg.jpg';

//     // Cek keberadaan background
//     if (!file_exists($backgroundPath)) {
//         die('Background image not found.');
//     }
//     $bgImage = imagecreatefromjpeg($backgroundPath);
//     if (!$bgImage) {
//         die('Failed to create image from background.');
//     }

//     // Menyiapkan ukuran gambar dan warna teks
//     $width = imagesx($bgImage);
//     $textColor = imagecolorallocate($bgImage, 32, 56, 100);
//     $fontExtraBold = 'fonts/Open_Sans/static/OpenSans_Condensed-ExtraBold.ttf';
//     $fontPath = 'fonts/Open_Sans/static/OpenSans_Condensed-Bold.ttf';
//     $fontSemi = 'fonts/Open_Sans/static/OpenSans_Condensed-SemiBold.ttf';

//     if (!file_exists($fontPath) || !file_exists($fontSemi)) {
//         die('Font file not found.');
//     }

    
//     // Menambahkan ttd cover belakang
//     // Mendapatkan informasi tentang gambar
//     $addedImage = imagecreatefromjpeg("image/ttd-pak-fredy.jpg");
//     $targetWidth = 950;
//     $targetHeight = 250;

//     // Ubah ukuran gambar yang ingin ditambahkan
//     $resizedImage = imagecreatetruecolor($targetWidth, $targetHeight);
//     imagecopyresampled($resizedImage, $addedImage, 0, 0, 0, 0, $targetWidth, $targetHeight, imagesx($addedImage), imagesy($addedImage));

//     // Menentukan posisi X dan Y untuk menempatkan gambar
//     $positionX = 1185; // Margin dari kiri
//     $positionY = 4050; // Margin dari atas

//     // Menempelkan gambar yang sudah diubah ukuran ke gambar ID card
//     imagecopy($bgImage, $resizedImage, $positionX, $positionY, 0, 0, $targetWidth, $targetHeight);

//     // Autorized, dan Emergency Call
//     $fontSize3 = 80;
//     $spacing3 = 10;
//     $spacing4 = 6;
//     $autorized = "FREDY ADAMS";

//     // autorized
//     $xPosition3 = 1325;
//     foreach (str_split(string: $autorized) as $char3) {
//         imagettftext($bgImage, $fontSize3, 0, $xPosition3, 4450, $textColor, $fontPath, $char3);
//         $xPosition3 += imagettfbbox($fontSize3, 0, $fontPath, $char3)[2] + $spacing3;
//     }
    
//     // emergency call
//     $spacing3 = 25;
//     $call = "0821  2248  2194";
//     $xPosition4 = 1115;
//     foreach (str_split($call) as $char4) {
//         imagettftext($bgImage, $fontSize3+20, 0, $xPosition4, 2950, $textColor, $fontExtraBold, $char4);
//         $xPosition4 += imagettfbbox($fontSize3, 0, $fontPath, $char4)[2] + $spacing3;
//     }


//     // Tentukan path untuk menyimpan gambar
//     $outputPath = 'uploads/id_card/belakang_' . uniqid() . '.png';

//     // Simpan gambar
//     imagepng($bgImage, $outputPath);

//     // Hapus gambar dari memori
//     imagedestroy($bgImage);
//     imagedestroy($addedImage);
//     imagedestroy($resizedImage);
//     return $outputPath;
// }

    private function generateIdCard($employeeName, $nrp, $jabatan, $company, $gol_darah, $masa_berlaku, $personImagePath, $qr_code)
{
    $backgroundPath = 'id_card/id_card_depan_bg.png';
    $personImagePath = "uploads/pas_foto/$personImagePath";

    // Cek keberadaan background
    if (!file_exists($backgroundPath)) {
        die('Background image not found.');
    }
    $bgImage = imagecreatefrompng($backgroundPath);
    if (!$bgImage) {
        die('Failed to create image from background.');
    }

    // Menyiapkan ukuran gambar dan warna teks
    $width = imagesx($bgImage);
    $height = imagesy($bgImage);
    $textColor = imagecolorallocate($bgImage, 32, 56, 100);
    $fontPath = 'fonts/Open_Sans/static/OpenSans_Condensed-Bold.ttf';
    $fontSemi = 'fonts/Open_Sans/static/OpenSans_Condensed-SemiBold.ttf';

    if (!file_exists($fontPath) || !file_exists($fontSemi)) {
        die('Font file not found.');
    }

    $maxWidth = $width - 1100;

    // Menambahkan teks Pegawai
    $fontSize = 100;
    $spacing = 8;
    $totalWidth = 0;

    do {
        $totalWidth = 0;
        foreach (str_split($employeeName) as $char) {
            $bbox = imagettfbbox($fontSize, 0, $fontPath, $char);
            $totalWidth += $bbox[2] + $spacing;
        }
        $totalWidth -= $spacing;

        if ($totalWidth > $maxWidth) {
            $fontSize--;
        }
    } while ($totalWidth > $maxWidth && $fontSize > 5);

    $xPosition = ($width - $totalWidth) / 2;

    foreach (str_split($employeeName) as $char) {
        imagettftext($bgImage, $fontSize, 0, $xPosition, 2790, $textColor, $fontPath, $char);
        $bbox = imagettfbbox($fontSize, 0, $fontPath, $char);
        $xPosition += $bbox[2] + $spacing;
    }

    // Menambahkan Jabatan
    $fontSize2 = 90;
    $spacing2 = 10;
    $totalWidth2 = 0;

    do {
        $totalWidth2 = 0;
        foreach (str_split($jabatan) as $char2) {
            $bbox2 = imagettfbbox($fontSize2, 0, $fontSemi, $char2);
            $totalWidth2 += $bbox2[2] + $spacing2;
        }
        $totalWidth2 -= $spacing2;

        if ($totalWidth2 > $maxWidth) {
            $fontSize2--;
        }
    } while ($totalWidth2 > $maxWidth && $fontSize2 > 5);

    $xPosition2 = ($width - $totalWidth2) / 2;

    foreach (str_split($jabatan) as $char2) {
        imagettftext($bgImage, $fontSize2, 0, $xPosition2, 2930, $textColor, $fontSemi, $char2);
        $bbox2 = imagettfbbox($fontSize2, 0, $fontSemi, $char2);
        $xPosition2 += $bbox2[2] + $spacing2;
    }

    // Menambahkan teks Company
    $fontSize = 80;
    $spacing = 8;
    $totalWidth = 0;

    do {
        $totalWidth = 0;
        foreach (str_split($company) as $char) {
            $bbox = imagettfbbox($fontSize, 0, $fontPath, $char);
            $totalWidth += $bbox[2] + $spacing;
        }
        $totalWidth -= $spacing;

        if ($totalWidth > $maxWidth) {
            $fontSize--;
        }
    } while ($totalWidth > $maxWidth && $fontSize > 5);

    $xPosition = ($width - $totalWidth) / 2;

    foreach (str_split($company) as $char) {
        imagettftext($bgImage, $fontSize, 0, $xPosition, 3580, $textColor, $fontPath, $char);
        $bbox = imagettfbbox($fontSize, 0, $fontPath, $char);
        $xPosition += $bbox[2] + $spacing;
    }

    // NRP, Masa Berlaku, dan Gol Darah
    $fontSize3 = 80;
    $spacing3 = 10;
    $spacing4 = 6;

    // NRP
    $xPosition3 = 1540;
    foreach (str_split($nrp) as $char3) {
        imagettftext($bgImage, $fontSize3, 0, $xPosition3, 3079, $textColor, $fontPath, $char3);
        $xPosition3 += imagettfbbox($fontSize3, 0, $fontPath, $char3)[2] + $spacing3;
    }

    // Masa Berlaku
    $xPosition4 = 1800;
    foreach (str_split($masa_berlaku) as $char4) {
        imagettftext($bgImage, $fontSize3, 0, $xPosition4, 3200, $textColor, $fontPath, $char4);
        $xPosition4 += imagettfbbox($fontSize3, 0, $fontPath, $char4)[2] + $spacing4;
    }

    // Gol Darah
    $xPosition5 = 2130;
    foreach (str_split($gol_darah) as $char5) {
        imagettftext($bgImage, $fontSize3, 0, $xPosition5, 3338, $textColor, $fontPath, $char5);
        $xPosition5 += imagettfbbox($fontSize3, 0, $fontPath, $char5)[2] + $spacing4;
    }

    // Menambahkan gambar person
    // Mendapatkan informasi tentang gambar
    $imageInfo = getimagesize($personImagePath);

    if ($imageInfo !== false) {
        $mimeType = $imageInfo['mime'];

        switch ($mimeType) {
            case 'image/jpeg':
                $addedImage = imagecreatefromjpeg($personImagePath);
                break;
            case 'image/png':
                $addedImage = imagecreatefrompng($personImagePath);
                break;
            default:
                die('Unsupported image type: ' . $mimeType);
        }

        if (!$addedImage) {
            die('Failed to create image from the added image.');
        }

        // Lanjutkan dengan pemrosesan gambar
    } else {
        die('Failed to get image size.');
    }
    $targetWidth = 1340;
    $targetHeight = 1555;

    // Ubah ukuran gambar yang ingin ditambahkan
    $resizedImage = imagecreatetruecolor($targetWidth, $targetHeight);
    imagecopyresampled($resizedImage, $addedImage, 0, 0, 0, 0, $targetWidth, $targetHeight, imagesx($addedImage), imagesy($addedImage));

    // Menentukan posisi X dan Y untuk menempatkan gambar
    $positionX = 955; // Margin dari kiri
    $positionY = 1080; // Margin dari atas

    // Menempelkan gambar yang sudah diubah ukuran ke gambar ID card
    imagecopy($bgImage, $resizedImage, $positionX, $positionY, 0, 0, $targetWidth, $targetHeight);



    
    // Menambahkan ttd cover depan
    // Mendapatkan informasi tentang gambar
    $imageInfo = getimagesize("image/ttd-pak-gayus.jpg");

    $addedImage = imagecreatefromjpeg("image/ttd-pak-gayus.jpg");
    $targetWidth = 800;
    $targetHeight = 310;

    // Ubah ukuran gambar yang ingin ditambahkan
    $resizedImage = imagecreatetruecolor($targetWidth, $targetHeight);
    imagecopyresampled($resizedImage, $addedImage, 0, 0, 0, 0, $targetWidth, $targetHeight, imagesx($addedImage), imagesy($addedImage));

    // Menentukan posisi X dan Y untuk menempatkan gambar
    $positionX = 1230; // Margin dari kiri
    $positionY = 4010; // Margin dari atas

    // Menempelkan gambar yang sudah diubah ukuran ke gambar ID card
    imagecopy($bgImage, $resizedImage, $positionX, $positionY, 0, 0, $targetWidth, $targetHeight);



    // Ambil gambar border
    $addedImage = imagecreatefrompng("id_card/border-qr.png");
    if (!$addedImage) {
        die('Failed to create image from the added image.');
    }

    $targetWidth = 760;
    $targetHeight = 760;

    // Ubah ukuran gambar yang ingin ditambahkan
    $resizedImage = imagecreatetruecolor($targetWidth, $targetHeight);
    imagecopyresampled($resizedImage, $addedImage, 0, 0, 0, 0, $targetWidth, $targetHeight, imagesx($addedImage), imagesy($addedImage));

    // Menentukan posisi X dan Y untuk menempatkan gambar
    $positionX = 90; // Margin dari kiri
    $positionY = 480; // Margin dari atas

    // Menempelkan gambar yang sudah diubah ukuran ke gambar ID card
    imagecopy($bgImage, $resizedImage, $positionX, $positionY, 0, 0, $targetWidth, $targetHeight);

    // Generate QR code
    $qrCodeData = $this->generateQRCode($qr_code);
    if (!empty($qrCodeData)) {
        // Load gambar QR code
        $qrCode = imagecreatefromstring(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $qrCodeData)));
        list($qrCodeWidth, $qrCodeHeight) = getimagesizefromstring(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $qrCodeData)));
        $qrCodeX = 151; // Posisi X untuk QR code
        $qrCodeY = 540; // Posisi Y untuk QR code
        imagecopyresampled($bgImage, $qrCode, $qrCodeX, $qrCodeY, 0, 0, $qrCodeWidth, $qrCodeHeight, $qrCodeWidth, $qrCodeHeight);
    }

    // Tentukan path untuk menyimpan gambar
    $outputPath = 'uploads/id_card/' . uniqid() . '.png';

    // Simpan gambar
    imagepng($bgImage, $outputPath);

    // Hapus gambar dari memori
    imagedestroy($bgImage);
    imagedestroy($addedImage);
    imagedestroy($resizedImage);
    return $outputPath;
}
    
    private function generateQRCode($data)
{
    $logoPath = "image/greater-satui.png"; // Path ke logo Anda   

    // Buat QR Code
    $qrCode = QrCode::create(base_url("scan/mine_permit/" . $data)) // Ganti dengan URL yang diinginkan
        ->setEncoding(new Encoding('UTF-8'))
        ->setErrorCorrectionLevel(ErrorCorrectionLevel::High) // Gunakan tingkat koreksi yang lebih tinggi
        ->setSize(630) // Ukuran QR Code
        ->setMargin(5) // Margin yang lebih kecil
        ->setForegroundColor(new Color(0, 0, 0)) // Warna foreground
        ->setBackgroundColor(new Color(255, 255, 255)); // Warna background

    // Buat logo
    $logo = Logo::create($logoPath)
        ->setResizeToWidth(150) // Ukuran logo (lebar) yang lebih besar
        ->setPunchoutBackground(true); // Buat background logo transparan

    // Inisialisasi writer
    $writer = new PngWriter();

    // Tulis QR Code dengan logo
    $result = $writer->write($qrCode, $logo);

    // Simpan QR code ke file
    $outputPath = 'image/qrcode.png'; // Ganti dengan path yang sesuai
    file_put_contents($outputPath, $result->getString());

    // Dapatkan data gambar QR code dalam bentuk base64 jika diperlukan
    $qrCodeData = $result->getDataUri();

    return $qrCodeData; // Kembali ke data URI jika perlu
}

    

//     public function postInstanCreate()
// {
//     // Data pegawai
//     $employeeName = strtoupper("Hendy Nur Sholeh");
//     $jabatan = strtoupper("Mekanik");
//     $nrp = strtoupper("90119421");
//     $gol_darah = strtoupper("AB+");
//     $masa_berlaku = "01/10/2024";
//     $backgroundPath = 'id_card/id_card_depan_bg.png';

//     // Cek keberadaan background
//     if (!file_exists($backgroundPath)) {
//         die('Background image not found.');
//     }
//     $bgImage = imagecreatefrompng($backgroundPath);
//     if (!$bgImage) {
//         die('Failed to create image from background.');
//     }

//     // Menyiapkan ukuran gambar dan warna teks
//     $width = imagesx($bgImage);
//     $height = imagesy($bgImage);
//     $textColor = imagecolorallocate($bgImage, 32, 56, 100); // Menggunakan $bgImage langsung
//     $fontPath = 'fonts/Open_Sans/static/OpenSans_Condensed-Bold.ttf';
//     $fontSemi = 'fonts/Open_Sans/static/OpenSans_Condensed-SemiBold.ttf';

//     if (!file_exists($fontPath)) {
//         die('Font file not found.');
//     }

//     // Gambar teks pegawai (kode tidak ditampilkan untuk ringkasan)
//     // ... (kode untuk menambahkan teks di ID card)

//     // Load gambar yang ingin ditambahkan
//     $addedImage = imagecreatefromjpeg("id_card/person.jpg");
//     if (!$addedImage) {
//         die('Failed to create image from the added image.');
//     }

//     // Ukuran gambar yang ingin ditambahkan
//     $targetWidth = 300;
//     $targetHeight = 350;

//     // Ubah ukuran gambar yang ingin ditambahkan
//     $resizedImage = imagecreatetruecolor($targetWidth, $targetHeight);
//     imagecopyresampled($resizedImage, $addedImage, 0, 0, 0, 0, $targetWidth, $targetHeight, imagesx($addedImage), imagesy($addedImage));

//     // Menentukan posisi X dan Y untuk menempatkan gambar
//     $positionX = 50; // Margin dari kiri
//     $positionY = 50; // Margin dari atas

//     // Menempelkan gambar yang sudah diubah ukuran ke gambar ID card
//     imagecopy($bgImage, $resizedImage, $positionX, $positionY, 0, 0, $targetWidth, $targetHeight);

//     // Tentukan path untuk menyimpan gambar
//     $outputPath = 'id_card/' . 'hendy' . '.png';

//     // Simpan gambar menggunakan bgImage yang sudah digabung
//     imagepng($bgImage, $outputPath);

//     // Hapus gambar dari memori
//     imagedestroy($bgImage);
//     imagedestroy($addedImage);
//     imagedestroy($resizedImage);

//     // Redirect ke gambar yang baru disimpan
//     return redirect()->to(base_url($outputPath));
// }


public function postDelete()
    {
        $id = $this->request->getPost('id');

        if ($id) {
            $minePermitModel = new MinePermitModel();

            // Ambil account_id dari admin yang akan dihapus
            $simper = $minePermitModel->find($id);
            if ($simper) {
                
                // Hapus data dari tabel admin
                $minePermitModel->delete($id);
                
                // Hapus data dari tabel accounts
                
                return redirect()->to('/corpo/id_card')->with('success', 'Success! Mine Permit berhasil dihapus.');
                
            } else {
                return redirect()->to('/corpo/id_card')->with('error', 'Failed! Mine Permit tidak ditemukan.');
            }
        } else {
            return redirect()->to('/corpo/id_card')->with('error', 'Failed! ID tidak valid.');
        }
    }
}
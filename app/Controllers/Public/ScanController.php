<?php

namespace App\Controllers\Public;

use App\Controllers\BaseController;
use App\Models\MinePermitModel;
use App\Models\SimperModel;
use App\Models\UnitRecomendationModel;
use CodeIgniter\HTTP\ResponseInterface;

class ScanController extends BaseController
{
    private MinePermitModel $minePermitModel;
    private SimperModel $simperModel;
    private UnitRecomendationModel $unitRecomendationModel;
    
    public function __construct() {
        $this->minePermitModel = new MinePermitModel();
        $this->simperModel = new SimperModel();
        $this->unitRecomendationModel = new UnitRecomendationModel();
    }
    
        public function minePermit($qr_code)
    {
        $minePermit = $this->minePermitModel->where("qr_code", $qr_code)->first();
        if($minePermit){
            // Mengubah format tanggal
            $date = new \DateTime($minePermit['masa_berlaku']);
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
                "minePermit" => $minePermit
            ];
            return view('scan/mine_permit.php', $data);
        }else{
            echo "id card tidak ditemukan";
        }
    }
    public function simper($qr_code)
    {
        $simper = $this->simperModel->where("qr_code", $qr_code)->first();
        if($simper){
            $unitRecomendations = $this->unitRecomendationModel->where("simper_id", $simper['id'])->findAll();
            // Mengubah format tanggal
            $date = new \DateTime($simper['masa_berlaku']);
            $simper['masaberlakuformat'] = $date->format('d/m/Y'); // Format 17/06/2024
            
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
            $simper['masaberlakuformatindo'] = $date->format('d') . ' ' . $bulanIndo[$bulan] . ' ' . $tahun; // Format 17 Januari 2024
            
            $data = [   
                "simper" => $simper,
                "unitRecomendations" => $unitRecomendations,
            ];
            return view('scan/simper.php', $data);
        }else{
            echo "id card tidak ditemukan";
        }
    }

}
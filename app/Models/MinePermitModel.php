<?php

namespace App\Models;

use CodeIgniter\Model;

class MinePermitModel extends Model
{
    protected $table      = 'mine_permits';
    protected $primaryKey = 'id';

    // Kolom yang boleh diisi
    protected $allowedFields = [
        'uniq_id', 
        'qr_code', 
        'nama', 
        'jabatan', 
        'masa_berlaku', 
        'company', 
        'mine_permit', 
        'mine_permit_belakang', 
        'nrp', 
        'approval_status', 
        'approval_esr', 
        'approval_soh', 
        'gol_darah', 
        'no_telp', 
        'pas_foto_image', 
        'account_id', 
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        // Pastikan username di-set sebelum generate uniq_id
            // Dapatkan ID terakhir dari tabel untuk digunakan dalam uniq_id
            $lastRecord = $this->orderBy('id', 'DESC')->first();
            
            // Tambahkan 1 ke ID terakhir untuk mendapatkan ID baru
            $newId = $lastRecord ? $lastRecord['id'] + 1 : 1;
            
            // Hasilkan uniq_id menggunakan ID baru
            $data['data']['uniq_id'] = $this->generateUniqId($newId);
            
        return $data;
    }
    protected function beforeUpdate(array $data)
    {
        return $data;
    }

    protected function generateUniqId($id)
    {
        $numDigits = strlen((string)$id);
        
        // Menghasilkan ID unik dengan format yang sesuai jumlah digit
        if($numDigits == 1 || $numDigits == 2){
            return sprintf('MP-%03d', $id); // Prefix AN KRtuk Anggota
        } else{
            return sprintf('MP-%0' . $numDigits . 'd', $id);
        }
    }

}
<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitRecomendationModel extends Model
{
    protected $table      = 'unit_recomendations';
    protected $primaryKey = 'id';

    // Kolom yang boleh diisi
    protected $allowedFields = [
        'simper_id', 
        'type_kendaraan', 
        'jenis_alat', 
        'type_unit', 
        'jenis_simper', 
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $beforeInsert = [];
    protected $beforeUpdate = [];

}
<?php

namespace App\Models;

use CodeIgniter\Model;

class AnswerHistoryModel extends Model
{
    protected $table      = 'answer_histories';
    protected $primaryKey = 'id';

    // Kolom yang boleh diisi
    protected $allowedFields = [
        'simper_id', 
        'quiz_id', 
        'option_id', 
        'is_correct', 
        'created_at', 
        'updated_at', 
        'deleted_at', 
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $beforeInsert = [];
    protected $beforeUpdate = [];

}
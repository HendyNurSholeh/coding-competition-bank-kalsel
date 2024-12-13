<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class SimperController extends  ResourceController
{
    protected $simperModel;
    function __construct()
    {
        $this->simperModel = new \App\Models\SimperModel();
    }
    public function getSimperById($id = null): \CodeIgniter\HTTP\ResponseInterface
    {
        $data = $this->simperModel->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->respond(null, 404);
        }
    }
}
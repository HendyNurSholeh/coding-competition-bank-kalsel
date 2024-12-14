<?php

namespace App\Controllers;

class Freeuser extends BaseController
{
    public function index(): string
    {
        $data = [
            "activeMenu" => "dashboard",
        ];
        return view('index', $data);
    }

   
}
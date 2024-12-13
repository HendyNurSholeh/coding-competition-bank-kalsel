<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function runMigration()
    {
         // Menggunakan service 'migrations' untuk mendapatkan instance MigrationRunner
         $migrations = service('migrations');

         try {
             // Menjalankan migration, akan menjalankan semua migration yang belum dijalankan
             $migrations->latest();
             return "Semua migration telah berhasil dijalankan.";
         } catch (\Exception $e) {
             // Menangani error jika migration gagal
             return "Terjadi kesalahan: " . $e->getMessage();
         }
    }
}
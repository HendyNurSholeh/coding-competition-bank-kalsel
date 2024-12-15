<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'title' => 'Seminar Keuangan Digital',
                'description' => 'Meningkatkan pemahaman masyarakat tentang teknologi keuangan digital.',
                'event_date' => '2024-12-20',
                'location' => 'Jakarta Convention Center, Jakarta',
                'event_type' => 'Seminar',
                'qouta' => 200,
                'registered' => 150,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Pelatihan Investasi untuk Pemula',
                'description' => 'Pelatihan eksklusif untuk memahami dasar-dasar investasi saham dan reksa dana.',
                'event_date' => '2024-12-22',
                'location' => 'Hotel Mulia, Bali',
                'event_type' => 'Workshop',
                'qouta' => 100,
                'registered' => 80,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Webinar Transformasi Bank Digital',
                'description' => 'Diskusi panel tentang inovasi dalam perbankan digital bersama para ahli.',
                'event_date' => '2025-01-15',
                'location' => 'Online (Zoom)',
                'event_type' => 'Webinar',
                'qouta' => 500,
                'registered' => 320,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => null,
            ],
        ];

        // Insert data into the database
        $this->db->table('events')->insertBatch($data);
    }
}
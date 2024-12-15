<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEventsTable extends Migration
{
public function up()
{
    $this->forge->addField([
        'id' => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'title' => [
            'type'       => 'VARCHAR',
            'constraint' => '255',
        ],
        'description' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'event_date' => [
            'type' => 'DATETIME',
        ],
        'location' => [
            'type'       => 'VARCHAR',
            'constraint' => '255',
        ],
        'event_type' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'registered' => [
            'type'       => 'INT',
            'constraint' => 11,
            'default'    => 0,
        ],
        'status' => [
            'type'       => 'VARCHAR',
            'constraint' => '50',
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'deleted_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('events');
}

public function down()
{
    $this->forge->dropTable('events');
}
}
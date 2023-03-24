<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class CreateUsersTable extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true
      ],
      'nama' => [
        'type' => 'VARCHAR',
        'constraint' => 50,
        'null' => false
      ],
      'email' => [
        'type' => 'VARCHAR',
        'constraint' => 30,
        'unique' => true,
        'null' => false
      ],
      'password' => [
        'type' => 'VARCHAR',
        'constraint' => 255,
        'null' => false
      ],
      'avatar' => [
        'type' => 'VARCHAR',
        'constraint' => 255
      ],
      'isAdmin' => [
        'type' => 'BOOLEAN',
        'null' => false
      ]
    ]);
    $this->forge->addKey('id', true, true);
    $this->forge->createTable('users');
  }

  public function down()
  {
    $this->forge->dropTable('users');
  }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransactionsTable extends Migration
{
  public function up()
  {
    $this->peminjaman();
    $this->pengembalian();
  }

  public function peminjaman()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true
      ],
      'user_id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
      ],
      'buku_id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
      ],
      'tgl_mulai_pinjam' => [
        'type' => 'TIMESTAMP',
        'null' => false
      ],
      'tgl_batas_pinjam' => [
        'type' => 'TIMESTAMP',
        'null' => false
      ]
    ]);
    $this->forge->addPrimaryKey('id', 'pk_peminjaman');
    $this->forge->addForeignKey('user_id', 'users', 'id', '', '', 'fk_user_pinjam');
    $this->forge->addForeignKey('buku_id', 'books', 'id', '', '', 'fk_buku_pinjam');
    $this->forge->createTable('peminjaman');
  }

  public function pengembalian()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true
      ],
      'peminjaman_id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
      ],
      'tgl_pengembalian' => [
        'type' => 'TIMESTAMP',
        'null' => false
      ],
      'denda' => [
        'type' => 'INT',
        'unsigned' => true
      ]
    ]);
    $this->forge->addPrimaryKey('id', 'pk_pengembalian');
    $this->forge->addForeignKey('peminjaman_id', 'peminjaman', 'id', '', '', 'fk_pinjam_kembali');
    $this->forge->createTable('pengembalian');
  }

  public function down()
  {
    $this->forge->dropTable('peminjaman');
    $this->forge->dropTable('pengembalian');
  }
}

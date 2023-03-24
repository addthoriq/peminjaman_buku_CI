<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTable extends Migration
{
  public function up()
  {
    $this->genres();
    $this->books();
  }

  public function genres()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true
      ],
      'nama_genre' => [
        'type' => 'VARCHAR',
        'constraint' => 30,
        'null' => false
      ],
    ]);
    $this->forge->addKey('id', true, true);
    $this->forge->createTable('genres');
  }

  public function books()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true
      ],
      'genre_id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true
      ],
      'judul_buku' => [
        'type' => 'VARCHAR',
        'constraint' => 50,
        'null' => false
      ],
      'penulis' => [
        'type' => 'VARCHAR',
        'constraint' => 50,
        'null' => false
      ],
      'kode_isbn' => [
        'type' => 'INT',
        'constraint' => 5,
        'null' => false
      ],
      'deskripsi_buku' => [
        'type' => 'TEXT',
        'constraint' => 100,
      ],
      'gambar' => [
        'type' => 'VARCHAR',
        'constraint' => 255,
      ],
    ]);
    $this->forge->addPrimaryKey('id', 'pk_books');
    $this->forge->addForeignKey('genre_id', 'genres', 'id', '', '', 'fk_genre_buku');
    $this->forge->createTable('books');
  }

  public function down()
  {
    $this->forge->dropTable('genres');
    $this->forge->dropTable('books');
  }
}

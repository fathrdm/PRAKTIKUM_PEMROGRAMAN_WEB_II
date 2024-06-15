<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Buku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'penulis' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],            
            'penerbit' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tahun_terbit' => [
                'type'       => 'YEAR',
                'constraint' => '100',
            ],
        ]);
        //ini untuk membuat primary key
        $this->forge->addKey('id', true);

        //ini untuk membuat tabel buku
        $this->forge->createTable('buku', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('buku');
    }
}

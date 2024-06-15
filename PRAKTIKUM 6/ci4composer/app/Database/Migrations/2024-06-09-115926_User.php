<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],            
            'password' => [
                'type'       => 'TEXT',
                'constraint' => '20',
            ],
        ]);
        //ini untuk membuat primary key
        $this->forge->addKey('id', true);

        //ini untuk membuat tabel buku
        $this->forge->createTable('user', TRUE);
    }
    public function down()
    {
        $this->forge->dropTable('user');
    }
}

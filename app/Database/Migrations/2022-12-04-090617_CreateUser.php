<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_user' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
			'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
            'id_pd' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true
            ],
            'level' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true
            ],
            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ],
			'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'password_hash' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
			'created_at' => [
                'type'     => 'DATETIME',
                'null'     => true,
                'default'  => null
            ],
			'updated_at' => [
			   'type'     => 'DATETIME',
			   'null'     => true,
			   'default'  => null
		    ]
		]);
		
        $this->forge->addPrimaryKey('id_user')
                    ->addUniqueKey('email');
					
        $this->forge->createTable('tb_users');
    }

    public function down()
    {
        $this->forge->dropTable('tb_users');
    }
}

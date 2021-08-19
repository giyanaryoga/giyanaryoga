<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoriMenu extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'namaKategori' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true, true);
		$this->forge->createTable('KategoriMenu');
	}

	public function down()
	{
		$this->forge->dropTable('KategoriMenu');
	}
}

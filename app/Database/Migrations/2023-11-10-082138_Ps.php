<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ps extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'ps_id' => [
				'type' => 'INT',
				'constraint' => 20,
				'auto_increment' => true,
			],
			'ps_nama' => [
				'type' => 'ENUM',
				'constraint' => "'Playstation 5',
								 'Playstation 4',
								 'Xbox Series S',
								 'Xbox Series X',
								 'Nintendo Switch Red',
								 'Nintendo Switch OLED',
								 'Nintendo Switch Lite'",
				'default' => 'Playstation 5'
			],
			'ps_waktu' => [
				'type' => 'ENUM',
				'constraint' => "'1 jam', '2 jam', '3 jam', '4 jam', '5 jam'",
				'default' => '1 jam'
			],
			'ps_kondisi' => [
				'type' => 'ENUM',
				'constraint' => "'baik', 'rusak', 'mati'",
				'default' => 'baik'
			],
		]);
		
		$this->forge->addKey('ps_id', true);
		$this->forge->createTable('ps');
	}

	public function down()
	{
		$this->forge->dropTable('ps');
	}
}

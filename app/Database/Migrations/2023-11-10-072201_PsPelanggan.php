<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PsPelanggan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'PSPelanggan_id' => [
				'type' => 'INT',
				'constraint' => 20,
				'auto_increment' => true,
			],
			'PSPelanggan_Nama' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
			],
			'PSPelanggan_Alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 200,
			],
			'PSPelanggan_Tgl' => [
				'type' => 'DATE',
			],
		]);
		
		$this->forge->addKey('PSPelanggan_id', true);
		$this->forge->createTable('PS_Pelanggan');
		
	}

	public function down()
	{
		$this->forge->dropTable('PS_Pelanggan');
	}
}

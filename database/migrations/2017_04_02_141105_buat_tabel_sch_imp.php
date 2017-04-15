<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelSchImp extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sch_imp', function(Blueprint $table)
		{
			$table->increments('id_sch_imp');
			$table->integer('id_shipment_name')->nullable();
			$table->integer('id_category')->nullable();
			$table->string('desc_of_good')->nullable();
			$table->string('invoice')->nullable();
			$table->integer('id_currency')->nullable();
			$table->integer('amount')->nullable();
			$table->integer('id_supplier')->nullable();
			$table->integer('id_ship')->nullable();
			$table->string('cont_number')->nullable();
			$table->string('nama_alat_angkut')->nullable();
			$table->string('mbl')->nullable();
			$table->string('hbl')->nullable();
			$table->integer('id_forwader')->nullable();
			$table->integer('id_origin')->nullable();
			$table->date('etd')->nullable();
			$table->date('eta')->nullable();
			$table->date('eta_aiia')->nullable();
			$table->date('ata_aiia')->nullable();
			$table->date('duty')->nullable();
			$table->date('cc')->nullable();
			$table->string('gw')->nullable();
			$table->string('fubikasi')->nullable();
			$table->string('kemasan')->nullable();
			$table->string('remark')->nullable();
			$table->string('invoice_doc')->nullable();
			$table->string('pl_doc')->nullable();
			$table->string('bl_doc')->nullable();
			$table->string('insurance_doc')->nullable();
			$table->string('coo_doc')->nullable();
			$table->string('mbl_doc')->nullable();
			$table->string('bpn_doc')->nullable();
			$table->string('billing_doc')->nullable();
			$table->timestamps();
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sch_imp');		
	}

}

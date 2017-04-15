<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@aiia.co.id',
            'level' => '1',
            'password' => bcrypt('admin'),
        ]);
        DB::table('category')->insert([
            'category' => 'CKD',
        ]);
        DB::table('category')->insert([
            'category' => 'IMPORT PART',
        ]);
        DB::table('category')->insert([
            'category' => 'IMPORT GENERAL',
        ]);
        DB::table('currency')->insert([
            'currency' => 'IDR',
        ]);
        DB::table('currency')->insert([
            'currency' => 'USD',
        ]);
        DB::table('currency')->insert([
            'currency' => 'JPY',
        ]);
        DB::table('currency')->insert([
            'currency' => 'THB',
        ]);
        DB::table('forwader')->insert([
            'forwader' => 'PUNINAR',
        ]);
        DB::table('forwader')->insert([
            'forwader' => 'UNIAR',
        ]);
        DB::table('forwader')->insert([
            'forwader' => 'NIPPON',
        ]);
        DB::table('forwader')->insert([
            'forwader' => 'BIROTIKA',
        ]);
        DB::table('origin')->insert([
            'origin' => 'JAPAN',
        ]);
        DB::table('origin')->insert([
            'origin' => 'THAILAND',
        ]);
        DB::table('origin')->insert([
            'origin' => 'SINGAPURA',
        ]);
        DB::table('origin')->insert([
            'origin' => 'CHINA',
        ]);
        DB::table('ship')->insert([
            'ship' => 'SEA',
        ]);
        DB::table('ship')->insert([
            'ship' => 'AIR',
        ]);
        DB::table('shipment_name')->insert([
            'shipment_name' => 'WPOP',
        ]);
        DB::table('shipment_name')->insert([
            'shipment_name' => 'SEAT MOTOR',
        ]);
        DB::table('shipment_name')->insert([
            'shipment_name' => 'GASKET',
        ]);
        DB::table('shipment_name')->insert([
            'shipment_name' => 'PLATE',
        ]);
        DB::table('shipment_name')->insert([
            'shipment_name' => 'BRACKET',
        ]);
        DB::table('shipment_name')->insert([
            'shipment_name' => 'BEARING',
        ]);
        DB::table('shipment_name')->insert([
            'shipment_name' => 'GENERAL',
        ]);
        DB::table('supplier')->insert([
            'supplier' => 'AISIN ASIA',
        ]);
        DB::table('supplier')->insert([
            'supplier' => 'AISIN SEIKI',
        ]);     
        DB::table('supplier')->insert([
            'supplier' => 'T.KRUNGTHAI',
        ]);
        DB::table('supplier')->insert([
            'supplier' => 'YANO',
        ]);
        DB::table('supplier')->insert([
            'supplier' => 'UCHIYAMA',
        ]);
        DB::table('supplier')->insert([
            'supplier' => 'MINEBEA',
        ]);
    }

}

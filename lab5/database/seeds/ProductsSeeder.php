<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	
	public function run()
    {
        DB::table('products')->insert(
		[
		'name' => 'LG',
		'description' => 'LG TV',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 39999
		]);
		DB::table('products')->insert(
		[
		'name' => 'Samsung 4K',
		'description' => '4K resolution',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 59999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'Samsung 8K',
		'description' => '8K resolution',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 99999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'Samsung Curved Monitor',
		'description' => 'LED-Monitor',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 13999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'LG UltraWide',
		'description' => 'Curved UltraWide Monitor',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 57999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'LG UltraGear',
		'description' => 'LG Curved Monitor',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 42999.00
		]);

    }
}

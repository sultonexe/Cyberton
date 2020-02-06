<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(

            array('product' => 'Sades Scythe RGB Gaming Mouser','price' => '260000.00','stock' => '10','description' => '<p>Mouse gaming murah enak buat maen pabji<br></p>','created_at' => \Carbon\Carbon::now())
          
        );

        App\Models\Product::insert($products);
    }
}

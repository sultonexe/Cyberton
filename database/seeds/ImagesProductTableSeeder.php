<?php

use Illuminate\Database\Seeder;

class ImagesProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_products = array(

            array('product_id' => '1','image' => 'product/wH143jm2IH03AX8KqzeYFGTaryjzXY49HAANX5BT.jpeg','created_at' => \Carbon\Carbon::now())

        );

        App\Models\ImagesProduct::insert($images_products);
    }
}

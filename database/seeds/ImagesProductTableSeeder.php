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
  array('id' => '1','product_id' => '1','image' => 'product/wH143jm2IH03AX8KqzeYFGTaryjzXY49HAANX5BT.jpeg','created_at' => '2020-01-14 14:50:47','updated_at' => NULL),
  array('id' => '2','product_id' => '2','image' => 'product/5UdpVdNzA4w2lKq7G9g03PV1XunSKjsJIfIWXxWr.jpeg','created_at' => NULL,'updated_at' => NULL),
  array('id' => '3','product_id' => '3','image' => 'product/CjH5WqSV7BeqRnD5UDuYF2ye2tUU7dar3m5plqtc.jpeg','created_at' => NULL,'updated_at' => NULL),
  array('id' => '4','product_id' => '4','image' => 'product/VO2Uoyoc0fUqERV31cGwJNeNHsGmC4Spou3wYcPe.jpeg','created_at' => NULL,'updated_at' => NULL),
  array('id' => '5','product_id' => '5','image' => 'product/YqhmOKAE3AxZjc0R9RIMPbdlGG3Z4uBmc0xQLeWo.png','created_at' => NULL,'updated_at' => NULL),
  array('id' => '6','product_id' => '6','image' => 'product/4E85drjikMQngL3ozoN7ZdbqkAmKEhH2z7dzzL4S.jpeg','created_at' => NULL,'updated_at' => NULL),
  array('id' => '7','product_id' => '7','image' => 'product/dP58B2eEsNDhctb4klXuJPcnhfkQXOXVoQxEfqKO.jpeg','created_at' => NULL,'updated_at' => NULL),
  array('id' => '8','product_id' => '8','image' => 'product/YsJ9nQM6auwf1EUBDjLuBsuri6W4LymdJ1L6JxVN.jpeg','created_at' => NULL,'updated_at' => NULL),
  array('id' => '9','product_id' => '9','image' => 'product/BJsUjbg9UVlPEu4VEuXX8oLVHiA6uM2FePBJJg5h.jpeg','created_at' => NULL,'updated_at' => NULL),
  array('id' => '10','product_id' => '10','image' => 'product/6QLgHS6U4fNjJrOronO75VFrCKMyUmFLEdcynn19.jpeg','created_at' => NULL,'updated_at' => NULL)
);

        App\Models\ImagesProduct::insert($images_products);
    }
}

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
  array('id' => '1','product' => 'Sades Scythe RGB Gaming Mouser','price' => '260000.00','stock' => '10','description' => '<p>Mouse gaming murah enak buat maen pabji<br></p>','created_at' => '2020-01-14 14:50:48','updated_at' => NULL),
  array('id' => '2','product' => 'mouse gaming fantech X6 KNIGHT running RGB macro','price' => '185000.00','stock' => '10','description' => '<p>Mouse Gaming murah kurang dari 200.000<br></p>','created_at' => '2020-01-18 09:37:39','updated_at' => '2020-01-18 09:37:39'),
  array('id' => '3','product' => 'dbE GM150 3.5mm Professional Gaming HeadphonedbE GM150 3.5mm','price' => '135000.00','stock' => '5','description' => '<p>Headset gaming murahh meriah hanya di cyberton bunyinya menggelegar <b>duarrr merdekaaa</b><br></p><br>','created_at' => '2020-01-18 09:38:38','updated_at' => '2020-01-18 09:38:38'),
  array('id' => '4','product' => 'FINGERTIME™ Headphone Gaming Bluetooth Wireless Meng Cat Ear','price' => '288800.00','stock' => '1','description' => '<p><b>HEADSET GAMING UNYUU CEPET DIORDER BRO LIMITED EDITION STOCK HANYA 1!!!</b><br></p><br>','created_at' => '2020-01-18 09:39:58','updated_at' => '2020-01-18 09:39:58'),
  array('id' => '5','product' => 'Kingston HyperX Cloud Earbuds Gaming Headphones With Mic','price' => '599900.00','stock' => '20','description' => '<p>Earphone mahal slurr enak dipake di telinga<br></p>','created_at' => '2020-01-18 09:40:42','updated_at' => '2020-01-18 09:40:42'),
  array('id' => '6','product' => 'Keyboard Gaming G21 LED Backlight Fullsize Murah (not RGB) -','price' => '89000.00','stock' => '12','description' => '<p>Kibord gaming murah cocok buat kalian yg <b>MISQUEEN</b><br></p><br>','created_at' => '2020-01-18 09:41:34','updated_at' => '2020-01-18 09:41:34'),
  array('id' => '7','product' => 'Monitor LED LG 27GL650 / 27GL650F-B 1MS 144HZ Gaming FULL HD','price' => '4399000.00','stock' => '1','description' => '<p>Monitor LED gaming murah , UDAH MURAH JANGAN NEGO WOY<br></p>','created_at' => '2020-01-18 09:44:00','updated_at' => '2020-01-18 09:44:00'),
  array('id' => '8','product' => 'CPU / PC RAKITAN GAMING CORE i5 SIAP GAME BERAT SETARA PS4','price' => '3400000.00','stock' => '2','description' => '<p><b>CPU GAMING RAKITAN HARGA PAS JANGAN DI NEGO WOY NGERAKITNYA SUSAH</b><br></p><br>','created_at' => '2020-01-18 09:44:56','updated_at' => '2020-01-18 09:44:56'),
  array('id' => '9','product' => 'Starter Kit belajar Arduino - Uno Compatible','price' => '350000.00','stock' => '15','description' => '<p>Starter Kit Arduino murah cocok buat kalian yang pengen belajar robotika<br></p>','created_at' => '2020-01-18 09:45:57','updated_at' => '2020-01-18 09:45:57'),
  array('id' => '10','product' => 'Arduino Uno DIP + USB Cable','price' => '70000.00','stock' => '5','description' => '<p>Arduino murah anjay mabar<br></p>','created_at' => '2020-01-18 09:46:29','updated_at' => '2020-01-18 09:46:29')
);

        App\Models\Product::insert($products);
    }
}

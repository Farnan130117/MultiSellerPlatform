<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         factory(App\Shop::class)->create(['user_id'=>6]); //user-id=6 means seller 1
          factory(App\Shop::class)->create(['user_id'=>8]); //user-id=8 means mspadmin
    }
}

<?php

use Illuminate\Database\Seeder;

class WishListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\WishList::class, 3)->create()->each(function ($l) {
            $items = factory(App\Models\Item::class, 5)->make();

            foreach($items as $item) {
                $l->items()->save($item);
            }
        });
    }
}

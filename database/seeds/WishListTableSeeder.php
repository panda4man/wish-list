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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('items')->truncate();
        DB::table('wish_lists')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        factory(App\Models\WishList::class, 3)->create()->each(function ($l) {
            $items = factory(App\Models\Item::class, 5)->make();

            foreach($items as $item) {
                $l->items()->save($item);
            }
        });
    }
}

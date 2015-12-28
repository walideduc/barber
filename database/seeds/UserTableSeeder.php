<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\User::class,50)->create();
        factory(App\User::class, 50)->create()->each(function($u) {
            $u->shops()->save(factory(App\Models\Shop::class)->create());
            $u->my_shop()->save(factory(App\Models\Shop::class)->create());
        });
    }
}

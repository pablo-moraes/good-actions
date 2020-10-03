<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Organization::class, 15)->create();
        factory(App\Models\Phone::class, 15)->create();
        factory(App\Models\Address::class, 15)->create();
    }
}

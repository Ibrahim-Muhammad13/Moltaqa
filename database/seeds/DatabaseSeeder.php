<?php

use Illuminate\Database\Seeder;
use App\Properties;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  $this->call(UserSeeder::class);
       factory(Properties::class,10)->create();
    //   $this->call(PropertyFactory::class);
    }
}

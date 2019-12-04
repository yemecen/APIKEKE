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
        // $this->call(UsersTableSeeder::class);

        factory('App\Actor', 10)->create();
        factory('App\Genre', 5)->create();
        factory('App\Director', 3)->create();
        factory('App\Movie', 20)->create();
        factory('App\MovieActor', 10)->create();
        factory('App\MovieGenre', 10)->create();
    }
}

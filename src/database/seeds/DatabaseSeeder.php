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
        $this->call(BigQuestionSeeder::class);
        $this->call(SmallQuestionSeeder::class);
        $this->call(ChoicesSeeder::class);
    }
}

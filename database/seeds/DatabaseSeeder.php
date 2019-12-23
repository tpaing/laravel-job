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
        $bob = new App\User;
        $bob->name='Bob';
        $bob->email='bob@gmail.com';
        $bob->password=bcrypt('123456');
        $bob->save();
        
        $alice = new App\User;
        $alice->name='Alice';
        $alice->email='alice@gmail.com';
        $alice->password=bcrypt('12345678');
        $alice->save();
    }
}

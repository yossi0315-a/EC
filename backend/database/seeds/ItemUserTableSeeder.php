<?php

use Illuminate\Database\Seeder;
use Symfony\Component\VarDumper\Cloner\Data;

class ItemUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "テ・スト",
            "email" => "test@test.ccom",
            "password" => "testtest",
            "created_at" => new DateTime(),
            "updated_at" => new DateTime(),
        ]);
    }
}

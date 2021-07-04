<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Staticdata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'email'=>'admin',
            'password'=>'40bd001563085fc35165329ea1ff5c5ecbdbbeef',
        ]);
    }
}

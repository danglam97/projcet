<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Lâm Sung',
                'email' => 'lamsung@gmail.com',
                'password' => password_hash('123456', PASSWORD_DEFAULT),
                'role_id'=> 1,
                'is_active'=> 1,
                'created_at' => new DateTime()
            ]);
    }
}

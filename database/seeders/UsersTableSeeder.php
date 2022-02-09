<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Yehia el sayed ibrahim',
                'email' => 'yehiafml20333@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$s7iZ3iNUCkS8qdLwPlL8Y.oy6QarXiUoM7gGPFtoDyl97pBpATSsy',
                'role_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-02-09 12:18:48',
                'updated_at' => '2022-02-09 12:18:48',
            ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Yehia el sayed ibrahim',
                    'email' => 'yehiafml20444@gmail.com',
                    'email_verified_at' => NULL,
                    'password' => '$2y$10$s7iZ3iNUCkS8qdLwPlL8Y.oy6QarXiUoM7gGPFtoDyl97pBpATSsy',
                    'role_id' => 2,
                    'remember_token' => NULL,
                    'created_at' => '2022-02-09 12:18:48',
                    'updated_at' => '2022-02-09 12:18:48',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Yehia el sayed ibrahim',
                    'email' => 'yehiafml20555@gmail.com',
                    'email_verified_at' => NULL,
                    'password' => '$2y$10$s7iZ3iNUCkS8qdLwPlL8Y.oy6QarXiUoM7gGPFtoDyl97pBpATSsy',
                    'role_id' => 3,
                    'remember_token' => NULL,
                    'created_at' => '2022-02-09 12:18:48',
                    'updated_at' => '2022-02-09 12:18:48',
                ),
        ));
    }
}

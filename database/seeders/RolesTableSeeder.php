<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role_name' => 'User',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role_name' => 'User manager',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role_name' => 'Admin',
            ),
        ));
        
        
    }
}
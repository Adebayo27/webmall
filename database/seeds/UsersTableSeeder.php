<?php

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
                'role_id' => 1,
                'name' => 'Josiah Bernier',
                'email' => 'bhattahitesh@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-02-09 12:42:53',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'bUcKj1RxZeZGcZ8Bk8Ph0FxVQmOq5KTNdJSzFPfSxyyhXdhOKCd83iB0ZYPb',
                'settings' => NULL,
                'created_at' => '2020-02-09 12:42:53',
                'updated_at' => '2020-02-11 00:15:23',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xJacK/k89sSDbvDvqaMnC.KLEHOZr/YhqQMVSrvrTVhjggQgVhzpq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-11 00:16:34',
            ),
        ));
        
        
    }
}
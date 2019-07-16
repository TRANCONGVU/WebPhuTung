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
        $location = "Cộng tác viên, Quản trị viên, Administrator";
        $explode = explode(',',$location);
        foreach($explode as $ex)
        {
            DB::table('role')->insert([
                'name' => $ex
            ]);
        }

        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0969902940',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password :12345678
            'level' => 3,
        ]);

    }
}

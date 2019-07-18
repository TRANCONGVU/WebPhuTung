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
        $location = "Cộng tác viên, Quản trị viên, Người dùng";
        $explode = explode(',',$location);
        foreach($explode as $ex)
        {
            DB::table('role')->insert([
                'name' => $ex
            ]);
        }

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0969902940',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password :12345678
            'level' => 2,
            'status'=>1,

        ]);
        DB::table('cate_product')->insert([
            'id'=>1,
            'title'=>'Máy tính',
            'status'=>1,
            'slug'=>'may-tinh',
        ]);
        DB::table('cate_product')->insert([
            'id'=>2,
            'title'=>'Ti vi',
            'status'=>1,
            'slug'=>'ti-vi',
        ]);
        DB::table('product')->insert([
            'id'=>1,
            'title'=>'Bộ nhớ',
            'content'=>'Sản phẩm chất lượng cao 
                        Bộ nhớ trong : 120GB',
            'price'=>700000,
            'avatar'=>'img.jpg',
            'amount'=>25,
            'where_production'=>'Sản xuất tại Việt Nam',
//            'post_date'=>now(),
            'slug'=>'o-cung',
            'cate_product_id'=>1,
            'status'=>1,

            'created_at'=>now(),
        ]);

    }
}

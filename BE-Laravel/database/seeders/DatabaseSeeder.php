<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            ['role_name' => 'Admin'],
            ['role_name' => 'User']
        ]);
        DB::table('users')->insert([
            ['name' => 'Nguyễn Đăng Nhân',
            'email' => 'tuongvandang1@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => 1,
            ],
            ['name' => 'Trương Văn Cường',
            'email' => 'cuong2003@gmail.com',
            'password' => Hash::make('123456'),
            'role_id' => 2,
            ],
        ]);
    }
}

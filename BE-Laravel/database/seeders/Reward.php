<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class Reward extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reward')->insert(
            [
                ['reward_name' => 'Voi nhồi bông', 'reward_score' => 100],
                ['reward_name' => 'Mũ hổ', 'reward_score' => 100],
                ['reward_name' => 'Gấu trúc bông', 'reward_score' => 400],
                ['reward_name' => 'Sư tử đồ chơi', 'reward_score' => 100],
                ['reward_name' => 'Cá heo mô hình', 'reward_score' => 300],
                ['reward_name' => 'Cáo mini', 'reward_score' => 100],
                ['reward_name' => 'Hải cẩu nhồi bông', 'reward_score' => 100],
                ['reward_name' => 'Lego Khỉ tamarin', 'reward_score' => 200],
                ['reward_name' => 'Vòng tay hình báo', 'reward_score' => 500],
                ['reward_name' => 'Mũ rùa', 'reward_score' => 100],
                ['reward_name' => 'Mô hình Chim cánh cụt', 'reward_score' => 100],
                ['reward_name' => 'Cá sấu nhồi bông', 'reward_score' => 100],
                ['reward_name' => 'Cá mập phi thuyền', 'reward_score' => 100],
            ]
        );
        DB::table('reward_between_user')->insert(
            [
                [
                    'reward_id' => 3, 'user_id' => 2,'created_at' => Carbon::create(2024, 6, 13, 11, 30, 0)
                ],
                [
                    'reward_id' => 1, 'user_id' => 3,'created_at' => Carbon::create(2024, 6, 18, 11, 30, 0)
                ],
                [
                    'reward_id' => 10, 'user_id' => 4,'created_at' => Carbon::create(2024, 6, 21, 11, 30, 0)
                ],
                [
                    'reward_id' => 7, 'user_id' => 5,'created_at' => Carbon::create(2024, 7, 3, 11, 30, 0)
                ],
                [
                    'reward_id' => 13, 'user_id' => 6,'created_at' => Carbon::create(2024, 7, 10, 11, 30, 0)
                ],
                [
                    'reward_id' => 6, 'user_id' => 7,'created_at' => Carbon::create(2024, 7, 13, 11, 30, 0)
                ],
                [
                    'reward_id' => 4, 'user_id' => 8,'created_at' => Carbon::create(2024, 7, 14, 11, 30, 0)
                ],
                [
                    'reward_id' => 11, 'user_id' => 9,'created_at' => Carbon::create(2024, 7, 5, 11, 30, 0)
                ],
                [
                    'reward_id' => 5, 'user_id' => 10,'created_at' => Carbon::create(2024, 7, 3, 11, 30, 0)
                ],
                [
                    'reward_id' => 8, 'user_id' => 2,'created_at' => Carbon::create(2024, 6, 14, 11, 30, 0)
                ],
                [
                    'reward_id' => 2, 'user_id' => 3,'created_at' => Carbon::create(2024, 6, 19, 11, 30, 0)
                ],
                [
                    'reward_id' => 9, 'user_id' => 4,'created_at' => Carbon::create(2024, 6, 24, 11, 30, 0)
                ],
                [
                    'reward_id' => 12, 'user_id' => 5,'created_at' => Carbon::create(2024, 7, 5, 11, 30, 0)
                ],
                [
                    'reward_id' => 1, 'user_id' => 6,'created_at' => Carbon::create(2024, 7, 11, 11, 30, 0)
                ],
                [
                    'reward_id' => 7, 'user_id' => 7,'created_at' => Carbon::create(2024, 7, 14, 11, 30, 0)
                ],
                [
                    'reward_id' => 13, 'user_id' => 8,'created_at' => Carbon::create(2024, 7, 14, 11, 30, 0)
                ],
                [
                    'reward_id' => 3, 'user_id' => 9,'created_at' => Carbon::create(2024, 7, 5, 12, 30, 0)
                ],
                [
                    'reward_id' => 6, 'user_id' => 10,'created_at' => Carbon::create(2024, 7, 3, 11, 30, 0)
                ],
                [
                    'reward_id' => 10, 'user_id' => 2,'created_at' => Carbon::create(2024, 6, 15, 11, 30, 0)
                ],
                [
                    'reward_id' => 5, 'user_id' => 3,'created_at' => Carbon::create(2024, 6, 19, 12, 30, 0)
                ],
                [
                    'reward_id' => 8, 'user_id' => 4,'created_at' => Carbon::create(2024, 6, 25, 11, 30, 0)
                ],
                [
                    'reward_id' => 2, 'user_id' => 5, 'created_at'=> Carbon::create(2024, 7, 7, 11, 30, 0)
                ],
                [
                    'reward_id' => 11, 'user_id' => 6,'created_at' => Carbon::create(2024, 7, 11, 12, 30, 0)
                ],
                [
                    'reward_id' => 9, 'user_id' => 7,'created_at' => Carbon::create(2024, 7, 13, 11, 30, 0)
                ],
                [
                    'reward_id' => 4, 'user_id' => 8,'created_at' => Carbon::create(2024, 7, 13, 11, 30, 0)
                ],
                [
                    'reward_id' => 12, 'user_id' => 9,'created_at' => Carbon::create(2024, 7, 4, 11, 30, 0)
                ],
                [
                    'reward_id' => 7, 'user_id' => 10,'created_at' => Carbon::create(2024, 7, 4, 11, 30, 0)
                ],
                [
                    'reward_id' => 3, 'user_id' => 2,'created_at' => Carbon::create(2024, 6, 16, 11, 30, 0)
                ],
                [
                    'reward_id' => 13, 'user_id' => 3,'created_at' => Carbon::create(2024, 6, 16, 13, 30, 0)
                ],
                [
                    'reward_id' => 1, 'user_id' => 4,'created_at' => Carbon::create(2024, 6, 26, 11, 30, 0)
                ],
            ]
        );
    }
}

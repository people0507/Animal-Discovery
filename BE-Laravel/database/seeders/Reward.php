<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
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
    }
}

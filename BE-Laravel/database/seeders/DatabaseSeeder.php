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
        DB::table('animal_habitat')->insert([
            ['id' => '1',
            'habitat_name' => 'Rừng mưa nhiệt đới',
            'habitat_description' => 'Rừng mưa nhiệt đới nằm ở các khu vực gần xích đạo, có khí hậu ẩm ướt với lượng mưa lớn (trung bình từ 1750 đến 2000 mm mỗi năm). Nhiệt độ ổn định quanh năm, thường dao động từ 20°C đến 30°C.Rừng mưa nhiệt đới là một trong những hệ sinh thái đa dạng nhất trên thế giới, chứa đựng hàng ngàn loài cây cối và động vật. Cây cối thường xanh quanh năm, với tầng cây cao che phủ tầng thấp hơn.'
            ],
            ['id' => '2',
            'habitat_name' => 'Rừng ôn đới',
            'habitat_description' => 'Rừng ôn đới có bốn mùa rõ rệt với mùa đông lạnh và mùa hè ấm áp. Lượng mưa trung bình, thường từ 750 đến 1500 mm mỗi năm.Rừng ôn đới bao gồm nhiều loại cây lá rộng rụng lá vào mùa đông và cây lá kim. Đây là nơi cư trú của nhiều loài động thực vật phong phú.'
            ],
            ['id' => '3',
            'habitat_name' => 'Thảo nguyên',
            'habitat_description' => 'Thảo nguyên là khu vực có khí hậu khô hạn và nóng, với một mùa mưa ngắn. Lượng mưa thay đổi từ 500 đến 1500 mm mỗi năm.Thảo nguyên là môi trường mở, chủ yếu là cỏ và một số cây gỗ rải rác. Đây là nơi sinh sống của nhiều loài động vật lớn.'
            ],
            ['id' => '4',
            'habitat_name' => 'Sa mạc',
            'habitat_description' => 'Sa mạc có khí hậu cực kỳ khô hạn với lượng mưa dưới 250 mm mỗi năm. Nhiệt độ biến đổi lớn giữa ngày và đêm, có thể rất nóng vào ban ngày và lạnh vào ban đêm.Sa mạc thường có thảm thực vật thưa thớt, với các loài cây và động vật thích nghi tốt với điều kiện khô hạn.'
            ],
            ['id' => '6',
            'habitat_name' => 'Đồng cỏ',
            'habitat_description' => 'Đồng cỏ có lượng mưa trung bình, thường từ 500 đến 900 mm mỗi năm, với mùa khô và mùa mưa phân biệt.Khu vực này chủ yếu được phủ bởi cỏ và thảo mộc, có ít cây lớn. Đồng cỏ là nơi sinh sống của nhiều loài động vật ăn cỏ và động vật săn mồi.'
            ],
            ['id' => '7',
            'habitat_name' => 'Rừng taiga ',
            'habitat_description' => 'Rừng taiga có khí hậu lạnh giá với mùa đông kéo dài và mùa hè ngắn. Lượng mưa thấp, chủ yếu dưới dạng tuyết.Rừng taiga chủ yếu bao gồm các loài cây lá kim như thông, vân sam và tuyết tùng.'
            ],
            ['id' => '8',
            'habitat_name' => 'Vùng Bắc Cực',
            'habitat_description' => 'Vùng Bắc Cực có khí hậu cực kỳ lạnh giá với băng tuyết quanh năm. Nhiệt độ thường dưới 0°C, có thời gian ánh sáng ban ngày rất ngắn vào mùa đông và rất dài vào mùa hè.Khu vực này bao gồm các bãi băng, tuyết và thảm thực vật tundra.'
            ],
            ['id' => '9',
            'habitat_name' => 'Vùng biển',
            'habitat_description' => 'Vùng biển bao gồm các biển và đại dương, từ vùng nước nông đến vùng nước sâu. Nhiệt độ và điều kiện môi trường rất đa dạng.Hệ sinh thái biển rất phong phú và đa dạng, từ các rạn san hô đầy màu sắc đến các vực sâu tối tăm.'
            ],
            ['id' => '10',
            'habitat_name' => 'Vùng nước ngọt',
            'habitat_description' => 'Khu vực này bao gồm các sông, hồ, suối, và đầm lầy. Nước ngọt có nồng độ muối thấp hơn nhiều so với nước biển. Các hệ sinh thái nước ngọt rất đa dạng, cung cấp môi trường sống cho nhiều loài động thực vật.'
            ],
            ['id' => '11',
            'habitat_name' => 'Đầm lầy và đất ngập nước ',
            'habitat_description' => 'Đây là khu vực đất thấp bị ngập nước thường xuyên hoặc theo mùa, bao gồm đầm lầy, bãi lầy, và các vùng đất ngập nước khác.Đầm lầy và đất ngập nước là những hệ sinh thái rất năng động và giàu dinh dưỡng, hỗ trợ nhiều loài động thực vật.'
            ],
        ]);
        DB::table('animal_color')->insert([
            ['id' => '1',
            'color_name' => 'Xanh lục',
            ],
            ['id' => '2',
            'color_name' => 'Xanh dương',
            ],
            ['id' => '3',
            'color_name' => 'Đỏ',
            ],
            ['id' => '4',
            'color_name' => 'Vàng',
            ],
            ['id' => '6',
            'color_name' => 'Cam',
            ],
            ['id' => '7',
            'color_name' => 'Nâu',
            ],
            ['id' => '8',
            'color_name' => 'Trắng',
            ],
            ['id' => '9',
            'color_name' => 'Đen',
            ],
            ['id' => '10',
            'color_name' => 'Xám',
            ],
            ['id' => '11',
            'color_name' => 'Tím',
            ],
        ]);
        DB::table('activity_time')->insert([
            ['id' => '1',
            'activity_name' => 'Ban ngày',
            'activity_description' => 'Động vật thuộc về ban ngày thường có tầm nhìn tốt dưới ánh sáng ban ngày.Chúng thường có thói quen ngủ vào ban đêm để nghỉ ngơi và tái tạo năng lượng.Nhiều loài sử dụng thời gian ban ngày để săn mồi, tìm kiếm thức ăn và thực hiện các hoạt động xã hội.'
            ],
            ['id' => '2',
            'activity_name' => 'Ban đêm',
            'activity_description' => 'Động vật thuộc về ban đêm có giác quan phát triển để thích nghi với bóng tối, như thị giác tốt trong điều kiện ánh sáng yếu, thính giác và khứu giác nhạy bén.Chúng thường tìm nơi ẩn náu vào ban ngày để tránh kẻ thù và nhiệt độ cao.'
            ],
            ['id' => '3',
            'activity_name' => 'Cả ngày',
            'activity_description' => 'Động vật không có thời gian hoạt động cố định, chúng hoạt động cả ngày lẫn đêm tuỳ vào điều kiện môi trường, nhu cầu sinh học và sự sẵn có của thức ăn.Sự linh hoạt này giúp chúng thích nghi tốt hơn với môi trường thay đổi và giảm sự cạnh tranh về thức ăn với các loài khác.'
            ],
            ['id' => '4',
            'activity_name' => 'Động vật hoạt động hoàng hôn và bình minh',
            'activity_description' => 'Động vật thích nghi với ánh sáng yếu của hoàng hôn và bình minh, thời gian mà nhiệt độ không quá cao và có ít kẻ thù hoạt động.Hoạt động vào những thời điểm này giúp chúng tận dụng thời gian mà cả động vật ban ngày và ban đêm ít hoạt động.'
            ],
        ]);
        DB::table('animal_category')->insert([
            ['id' => '1',
            'category_name' => 'Cá',
            ],
            ['id' => '2',
            'category_name' => 'Lưỡng cư',
            ],
            ['id' => '3',
            'category_name' => 'Bò sát',
            ],
            ['id' => '4',
            'category_name' => 'Chim',
            ],
            ['id' => '5',
            'category_name' => 'Động vật có vú',
            ],
            ['id' => '6',
            'category_name' => 'Côn trùng',
            ],
            ['id' => '7',
            'category_name' => 'Nhuyễn thể',
            ],
        ]);
        DB::table('diet_type')->insert([
            ['id' => '1',
            'diet_name' => 'Ăn Cỏ',
            ],
            ['id' => '2',
            'diet_name' => 'Ăn thịt',
            ],
            ['id' => '3',
            'diet_name' => 'Ăn tạp',
            ],
            ['id' => '4',
            'diet_name' => 'Ăn lá',
            ],
            ['id' => '5',
            'diet_name' => 'Ăn côn trùng',
            ],
        ]);
        DB::table('conservation_status')->insert([
            ['id' => '1',
            'status_name' => 'LC',
            'status_description' => 'Loài không đang đối mặt với nguy cơ tuyệt chủng đáng kể trong tương lai gần.',
            ],
            ['id' => '2',
            'status_name' => 'NT',
            'status_description' => 'Loài có nguy cơ trở thành loài bị đe dọa nếu không có biện pháp bảo tồn.',
            ],
            ['id' => '3',
            'status_name' => 'VU',
            'status_description' => 'Loài có nguy cơ cao trở thành loài bị đe dọa trong tương lai gần.',
            ],
            ['id' => '4',
            'status_name' => 'EN',
            'status_description' => 'Loài đang đối mặt với nguy cơ cao của việc tuyệt chủng trong tương lai gần.',
            ],
            ['id' => '5',
            'status_name' => 'CE',
            'status_description' => 'Loài đang ở trên bờ vực tuyệt chủng và cần các biện pháp bảo tồn ngay lập tức.',
            ],
            ['id' => '6',
            'status_name' => 'EW',
            'status_description' => 'Loài đã tuyệt chủng trong tự nhiên nhưng vẫn còn tồn tại trong một số môi trường nhân tạo.',
            ],
            ['id' => '7',
            'status_name' => 'EX',
            'status_description' => 'Loài đã biến mất hoàn toàn khỏi trái đất.',
            ],
            ['id' => '8',
            'status_name' => 'DD',
            'status_description' => 'Dữ liệu về tình trạng bảo tồn của loài không đủ để đưa ra đánh giá chính xác.',
            ],
        ]);
        DB::table('animal_area')->insert([
            ['id' => '1',
            'area_name' => 'Châ Âu',
            ],
            ['id' => '2',
            'area_name' => 'Châu Á',
            ],
            ['id' => '3',
            'area_name' => 'Châu Mỹ',
            ],
            ['id' => '4',
            'area_name' => 'Châu Nam Cực',
            ],
            ['id' => '5',
            'area_name' => 'Châu Phi',
            ],
            ['id' => '6',
            'area_name' => 'Châu Đại Dương',
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class PostLikeCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert(
            [
                [
                    'title' => 'Nai sừng tấm so với tuần lộc',
                    'image' => 'deer.jpg',
                    'content' => 'Nai sừng tấm, hay cụ thể hơn là tuần lộc (Rangifer tarandus) , thường gắn liền với lễ Giáng sinh, đặc biệt vì vai trò của chúng trong văn hóa dân gian và truyền thống của các nền văn hóa khác nhau.Ở Bắc Mỹ, "nai sừng tấm" thường dùng để chỉ một loài khác (Cervus canadensis) , loài này không gắn chặt với truyền thống Giáng sinh.Trong văn hóa dân gian Scandinavia và Bắc Âu, tuần lộc gắn liền với mùa đông và chúng là một phần của văn hóa và truyền thống bản địa trong nhiều thế kỷ. Những ảnh hưởng văn hóa này đã góp phần khiến tuần lộc, hay tuần lộc ở Bắc Mỹ gắn liền với mùa lễ hội, khiến chúng trở thành biểu tượng của lễ Giáng sinh ở nhiều nơi trên thế giới.
Chúc mừng Giáng sinh tới tất cả độc giả của chúng tôi!',
                    'status' => 1,
                    'user_id' => 2,
                ],
                [
                    'title' => 'Sự tái sinh của đồng cỏ vĩ đại',
                    'image' => 'lake.jpg',
                    'content' => 'Trong một trong những bài đăng trước đây của tôi , tôi đã viết về thảm kịch con người và thiệt hại về môi trường do quân chiếm đóng Nga phá hủy đập Nhà máy Thủy điện Kakhovka.
Một khía cạnh thú vị của câu chuyện này là nó chứa đựng tội ác kép chống lại Ukraine và người dân nước này. Tội ác đầu tiên là việc xây dựng con đập này, đã làm ngập lụt một khu vực rộng lớn của vùng đồng bằng ngập nước sông Dnipro, trong lịch sử được gọi là Great Meadow.
Người Cossacks Ukraine gọi Great Meadow là cha của họ vì nơi trú ẩn và an ninh mà nó mang lại. Great Meadow không chỉ là một phần quan trọng trong bản sắc dân tộc mà đế quốc luôn cố gắng vượt qua mà còn là hệ sinh thái vùng đồng bằng sông có quy mô độc nhất vô nhị ở châu Âu.',
                    'status' => 0,
                    'user_id' => 1,
                ],
                [
                    'title' => 'Những người sống sót nơi hoang dã: Sự thích nghi tuyệt vời của động vật',
                    'image' => 'chameleon.jpg',
                    'content' => 'Từ sa mạc đến vùng lãnh nguyên băng giá, từ độ sâu của đại dương đến đỉnh núi cao nhất, những loài động vật này đã phát triển những đặc điểm và hành vi độc đáo cho phép chúng vượt qua thử thách và đánh lừa đối thủ. Dưới đây là một số cách thích nghi tuyệt vời nhất của động vật được tìm thấy trong tự nhiên trong loạt bài đăng của chúng tôi dành riêng cho các kiểu thích nghi khác nhau.
                    Tắc kè hoa (Khả năng thay đổi màu sắc): Tắc kè hoa có thể thay đổi màu da để hòa hợp với môi trường xung quanh, giúp chúng ẩn náu khỏi kẻ săn mồi và phục kích con mồi.',
                    'status' => 0,
                    'user_id' => 2,
                ],
            ]
        );
        DB::table('comment')->insert(
            [
                [
                    'comment' => 'Mèo là loài động vật rất thông minh và dễ thương.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Chó là bạn tốt nhất của con người.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Cá vàng rất dễ chăm sóc và rất đẹp.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Chim sẻ hót rất hay vào buổi sáng.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Hamster rất nhỏ và dễ thương.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Thỏ rất nhanh nhẹn và thích gặm cỏ.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Rùa sống rất lâu và di chuyển chậm rãi.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Vẹt biết nói và rất thông minh.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Ngựa rất mạnh mẽ và trung thành.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Gấu trúc rất dễ thương và thích ăn tre.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Sư tử là vua của rừng rậm.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Cú mèo có đôi mắt rất sáng và nhạy.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Bươm bướm có đôi cánh rất đẹp và sặc sỡ.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Hươu cao cổ có cái cổ rất dài.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Chim cánh cụt sống ở vùng lạnh và bơi rất giỏi.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Lợn có khứu giác rất tốt.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Voi là loài động vật có kích thước lớn nhất trên cạn.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Chồn sương rất giỏi leo trèo.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Kangaroo nhảy rất cao và xa.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Sói sống thành đàn và rất thông minh.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],
                [
                    'comment' => 'Rắn rất nguy hiểm nhưng cũng rất đẹp.',
                    'post_id' => rand(1, 3),
                    'user_id' => rand(1, 2),
                ],                
            ]
        );
        DB::table('like')->insert([
            [
                'user_id' => 1,
                'post_id' => 1
            ],
            [
                'user_id' => 2,
                'post_id' => 1
            ],
            [
                'user_id' => 1,
                'post_id' => 3
            ],
            [
                'user_id' => 2,
                'post_id' => 2
            ],
        ]);
    }
}

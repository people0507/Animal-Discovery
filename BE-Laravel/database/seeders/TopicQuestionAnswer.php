<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TopicQuestionAnswer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topic')->insert(
            [
                ['topic_name' => 'Tình trạng bảo tồn động vật hoang dã',
                'topic_image' => 'topic1.jpg',
                'topic_description' => 'Bảo tồn động vật hoang dã đang đối mặt với những thách thức nghiêm trọng do sự suy giảm môi trường sống và các hoạt động con người như săn bắn trái phép và buôn bán bất hợp pháp. Các nỗ lực bảo tồn bao gồm việc thành lập các khu bảo tồn, tăng cường giáo dục cộng đồng, và thiết lập các biện pháp pháp lý để bảo vệ các loài động vật hoang dã trên toàn thế giới.',
                'score_per_question' => 100,
            ],
            ]
        );
        DB::table('question')->insert(
            [
                [
                    'question_content' => 'Động vật nào có số lượng cá thể giảm … được xếp vào cấp độ rất nguy cấp (CR); giảm … thì được xếp vào cấp độ nguy cấp (EN) ; giảm sút … thì được xếp ở cấp độ sẽ nguy cấp (VU).',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Động vật quý hiếm là những động vật có giá trị về',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Động vật quý hiếm nào đang ở cấp độ đe dọa tuyệt chủng rất nguy cấp',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Rùa núi vàng đang bị đe dọa tuyệt chủng cấp độ',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Khỉ vàng có giá trị',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Những động vật có độ đe dọa tuyệt chủng sẽ nguy cấp là',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Loài nào có giá trị dược liệu chữa bệnh hen suyễn và tăng sinh lực',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Động vật nào được dùng chế tạo nước hoa',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Rùa núi vàng có giá trị',
                    'topic_id' => 1,
                ],
                [
                    'question_content' => 'Để bảo vệ động vật quý hiếm cần',
                    'topic_id' => 1,
                ],
            ]
        );

        DB::table('answer')->insert(
            [
                [
                    'answer_content' => '80 %, 40 %, 30 %',
                    'answer_status' => 0,
                    'question_id' => 1,
                ],
                [
                    'answer_content' => '80 %, 50 %, 20 %',
                    'answer_status' => 1,
                    'question_id' => 1,
                ],
                [
                    'answer_content' => '60 %, 40 %, 20 %',
                    'answer_status' => 0,
                    'question_id' => 1,
                ],
                [
                    'answer_content' => '60 %, 50 %, 10 %',
                    'answer_status' => 0,
                    'question_id' => 1,
                ],
                [
                    'answer_content' => 'Thực phẩm, dược liệu, mĩ nghệ',
                    'answer_status' => 0,
                    'question_id' => 2,
                ],
                [
                    'answer_content' => 'Nguyên liệu công nghệ',
                    'answer_status' => 0,
                    'question_id' => 2,
                ],
                [
                    'answer_content' => 'Khoa học, xuất khẩu',
                    'answer_status' => 0,
                    'question_id' => 2,
                ],
                [
                    'answer_content' => 'Tất cả các ý trên đúng',
                    'answer_status' => 1,
                    'question_id' => 2,
                ],
                [
                    'answer_content' => 'Ốc xà cừ',
                    'answer_status' => 1,
                    'question_id' => 3,
                ],
                [
                    'answer_content' => 'Sóc đỏ',
                    'answer_status' => 0,
                    'question_id' => 3,
                ],
                [
                    'answer_content' => 'Rùa núi vàng',
                    'answer_status' => 0,
                    'question_id' => 3,
                ],
                [
                    'answer_content' => 'Cá ngựa vàng',
                    'answer_status' => 0,
                    'question_id' => 3,
                ],
                [
                    'answer_content' => 'Rất nguy cấp',
                    'answer_status' => 0,
                    'question_id' => 4,
                ],
                [
                    'answer_content' => 'Nguy cấp',
                    'answer_status' => 1,
                    'question_id' => 4,
                ],
                [
                    'answer_content' => 'Sẽ nguy cấp',
                    'answer_status' => 0,
                    'question_id' => 4,
                ],
                [
                    'answer_content' => 'Ít nguy cấp',
                    'answer_status' => 0,
                    'question_id' => 4,
                ],
                [
                    'answer_content' => 'Là động vật trong thí nghiệm khoa học',
                    'answer_status' => 1,
                    'question_id' => 5,
                ],
                [
                    'answer_content' => 'Làm cảnh',
                    'answer_status' => 0,
                    'question_id' => 5,
                ],
                [
                    'answer_content' => 'Làm thực phẩm',
                    'answer_status' => 0,
                    'question_id' => 5,
                ],
                [
                    'answer_content' => 'Làm thuốc và nước hoa',
                    'answer_status' => 0,
                    'question_id' => 5,
                ],
                [
                    'answer_content' => 'ốc xà cừ, hươu xạ',
                    'answer_status' => 0,
                    'question_id' => 6,
                ],
                [
                    'answer_content' => 'tôm hùm, rùa núi vàng',
                    'answer_status' => 0,
                    'question_id' => 6,
                ],
                [
                    'answer_content' => 'cà cuống, cá ngựa gai',
                    'answer_status' => 1,
                    'question_id' => 6,
                ],
                [
                    'answer_content' => 'khỉ vàng, gà lôi trắng',
                    'answer_status' => 0,
                    'question_id' => 6,
                ],
                [
                    'answer_content' => 'sóc đỏ',
                    'answer_status' => 0,
                    'question_id' => 7,
                ],
                [
                    'answer_content' => 'hươu xạ',
                    'answer_status' => 0,
                    'question_id' => 7,
                ],
                [
                    'answer_content' => 'cà cuống',
                    'answer_status' => 0,
                    'question_id' => 7,
                ],
                [
                    'answer_content' => 'cá ngựa gai',
                    'answer_status' => 1,
                    'question_id' => 7,
                ],
                [
                    'answer_content' => 'tôm hùm',
                    'answer_status' => 0,
                    'question_id' => 8,
                ],
                [
                    'answer_content' => 'gà lôi',
                    'answer_status' => 0,
                    'question_id' => 8,
                ],
                [
                    'answer_content' => 'khỉ vàng',
                    'answer_status' => 0,
                    'question_id' => 8,
                ],
                [
                    'answer_content' => 'hươu xạ',
                    'answer_status' => 1,
                    'question_id' => 8,
                ],
                [
                    'answer_content' => 'Thẩm mĩ, dược liệu',
                    'answer_status' => 1,
                    'question_id' => 9,
                ],
                [
                    'answer_content' => 'Giá trị thực phẩm',
                    'answer_status' => 0,
                    'question_id' => 9,
                ],
                [
                    'answer_content' => 'Vật liệu trong thủ công nghiệp',
                    'answer_status' => 0,
                    'question_id' => 9,
                ],
                [
                    'answer_content' => 'Là động vật thí nghiệm',
                    'answer_status' => 0,
                    'question_id' => 9,
                ],
                [
                    'answer_content' => 'Bảo vệ môi trường sống của động vật quý hiếm',
                    'answer_status' => 0,
                    'question_id' => 10,
                ],
                [
                    'answer_content' => 'Cấm săn bắn, buôn bán trái phép',
                    'answer_status' => 0,
                    'question_id' => 10,
                ],
                [
                    'answer_content' => 'Đẩy mạnh chăn nuôi và xây dựng các khu dự trữ thiên nhiên',
                    'answer_status' => 0,
                    'question_id' => 10,
                ],
                [
                    'answer_content' => 'Tất cả các biện pháp trên',
                    'answer_status' => 1,
                    'question_id' => 10,
                ],
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
            [
                'name' => 'Nguyễn Đăng Nhân',
                'email' => 'tuongvandang1@gmail.com',
                'password' => Hash::make('123456'),
                'role_id' => 1,
            ],
            [
                'name' => 'Trương Văn Cường',
                'email' => 'cuong2003@gmail.com',
                'password' => Hash::make('123456'),
                'role_id' => 2,
            ],
        ]);
        DB::table('climate_zone')->insert([
            [
                'climate_name' => 'Vùng nhiệt đới',
                'climate_image' => 'tropical_region.jpg',
                'climate_description' => 'Vùng đất nằm gần xích đạo, có khí hậu ấm áp quanh năm với nhiệt độ trung bình cao và lượng mưa nhiều.'
            ],
            [
                'climate_name' => 'Vùng khô cằn',
                'climate_image' => 'arid_region.jpg',
                'climate_description' => 'Vùng đất có lượng mưa ít và hơi ẩm thấp, thường có đất cằn cỗi và thích hợp cho các cây cối chịu hạn.'
            ],
            [
                'climate_name' => 'Vùng ôn đới',
                'climate_image' => 'temperate_region.jpg',
                'climate_description' => 'Vùng đất có bốn mùa rõ rệt, mùa hè ấm áp và mùa đông lạnh, thích hợp cho nhiều loài cây cối phát triển.'
            ],
            [
                'climate_name' => 'Vùng lạnh',
                'climate_image' => 'cold_region.jpg',
                'climate_description' => 'Vùng đất có nhiệt độ thấp, có thể có tuyết phủ mặt đất lâu dài trong mùa đông và thích hợp cho loài cây cối chịu lạnh.'
            ], [
                'climate_name' => 'Vùng cực',
                'climate_image' => 'polar_region.jpg',
                'climate_description' => 'Vùng đất nằm gần các cực trái đất, có nhiệt độ rất thấp và thường có băng tuyết phủ mặt đất suốt năm.'
            ]
        ]);

        DB::table('biome')->insert([
            [
                'biome_name' => 'Hồ',
                'biome_image' => 'lake.jpg',
                'biome_description' => 'Một môi trường nước ngọt tĩnh lặng, thường có độ sâu khác nhau và thường được bao quanh bởi cạn đá hoặc đất.'
            ],
            [
                'biome_name' => 'Rạn san hô',
                'biome_image' => 'coral_reef.jpg',
                'biome_description' => 'Một cấu trúc đá vôi được hình thành bởi san hô và các sinh vật biển khác, thường nằm dưới mặt nước biển trong khu vực nhiệt đới.'
            ],
            [
                'biome_name' => 'Sông',
                'biome_image' => 'river.jpg',
                'biome_description' => 'Dòng nước lớn chảy qua các vùng đất, cung cấp nguồn tài nguyên nước quan trọng và môi trường sống cho nhiều loài sinh vật.'
            ],
            [
                'biome_name' => 'Vùng bãi triều',
                'biome_image' => 'intertidal.jpg',
                'biome_description' => 'Vùng bãi triều là khu vực trên bờ biển mà nước biển lên xuống theo chu kỳ triều nổi và triều xuống.'
            ],
            [
                'biome_name' => 'Cửa sông',
                'biome_image' => 'river_mouth.jpg',
                'biome_description' => 'Điểm kết thúc của sông, nơi nước ngọt từ sông hòa vào nước biển mặn.'
            ],
            [
                'biome_name' => 'Vùng vực thẳm',
                'biome_image' => 'deep_sea.jpg',
                'biome_description' => 'Vùng nước sâu khác nhau của đại dương, nơi có áp suất cao và ánh sáng mặt trời không thể xuyên qua.'
            ],
            [
                'biome_name' => 'Khu vực đô thị',
                'biome_image' => 'urban_wildlife.jpg',
                'biome_description' => 'Các loài động vật sống hoặc tìm kiếm thức ăn trong các khu đô thị và thành phố.'
            ],
            [
                'biome_name' => 'Núi',
                'biome_image' => 'mountain.jpg',
                'biome_description' => 'Vùng đất cao, thường có đỉnh non, đá và tuyết, có sự sống đa dạng và điều kiện khí hậu khác nhau.'
            ],
            [
                'biome_name' => 'Rừng',
                'biome_image' => 'forest.jpg',
                'biome_description' => 'Khu rừng rậm với cây cối phát triển mật độ cao, bao gồm cả rừng nhiệt đới và rừng ôn đới.'
            ],
            [
                'biome_name' => 'Đầm lầy',
                'biome_image' => 'swamp.jpg',
                'biome_description' => 'Một môi trường nước ngọt hoặc nước lợ, thường có cây bụi và cây cối phát triển nhiều.'
            ],
            [
                'biome_name' => 'Khu vực đá',
                'biome_image' => 'rocky_area.jpg',
                'biome_description' => 'Vùng đất không có đất mà thay vào đó là các khối đá, thường nằm trên núi hay vùng biển.'
            ],
            [
                'biome_name' => 'Quần xã sinh vật nhân tạo',
                'biome_image' => 'urban_landscape.jpg',
                'biome_description' => 'Môi trường do con người tạo ra, bao gồm các thành phố, đô thị và vùng quê được canh tác.'
            ],
            [
                'biome_name' => 'Khu vực nông nghiệp',
                'biome_image' => 'farmland.jpg',
                'biome_description' => 'Khu vực được canh tác để trồng cây và chăn nuôi động vật, thường bao gồm cánh đồng và trang trại.'
            ],
            [
                'biome_name' => 'Ngoại ô',
                'biome_image' => 'suburb.jpg',
                'biome_description' => 'Vùng ngoại ô của thành phố hoặc khu dân cư, thường có sự kết hợp giữa cảnh quan tự nhiên và môi trường sống con người.'
            ],
            [
                'biome_name' => 'Xavan',
                'biome_image' => 'savanna.jpg',
                'biome_description' => 'Vùng đồng cỏ rộng mở ở khu vực nhiệt đới và cận nhiệt đới, thường có cây cây cối thưa thớt.'
            ],
            [
                'biome_name' => 'Biển',
                'biome_image' => 'sea.jpg',
                'biome_description' => 'Phần nước mặn của đại dương, có khối lượng nước lớn và có sự sống đa dạng.'
            ],
            [
                'biome_name' => 'Bờ sông',
                'biome_image' => 'river_bank.jpg',
                'biome_description' => 'Đất ven sông, thường là môi trường sống cho nhiều loài cây cối và động vật dọc theo sông.'
            ],
            [
                'biome_name' => 'Khu vực cây bụi',
                'biome_image' => 'shrubland.jpg',
                'biome_description' => 'Khu vực có cây bụi và cây cối thấp mọc rải rác, thường sống ở vùng khô hoặc nhiệt đới.'
            ],
            [
                'biome_name' => 'Rừng nhiệt đới',
                'biome_image' => 'tropical_forest.jpg',
                'biome_description' => 'Rừng rậm ở khu vực nhiệt đới, với độ ẩm cao và nhiều loài cây cối và động vật.'
            ],
            [
                'biome_name' => 'Ven biển',
                'biome_image' => 'coast.jpg',
                'biome_description' => 'Khu vực bờ biển, thường có bãi cát, rạn san hô và nhiều sinh vật biển khác.'
            ],
            [
                'biome_name' => 'Nước ngọt',
                'biome_image' => 'freshwater.jpg',
                'biome_description' => 'Môi trường nước ngọt, bao gồm sông, hồ, và ao, có sự sống đa dạng của động vật và thực vật nước.'
            ],
            [
                'biome_name' => 'Nước lợ',
                'biome_image' => 'brackish_water.jpg',
                'biome_description' => 'Môi trường nước vừa ngọt vừa mặn, thường là kết quả của sự kết hợp giữa nước ngọt và nước biển.'
            ],
            [
                'biome_name' => 'Hang động',
                'biome_image' => 'cave.jpg',
                'biome_description' => 'Cấu trúc tự nhiên nằm dưới mặt đất, thường có điều kiện môi trường và ánh sáng rất đặc biệt.'
            ],
            [
                'biome_name' => 'Cồn cát',
                'biome_image' => 'sand_dunes.jpg',
                'biome_description' => 'Địa hình dạng đồi cát, thường di chuyển do gió, có các cây cối và động vật thích nghi với điều kiện khô.'
            ],
            [
                'biome_name' => 'Bán sa mạc',
                'biome_image' => 'semi_desert.jpg',
                'biome_description' => 'Vùng đất khô cằn, không hoàn toàn là sa mạc nhưng có ít mưa và cây cối thưa thớt.'
            ],
            [
                'biome_name' => 'Thảo nguyên',
                'biome_image' => 'grassland.jpg',
                'biome_description' => 'Vùng đất rộng mở với cỏ xanh mọc dày đặc, thường sống ở vùng khô và có ít cây cối.'
            ],
            [
                'biome_name' => 'Mỏm Băng',
                'biome_image' => 'icecap.jpg',
                'biome_description' => 'Mảnh băng nổi trên mặt biển, thường được hình thành từ nước lạnh ở các vùng cực , một khu vực băng lớn phủ trên đỉnh các ngọn núi hoặc trên các cao nguyên, nằm ở các vùng cực của Trái Đất.'
            ]
        ]);
        DB::table('color')->insert([
            [
                'color_name' => 'Xanh lục',
                'color_image' => 'green.jpg',
                'color_description' => 'Màu xanh lục thường được thấy trên lưng của những loài bò sát như rắn và thằn lằn, giúp chúng hòa mình vào môi trường sống tự nhiên và có khả năng che chắn khỏi ánh nắng mặt trời.'
            ],
            [
                'color_name' => 'Xanh dương',
                'color_image' => 'blue.jpg',
                'color_description' => 'Màu xanh dương thường xuất hiện trên lưng của cá và sinh vật biển khác, giúp chúng dễ dàng hòa tan vào màu nước biển và bảo vệ chúng khỏi con mồi săn mồi.'
            ],
            [
                'color_name' => 'Đỏ',
                'color_image' => 'red.jpg',
                'color_description' => 'Màu đỏ thường là biểu tượng của sức mạnh và sự chú ý. Nhiều loài chim sử dụng màu đỏ trên lông hoặc mỏ để thu hút bạn tình hoặc để chiếm đóng vùng đất.'
            ],
            [
                'color_name' => 'Vàng',
                'color_image' => 'yellow.jpg',
                'color_description' => 'Màu vàng là màu của sự nổi bật và khả năng sáng tỏ. Các loài côn trùng thường có màu vàng sáng để cảnh báo nguy hiểm hoặc để thu hút bạn tình.'
            ],
            [
                'color_name' => 'Cam',
                'color_image' => 'orange.jpg',
                'color_description' => 'Màu cam thường thấy trên một số loài cá và động vật bò sát, giúp chúng camouflaged trong các môi trường sống như sa mạc hoặc rạn san hô.'
            ],
            [
                'color_name' => 'Nâu',
                'color_image' => 'brown.jpg',
                'color_description' => 'Màu nâu thường thấy ở các loài động vật có vú như gấu, nai và linh dương. Màu nâu giúp chúng hòa mình vào môi trường rừng rậm và cỏ cây.'
            ],
            [
                'color_name' => 'Trắng',
                'color_image' => 'white.jpg',
                'color_description' => 'Màu trắng thường thấy ở các loài chim nước và sinh vật sống ở môi trường lạnh như băng tuyết. Màu trắng giúp chúng che mình trong môi trường trắng tuyết và bảo vệ chúng khỏi kẻ săn mồi.'
            ],
            [
                'color_name' => 'Đen',
                'color_image' => 'black.jpg',
                'color_description' => 'Màu đen thường thấy ở các loài chim và động vật có vú sống trong môi trường rừng sậy hoặc hang động. Màu sắc này giúp chúng ngụy trang vào ban đêm và che chắn khỏi sự chú ý của kẻ săn mồi.'
            ],
            [
                'color_name' => 'Xám',
                'color_image' => 'gray.jpg',
                'color_description' => 'Màu xám thường xuất hiện trên lông của các loài linh dương và khỉ, giúp chúng hòa mình vào màu của cây cối và đá. Màu sắc này là sự kết hợp giữa sự bảo vệ và ngụy trang.'
            ],
            [
                'color_name' => 'Tím',
                'color_image' => 'purple.jpg',
                'color_description' => 'Màu tím thường thấy ở một số loài côn trùng như bướm và ong, làm nổi bật chúng giữa thiên nhiên và thu hút sự chú ý của bạn tình.'
            ],
        ]);

        DB::table('activity_time')->insert([
            [
                'activity_name' => 'Ban ngày',
                'activity_description' => 'Động vật thuộc về ban ngày thường có tầm nhìn tốt dưới ánh sáng ban ngày.Chúng thường có thói quen ngủ vào ban đêm để nghỉ ngơi và tái tạo năng lượng.Nhiều loài sử dụng thời gian ban ngày để săn mồi, tìm kiếm thức ăn và thực hiện các hoạt động xã hội.'
            ],
            [
                'activity_name' => 'Ban đêm',
                'activity_description' => 'Động vật thuộc về ban đêm có giác quan phát triển để thích nghi với bóng tối, như thị giác tốt trong điều kiện ánh sáng yếu, thính giác và khứu giác nhạy bén.Chúng thường tìm nơi ẩn náu vào ban ngày để tránh kẻ thù và nhiệt độ cao.'
            ],
            [
                'activity_name' => 'Cả ngày',
                'activity_description' => 'Động vật không có thời gian hoạt động cố định, chúng hoạt động cả ngày lẫn đêm tuỳ vào điều kiện môi trường, nhu cầu sinh học và sự sẵn có của thức ăn.Sự linh hoạt này giúp chúng thích nghi tốt hơn với môi trường thay đổi và giảm sự cạnh tranh về thức ăn với các loài khác.'
            ],
            [
                'activity_name' => 'Hoàng hôn và bình minh',
                'activity_description' => 'Động vật thích nghi với ánh sáng yếu của hoàng hôn và bình minh, thời gian mà nhiệt độ không quá cao và có ít kẻ thù hoạt động.Hoạt động vào những thời điểm này giúp chúng tận dụng thời gian mà cả động vật ban ngày và ban đêm ít hoạt động.'
            ],
        ]);
        DB::table('category')->insert([
            [
                'category_name' => 'Cá',
            ],
            [
                'category_name' => 'Lưỡng cư',
            ],
            [
                'category_name' => 'Bò sát',
            ],
            [
                'category_name' => 'Chim',
            ],
            [
                'category_name' => 'Động vật có vú',
            ],
            [
                'category_name' => 'Côn trùng',
            ],
            [
                'category_name' => 'Nhuyễn thể',
            ],
        ]);
        DB::table('diet_type')->insert([
            [
                'diet_name' => 'Ăn Cỏ',
                'diet_description' => 'Loài động vật chỉ ăn cỏ là chế độ ăn uống chủ yếu của chúng. Đây là những sinh vật thích nghi tốt với các vùng đồng cỏ rộng lớn và thường xuyên di chuyển để tìm kiếm nguồn thực phẩm.',
            ],
            [
                'diet_name' => 'Ăn thịt',
                'diet_description' => 'Loài động vật chỉ ăn thịt là chế độ ăn uống chủ yếu của chúng. Thường xuất hiện ở các hệ sinh thái săn mồi, chúng có cấu trúc cơ thể thích hợp cho việc săn bắt và tiêu thụ các loài động vật khác.',
            ],
            [
                'diet_name' => 'Ăn tạp',
                'diet_description' => 'Loài động vật ăn tạp là những sinh vật linh hoạt trong chế độ ăn uống, chúng có thể tiêu thụ nhiều loại thực phẩm khác nhau từ thực vật đến động vật. Chúng thích nghi tốt với môi trường và có thể điều chỉnh chế độ ăn theo sự thay đổi của nguồn thực phẩm.',
            ],
            [
                'diet_name' => 'Ăn lá',
                'diet_description' => 'Loài động vật chỉ ăn lá là chế độ ăn uống chủ yếu của chúng. Chúng sống trong các khu rừng nhiệt đới hoặc khu vực có nhiều cây lá phát triển. Cấu trúc răng miệng của chúng phát triển để có thể xử lý lá và các phần cây khác.',
            ],
            [
                'diet_name' => 'Ăn côn trùng',
                'diet_description' => 'Loài động vật chỉ ăn côn trùng là chế độ ăn uống chủ yếu của chúng. Chúng thích nghi với các điều kiện sống nhiều côn trùng, sử dụng cấu trúc hàm để săn bắt và tiêu thụ các loại côn trùng khác nhau.',
            ],
        ]);
        DB::table('conservation_status')->insert([
            [
                'status_name' => 'LC',
                'status_full_name' => 'Ít Quan Tâm',
                'status_description' => 'Loài này không đang đối mặt với nguy cơ tuyệt chủng đáng kể trong tương lai gần. Số lượng cá thể của loài hiện tại vẫn ổn định và không có dấu hiệu giảm sút nghiêm trọng. Việc bảo tồn không cần phải ưu tiên cao nhưng vẫn cần được theo dõi thường xuyên.',
            ],
            [
                'status_name' => 'NT',
                'status_full_name' => 'Gần Nguy Cơ',
                'status_description' => 'Loài này có nguy cơ trở thành loài bị đe dọa nếu không có biện pháp bảo tồn kịp thời. Số lượng cá thể đang giảm sút và các yếu tố môi trường đang ảnh hưởng xấu đến loài. Cần có các biện pháp bảo tồn để tránh nguy cơ tuyệt chủng trong tương lai.',
            ],
            [
                'status_name' => 'VU',
                'status_full_name' => 'Dễ Bị Tổn Thương',
                'status_description' => 'Loài này có nguy cơ cao trở thành loài bị đe dọa trong tương lai gần nếu các yếu tố nguy cơ hiện tại tiếp tục tồn tại. Số lượng cá thể đã giảm sút đáng kể và môi trường sống của loài đang bị đe dọa nghiêm trọng. Các biện pháp bảo tồn cần được thực hiện ngay lập tức để bảo vệ loài.',
            ],
            [
                'status_name' => 'EN',
                'status_full_name' => 'Nguy Cấp',
                'status_description' => 'Loài này đang đối mặt với nguy cơ cao của việc tuyệt chủng trong tương lai gần. Số lượng cá thể đã giảm mạnh và môi trường sống của loài đang bị phá hủy nghiêm trọng. Các biện pháp bảo tồn khẩn cấp cần được áp dụng để ngăn chặn nguy cơ tuyệt chủng.',
            ],
            [
                'status_name' => 'CE',
                'status_full_name' => 'Nguy Cấp Cao',
                'status_description' => 'Loài này đang ở trên bờ vực tuyệt chủng và cần các biện pháp bảo tồn ngay lập tức. Số lượng cá thể cực kỳ ít và môi trường sống gần như đã bị tiêu diệt hoàn toàn. Nếu không có hành động bảo tồn khẩn cấp, loài này sẽ biến mất hoàn toàn.',
            ],
            [
                'status_name' => 'EW',
                'status_full_name' => 'Tuyệt Chủng Trong Tự Nhiên',
                'status_description' => 'Loài này đã tuyệt chủng trong tự nhiên và chỉ còn tồn tại trong các môi trường nhân tạo như vườn thú hoặc cơ sở bảo tồn. Để bảo vệ loài, cần tiếp tục duy trì và phát triển các chương trình nhân giống và bảo tồn trong môi trường nhân tạo.',
            ],
            [
                'status_name' => 'EX',
                'status_full_name' => 'Tuyệt Chủng',
                'status_description' => 'Loài này đã biến mất hoàn toàn khỏi trái đất. Không còn bất kỳ cá thể nào còn sống sót, và mọi nỗ lực bảo tồn đã thất bại. Đây là tình trạng cuối cùng và không thể đảo ngược được.',
            ],
            [
                'status_name' => 'DD',
                'status_full_name' => 'Thiếu Dữ Liệu',
                'status_description' => 'Dữ liệu về tình trạng bảo tồn của loài này không đủ để đưa ra đánh giá chính xác. Cần thực hiện thêm nghiên cứu và thu thập thông tin để xác định mức độ nguy cơ tuyệt chủng của loài.',
            ],
        ]);
        
        DB::table('area')->insert([
            [
                'area_name' => 'Châu Âu',
                'area_image' => 'europe.png',
                'area_description' => 'Châu Âu là một lục địa, cũng được công nhận là một phần của Á-Âu, nằm hoàn toàn ở Bắc bán cầu và phần lớn ở Đông bán cầu. Bao gồm các bán đảo cực tây của lục địa Á-Âu, nó có chung lục địa Á-Âu với cả châu Á và châu Phi. Nó giáp với Bắc Băng Dương ở phía bắc, Đại Tây Dương ở phía tây, Biển Địa Trung Hải ở phía nam và châu Á ở phía đông. Châu Âu thường được coi là tách biệt khỏi châu Á bởi lưu vực của dãy núi Ural, sông Ural, biển Caspian, vùng Caucasus mở rộng, biển Đen và các tuyến đường thủy của eo biển Thổ Nhĩ Kỳ. Mặc dù phần lớn biên giới này là trên đất liền, Châu Âu hầu như luôn được công nhận là lục địa của riêng mình vì kích thước vật lý to lớn cũng như tầm quan trọng của lịch sử và truyền thống của nó. Băng hà trong kỷ băng hà gần đây nhất và sự hiện diện của con người đã ảnh hưởng đến sự phân bố của hệ động vật châu Âu. Đối với các loài động vật, ở nhiều nơi ở châu Âu, hầu hết các loài động vật lớn và các loài săn mồi hàng đầu đều bị săn bắt đến tuyệt chủng. Voi ma mút lông xoăn đã tuyệt chủng trước khi kết thúc thời kỳ đồ đá mới. Ngày nay sói và gấu đang có nguy cơ tuyệt chủng. Một khi chúng đã được tìm thấy ở hầu hết các vùng của châu Âu. Tuy nhiên, nạn phá rừng và săn bắn đã khiến những loài động vật này ngày càng rút lui xa hơn. Vào thời Trung cổ, môi trường sống của loài gấu bị giới hạn ở những ngọn núi ít nhiều khó tiếp cận với đủ độ che phủ rừng. Ngày nay, gấu nâu sống chủ yếu ở bán đảo Balkan, Scandinavia và Nga; một số lượng nhỏ cũng tồn tại ở các quốc gia khác trên khắp châu Âu, nhưng ở những khu vực này quần thể gấu nâu bị chia cắt và bị gạt ra ngoài lề xã hội do môi trường sống của chúng bị phá hủy. Ngoài ra, gấu Bắc Cực có thể được tìm thấy ở Svalbard, một quần đảo Na Uy nằm xa về phía bắc Scandinavia. Sói, loài săn mồi lớn thứ hai ở châu Âu sau gấu nâu, có thể được tìm thấy chủ yếu ở Trung và Đông Âu cũng như ở vùng Balkan, với một số ít sống theo bầy ở các túi Tây Âu, Mèo hoang châu Âu, cáo, chó rừng và các loài martens, nhím, các loài bò sát và lưỡng cư khác nhau, các loài chim khác nhau, Động vật ăn cỏ quan trọng ở châu Âu là ốc sên, ấu trùng, cá, các loài chim và động vật có vú khác nhau, như loài gặm nhấm, hươu và nai, lợn rừng và sống ở vùng núi, marmots, steinbock, sơn dương trong số những loài khác. Một số loài côn trùng, chẳng hạn như loài bướm đồi mồi nhỏ, góp phần làm tăng thêm sự đa dạng sinh học. Sự tuyệt chủng của hà mã lùn và voi lùn có liên quan đến sự xuất hiện sớm nhất của con người trên các hòn đảo ở Địa Trung Hải. Các sinh vật biển cũng là một phần quan trọng của hệ động thực vật châu Âu. Hệ thực vật biển chủ yếu là thực vật phù du. Các động vật quan trọng sống ở vùng biển châu Âu là động vật phù du, động vật thân mềm, động vật da gai, các loài giáp xác khác nhau, mực và bạch tuộc, cá, cá heo và cá voi. Đa dạng sinh học được bảo vệ ở Châu Âu thông qua Công ước Bern của Hội đồng Châu Âu, công ước này cũng đã được Cộng đồng Châu Âu cũng như các quốc gia ngoài Châu Âu ký kết.',
            ],
            [
                'area_name' => 'Châu Á',
                'area_image' => 'asia.jpg',
                'area_description' => 'Châu Á là lục địa lớn nhất và đông dân nhất trên Trái đất, nằm chủ yếu ở Đông và Bắc bán cầu. Nó chia sẻ lục địa Á-Âu với lục địa châu Âu và lục địa Á-Âu với châu Phi và châu Âu. Châu Á có diện tích 44.579.000 km2, khoảng 30% tổng diện tích đất liền và 8,7% tổng diện tích bề mặt Trái đất. Lục địa này, nơi từ lâu đã là nơi sinh sống của phần lớn dân số loài người, là nơi có nhiều nền văn minh đầu tiên. 4,7 tỷ người của nó chiếm khoảng 60% dân số thế giới.Châu Á là lục địa lớn nhất và đông dân nhất trên Trái đất, nằm chủ yếu ở Đông và Bắc bán cầu. Nó chia sẻ lục địa Á-Âu với lục địa châu Âu và lục địa Á-Âu với châu Phi và châu Âu. Châu Á có diện tích 44.579.000 km2, khoảng 30% tổng diện tích đất liền và 8,7% tổng diện tích bề mặt Trái đất. Lục địa này, nơi từ lâu đã là nơi sinh sống của phần lớn dân số loài người, là nơi có nhiều nền văn minh đầu tiên. 4,7 tỷ người của nó chiếm khoảng 60% dân số thế giới.',
            ],
            [
                'area_name' => 'Châu Mỹ',
                'area_image' => 'america.png',
                'area_description' => 'Châu Mỹ là một lục địa lớn nằm hoàn toàn ở Tây bán cầu, bao gồm hai tiểu vùng chính là Bắc Mỹ và Nam Mỹ. Bắc Mỹ chủ yếu nằm ở Bắc bán cầu, trong khi Nam Mỹ chủ yếu nằm ở Nam bán cầu, với một phần tương đối nhỏ ở Bắc bán cầu. Bắc Mỹ giáp Bắc Băng Dương ở phía bắc, Đại Tây Dương ở phía đông, Nam Mỹ và Biển Caribe ở phía đông nam, và Thái Bình Dương ở phía tây và nam. Về mặt địa lý, Greenland cũng được coi là một phần của Bắc Mỹ do nằm trên mảng kiến tạo Bắc Mỹ. Hệ động vật đáng chú ý ở Bắc Mỹ bao gồm bò rừng, gấu đen, báo đốm, báo sư tử, chó đồng cỏ, gà tây, pronghorn, gấu trúc, chó sói và bướm vua. Các loại cây quan trọng đã được thuần hóa tại đây bao gồm thuốc lá, ngô, bí, cà chua, hướng dương, quả việt quất, quả bơ, bông, hạt tiêu ớt và vani. Nam Mỹ, với đặc điểm địa lý chủ yếu nằm ở Nam bán cầu, là một trong những lục địa đa dạng sinh học nhất trên Trái đất. Lục địa này là nơi sinh sống của nhiều loài động vật độc đáo như lạc đà không bướu, trăn anaconda, cá piranha, báo đốm, vicuña và heo vòi. Rừng nhiệt đới Amazon, một trong những khu vực có tính đa dạng sinh học cao nhất trên thế giới, chứa một tỷ lệ lớn các loài động thực vật trên Trái đất. Châu Mỹ, với sự kết hợp của cả Bắc và Nam Mỹ, tạo nên một lục địa phong phú về cả địa lý lẫn sinh học, góp phần quan trọng vào sự đa dạng sinh học toàn cầu và cung cấp nhiều tài nguyên thiên nhiên quan trọng.',
            ],
            [
                'area_name' => 'Châu Nam Cực',
                'area_image' => 'antarctica.png',
                'area_description' => 'Nam Cực là lục địa cực nam của Trái đất. Nằm gần như hoàn toàn ở phía nam của Vòng Nam Cực và được bao quanh bởi Nam Đại Dương, nó chứa Cực Nam địa lý. Nam Cực là lục địa lớn thứ năm, có diện tích gần gấp đôi Australia và có diện tích 14.200.000 km2 , Phần lớn Nam Cực được bao phủ bởi băng, với độ dày trung bình 1,9 km, Đời sống động vật không xương sống ở Nam Cực bao gồm các loài ve cực nhỏ như Alaskozetes antarcticus, chấy rận, tuyến trùng, tardigrades, luân trùng, nhuyễn thể và bọ đuôi bật. Một số ít động vật có xương sống trên cạn chỉ giới hạn ở các đảo cận Nam Cực. Loài ruồi không biết bay Belgica antarctica, loài động vật sống trên cạn lớn nhất ở Nam Cực, đạt kích thước 6 mm. Nhuyễn thể ở Nam Cực, tụ tập thành đàn lớn, là loài chủ chốt của hệ sinh thái Nam Đại Dương, là nguồn thức ăn quan trọng của cá voi, hải cẩu, hải cẩu báo, hải cẩu lông, mực, cá băng và nhiều loài chim, như chim cánh cụt và chim cánh cụt. chim hải âu. Một số loài động vật biển tồn tại và phụ thuộc trực tiếp hoặc gián tiếp vào thực vật phù du. Sinh vật biển ở Nam Cực bao gồm chim cánh cụt, cá voi xanh, cá kình, mực khổng lồ và hải cẩu lông thú. Có khoảng 40 loài chim sinh sản trên hoặc gần Nam Cực, bao gồm các loài chim hải âu, chim cánh cụt, chim cốc và mòng biển. Đại dương xung quanh Nam Cực có nhiều loài chim khác ghé thăm, bao gồm cả một số loài thường cư trú ở Bắc Cực. Chim cánh cụt hoàng đế là loài chim cánh cụt duy nhất sinh sản vào mùa đông ở Nam Cực; nó và chim cánh cụt Adélie sinh sản ở xa hơn về phía nam so với bất kỳ loài chim cánh cụt nào khác. Hải cẩu lông Nam Cực bị săn lùng rất nhiều vào thế kỷ 18 và 19 để lấy da bởi những thợ săn hải cẩu từ Hoa Kỳ và Vương quốc Anh. Hải cẩu báo là loài săn mồi đỉnh cao trong hệ sinh thái Nam Cực và di cư qua Nam Đại Dương để tìm kiếm thức ăn. Một cuộc điều tra về sinh vật biển do khoảng 500 nhà nghiên cứu thực hiện trong Năm Địa cực Quốc tế, được công bố vào năm 2010. Nghiên cứu cho thấy hơn 235 sinh vật biển sống ở cả hai vùng cực, đã thu hẹp khoảng cách 12.000 km, các loài động vật lớn như một số loài giáp xác và chim thực hiện chuyến đi khứ hồi hàng năm. Các dạng sống nhỏ hơn như hải sâm và ốc bơi tự do cũng được tìm thấy ở cả hai đại dương. Các yếu tố có thể hỗ trợ cho sự phân bố của chúng bao gồm sự chênh lệch nhiệt độ giữa đại dương sâu ở hai cực và xích đạo không quá 5°C và các hệ thống dòng chảy chính hoặc băng tải biển có khả năng vận chuyển trứng và ấu trùng.',
            ],
            [
                'area_name' => 'Châu Phi',
                'area_image' => 'africa.png',
                'area_description' => 'Châu Phi là lục địa lớn thứ hai và đông dân thứ hai thế giới, sau châu Á trong cả hai trường hợp. Với diện tích khoảng 30,3 triệu km2 bao gồm các đảo lân cận, nó chiếm 6% tổng diện tích bề mặt Trái đất và 20% diện tích đất liền. Với 1,3 tỷ người tính đến năm 2018, nó chiếm khoảng 16% dân số thế giới. Dân số Châu Phi là dân số trẻ nhất trong số tất cả các châu lục; độ tuổi trung bình năm 2012 là 19,7, trong khi độ tuổi trung bình trên toàn thế giới là 30,4. Mặc dù có nhiều nguồn tài nguyên thiên nhiên, Châu Phi là lục địa kém giàu có nhất tính theo đầu người, một phần do những trở ngại về địa lý, di sản của quá trình thuộc địa hóa của người châu Âu ở Châu Phi và Chiến tranh Lạnh, các hoạt động săn mồi/chủ nghĩa thực dân mới của các quốc gia phương Tây và Trung Quốc, và sự cai trị phi dân chủ. và những chính sách có hại. Bất chấp sự tập trung của cải ở mức thấp, sự mở rộng kinh tế gần đây và dân số đông và trẻ khiến Châu Phi trở thành một thị trường kinh tế quan trọng trong bối cảnh toàn cầu rộng lớn hơn. Châu Phi có lẽ tự hào là nơi có sự kết hợp lớn nhất thế giới về mật độ và phạm vi tự do của các quần thể và sự đa dạng động vật hoang dã, với các quần thể động vật ăn thịt và động vật ăn cỏ hoang dã phân bố tự do trên các vùng đồng bằng chủ yếu rộng mở, không thuộc tư nhân. Đây cũng là nơi sinh sống của nhiều loại động vật rừng rậm bao gồm rắn, linh trưởng và các loài thủy sinh như cá sấu và động vật lưỡng cư. Ngoài ra, Châu Phi có số lượng loài động vật cỡ lớn lớn nhất vì nó ít bị ảnh hưởng nhất bởi sự tuyệt chủng của loài động vật cỡ lớn thế Pleistocene.',
            ],
            [
                'area_name' => 'Châu Đại Dương',
                'area_image' => 'oceania.jpg',
                'area_description' => 'Châu Đại Dương là một khu vực địa lý bao gồm Australasia, Melanesia, Micronesia và Polynesia. Trải dài khắp Đông và Tây bán cầu, Châu Đại Dương ước tính có diện tích đất liền là 8.525.989 km2 và dân số hơn 41 triệu người. Khi so sánh với các lục địa, khu vực Châu Đại Dương có diện tích đất liền nhỏ nhất và dân số nhỏ thứ hai sau Nam Cực. Chim bói cá Thái Bình Dương được đặt tên thích hợp được tìm thấy ở Quần đảo Thái Bình Dương, cũng như chào mào đỏ, sáo Polynesia, goshawk nâu, nhạn Thái Bình Dương và Cardinal myzomela, cùng nhiều loài khác. Các loài chim sinh sản trên Pitcairn bao gồm chim nhạn cổ tích, chim nhiệt đới thông thường và chim nhiệt đới đuôi đỏ. Chích sậy Pitcairn, loài đặc hữu của đảo Pitcairn, đã được thêm vào danh sách các loài có nguy cơ tuyệt chủng vào năm 2008. Loài quạ Hawaii có nguồn gốc từ Hawaii, loài này đã tuyệt chủng trong tự nhiên từ năm 2002. Rắn cây nâu có nguồn gốc ở các bờ biển phía bắc và phía đông của Australia, Papua New Guinea, Guam và Quần đảo Solomon. Có nguồn gốc từ Úc, New Guinea và các đảo lân cận là các loài chim thiên đường, chim ăn mật, chim dây Úc, chim cổ đỏ Úc, chim bói cá, chim đồ tể và chim bower. Một đặc điểm độc đáo của hệ động vật Úc là sự khan hiếm tương đối của các loài động vật có vú có nhau thai bản địa và sự thống trị của các loài thú có túi - một nhóm động vật có vú nuôi con non trong túi, bao gồm các loài chân dài, thú có túi và dasyuromorphs. Các loài chim sẻ của Úc, còn được gọi là chim biết hót hoặc chim đậu, bao gồm chim hồng tước, nhóm chim ác là, chim mỏ gai, chim quạ, chim pardalote, chim lyre. Các loài chim chiếm ưu thế ở nước này bao gồm chim ác là Úc, quạ Úc, chim cu gáy, bồ câu mào và chim kookaburra cười. Gấu túi, emu, thú mỏ vịt và kangaroo là động vật quốc gia của Úc và quỷ Tasmania cũng là một trong những loài động vật nổi tiếng ở nước này. Goanna là loài thằn lằn săn mồi có nguồn gốc từ lục địa Australia. Các loài chim ở New Zealand đã tiến hóa thành một khu hệ chim bao gồm một số lượng lớn các loài đặc hữu. Là một quần đảo, New Zealand đã tích lũy được sự đa dạng về loài chim và khi Thuyền trưởng James Cook đến vào những năm 1770, ông nhận thấy rằng tiếng hót của loài chim nghe rất chói tai. Sự kết hợp bao gồm các loài có đặc điểm sinh học khác thường như kākāpō, loài vẹt sinh sản về đêm, không biết bay duy nhất trên thế giới, nhưng cũng có nhiều loài tương tự với các khu vực đất liền lân cận. Một số loài chim nổi tiếng và đặc biệt hơn ở New Zealand là kiwi, kea, takahē, kākāpō, mohua, tūī và chim chuông. Tuatara là loài bò sát đặc hữu của New Zealand.',
            ]
        ]);
        DB::table('ocean')->insert([
            [
                'ocean_name' => 'Thái Bình Dương',
                'ocean_image' => 'pacific.jpg',
                'ocean_description' => 'Thái Bình Dương là vùng lớn nhất và sâu nhất trong năm vùng đại dương của Trái đất. Nó kéo dài từ Bắc Băng Dương ở phía bắc đến Nam Đại Dương ở phía nam và được bao bọc bởi các lục địa châu Á và châu Úc ở phía tây và châu Mỹ ở phía đông.',
            ],
            [
                'ocean_name' => 'Ấn Độ Dương',
                'ocean_image' => 'indian_ocean.jpg',
                'ocean_description' => 'Ấn Độ Dương là khu vực lớn thứ ba trong số năm khu vực đại dương trên thế giới, bao phủ 70.560.000 km2 hay 19,8% lượng nước trên bề mặt Trái đất. Nó giáp với châu Á ở phía bắc, châu Phi ở phía tây và Australia ở phía đông. Về phía nam, nó được bao bọc bởi Nam Đại Dương hoặc Nam Cực, tùy thuộc vào định nghĩa được sử dụng. Dọc theo lõi của nó, Ấn Độ Dương có một số biển khu vực hoặc cận biên lớn như Biển Ả Rập, Biển Laccadive, Biển Somali, Vịnh Bengal và Biển Andaman.

                Trong số 36 điểm nóng đa dạng sinh học của Trái đất, 9 điểm nằm ở rìa Ấn Độ Dương.',
            ],
            [
                'ocean_name' => 'Đại Tây Dương',
                'ocean_image' => 'atlantic.jpg',
                'ocean_description' => 'Đại Tây Dương là đại dương lớn thứ hai trong số năm đại dương trên thế giới, với diện tích khoảng 106.460.000 km 2 , Nó chiếm khoảng 20% ​​bề mặt Trái đất và khoảng 29% diện tích mặt nước.',
            ],
            [
                'ocean_name' => 'Bắc Băng Dương',
                'ocean_image' => 'arctic_ocean.jpg',
                'ocean_description' => 'Bắc Băng Dương là biển nhỏ nhất và nông nhất trong 5 đại dương lớn trên thế giới. Nó trải rộng trên diện tích khoảng 14.060.000 km2 và được coi là nơi lạnh nhất trong tất cả các đại dương. Nó cũng được coi là phần cực bắc của Đại dương Thế giới bao trùm. Do tính chất mùa vụ rõ rệt từ 2–6 tháng có nắng nửa đêm và đêm vùng cực ở Bắc Băng Dương, nên việc sản xuất chính các sinh vật quang hợp như tảo băng và thực vật phù du bị giới hạn trong các tháng mùa xuân và mùa hè, những người tiêu dùng quan trọng của các sinh vật sản xuất sơ cấp ở miền Trung Bắc Băng Dương và các vùng biển lân cận bao gồm động vật phù du, đặc biệt là động vật giáp xác và động vật chân chèo, cũng như quần thể động vật liên quan đến băng. Những sinh vật tiêu thụ sơ cấp này tạo thành mối liên kết quan trọng giữa sinh vật sản xuất sơ cấp và bậc dinh dưỡng cao hơn. Thành phần của các bậc dinh dưỡng cao hơn ở Bắc Băng Dương thay đổi tùy theo khu vực và lớp băng biển bao phủ. Người tiêu dùng thứ cấp ở Biển Barents, một vùng biển Bắc Cực chịu ảnh hưởng của Đại Tây Dương, chủ yếu là các loài cận Bắc Cực bao gồm cá trích, cá tuyết non và cá capelin. Ở những vùng được bao phủ bởi băng ở trung tâm Bắc Băng Dương, cá tuyết vùng cực là loài săn mồi chủ yếu của người tiêu dùng chính. Những kẻ săn mồi đỉnh cao ở Bắc Băng Dương—các loài động vật có vú ở biển như hải cẩu, cá voi và gấu Bắc Cực—săn cá. Các loài sinh vật biển có nguy cơ tuyệt chủng ở Bắc Băng Dương bao gồm hải mã và cá voi. Khu vực này có hệ sinh thái mong manh và đặc biệt dễ bị ảnh hưởng bởi biến đổi khí hậu vì nó ấm lên nhanh hơn phần còn lại của thế giới. Sứa bờm sư tử có rất nhiều ở vùng biển Bắc Cực và sứa sọc là loài sứa duy nhất sống ở đại dương.',
            ],
            [
                'ocean_name' => 'Nam Đại Dương',
                'ocean_image' => 'southern_ocean.jpg',
                'ocean_description' => 'Nam Đại Dương bao gồm vùng nước cực nam của Đại dương Thế giới, thường được coi là ở phía nam vĩ độ 60° Nam và bao quanh Nam Cực. Trong 30 năm qua, Nam Đại Dương phải chịu sự biến đổi khí hậu nhanh chóng, dẫn đến những thay đổi trong hệ sinh thái biển. Nhiều loại động vật biển tồn tại và phụ thuộc trực tiếp hoặc gián tiếp vào thực vật phù du ở Nam Đại Dương. Sinh vật biển ở Nam Cực bao gồm chim cánh cụt, cá voi xanh, cá kình, mực khổng lồ và hải cẩu lông thú. Chim cánh cụt hoàng đế là loài chim cánh cụt duy nhất sinh sản vào mùa đông ở Nam Cực, trong khi chim cánh cụt Adélie sinh sản ở xa hơn về phía nam so với bất kỳ loài chim cánh cụt nào khác. Chim cánh cụt rockhopper có bộ lông đặc biệt xung quanh mắt, tạo nên vẻ ngoài của lông mi phức tạp. Chim cánh cụt vua, chim cánh cụt chinstrap và chim cánh cụt gentoo cũng sinh sản ở Nam Cực. Hải cẩu lông Nam Cực bị săn bắt rất nhiều vào thế kỷ 18 và 19 để lấy da bởi những người săn hải cẩu từ Hoa Kỳ và Vương quốc Anh. Hải cẩu Weddell, một hải cẩu thực sự, được đặt theo tên của Ngài James Weddell, chỉ huy đoàn thám hiểm hải cẩu của Anh ở Biển Weddell. Nhuyễn thể ở Nam Cực, tụ tập thành đàn lớn, là loài chủ chốt của hệ sinh thái Nam Đại Dương và là sinh vật thực phẩm quan trọng đối với cá voi, hải cẩu, hải cẩu báo, hải cẩu lông, mực, cá băng, chim cánh cụt, chim hải âu và nhiều loài chim khác. Các cộng đồng sinh vật đáy dưới đáy biển rất đa dạng và dày đặc, với số lượng lên tới 155.000 loài động vật được tìm thấy trên 1 mét vuông. Vì môi trường đáy biển xung quanh Nam Cực rất giống nhau nên có thể tìm thấy hàng trăm loài trên khắp đất liền, đó là một phân phối rộng rãi duy nhất cho một cộng đồng lớn như vậy. Chủ nghĩa khổng lồ dưới biển sâu là phổ biến ở những loài động vật này. Hơn 235 sinh vật biển sống ở cả hai vùng cực, vượt qua khoảng cách 12.000 km. Các loài động vật lớn như một số loài giáp xác và chim thực hiện chuyến đi khứ hồi hàng năm. Điều đáng ngạc nhiên hơn là những dạng sống nhỏ như giun bùn, hải sâm và ốc bơi tự do được tìm thấy ở cả hai đại dương. Các yếu tố khác nhau có thể hỗ trợ cho sự phân bố của chúng - nhiệt độ khá đồng đều của đại dương sâu ở hai cực và xích đạo, chênh lệch không quá 5°C, và các hệ thống dòng chảy chính hoặc băng tải biển vận chuyển trứng và giai đoạn ấu trùng. Tuy nhiên, trong số các loài động vật biển nhỏ hơn thường được cho là giống nhau ở Nam Cực và Bắc Cực, các nghiên cứu chi tiết hơn về từng quần thể thường - nhưng không phải lúc nào cũng - tiết lộ những khác biệt, cho thấy chúng là những loài bí ẩn có quan hệ gần gũi hơn là một loài lưỡng cực duy nhất.',
            ],
        ]);
        DB::table('population_trending')->insert([
            [
                'population_trending_name' => 'Tăng',
                'population_trending_description' => 'Xu hướng dân số "Tăng" tương tự như sự gia tăng dân số của một loài động vật cụ thể. Đây là khi số lượng cá thể đang tăng lên do tỷ lệ sinh sản cao hơn tỷ lệ tử vong và di cư.',
            ],
            [
                'population_trending_name' => 'Giảm',
                'population_trending_description' => 'Xu hướng dân số "Giảm" tương tự như sự suy giảm dân số của một loài động vật. Đây có thể xảy ra khi số lượng cá thể giảm do tác động của môi trường, săn bắt quá mức hoặc mất môi trường sống.',
            ],
            [
                'population_trending_name' => 'Ổn định',
                'population_trending_description' => 'Xu hướng dân số "Ổn định" tương tự như sự duy trì số lượng dân số ổn định của một loài động vật. Đây thường là kết quả của một sự cân bằng giữa sinh sản, tử vong và các yếu tố điều kiện sống khác.',
            ],
            [
                'population_trending_name' => 'Chưa biết',
                'population_trending_description' => 'Xu hướng dân số "Chưa biết" thể hiện sự thiếu thông tin về xu hướng dân số của một loài động vật cụ thể. Điều này có thể do thiếu nghiên cứu hoặc dữ liệu không đầy đủ.',
            ],
        ]);        
        DB::table('category')->insert(
            [
                ['category_name' => 'Họ Hươu'],
                ['category_name' => 'Họ Hổ'],
                ['category_name' => 'Họ Chó'],
                ['category_name' => 'Họ Mèo'],
                ['category_name' => 'Họ Hươu sừng nhọn'],
                ['category_name' => 'Họ Nai'],
                ['category_name' => 'Họ Khỉ'],
                ['category_name' => 'Họ Gấu'],
                ['category_name' => 'Họ Vượn'],
                ['category_name' => 'Họ Đuôi dài'],
                ['category_name' => 'Họ Lạc đà'],
                ['category_name' => 'Họ Rắn'],
                ['category_name' => 'Họ Cá'],
                ['category_name' => 'Họ Chim'],
                ['category_name' => 'Họ Bọ'],
                ['category_name' => 'Họ Côn trùng'],
                ['category_name' => 'Họ Cá heo'],
                ['category_name' => 'Họ Hải cẩu'],
                ['category_name' => 'Họ Hà mã'],
                ['category_name' => 'Họ Sóc'],
                ['category_name' => 'Họ Lợn'],
                ['category_name' => 'Họ Báo'],
                ['category_name' => 'Họ Ngựa'],
                ['category_name' => 'Họ Lợn rừng'],
                ['category_name' => 'Họ Gà'],
                ['category_name' => 'Họ Cáo'],
                ['category_name' => 'Họ Cừu'],
                ['category_name' => 'Họ Dơi'],
                ['category_name' => 'Họ Mực'],
                ['category_name' => 'Họ Cua'],
                ['category_name' => 'Họ Cá mập'],
                ['category_name' => 'Họ Sếu'],
                ['category_name' => 'Họ Sâu'],
                ['category_name' => 'Họ Thằn lằn'],
                ['category_name' => 'Họ Cá chép'],
                ['category_name' => 'Họ Cầy'],
                ['category_name' => 'Họ Hải ly'],
                ['category_name' => 'Họ Chim sáo'],
                ['category_name' => 'Họ Cá thu'],
                ['category_name' => 'Họ Cá rô'],
                ['category_name' => 'Họ Bọ cánh cứng'],
                ['category_name' => 'Họ Rắn'],
                ['category_name' => 'Họ Khỉ'],
                ['category_name' => 'Họ Cá'],
                ['category_name' => 'Họ Cá mập'],
                ['category_name' => 'Họ Chim cánh cụt']
            ]
        );
        DB::table('nation')->insert(
            [
                [
                    'nation_name' => 'Afghanistan',
                    'nation_description' => 'Afghanistan, nằm ở ngã tư của Trung Á và Nam Á, nổi tiếng với các dãy núi Hindu Kush hùng vĩ. Quốc gia này có các vùng đất hoang mạc và thung lũng xanh tươi, là nơi sinh sống của các loài động vật hoang dã như báo tuyết, linh dương Marco Polo và cừu hoang.'
                ],
                [
                    'nation_name' => 'Albania',
                    'nation_description' => 'Albania, nằm ở Đông Nam Châu Âu trên bán đảo Balkan, có các dãy núi đồi trập trùng và bờ biển Địa Trung Hải. Nước này là nơi cư trú của nhiều loài động vật hoang dã như gấu nâu, chó sói xám và đại bàng vàng.'
                ],
                [
                    'nation_name' => 'Algeria',
                    'nation_description' => 'Algeria, quốc gia lớn nhất ở Châu Phi, nằm ở vùng Maghreb của Bắc Phi và có một phần lớn diện tích là sa mạc Sahara. Các khu vực rừng núi phía bắc và ven biển là nơi sinh sống của các loài động vật như cáo Fenec, cừu Barbary và nhiều loài chim di cư.'
                ],
                [
                    'nation_name' => 'Andorra',
                    'nation_description' => 'Andorra, một quốc gia nhỏ nằm giữa Pháp và Tây Ban Nha trong dãy Pyrenees, nổi tiếng với các khu vực núi non và thung lũng đẹp như tranh vẽ. Nước này là nơi sinh sống của các loài động vật như sơn dương Pyrenees, đại bàng vàng và loài cú lớn.'
                ],
                [
                    'nation_name' => 'Angola',
                    'nation_description' => 'Angola nằm ở Tây Nam Châu Phi, có đa dạng địa lý từ bờ biển Đại Tây Dương đến các cao nguyên nội địa và rừng nhiệt đới. Nước này là nơi cư trú của nhiều loài động vật hoang dã như voi châu Phi, sư tử, báo và nhiều loài chim hiếm.'
                ],
                [
                    'nation_name' => 'Antigua and Barbuda',
                    'nation_description' => 'Antigua and Barbuda, quốc gia ở vùng Caribe, nổi tiếng với các bãi biển cát trắng và nước biển trong xanh. Địa lý của nó bao gồm các rạn san hô, đầm lầy và rừng mưa nhiệt đới. Nơi đây là nhà của nhiều loài động vật biển, rùa biển và các loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Argentina',
                    'nation_description' => 'Argentina nằm ở Nam Mỹ, nổi tiếng với dãy núi Andes, vùng đất Pampas và các khu rừng nhiệt đới. Quốc gia này là nơi sinh sống của nhiều loài động vật như báo sư tử, lạc đà guanaco, và chim cánh cụt Magellanic.'
                ],
                [
                    'nation_name' => 'Armenia',
                    'nation_description' => 'Armenia nằm ở vùng Caucasus của Âu-Á, có địa lý đa dạng với các dãy núi cao và thung lũng. Nước này là nơi sinh sống của nhiều loài động vật như báo Caucasus, gấu nâu và nhiều loài chim săn mồi.'
                ],
                [
                    'nation_name' => 'Australia',
                    'nation_description' => 'Australia là một lục địa và quốc gia bao quanh bởi Ấn Độ Dương và Thái Bình Dương. Nước này nổi tiếng với các vùng sa mạc, rừng nhiệt đới và rạn san hô Great Barrier. Hệ động vật độc đáo của Australia bao gồm kangaroo, koala, và nhiều loài thú có túi khác.'
                ],
                [
                    'nation_name' => 'Austria',
                    'nation_description' => 'Austria nằm ở Trung Âu, nổi tiếng với dãy núi Alps và các hồ nước trong xanh. Quốc gia này có các khu rừng và đồng cỏ là nơi cư trú của các loài động vật như hươu đỏ, cáo, và nhiều loài chim núi.'
                ],
                [
                    'nation_name' => 'Azerbaijan',
                    'nation_description' => 'Azerbaijan nằm ở vùng Caucasus giữa Châu Âu và Châu Á, có địa lý đa dạng với núi cao, đồng bằng và biển Caspi. Động vật hoang dã bao gồm báo Caucasus, linh dương và nhiều loài chim nước.'
                ],
                [
                    'nation_name' => 'Bahamas',
                    'nation_description' => 'Bahamas, một quốc gia đảo ở vùng Caribe, nổi tiếng với các bãi biển cát trắng và nước biển trong xanh. Các rạn san hô và đầm lầy là nơi cư trú của nhiều loài động vật biển, rùa biển và các loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Bahrain',
                    'nation_description' => 'Bahrain là một quốc gia đảo ở vịnh Ba Tư, nổi tiếng với các khu vực sa mạc và bờ biển. Động vật hoang dã bao gồm linh dương, cáo sa mạc và nhiều loài chim di cư.'
                ],
                [
                    'nation_name' => 'Bangladesh',
                    'nation_description' => 'Bangladesh nằm ở Nam Á, nổi tiếng với các vùng đồng bằng sông Hằng và các khu rừng ngập mặn Sundarbans. Nơi đây là nhà của loài hổ Bengal, cá sấu nước mặn và nhiều loài chim nước.'
                ],
                [
                    'nation_name' => 'Barbados',
                    'nation_description' => 'Barbados là một quốc gia đảo ở vùng Caribe, nổi tiếng với các bãi biển đẹp và rạn san hô. Động vật hoang dã bao gồm các loài động vật biển, rùa biển và nhiều loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Belarus',
                    'nation_description' => 'Belarus nằm ở Đông Âu, có các vùng đất bằng phẳng và rừng rậm. Quốc gia này là nơi sinh sống của nhiều loài động vật hoang dã như hươu, lợn rừng, và nhiều loài chim săn mồi.'
                ],
                [
                    'nation_name' => 'Belgium',
                    'nation_description' => 'Belgium nằm ở Tây Âu, có địa hình đa dạng với các đồng bằng, rừng và bờ biển. Động vật hoang dã bao gồm cáo, hươu và nhiều loài chim nước.'
                ],
                [
                    'nation_name' => 'Belize',
                    'nation_description' => 'Belize nằm ở Trung Mỹ, nổi tiếng với các rạn san hô và rừng nhiệt đới. Quốc gia này là nơi sinh sống của nhiều loài động vật như báo đốm, hươu đuôi trắng và nhiều loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Benin',
                    'nation_description' => 'Benin nằm ở Tây Phi, có địa lý đa dạng với rừng nhiệt đới, đồng cỏ và bờ biển. Động vật hoang dã bao gồm voi, sư tử và nhiều loài linh dương.'
                ],
                [
                    'nation_name' => 'Bhutan',
                    'nation_description' => 'Bhutan nằm ở Đông Himalaya, nổi tiếng với các dãy núi cao và rừng rậm. Quốc gia này là nơi sinh sống của nhiều loài động vật như báo tuyết, linh dương và nhiều loài chim săn mồi.'
                ],
                [
                    'nation_name' => 'Bolivia',
                    'nation_description' => 'Bolivia nằm ở Nam Mỹ, có địa lý đa dạng từ dãy Andes đến rừng mưa Amazon. Động vật hoang dã bao gồm báo sư tử, lạc đà guanaco, và nhiều loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Bosnia and Herzegovina',
                    'nation_description' => 'Bosnia and Herzegovina nằm ở Đông Nam Châu Âu, có địa lý đa dạng với các dãy núi, sông suối và rừng rậm. Quốc gia này là nơi sinh sống của nhiều loài động vật như gấu nâu, chó sói xám và đại bàng vàng.'
                ],
                [
                    'nation_name' => 'Botswana',
                    'nation_description' => 'Botswana nằm ở Nam Phi, nổi tiếng với các khu vực đồng cỏ và sa mạc Kalahari. Động vật hoang dã bao gồm voi châu Phi, sư tử, báo và nhiều loài chim hiếm.'
                ],
                [
                    'nation_name' => 'Brazil',
                    'nation_description' => 'Brazil nằm ở Nam Mỹ, nổi tiếng với rừng mưa Amazon, các bãi biển dài và thác nước hùng vĩ. Động vật hoang dã bao gồm báo đốm, cá sấu Caiman và nhiều loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Brunei',
                    'nation_description' => 'Brunei nằm ở Đông Nam Á trên đảo Borneo, có các khu rừng nhiệt đới và bờ biển dài. Động vật hoang dã bao gồm các loài linh trưởng, báo mây và nhiều loài chim hiếm.'
                ],
                [
                    'nation_name' => 'Bulgaria',
                    'nation_description' => 'Bulgaria nằm ở Đông Nam Châu Âu, có địa lý đa dạng với các dãy núi, đồng bằng và bờ biển Biển Đen. Động vật hoang dã bao gồm gấu nâu, cáo và nhiều loài chim săn mồi.'
                ],
                [
                    'nation_name' => 'Burkina Faso',
                    'nation_description' => 'Burkina Faso nằm ở Tây Phi, có địa lý chủ yếu là đồng cỏ và sa mạc. Động vật hoang dã bao gồm voi, linh dương và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Burundi',
                    'nation_description' => 'Burundi nằm ở Đông Phi, có các dãy núi, hồ nước và rừng nhiệt đới. Động vật hoang dã bao gồm voi, tinh tinh và nhiều loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Cabo Verde',
                    'nation_description' => 'Cabo Verde, một quốc gia đảo ở Tây Phi, có các bãi biển đẹp và rạn san hô. Động vật hoang dã bao gồm nhiều loài chim biển, rùa biển và cá heo.'
                ],
                [
                    'nation_name' => 'Cambodia',
                    'nation_description' => 'Cambodia nằm ở Đông Nam Á, nổi tiếng với các khu rừng nhiệt đới và hệ thống sông Mê Kông. Động vật hoang dã bao gồm voi, hổ và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Cameroon',
                    'nation_description' => 'Cameroon nằm ở Trung Phi, có địa lý đa dạng từ bờ biển đến các dãy núi và rừng nhiệt đới. Động vật hoang dã bao gồm voi, khỉ đột và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Canada',
                    'nation_description' => 'Canada nằm ở Bắc Mỹ, nổi tiếng với các khu vực núi non, rừng rậm và hồ nước rộng lớn. Động vật hoang dã bao gồm gấu, hươu và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Central African Republic',
                    'nation_description' => 'Central African Republic nằm ở Trung Phi, có các khu rừng nhiệt đới và đồng cỏ. Động vật hoang dã bao gồm voi, tinh tinh và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Chad',
                    'nation_description' => 'Chad nằm ở Trung Phi, có địa lý chủ yếu là sa mạc và hồ nước. Động vật hoang dã bao gồm linh dương, voi và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Chile',
                    'nation_description' => 'Chile nằm ở Nam Mỹ, nổi tiếng với dãy núi Andes, sa mạc Atacama và các khu rừng nhiệt đới. Động vật hoang dã bao gồm lạc đà guanaco, báo sư tử và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'China',
                    'nation_description' => 'China nằm ở Đông Á, có địa lý đa dạng từ các sa mạc, dãy núi đến rừng rậm và đồng bằng. Động vật hoang dã bao gồm gấu trúc, hổ và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Colombia',
                    'nation_description' => 'Colombia nằm ở Nam Mỹ, nổi tiếng với các khu rừng mưa nhiệt đới và dãy núi Andes. Động vật hoang dã bao gồm báo sư tử, lạc đà guanaco và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Comoros',
                    'nation_description' => 'Comoros là một quốc gia đảo ở Ấn Độ Dương, nổi tiếng với các bãi biển đẹp và rạn san hô. Động vật hoang dã bao gồm nhiều loài động vật biển và chim biển.'
                ],
                [
                    'nation_name' => 'Congo (Congo-Brazzaville)',
                    'nation_description' => 'Congo nằm ở Trung Phi, có các khu rừng nhiệt đới và sông Congo. Động vật hoang dã bao gồm tinh tinh, voi và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Costa Rica',
                    'nation_description' => 'Costa Rica nằm ở Trung Mỹ, nổi tiếng với các khu rừng nhiệt đới và bờ biển đẹp. Động vật hoang dã bao gồm báo sư tử, lười và nhiều loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Croatia',
                    'nation_description' => 'Croatia nằm ở Đông Nam Châu Âu, có bờ biển dài và các dãy núi. Động vật hoang dã bao gồm gấu nâu, cáo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Cuba',
                    'nation_description' => 'Cuba là một quốc gia đảo ở vùng Caribe, nổi tiếng với các bãi biển và rạn san hô. Động vật hoang dã bao gồm nhiều loài chim, rùa biển và cá heo.'
                ],
                [
                    'nation_name' => 'Cyprus',
                    'nation_description' => 'Cyprus là một quốc gia đảo ở Đông Địa Trung Hải, có các dãy núi và bờ biển đẹp. Động vật hoang dã bao gồm nhiều loài chim và rùa biển.'
                ],
                [
                    'nation_name' => 'Czechia (Czech Republic)',
                    'nation_description' => 'Czechia nằm ở Trung Âu, có địa lý đa dạng với các dãy núi, rừng và sông suối. Động vật hoang dã bao gồm hươu, lợn rừng và nhiều loài chim săn mồi.'
                ],
                [
                    'nation_name' => 'Denmark',
                    'nation_description' => 'Denmark nằm ở Bắc Âu, có bờ biển dài và các đồng cỏ xanh tươi. Động vật hoang dã bao gồm hươu, cáo và nhiều loài chim biển.'
                ],
                [
                    'nation_name' => 'Djibouti',
                    'nation_description' => 'Djibouti nằm ở Đông Phi, có địa lý chủ yếu là sa mạc và bờ biển. Động vật hoang dã bao gồm linh dương, cáo sa mạc và nhiều loài chim di cư.'
                ],
                [
                    'nation_name' => 'Dominica',
                    'nation_description' => 'Dominica là một quốc gia đảo ở vùng Caribe, nổi tiếng với các khu rừng nhiệt đới và bờ biển đẹp. Động vật hoang dã bao gồm nhiều loài động vật biển và chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Dominican Republic',
                    'nation_description' => 'Dominican Republic nằm ở vùng Caribe, có bờ biển dài và các dãy núi. Động vật hoang dã bao gồm nhiều loài chim, rùa biển và cá heo.'
                ],
                [
                    'nation_name' => 'Ecuador',
                    'nation_description' => 'Ecuador nằm ở Nam Mỹ, nổi tiếng với dãy núi Andes và quần đảo Galápagos. Động vật hoang dã bao gồm báo sư tử, lạc đà guanaco và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Egypt',
                    'nation_description' => 'Egypt nằm ở Bắc Phi, nổi tiếng với sa mạc Sahara và sông Nile. Động vật hoang dã bao gồm lạc đà, cáo sa mạc và nhiều loài chim di cư.'
                ],
                [
                    'nation_name' => 'El Salvador',
                    'nation_description' => 'El Salvador nằm ở Trung Mỹ, có địa lý chủ yếu là núi lửa và bờ biển dài. Động vật hoang dã bao gồm báo sư tử, lạc đà guanaco và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Equatorial Guinea',
                    'nation_description' => 'Equatorial Guinea nằm ở Trung Phi, có các khu rừng nhiệt đới và bờ biển. Động vật hoang dã bao gồm tinh tinh, voi và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Eritrea',
                    'nation_description' => 'Eritrea nằm ở Đông Phi, có địa lý chủ yếu là sa mạc và bờ biển. Động vật hoang dã bao gồm linh dương, cáo sa mạc và nhiều loài chim di cư.'
                ],
                [
                    'nation_name' => 'Estonia',
                    'nation_description' => 'Estonia nằm ở Bắc Âu, có địa hình chủ yếu là đồng bằng và rừng. Quốc gia này là nơi sinh sống của nhiều loài động vật như gấu nâu, chồn mèo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Eswatini (Swaziland)',
                    'nation_description' => 'Eswatini (trước đây là Swaziland) nằm ở miền nam Châu Phi, có các dãy núi và thung lũng sâu. Động vật hoang dã bao gồm sư tử, voi và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Ethiopia',
                    'nation_description' => 'Ethiopia nằm ở Đông Phi, có các cao nguyên, dãy núi và thung lũng sông lớn. Động vật hoang dã bao gồm báo Ethiopia, linh dương và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Fiji',
                    'nation_description' => 'Fiji là một quốc gia đảo ở Nam Thái Bình Dương, nổi tiếng với các rạn san hô và rừng nhiệt đới. Động vật hoang dã bao gồm cá sấu, chim săn mồi và nhiều loài chim biển.'
                ],
                [
                    'nation_name' => 'Finland',
                    'nation_description' => 'Finland nằm ở Bắc Âu, có địa hình chủ yếu là hồ nước, rừng và đồng cỏ. Động vật hoang dã bao gồm gấu xám, sói và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'France',
                    'nation_description' => 'France nằm ở Tây Âu, có địa lý đa dạng từ dãy núi Alps đến bờ biển Đại Tây Dương. Quốc gia này là nơi sinh sống của nhiều loài động vật như hươu đỏ, cáo và nhiều loài chim biển.'
                ],
                [
                    'nation_name' => 'Gabon',
                    'nation_description' => 'Gabon nằm ở Trung Phi, có các khu rừng nhiệt đới và bờ biển Đại Tây Dương. Động vật hoang dã bao gồm voi rừng, sư tử và nhiều loài linh dương.'
                ],
                [
                    'nation_name' => 'Gambia',
                    'nation_description' => 'Gambia nằm ở Tây Phi, có các khu rừng ngập mặn và đồng cỏ. Động vật hoang dã bao gồm voi, khỉ và nhiều loài chim nước.'
                ],
                [
                    'nation_name' => 'Georgia',
                    'nation_description' => 'Georgia nằm ở vùng Caucasus của Châu Âu-Á, có các dãy núi cao và thung lũng sâu. Nước này là nơi cư trú của nhiều loài động vật như báo hoang, gấu nâu và nhiều loài chim săn mồi.'
                ],
                [
                    'nation_name' => 'Germany',
                    'nation_description' => 'Germany is located in Central Europe, known for its diverse landscapes including forests, rivers, and the Alps. Wildlife includes deer, wild boar, and various bird species.'
                ],
                [
                    'nation_name' => 'Ghana',
                    'nation_description' => 'Ghana is situated in West Africa, characterized by coastal plains, tropical rainforests, and savannahs. Wildlife includes elephants, leopards, and a variety of bird species.'
                ],
                [
                    'nation_name' => 'Greece',
                    'nation_description' => 'Greece is located in Southeastern Europe, known for its mountainous terrain, islands, and Mediterranean coastline. Wildlife includes brown bears, lynx, and numerous bird species.'
                ],
                [
                    'nation_name' => 'Grenada',
                    'nation_description' => 'Grenada is a Caribbean island nation, known for its volcanic landscapes, lush rainforests, and pristine beaches. Wildlife includes Mona monkeys, tropical birds, and marine life.'
                ],
                [
                    'nation_name' => 'Guatemala',
                    'nation_description' => 'Guatemala is located in Central America, characterized by volcanic mountains, tropical rainforests, and Mayan ruins. Wildlife includes jaguars, howler monkeys, and various bird species.'
                ],
                [
                    'nation_name' => 'Guinea',
                    'nation_description' => 'Guinea is located in West Africa, known for its diverse landscapes including mountains, savannahs, and rainforests. Wildlife includes chimpanzees, hippos, and various bird species.'
                ],
                [
                    'nation_name' => 'Guinea-Bissau',
                    'nation_description' => 'Guinea-Bissau is located in West Africa, characterized by coastal mangroves, savannahs, and rivers. Wildlife includes saltwater crocodiles, manatees, and a variety of bird species.'
                ],
                [
                    'nation_name' => 'Guyana',
                    'nation_description' => 'Guyana is situated in northern South America, known for its dense rainforests, savannahs, and the Kaieteur Falls. Wildlife includes jaguars, giant river otters, and numerous bird species.'
                ],
                [
                    'nation_name' => 'Haiti',
                    'nation_description' => 'Haiti is located on the island of Hispaniola in the Caribbean, characterized by mountain ranges, coastal plains, and coral reefs. Wildlife includes Hispaniolan solenodons, parrots, and marine life.'
                ],
                [
                    'nation_name' => 'Honduras',
                    'nation_description' => 'Honduras is located in Central America, known for its Caribbean and Pacific coastlines, tropical rainforests, and Mayan ruins. Wildlife includes tapirs, scarlet macaws, and various marine species.'
                ],
                [
                    'nation_name' => 'Hungary',
                    'nation_description' => 'Hungary nằm ở Trung Âu, có địa hình đa dạng với sông suối, rừng và đồng cỏ. Động vật hoang dã bao gồm hươu, cáo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Iceland',
                    'nation_description' => 'Iceland nằm ở Bắc Đại Tây Dương, là một quốc gia đảo nổi tiếng với địa hình núi lửa và băng tuyết. Động vật hoang dã bao gồm cá heo, chim biển và nhiều loài chim di cư.'
                ],
                [
                    'nation_name' => 'India',
                    'nation_description' => 'India nằm ở Nam Á, có địa hình đa dạng từ dãy Himalaya đến sa mạc Thar và rừng nhiệt đới. Động vật hoang dã bao gồm hổ Bengal, voi và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Indonesia',
                    'nation_description' => 'Indonesia nằm ở Đông Nam Á, là quốc gia quần đảo lớn nhất thế giới với rừng nhiệt đới và núi lửa. Động vật hoang dã bao gồm tinh tinh, hổ Sumatra và nhiều loài khỉ.'
                ],
                [
                    'nation_name' => 'Iran',
                    'nation_description' => 'Iran nằm ở Tây Á, có địa hình từ dãy núi Zagros đến sa mạc và vùng bờ biển dài. Động vật hoang dã bao gồm báo Ba Tư, gấu xám và nhiều loài chim săn mồi.'
                ],
                [
                    'nation_name' => 'Iraq',
                    'nation_description' => 'Iraq nằm ở Tây Á, có địa hình đa dạng từ sông lớn đến sa mạc và núi cao. Động vật hoang dã bao gồm linh dương, cáo sa mạc và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Ireland',
                    'nation_description' => 'Ireland nằm ở Tây Âu, có địa hình chủ yếu là đồng cỏ xanh tươi và bờ biển đá ngầm. Động vật hoang dã bao gồm nai, cáo và nhiều loài chim biển.'
                ],
                [
                    'nation_name' => 'Israel',
                    'nation_description' => 'Israel nằm ở Trung Đông, có địa hình từ vùng núi đến bờ biển Địa Trung Hải và sa mạc Negev. Động vật hoang dã bao gồm linh dương, cáo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Italy',
                    'nation_description' => 'Italy nằm ở Nam Âu, có địa hình đa dạng từ dãy núi Alps đến bờ biển Địa Trung Hải. Động vật hoang dã bao gồm gấu nâu, sói và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Jamaica',
                    'nation_description' => 'Jamaica là một quốc gia đảo ở vùng Caribe, nổi tiếng với các bãi biển và rừng nhiệt đới. Động vật hoang dã bao gồm nhiều loài động vật biển và chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Japan',
                    'nation_description' => 'Japan nằm ở Đông Á, là một quốc gia quần đảo với địa hình núi non và rừng núi. Động vật hoang dã bao gồm gấu xám, linh dương sika và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Jordan',
                    'nation_description' => 'Jordan nằm ở Trung Đông, có địa hình đa dạng từ sa mạc đến thung lũng sông và biển Chết. Động vật hoang dã bao gồm linh dương, cáo sa mạc và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Kazakhstan',
                    'nation_description' => 'Kazakhstan là quốc gia lớn nhất thế giới nằm ở Trung Á, có địa hình từ sa mạc đến dãy núi Altai và bãi cát của Biển Aral. Động vật hoang dã bao gồm linh dương saiga, báo dã và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Kenya',
                    'nation_description' => 'Kenya nằm ở Đông Phi, có địa hình đa dạng từ dãy núi Aberdare đến thung lũng sông và sa mạc. Động vật hoang dã bao gồm sư tử, voi và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Kiribati',
                    'nation_description' => 'Kiribati là một quốc gia đảo ở Đại Tây Dương, nổi tiếng với các bãi biển và san hô. Động vật hoang dã bao gồm nhiều loài cá và chim biển.'
                ],
                [
                    'nation_name' => 'Kuwait',
                    'nation_description' => 'Kuwait nằm ở Trung Đông, có địa hình chủ yếu là sa mạc và bờ biển dài ven vịnh Ba Tư. Động vật hoang dã bao gồm linh dương sa mạc, cáo và nhiều loài chim di cư.'
                ],
                [
                    'nation_name' => 'Kyrgyzstan',
                    'nation_description' => 'Kyrgyzstan nằm ở Trung Á, có địa hình phức tạp từ dãy núi Tien Shan đến thung lũng sông và thảo nguyên. Động vật hoang dã bao gồm linh dương, báo dã và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Laos',
                    'nation_description' => 'Laos nằm ở Đông Nam Á, có địa hình đa dạng từ dãy núi đến sông Mekong và rừng nhiệt đới. Động vật hoang dã bao gồm gấu trúc, hổ và nhiều loài khỉ.'
                ],
                [
                    'nation_name' => 'Latvia',
                    'nation_description' => 'Latvia nằm ở Bắc Âu, có địa hình chủ yếu là đồng bằng và rừng. Quốc gia này là nơi sinh sống của nhiều loài động vật như gấu nâu, chồn mèo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Lebanon',
                    'nation_description' => 'Lebanon nằm ở Trung Đông, có địa hình từ dãy núi đến bờ biển Địa Trung Hải và thung lũng sông. Động vật hoang dã bao gồm linh dương, cáo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Lesotho',
                    'nation_description' => 'Lesotho nằm ở miền nam Châu Phi, là một quốc gia núi có địa hình chủ yếu là cao nguyên và thung lũng sâu. Động vật hoang dã bao gồm báo Ethiopia, linh dương và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Liberia',
                    'nation_description' => 'Liberia nằm ở Tây Phi, có địa hình chủ yếu là rừng nhiệt đới và các con sông lớn. Động vật hoang dã bao gồm voi rừng, sư tử và nhiều loài linh dương.'
                ],
                [
                    'nation_name' => 'Libya',
                    'nation_description' => 'Libya nằm ở Bắc Phi, có địa hình chủ yếu là sa mạc Sahara và vùng ven biển Địa Trung Hải. Động vật hoang dã bao gồm linh dương sa mạc, báo sa mạc và nhiều loài chim di cư.'
                ],
                [
                    'nation_name' => 'Liechtenstein',
                    'nation_description' => 'Liechtenstein nằm ở Trung Âu, có địa hình chủ yếu là dãy núi Alps và thung lũng sông. Động vật hoang dã bao gồm dê rừng, lửng và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Lithuania',
                    'nation_description' => 'Lithuania nằm ở Bắc Âu, có địa hình chủ yếu là đồng bằng và rừng. Quốc gia này là nơi sinh sống của nhiều loài động vật như gấu nâu, chồn mèo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Luxembourg',
                    'nation_description' => 'Luxembourg nằm ở Tây Âu, là một quốc gia nhỏ có địa hình chủ yếu là dốc và thung lũng sông. Động vật hoang dã bao gồm nai, cáo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Madagascar',
                    'nation_description' => 'Madagascar là một đảo lớn nằm ở Đông Phi, có các khu rừng nhiệt đới và động vật quý hiếm như lêmur và cá sấu dài mõm. Đây cũng là nơi sinh sống của nhiều loài chim và thú hoang dã.'
                ],
                [
                    'nation_name' => 'Malawi',
                    'nation_description' => 'Malawi nằm ở Đông Phi, có địa hình đa dạng từ hồ lớn đến dãy núi và thung lũng sông. Động vật hoang dã bao gồm sư tử, voi và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Malaysia',
                    'nation_description' => 'Malaysia nằm ở Đông Nam Á, có địa hình từ rừng nhiệt đới đến các đảo và núi non. Động vật hoang dã bao gồm hổ Mã Lai, gấu trúc và nhiều loài khỉ.'
                ],
                [
                    'nation_name' => 'Maldives',
                    'nation_description' => 'Maldives là một quốc gia đảo nằm ở Ấn Độ Dương, nổi tiếng với các bãi biển, san hô và lặn biển. Động vật hoang dã bao gồm cá sấu biển, rùa biển và nhiều loài cá.'
                ],
                [
                    'nation_name' => 'Mali',
                    'nation_description' => 'Mali nằm ở Tây Phi, có địa hình chủ yếu là sa mạc Sahara và sông Niger. Động vật hoang dã bao gồm linh dương sa mạc, voi sa mạc và nhiều loài chim nước.'
                ],
                [
                    'nation_name' => 'Malta',
                    'nation_description' => 'Malta là một quốc gia đảo nhỏ ở Địa Trung Hải, có địa hình đồi núi và bờ biển đá ngầm. Động vật hoang dã bao gồm nhiều loài chim biển và thú nhỏ.'
                ],
                [
                    'nation_name' => 'Marshall Islands',
                    'nation_description' => 'Marshall Islands là một quốc gia đảo nằm ở Thái Bình Dương, nổi tiếng với các rạn san hô và bãi biển. Động vật hoang dã bao gồm nhiều loài cá và chim biển.'
                ],
                [
                    'nation_name' => 'Mauritania',
                    'nation_description' => 'Mauritania nằm ở Tây Phi, có địa hình chủ yếu là sa mạc Sahara và bờ biển Đại Tây Dương. Động vật hoang dã bao gồm linh dương sa mạc, báo sa mạc và nhiều loài chim di cư.'
                ],
                [
                    'nation_name' => 'Mauritius',
                    'nation_description' => 'Mauritius là một đảo quốc nằm ở Ấn Độ Dương, nổi tiếng với các rạn san hô và đồng cỏ núi lửa. Động vật hoang dã bao gồm lêmur, chim câu và nhiều loài chim biển.'
                ],
                [
                    'nation_name' => 'Mexico',
                    'nation_description' => 'Mexico nằm ở Trung Mỹ, có địa hình đa dạng từ dãy núi Sierra Madre đến rừng nhiệt đới và bờ biển Thái Bình Dương. Động vật hoang dã bao gồm báo sư tử, hổ và nhiều loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Micronesia',
                    'nation_description' => 'Micronesia là một quốc gia đảo nằm ở Thái Bình Dương, bao gồm hàng loạt đảo nhỏ và rạn san hô. Động vật hoang dã bao gồm nhiều loài cá và chim biển.'
                ],
                [
                    'nation_name' => 'Moldova',
                    'nation_description' => 'Moldova nằm ở Đông Âu, có địa hình chủ yếu là đồng bằng và thung lũng sông. Động vật hoang dã bao gồm nai, cáo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Monaco',
                    'nation_description' => 'Monaco là một quốc gia nhỏ nằm ở Nam Âu, có địa hình chủ yếu là dốc và bờ biển Địa Trung Hải. Động vật hoang dã bao gồm nai, cáo và nhiều loài chim biển.'
                ],
                [
                    'nation_name' => 'Mongolia',
                    'nation_description' => 'Mongolia nằm ở Đông Á, là một quốc gia có địa hình chủ yếu là sa mạc và thảo nguyên rộng lớn. Động vật hoang dã bao gồm báo săn, lạc đà và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Montenegro',
                    'nation_description' => 'Montenegro nằm ở Nam Âu, có địa hình phức tạp từ dãy núi Dinaric đến bờ biển Adriatic. Động vật hoang dã bao gồm gấu nâu, chồn mèo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Morocco',
                    'nation_description' => 'Morocco nằm ở Bắc Phi, có địa hình từ dãy núi Atlas đến sa mạc Sahara và bờ biển Đại Tây Dương. Động vật hoang dã bao gồm linh dương Atlas, báo sa mạc và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Mozambique',
                    'nation_description' => 'Mozambique nằm ở Đông Phi, có địa hình đa dạng từ bờ biển Đại Tây Dương đến dãy núi và sông lớn. Động vật hoang dã bao gồm voi, sư tử và nhiều loài linh dương.'
                ],
                [
                    'nation_name' => 'Myanmar',
                    'nation_description' => 'Myanmar nằm ở Đông Nam Á, có địa hình đa dạng từ dãy núi Himalaya đến rừng nhiệt đới và sông lớn. Động vật hoang dã bao gồm voi châu Á, hổ và nhiều loài khỉ.'
                ],
                [
                    'nation_name' => 'Namibia',
                    'nation_description' => 'Namibia nằm ở Nam Phi, có địa hình chủ yếu là sa mạc Namib và vùng thảo nguyên rộng lớn. Động vật hoang dã bao gồm linh dương sa mạc, sư tử và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Nauru',
                    'nation_description' => 'Nauru là một quốc gia đảo nhỏ nằm ở Thái Bình Dương, có địa hình chủ yếu là đồi núi và bờ biển đá ngầm. Động vật hoang dã bao gồm nhiều loài chim biển.'
                ],
                [
                    'nation_name' => 'Nepal',
                    'nation_description' => 'Nepal nằm ở Nam Á, có địa hình đa dạng từ dãy Himalaya cao chót vót đến thung lũng sông sâu. Động vật hoang dã bao gồm hươu, báo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Netherlands',
                    'nation_description' => 'Netherlands nằm ở Tây Âu, có địa hình chủ yếu là đồng bằng và hệ thống kênh đào. Động vật hoang dã bao gồm nai, cáo và nhiều loài chim nước.'
                ],
                [
                    'nation_name' => 'New Zealand',
                    'nation_description' => 'New Zealand nằm ở phía nam Thái Bình Dương, bao gồm hai đảo chính và nhiều đảo nhỏ. Động vật hoang dã bao gồm chim kiwi, cá heo và nhiều loài chim biển.'
                ],
                [
                    'nation_name' => 'Nicaragua',
                    'nation_description' => 'Nicaragua nằm ở Trung Mỹ, có địa hình đa dạng từ dãy núi đến các hồ lớn và bờ biển Thái Bình Dương. Động vật hoang dã bao gồm jaguar, báo đốm và nhiều loài chim nhiệt đới.'
                ],
                [
                    'nation_name' => 'Niger',
                    'nation_description' => 'Niger nằm ở Tây Phi, có địa hình chủ yếu là sa mạc Sahara và sông Niger. Động vật hoang dã bao gồm linh dương sa mạc, voi sa mạc và nhiều loài chim nước.'
                ],
                [
                    'nation_name' => 'Nigeria',
                    'nation_description' => 'Nigeria nằm ở Tây Phi, có địa hình đa dạng từ rừng nhiệt đới đến thung lũng sông và sa mạc. Động vật hoang dã bao gồm sư tử, voi và nhiều loài khỉ.'
                ],
                [
                    'nation_name' => 'North Korea',
                    'nation_description' => 'North Korea nằm ở Đông Á, có địa hình chủ yếu là dãy núi và thung lũng sông. Động vật hoang dã bao gồm gấu xám, linh dương sika và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'North Macedonia',
                    'nation_description' => 'Bắc Macedonia nằm ở Đông Nam châu Âu, nổi bật với dãy núi, hồ và thung lũng. Động vật hoang dã bao gồm gấu, linh dương và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Norway',
                    'nation_description' => 'Na Uy nằm ở Bắc Âu, nổi tiếng với các vịnh hẻo lánh, núi non và ánh sáng Bắc Cực. Động vật hoang dã bao gồm gấu Bắc Cực, tuần lộc và nhiều loài biển.'
                ],
                [
                    'nation_name' => 'Oman',
                    'nation_description' => 'Oman nằm ở Tây Nam Á, đặc trưng với sa mạc, dãy núi và bờ biển. Động vật hoang dã bao gồm báo Ả Rập, ngựa vằn Ả Rập và rùa biển.'
                ],
                [
                    'nation_name' => 'Pakistan',
                    'nation_description' => 'Pakistan nằm ở Nam Á, nổi bật với các dãy núi, sa mạc và vùng ven biển đa dạng. Động vật hoang dã bao gồm báo tuyết, dê Markhor và công.'
                ],
                [
                    'nation_name' => 'Palau',
                    'nation_description' => 'Palau là một quốc đảo ở Tây Thái Bình Dương, nổi tiếng với rạn san hô, nước biển màu ngọc bích và các di tích chiến tranh thế giới II. Động vật hoang dã bao gồm tắc kè đại dương, cá sấu nước mặn và nhiều loài biển khác.'
                ],
                [
                    'nation_name' => 'Palestine State',
                    'nation_description' => 'Palestine là một vùng lãnh thổ ở Trung Đông, nổi bật với sự quan trọng lịch sử và di sản văn hóa. Động vật hoang dã bao gồm linh dương đốm, sói sa mạc và rạn san hô.'
                ],
                [
                    'nation_name' => 'Panama',
                    'nation_description' => 'Panama nằm ở Trung Mỹ, đặc trưng với núi lửa, rừng nhiệt đới và các tàn tích văn hóa Maya. Động vật hoang dã bao gồm báo đốm, khỉ howler và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Papua New Guinea',
                    'nation_description' => 'Papua New Guinea là một quốc gia ở Nam Thái Bình Dương, nổi tiếng với rừng mưa rậm, thảo nguyên và thác nước Kaieteur. Động vật hoang dã bao gồm báo sư tử, chồn nước lớn và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Paraguay',
                    'nation_description' => 'Paraguay nằm ở Nam Mỹ, nổi bật với đồng bằng sông Paraná, rừng mưa và thác nước Iguazu. Động vật hoang dã bao gồm báo hoa mai, tê giác và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Peru',
                    'nation_description' => 'Peru nằm ở Nam Mỹ, nổi bật với dãy Andes, rừng nhiệt đới và di tích văn hóa Inca. Động vật hoang dã bao gồm báo jaguar, lạc đà và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Philippines',
                    'nation_description' => 'Philippines nằm ở Đông Nam Á, nổi bật với hơn 7000 đảo, rạn san hô và rừng nhiệt đới. Động vật hoang dã bao gồm báo, cá heo và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Poland',
                    'nation_description' => 'Ba Lan nằm ở Trung Âu, nổi bật với đồng bằng sông Vistula, rừng núi và bờ biển Baltic. Động vật hoang dã bao gồm gấu nâu, rắn hổ và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Portugal',
                    'nation_description' => 'Bồ Đào Nha nằm ở miền tây Nam Âu, nổi bật với đại dương, núi sông và bờ biển Đại Tây Dương. Động vật hoang dã bao gồm linh dương, sóc và nhiều loài chim.'
                ],                
                [
                    'nation_name' => 'Qatar',
                    'nation_description' => 'Qatar là một quốc gia Trung Đông nổi tiếng với những tòa nhà chọc trời hiện đại, mua sắm sang trọng và văn hóa Ả Rập. Động vật hoang dã ở đây bao gồm cáo sa mạc, bò ngựa Ả Rập và các loài chim di cư.'
                ],
                [
                    'nation_name' => 'Romania',
                    'nation_description' => 'Romania là một quốc gia châu Âu nổi tiếng với các thị trấn cổ kính, các lâu đài và dãy núi Carpathian. Động vật hoang dã ở đây bao gồm gấu nâu, sói và nhiều loài chim khác.'
                ],
                [
                    'nation_name' => 'Russia',
                    'nation_description' => 'Nga là quốc gia lớn nhất thế giới, nằm ở Đông Âu và Bắc Á, nổi tiếng với các cảnh quan đa dạng bao gồm đất đai, rừng và dãy núi. Động vật hoang dã ở đây bao gồm hổ Siberi, gấu nâu và tuần lộc.'
                ],
                [
                    'nation_name' => 'Rwanda',
                    'nation_description' => 'Rwanda là một quốc gia ở Đông Phi nổi tiếng với các con núi, khỉ đột và văn hóa sôi động. Động vật hoang dã ở đây bao gồm khỉ đột núi, voi và nhiều loài chim đa dạng.'
                ],
                [
                    'nation_name' => 'Saint Kitts and Nevis',
                    'nation_description' => 'Saint Kitts và Nevis là quốc gia hai đảo ở vùng biển Caribê, nổi tiếng với những bãi biển đẹp, rạn san hô và lối sống bình yên. Động vật hoang dã ở đây bao gồm loài chim nhiệt đới và các loài động vật biển.'
                ],
                [
                    'nation_name' => 'Saint Lucia',
                    'nation_description' => 'Saint Lucia là một quốc gia ở vùng biển Caribê, nổi tiếng với những bãi biển đẹp và cảnh quan núi non. Động vật hoang dã ở đây bao gồm loài chim nhiệt đới và các loài động vật biển.'
                ],
                [
                    'nation_name' => 'Saint Vincent and the Grenadines',
                    'nation_description' => 'Saint Vincent và the Grenadines là một quốc gia nằm ở vùng biển Caribê, bao gồm một số đảo nhỏ và rạn san hô. Động vật hoang dã ở đây bao gồm loài chim nhiệt đới và các loài động vật biển.'
                ],
                [
                    'nation_name' => 'Samoa',
                    'nation_description' => 'Samoa là một quốc gia quần đảo ở Đại Tây Dương, nổi tiếng với các bãi biển đẹp và nền văn hóa Polynesia. Động vật hoang dã ở đây bao gồm loài cá voi, rùa biển và cá ngừ.'
                ],
                [
                    'nation_name' => 'San Marino',
                    'nation_description' => 'San Marino là một quốc gia nhỏ nằm trong khu vực núi Appennine ở Ý, nổi tiếng với các tháp châu Âu cổ kính và phong cảnh núi non. Động vật hoang dã ở đây bao gồm loài chim và động vật có vú nhỏ.'
                ],
                [
                    'nation_name' => 'Sao Tome and Principe',
                    'nation_description' => 'São Tomé và Príncipe là quốc gia quần đảo nằm ở vùng Đại Tây Dương, nổi tiếng với các rừng nhiệt đới và di sản bảo tồn. Động vật hoang dã ở đây bao gồm loài khỉ, chim và rùa biển.'
                ],
                [
                    'nation_name' => 'Saudi Arabia',
                    'nation_description' => 'Ả Rập Saudi là một quốc gia nằm ở Trung Đông, nổi tiếng với sa mạc Thar khô cằn và văn hóa Ả Rập truyền thống. Động vật hoang dã ở đây bao gồm báo hoa mai, bò ngựa Ả Rập và các loài chim sa mạc.'
                ],
                [
                    'nation_name' => 'Senegal',
                    'nation_description' => 'Senegal là một quốc gia ở Tây Phi nổi tiếng với thủ đô Dakar sôi động và văn hóa đa dạng. Động vật hoang dã ở đây bao gồm sư tử, voi và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Serbia',
                    'nation_description' => 'Serbia là một quốc gia ở khu vực Balkan, nổi tiếng với thủ đô Belgrade sôi động và di sản lịch sử phong phú. Động vật hoang dã ở đây bao gồm gấu nâu, sói và các loài chim.'
                ],
                [
                    'nation_name' => 'Seychelles',
                    'nation_description' => 'Seychelles là một quốc gia quần đảo nằm ở Ấn Độ Dương, nổi tiếng với các bãi biển ngọc xanh và rạn san hô đầy màu sắc. Động vật hoang dã ở đây bao gồm rùa biển, cá ngừ và cá mập.'
                ],
                [
                    'nation_name' => 'Sierra Leone',
                    'nation_description' => 'Sierra Leone là một quốc gia ở Tây Phi, nổi tiếng với các bãi biển cát trắng và các khu bảo tồn động vật hoang dã. Động vật hoang dã ở đây bao gồm linh dương, hươu và nhiều loài khác.'
                ],
                [
                    'nation_name' => 'Singapore',
                    'nation_description' => 'Singapore là một quốc gia đảo nhỏ nằm ở Đông Nam Á, nổi tiếng với sự phát triển kinh tế mạnh mẽ và văn hóa đa dạng. Động vật hoang dã ở đây bao gồm nai, khỉ và chim săn mồi.'
                ],
                [
                    'nation_name' => 'Slovakia',
                    'nation_description' => 'Slovakia là một quốc gia nằm ở Trung Âu, nổi tiếng với các thị trấn cổ kính, dãy núi Tatra và các công viên quốc gia. Động vật hoang dã ở đây bao gồm gấu nâu, chồn và nhiều loài chim.'
                ],
                [
                    'nation_name' => 'Slovenia',
                    'nation_description' => 'Slovenia là một quốc gia nằm ở Nam Âu, nổi tiếng với vẻ đẹp thiên nhiên của dãy Alps Julian và hồ Bled. Động vật hoang dã ở đây bao gồm gấu nâu, dê rừng và chim săn mồi.'
                ],
                [
                    'nation_name' => 'Solomon Islands',
                    'nation_description' => 'Quần đảo Solomon là một quốc gia quần đảo nằm ở Thái Bình Dương, nổi tiếng với các rừng nhiệt đới, bãi biển đẹp và lặn ngắm san hô. Động vật hoang dã ở đây bao gồm cá ngựa, dơi và rùa biển.'
                ],
                [
                    'nation_name' => 'Somalia',
                    'nation_description' => 'Somalia là một quốc gia ven biển ở Đông Phi, nổi tiếng với sa mạc và bờ biển dài. Động vật hoang dã ở đây bao gồm sư tử, voi và hổ săn.'
                ],
                [
                    'nation_name' => 'South Africa',
                    'nation_description' => 'Nam Phi là một quốc gia nằm ở miền nam châu Phi, nổi tiếng với sự đa dạng văn hóa, các vườn quốc gia và các loài động vật hoang dã phong phú như sư tử, voi và hà mã.'
                ],                
                [
                    'nation_name' => 'South Sudan',
                    'nation_description' => 'Nam Sudan là một quốc gia nằm ở Đông Bắc châu Phi, có nền kinh tế chủ yếu dựa vào nông nghiệp và tài nguyên thiên nhiên, với các khu bảo tồn thiên nhiên và các dân tộc đa dạng.'
                ],
                [
                    'nation_name' => 'Spain',
                    'nation_description' => 'Tây Ban Nha là một quốc gia ở miền nam châu Âu, nổi tiếng với kiến trúc lâu đài và những bãi biển tuyệt đẹp ở bờ Đại Tây Dương.'
                ],
                [
                    'nation_name' => 'Sri Lanka',
                    'nation_description' => 'Sri Lanka là một đảo quốc nằm ở Nam Á, nổi tiếng với các khu di tích lịch sử, các vườn quốc gia và các bãi biển cát trắng.'
                ],
                [
                    'nation_name' => 'Sudan',
                    'nation_description' => 'Sudan là một quốc gia nằm ở Bắc Đông Phi, có địa hình đa dạng từ sa mạc đến các dãy núi, với các sông lớn như sông Nile chảy qua.'
                ],
                [
                    'nation_name' => 'Suriname',
                    'nation_description' => 'Suriname là một quốc gia nhỏ ở Nam Mỹ, nổi tiếng với rừng nhiệt đới phong phú và sự đa dạng về các loài động thực vật.'
                ],
                [
                    'nation_name' => 'Sweden',
                    'nation_description' => 'Thụy Điển là một quốc gia nằm ở Bắc Âu, có thiên nhiên hoang sơ, hồ rừng và núi non, cùng với các thành phố hiện đại như Stockholm.'
                ],
                [
                    'nation_name' => 'Switzerland',
                    'nation_description' => 'Thụy Sĩ là một quốc gia nằm ở Trung Âu, nổi tiếng với cảnh quan núi non hùng vĩ, hồ nước trong xanh và là trung tâm tài chính và ngân hàng quốc tế.'
                ],
                [
                    'nation_name' => 'Syria',
                    'nation_description' => 'Syria là một quốc gia ở Tây Á, có di sản lịch sử phong phú và là nơi xuất phát của nhiều văn minh cổ đại, nhưng hiện nay đang trải qua cuộc khủng hoảng nghiêm trọng.'
                ],
                [
                    'nation_name' => 'Taiwan',
                    'nation_description' => 'Đài Loan là một đảo quốc nằm ở Đông Á, nổi tiếng với nền kinh tế phát triển, văn hóa đa dạng và kiến trúc độc đáo.'
                ],
                [
                    'nation_name' => 'Tajikistan',
                    'nation_description' => 'Tajikistan là một quốc gia nằm ở Trung Á, có nền văn hóa pha trộn giữa các nền văn minh Trung Á và Đông Âu, với cảnh quan núi non và sông suối phong phú.'
                ],
                [
                    'nation_name' => 'Tanzania',
                    'nation_description' => 'Tanzania là một quốc gia ở Đông Phi, nổi tiếng với các khu bảo tồn thiên nhiên như Serengeti và Kilimanjaro, cùng với văn hóa phong phú của các dân tộc bản địa.'
                ],
                [
                    'nation_name' => 'Thailand',
                    'nation_description' => 'Thái Lan là một quốc gia nằm ở Đông Nam Á, nổi tiếng với đời sống văn hóa sôi động, các ngôi chùa và các khu du lịch biển phong phú.'
                ],
                [
                    'nation_name' => 'Timor-Leste',
                    'nation_description' => 'Timor-Leste là một quốc gia đảo nhỏ ở Đông Nam Á, có di sản lịch sử và văn hóa đa dạng, với các bãi biển tuyệt đẹp và rừng núi phong phú.'
                ],
                [
                    'nation_name' => 'Togo',
                    'nation_description' => 'Togo là một quốc gia nhỏ nằm ở Tây Phi, có nền kinh tế chủ yếu dựa vào nông nghiệp và là một trong những điểm đến du lịch ít được khám phá.'
                ],
                [
                    'nation_name' => 'Tonga',
                    'nation_description' => 'Tonga là một quốc gia quần đảo ở Thái Bình Dương, nổi tiếng với văn hóa Polynesia truyền thống và các bãi biển đẹp mênh mông.'
                ],
                [
                    'nation_name' => 'Trinidad and Tobago',
                    'nation_description' => 'Trinidad và Tobago là một quốc gia nhỏ nằm ở biển Caribe, nổi tiếng với văn hóa và âm nhạc sôi động, cùng với các bãi biển và rạn san hô đẹp.'
                ],
                [
                    'nation_name' => 'Tunisia',
                    'nation_description' => 'Tunisia là một quốc gia ở Bắc Phi, có các di sản lịch sử La Mã cổ đại, các thành phố cổ và các bãi biển ven biển đẹp.'
                ],
                [
                    'nation_name' => 'Turkey',
                    'nation_description' => 'Thổ Nhĩ Kỳ là một quốc gia gần Trung Đông và Đông Âu, nổi tiếng với văn hóa Ottoman, các di tích lịch sử và các thắng cảnh tự nhiên đa dạng.'
                ],
                [
                    'nation_name' => 'Turkmenistan',
                    'nation_description' => 'Turkmenistan là một quốc gia nằm ở Trung Á, có các di tích lịch sử cổ đại và là một trong những nền kinh tế dựa vào nguồn tài nguyên thiên nhiên.'
                ],
                [
                    'nation_name' => 'Tuvalu',
                    'nation_description' => 'Tuvalu là một quốc gia quần đảo nhỏ ở Thái Bình Dương, nổi tiếng với các bãi biển và cuộc sống bình yên của người dân địa phương.'
                ],
                [
                    'nation_name' => 'Uganda',
                    'nation_description' => 'Uganda là một quốc gia nằm ở Đông Phi, có các khu bảo tồn thiên nhiên như công viên quốc gia Bwindi và là nơi sinh sống của các loài động vật quý hiếm.'
                ],
                [
                    'nation_name' => 'Ukraine',
                    'nation_description' => 'Ukraine là một quốc gia nằm ở Đông Âu, nổi tiếng với những thảm họa lịch sử và văn hóa đa dạng, cùng với các thành phố lớn như Kiev.'
                ],
                [
                    'nation_name' => 'United Arab Emirates',
                    'nation_description' => 'Các Tiểu vương quốc Ả Rập Thống nhất là một liên bang gồm bảy tiểu vương quốc trên bán đảo Ả Rập, nổi tiếng với các công trình kiến trúc hiện đại và các khu du lịch sang trọng.'
                ],
                [
                    'nation_name' => 'United Kingdom',
                    'nation_description' => 'Vương quốc Anh là một quốc gia ở Tây Âu, bao gồm các đảo Anh, Xô-đa và Băc-Ie-lan, nổi tiếng với lịch sử phong phú, các địa điểm du lịch lớn và văn hóa đa dạng.'
                ],
                [
                    'nation_name' => 'United States of America',
                    'nation_description' => 'Hoa Kỳ là một quốc gia lớn ở Bắc Mỹ, nổi tiếng với nền kinh tế mạnh mẽ, văn hóa đa dạng và các địa danh nổi tiếng như Thung lũng Silicon và Kỳ quan thiên nhiên Grand Canyon.'
                ],
                [
                    'nation_name' => 'Uruguay',
                    'nation_description' => 'Uruguay là một quốc gia nhỏ nằm ở Nam Mỹ, nổi tiếng với các bãi biển và là một trong những quốc gia ở Nam Mỹ có mức sống cao.'
                ],
                [
                    'nation_name' => 'Uzbekistan',
                    'nation_description' => 'Uzbekistan là một quốc gia nằm ở Trung Á, có di sản lịch sử và văn hóa đa dạng, với các di tích kiến trúc vĩ đại và thị trấn cổ Samarkand.'
                ],
                [
                    'nation_name' => 'Vanuatu',
                    'nation_description' => 'Vanuatu là một quốc gia quần đảo ở Thái Bình Dương, nổi tiếng với đời sống văn hóa của người Melanesia và các khu du lịch biển đẹp.'
                ],
                [
                    'nation_name' => 'Venezuela',
                    'nation_description' => 'Venezuela là một quốc gia nằm ở Nam Mỹ, có cảnh quan đa dạng từ núi non đến các bãi biển ven biển, nổi tiếng với văn hóa sôi động và nguồn tài nguyên dầu mỏ phong phú.'
                ],
                [
                    'nation_name' => 'Vietnam',
                    'nation_description' => 'Việt Nam là một quốc gia nằm ở Đông Nam Á, có di sản văn hóa lâu đời, các danh lam thắng cảnh tự nhiên như vịnh Hạ Long và là nơi sinh sống của nhiều loài động thực vật quý hiếm.'
                ],
                [
                    'nation_name' => 'Yemen',
                    'nation_description' => 'Yemen là một quốc gia nằm ở Tây Á, có di sản lịch sử và văn hóa phong phú, nhưng đang gặp khó khăn do xung đột và khủng hoảng nhân đạo.'
                ],
                [
                    'nation_name' => 'Zambia',
                    'nation_description' => 'Zambia là một quốc gia ở miền trung châu Phi, nổi tiếng với các thác nước Victoria và các khu bảo tồn thiên nhiên phong phú.'
                ],
                [
                    'nation_name' => 'Zimbabwe',
                    'nation_description' => 'Zimbabwe là một quốc gia nằm ở miền nam châu Phi, có di sản lịch sử của vương quốc Great Zimbabwe và các khu du lịch thiên nhiên như Hwange.'
                ]                
            ]
        );
    }
}

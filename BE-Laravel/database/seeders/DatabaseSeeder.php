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
        DB::table('animal_habitat')->insert([
            [
                'habitat_name' => 'Rừng mưa nhiệt đới',
                'habitat_description' => 'Rừng mưa nhiệt đới nằm ở các khu vực gần xích đạo, có khí hậu ẩm ướt với lượng mưa lớn (trung bình từ 1750 đến 2000 mm mỗi năm). Nhiệt độ ổn định quanh năm, thường dao động từ 20°C đến 30°C.Rừng mưa nhiệt đới là một trong những hệ sinh thái đa dạng nhất trên thế giới, chứa đựng hàng ngàn loài cây cối và động vật. Cây cối thường xanh quanh năm, với tầng cây cao che phủ tầng thấp hơn.'
            ],
            [
                'habitat_name' => 'Rừng ôn đới',
                'habitat_description' => 'Rừng ôn đới có bốn mùa rõ rệt với mùa đông lạnh và mùa hè ấm áp. Lượng mưa trung bình, thường từ 750 đến 1500 mm mỗi năm.Rừng ôn đới bao gồm nhiều loại cây lá rộng rụng lá vào mùa đông và cây lá kim. Đây là nơi cư trú của nhiều loài động thực vật phong phú.'
            ],
            [
                'habitat_name' => 'Thảo nguyên',
                'habitat_description' => 'Thảo nguyên là khu vực có khí hậu khô hạn và nóng, với một mùa mưa ngắn. Lượng mưa thay đổi từ 500 đến 1500 mm mỗi năm.Thảo nguyên là môi trường mở, chủ yếu là cỏ và một số cây gỗ rải rác. Đây là nơi sinh sống của nhiều loài động vật lớn.'
            ],
            [
                'habitat_name' => 'Sa mạc',
                'habitat_description' => 'Sa mạc có khí hậu cực kỳ khô hạn với lượng mưa dưới 250 mm mỗi năm. Nhiệt độ biến đổi lớn giữa ngày và đêm, có thể rất nóng vào ban ngày và lạnh vào ban đêm.Sa mạc thường có thảm thực vật thưa thớt, với các loài cây và động vật thích nghi tốt với điều kiện khô hạn.'
            ],
            [
                'habitat_name' => 'Đồng cỏ',
                'habitat_description' => 'Đồng cỏ có lượng mưa trung bình, thường từ 500 đến 900 mm mỗi năm, với mùa khô và mùa mưa phân biệt.Khu vực này chủ yếu được phủ bởi cỏ và thảo mộc, có ít cây lớn. Đồng cỏ là nơi sinh sống của nhiều loài động vật ăn cỏ và động vật săn mồi.'
            ],
            [
                'habitat_name' => 'Rừng taiga ',
                'habitat_description' => 'Rừng taiga có khí hậu lạnh giá với mùa đông kéo dài và mùa hè ngắn. Lượng mưa thấp, chủ yếu dưới dạng tuyết.Rừng taiga chủ yếu bao gồm các loài cây lá kim như thông, vân sam và tuyết tùng.'
            ],
            [
                'habitat_name' => 'Vùng Bắc Cực',
                'habitat_description' => 'Vùng Bắc Cực có khí hậu cực kỳ lạnh giá với băng tuyết quanh năm. Nhiệt độ thường dưới 0°C, có thời gian ánh sáng ban ngày rất ngắn vào mùa đông và rất dài vào mùa hè.Khu vực này bao gồm các bãi băng, tuyết và thảm thực vật tundra.'
            ],
            [
                'habitat_name' => 'Vùng biển',
                'habitat_description' => 'Vùng biển bao gồm các biển và đại dương, từ vùng nước nông đến vùng nước sâu. Nhiệt độ và điều kiện môi trường rất đa dạng.Hệ sinh thái biển rất phong phú và đa dạng, từ các rạn san hô đầy màu sắc đến các vực sâu tối tăm.'
            ],
            [
                'habitat_name' => 'Vùng nước ngọt',
                'habitat_description' => 'Khu vực này bao gồm các sông, hồ, suối, và đầm lầy. Nước ngọt có nồng độ muối thấp hơn nhiều so với nước biển. Các hệ sinh thái nước ngọt rất đa dạng, cung cấp môi trường sống cho nhiều loài động thực vật.'
            ],
            [
                'habitat_name' => 'Đầm lầy và đất ngập nước ',
                'habitat_description' => 'Đây là khu vực đất thấp bị ngập nước thường xuyên hoặc theo mùa, bao gồm đầm lầy, bãi lầy, và các vùng đất ngập nước khác.Đầm lầy và đất ngập nước là những hệ sinh thái rất năng động và giàu dinh dưỡng, hỗ trợ nhiều loài động thực vật.'
            ],
        ]);
        DB::table('animal_color')->insert([
            [
                'color_name' => 'Xanh lục',
            ],
            [
                'color_name' => 'Xanh dương',
            ],
            [
                'color_name' => 'Đỏ',
            ],
            [
                'color_name' => 'Vàng',
            ],
            [
                'color_name' => 'Cam',
            ],
            [
                'color_name' => 'Nâu',
            ],
            [
                'color_name' => 'Trắng',
            ],
            [
                'color_name' => 'Đen',
            ],
            [
                'color_name' => 'Xám',
            ],
            [
                'color_name' => 'Tím',
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
                'activity_name' => 'Động vật hoạt động hoàng hôn và bình minh',
                'activity_description' => 'Động vật thích nghi với ánh sáng yếu của hoàng hôn và bình minh, thời gian mà nhiệt độ không quá cao và có ít kẻ thù hoạt động.Hoạt động vào những thời điểm này giúp chúng tận dụng thời gian mà cả động vật ban ngày và ban đêm ít hoạt động.'
            ],
        ]);
        DB::table('animal_category')->insert([
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
            ],
            [
                'diet_name' => 'Ăn thịt',
            ],
            [
                'diet_name' => 'Ăn tạp',
            ],
            [
                'diet_name' => 'Ăn lá',
            ],
            [
                'diet_name' => 'Ăn côn trùng',
            ],
        ]);
        DB::table('conservation_status')->insert([
            [
                'status_name' => 'LC',
                'status_description' => 'Loài không đang đối mặt với nguy cơ tuyệt chủng đáng kể trong tương lai gần.',
            ],
            [
                'status_name' => 'NT',
                'status_description' => 'Loài có nguy cơ trở thành loài bị đe dọa nếu không có biện pháp bảo tồn.',
            ],
            [
                'status_name' => 'VU',
                'status_description' => 'Loài có nguy cơ cao trở thành loài bị đe dọa trong tương lai gần.',
            ],
            [
                'status_name' => 'EN',
                'status_description' => 'Loài đang đối mặt với nguy cơ cao của việc tuyệt chủng trong tương lai gần.',
            ],
            [
                'status_name' => 'CE',
                'status_description' => 'Loài đang ở trên bờ vực tuyệt chủng và cần các biện pháp bảo tồn ngay lập tức.',
            ],
            [
                'status_name' => 'EW',
                'status_description' => 'Loài đã tuyệt chủng trong tự nhiên nhưng vẫn còn tồn tại trong một số môi trường nhân tạo.',
            ],
            [
                'status_name' => 'EX',
                'status_description' => 'Loài đã biến mất hoàn toàn khỏi trái đất.',
            ],
            [
                'status_name' => 'DD',
                'status_description' => 'Dữ liệu về tình trạng bảo tồn của loài không đủ để đưa ra đánh giá chính xác.',
            ],
        ]);
        DB::table('animal_area')->insert([
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
        DB::table('animal_ocean')->insert([
            [
                'ocean_name' => 'Thái Bình Dương',
                'ocean_description' => 'Thái Bình Dương là vùng lớn nhất và sâu nhất trong năm vùng đại dương của Trái đất. Nó kéo dài từ Bắc Băng Dương ở phía bắc đến Nam Đại Dương ở phía nam và được bao bọc bởi các lục địa châu Á và châu Úc ở phía tây và châu Mỹ ở phía đông.',
            ],
            [
                'ocean_name' => 'Ấn Độ Dương',
                'ocean_description' => 'Ấn Độ Dương là khu vực lớn thứ ba trong số năm khu vực đại dương trên thế giới, bao phủ 70.560.000 km2 hay 19,8% lượng nước trên bề mặt Trái đất. Nó giáp với châu Á ở phía bắc, châu Phi ở phía tây và Australia ở phía đông. Về phía nam, nó được bao bọc bởi Nam Đại Dương hoặc Nam Cực, tùy thuộc vào định nghĩa được sử dụng. Dọc theo lõi của nó, Ấn Độ Dương có một số biển khu vực hoặc cận biên lớn như Biển Ả Rập, Biển Laccadive, Biển Somali, Vịnh Bengal và Biển Andaman.

                Trong số 36 điểm nóng đa dạng sinh học của Trái đất, 9 điểm nằm ở rìa Ấn Độ Dương.',
            ],
            [
                'ocean_name' => 'Đại Tây Dương',
                'ocean_description' => 'Đại Tây Dương là đại dương lớn thứ hai trong số năm đại dương trên thế giới, với diện tích khoảng 106.460.000 km 2 , Nó chiếm khoảng 20% ​​bề mặt Trái đất và khoảng 29% diện tích mặt nước.',
            ],
            [
                'ocean_name' => 'Bắc Băng Dương',
                'ocean_description' => 'Bắc Băng Dương là biển nhỏ nhất và nông nhất trong 5 đại dương lớn trên thế giới. Nó trải rộng trên diện tích khoảng 14.060.000 km2 và được coi là nơi lạnh nhất trong tất cả các đại dương. Nó cũng được coi là phần cực bắc của Đại dương Thế giới bao trùm. Do tính chất mùa vụ rõ rệt từ 2–6 tháng có nắng nửa đêm và đêm vùng cực ở Bắc Băng Dương, nên việc sản xuất chính các sinh vật quang hợp như tảo băng và thực vật phù du bị giới hạn trong các tháng mùa xuân và mùa hè, những người tiêu dùng quan trọng của các sinh vật sản xuất sơ cấp ở miền Trung Bắc Băng Dương và các vùng biển lân cận bao gồm động vật phù du, đặc biệt là động vật giáp xác và động vật chân chèo, cũng như quần thể động vật liên quan đến băng. Những sinh vật tiêu thụ sơ cấp này tạo thành mối liên kết quan trọng giữa sinh vật sản xuất sơ cấp và bậc dinh dưỡng cao hơn. Thành phần của các bậc dinh dưỡng cao hơn ở Bắc Băng Dương thay đổi tùy theo khu vực và lớp băng biển bao phủ. Người tiêu dùng thứ cấp ở Biển Barents, một vùng biển Bắc Cực chịu ảnh hưởng của Đại Tây Dương, chủ yếu là các loài cận Bắc Cực bao gồm cá trích, cá tuyết non và cá capelin. Ở những vùng được bao phủ bởi băng ở trung tâm Bắc Băng Dương, cá tuyết vùng cực là loài săn mồi chủ yếu của người tiêu dùng chính. Những kẻ săn mồi đỉnh cao ở Bắc Băng Dương—các loài động vật có vú ở biển như hải cẩu, cá voi và gấu Bắc Cực—săn cá. Các loài sinh vật biển có nguy cơ tuyệt chủng ở Bắc Băng Dương bao gồm hải mã và cá voi. Khu vực này có hệ sinh thái mong manh và đặc biệt dễ bị ảnh hưởng bởi biến đổi khí hậu vì nó ấm lên nhanh hơn phần còn lại của thế giới. Sứa bờm sư tử có rất nhiều ở vùng biển Bắc Cực và sứa sọc là loài sứa duy nhất sống ở đại dương.',
            ],
            [
                'ocean_name' => 'Nam Đại Dương',
                'ocean_description' => 'Nam Đại Dương bao gồm vùng nước cực nam của Đại dương Thế giới, thường được coi là ở phía nam vĩ độ 60° Nam và bao quanh Nam Cực. Trong 30 năm qua, Nam Đại Dương phải chịu sự biến đổi khí hậu nhanh chóng, dẫn đến những thay đổi trong hệ sinh thái biển. Nhiều loại động vật biển tồn tại và phụ thuộc trực tiếp hoặc gián tiếp vào thực vật phù du ở Nam Đại Dương. Sinh vật biển ở Nam Cực bao gồm chim cánh cụt, cá voi xanh, cá kình, mực khổng lồ và hải cẩu lông thú. Chim cánh cụt hoàng đế là loài chim cánh cụt duy nhất sinh sản vào mùa đông ở Nam Cực, trong khi chim cánh cụt Adélie sinh sản ở xa hơn về phía nam so với bất kỳ loài chim cánh cụt nào khác. Chim cánh cụt rockhopper có bộ lông đặc biệt xung quanh mắt, tạo nên vẻ ngoài của lông mi phức tạp. Chim cánh cụt vua, chim cánh cụt chinstrap và chim cánh cụt gentoo cũng sinh sản ở Nam Cực. Hải cẩu lông Nam Cực bị săn bắt rất nhiều vào thế kỷ 18 và 19 để lấy da bởi những người săn hải cẩu từ Hoa Kỳ và Vương quốc Anh. Hải cẩu Weddell, một hải cẩu thực sự, được đặt theo tên của Ngài James Weddell, chỉ huy đoàn thám hiểm hải cẩu của Anh ở Biển Weddell. Nhuyễn thể ở Nam Cực, tụ tập thành đàn lớn, là loài chủ chốt của hệ sinh thái Nam Đại Dương và là sinh vật thực phẩm quan trọng đối với cá voi, hải cẩu, hải cẩu báo, hải cẩu lông, mực, cá băng, chim cánh cụt, chim hải âu và nhiều loài chim khác. Các cộng đồng sinh vật đáy dưới đáy biển rất đa dạng và dày đặc, với số lượng lên tới 155.000 loài động vật được tìm thấy trên 1 mét vuông. Vì môi trường đáy biển xung quanh Nam Cực rất giống nhau nên có thể tìm thấy hàng trăm loài trên khắp đất liền, đó là một phân phối rộng rãi duy nhất cho một cộng đồng lớn như vậy. Chủ nghĩa khổng lồ dưới biển sâu là phổ biến ở những loài động vật này. Hơn 235 sinh vật biển sống ở cả hai vùng cực, vượt qua khoảng cách 12.000 km. Các loài động vật lớn như một số loài giáp xác và chim thực hiện chuyến đi khứ hồi hàng năm. Điều đáng ngạc nhiên hơn là những dạng sống nhỏ như giun bùn, hải sâm và ốc bơi tự do được tìm thấy ở cả hai đại dương. Các yếu tố khác nhau có thể hỗ trợ cho sự phân bố của chúng - nhiệt độ khá đồng đều của đại dương sâu ở hai cực và xích đạo, chênh lệch không quá 5°C, và các hệ thống dòng chảy chính hoặc băng tải biển vận chuyển trứng và giai đoạn ấu trùng. Tuy nhiên, trong số các loài động vật biển nhỏ hơn thường được cho là giống nhau ở Nam Cực và Bắc Cực, các nghiên cứu chi tiết hơn về từng quần thể thường - nhưng không phải lúc nào cũng - tiết lộ những khác biệt, cho thấy chúng là những loài bí ẩn có quan hệ gần gũi hơn là một loài lưỡng cực duy nhất.',
            ],
        ]);
        DB::table('animal_population_trending')->insert(
            [
                ['population_trending_name' => 'Tăng'],
                ['population_trending_name' => 'Giảm'],
                ['population_trending_name' => 'Ổn định'],
                ['population_trending_name' => 'Chưa biết'],
            ]
        );
        DB::table('animal_category')->insert(
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
        DB::table('animal_nation')->insert(
            [
                ['nation_name' => 'Afghanistan'],
                ['nation_name' => 'Albania'],
                ['nation_name' => 'Algeria'],
                ['nation_name' => 'Andorra'],
                ['nation_name' => 'Angola'],
                ['nation_name' => 'Antigua and Barbuda'],
                ['nation_name' => 'Argentina'],
                ['nation_name' => 'Armenia'],
                ['nation_name' => 'Australia'],
                ['nation_name' => 'Austria'],
                ['nation_name' => 'Azerbaijan'],
                ['nation_name' => 'Bahamas'],
                ['nation_name' => 'Bahrain'],
                ['nation_name' => 'Bangladesh'],
                ['nation_name' => 'Barbados'],
                ['nation_name' => 'Belarus'],
                ['nation_name' => 'Belgium'],
                ['nation_name' => 'Belize'],
                ['nation_name' => 'Benin'],
                ['nation_name' => 'Bhutan'],
                ['nation_name' => 'Bolivia'],
                ['nation_name' => 'Bosnia and Herzegovina'],
                ['nation_name' => 'Botswana'],
                ['nation_name' => 'Brazil'],
                ['nation_name' => 'Brunei'],
                ['nation_name' => 'Bulgaria'],
                ['nation_name' => 'Burkina Faso'],
                ['nation_name' => 'Burundi'],
                ['nation_name' => 'Cabo Verde'],
                ['nation_name' => 'Cambodia'],
                ['nation_name' => 'Cameroon'],
                ['nation_name' => 'Canada'],
                ['nation_name' => 'Central African Republic'],
                ['nation_name' => 'Chad'],
                ['nation_name' => 'Chile'],
                ['nation_name' => 'China'],
                ['nation_name' => 'Colombia'],
                ['nation_name' => 'Comoros'],
                ['nation_name' => 'Congo (Congo-Brazzaville)'],
                ['nation_name' => 'Costa Rica'],
                ['nation_name' => 'Croatia'],
                ['nation_name' => 'Cuba'],
                ['nation_name' => 'Cyprus'],
                ['nation_name' => 'Czechia (Czech Republic)'],
                ['nation_name' => 'Denmark'],
                ['nation_name' => 'Djibouti'],
                ['nation_name' => 'Dominica'],
                ['nation_name' => 'Dominican Republic'],
                ['nation_name' => 'Ecuador'],
                ['nation_name' => 'Egypt'],
                ['nation_name' => 'El Salvador'],
                ['nation_name' => 'Equatorial Guinea'],
                ['nation_name' => 'Eritrea'],
                ['nation_name' => 'Estonia'],
                ['nation_name' => 'Eswatini (fmr. "Swaziland")'],
                ['nation_name' => 'Ethiopia'],
                ['nation_name' => 'Fiji'],
                ['nation_name' => 'Finland'],
                ['nation_name' => 'France'],
                ['nation_name' => 'Gabon'],
                ['nation_name' => 'Gambia'],
                ['nation_name' => 'Georgia'],
                ['nation_name' => 'Germany'],
                ['nation_name' => 'Ghana'],
                ['nation_name' => 'Greece'],
                ['nation_name' => 'Grenada'],
                ['nation_name' => 'Guatemala'],
                ['nation_name' => 'Guinea'],
                ['nation_name' => 'Guinea-Bissau'],
                ['nation_name' => 'Guyana'],
                ['nation_name' => 'Haiti'],
                ['nation_name' => 'Honduras'],
                ['nation_name' => 'Hungary'],
                ['nation_name' => 'Iceland'],
                ['nation_name' => 'India'],
                ['nation_name' => 'Indonesia'],
                ['nation_name' => 'Iran'],
                ['nation_name' => 'Iraq'],
                ['nation_name' => 'Ireland'],
                ['nation_name' => 'Israel'],
                ['nation_name' => 'Italy'],
                ['nation_name' => 'Jamaica'],
                ['nation_name' => 'Japan'],
                ['nation_name' => 'Jordan'],
                ['nation_name' => 'Kazakhstan'],
                ['nation_name' => 'Kenya'],
                ['nation_name' => 'Kiribati'],
                ['nation_name' => 'Kuwait'],
                ['nation_name' => 'Kyrgyzstan'],
                ['nation_name' => 'Laos'],
                ['nation_name' => 'Latvia'],
                ['nation_name' => 'Lebanon'],
                ['nation_name' => 'Lesotho'],
                ['nation_name' => 'Liberia'],
                ['nation_name' => 'Libya'],
                ['nation_name' => 'Liechtenstein'],
                ['nation_name' => 'Lithuania'],
                ['nation_name' => 'Luxembourg'],
                ['nation_name' => 'Madagascar'],
                ['nation_name' => 'Malawi'],
                ['nation_name' => 'Malaysia'],
                ['nation_name' => 'Maldives'],
                ['nation_name' => 'Mali'],
                ['nation_name' => 'Malta'],
                ['nation_name' => 'Marshall Islands'],
                ['nation_name' => 'Mauritania'],
                ['nation_name' => 'Mauritius'],
                ['nation_name' => 'Mexico'],
                ['nation_name' => 'Micronesia'],
                ['nation_name' => 'Moldova'],
                ['nation_name' => 'Monaco'],
                ['nation_name' => 'Mongolia'],
                ['nation_name' => 'Montenegro'],
                ['nation_name' => 'Morocco'],
                ['nation_name' => 'Mozambique'],
                ['nation_name' => 'Myanmar (formerly Burma)'],
                ['nation_name' => 'Namibia'],
                ['nation_name' => 'Nauru'],
                ['nation_name' => 'Nepal'],
                ['nation_name' => 'Netherlands'],
                ['nation_name' => 'New Zealand'],
                ['nation_name' => 'Nicaragua'],
                ['nation_name' => 'Niger'],
                ['nation_name' => 'Nigeria'],
                ['nation_name' => 'North Korea'],
                ['nation_name' => 'North Macedonia'],
                ['nation_name' => 'Norway'],
                ['nation_name' => 'Oman'],
                ['nation_name' => 'Pakistan'],
                ['nation_name' => 'Palau'],
                ['nation_name' => 'Palestine State'],
                ['nation_name' => 'Panama'],
                ['nation_name' => 'Papua New Guinea'],
                ['nation_name' => 'Paraguay'],
                ['nation_name' => 'Peru'],
                ['nation_name' => 'Philippines'],
                ['nation_name' => 'Poland'],
                ['nation_name' => 'Portugal'],
                ['nation_name' => 'Qatar'],
                ['nation_name' => 'Romania'],
                ['nation_name' => 'Russia'],
                ['nation_name' => 'Rwanda'],
                ['nation_name' => 'Saint Kitts and Nevis'],
                ['nation_name' => 'Saint Lucia'],
                ['nation_name' => 'Saint Vincent and the Grenadines'],
                ['nation_name' => 'Samoa'],
                ['nation_name' => 'San Marino'],
                ['nation_name' => 'Sao Tome and Principe'],
                ['nation_name' => 'Saudi Arabia'],
                ['nation_name' => 'Senegal'],
                ['nation_name' => 'Serbia'],
                ['nation_name' => 'Seychelles'],
                ['nation_name' => 'Sierra Leone'],
                ['nation_name' => 'Singapore'],
                ['nation_name' => 'Slovakia'],
                ['nation_name' => 'Slovenia'],
                ['nation_name' => 'Solomon Islands'],
                ['nation_name' => 'Somalia'],
                ['nation_name' => 'South Africa'],
                ['nation_name' => 'South Korea'],
                ['nation_name' => 'South Sudan'],
                ['nation_name' => 'Spain'],
                ['nation_name' => 'Sri Lanka'],
                ['nation_name' => 'Sudan'],
                ['nation_name' => 'Suriname'],
                ['nation_name' => 'Sweden'],
                ['nation_name' => 'Switzerland'],
                ['nation_name' => 'Syria'],
                ['nation_name' => 'Taiwan'],
                ['nation_name' => 'Tajikistan'],
                ['nation_name' => 'Tanzania'],
                ['nation_name' => 'Thailand'],
                ['nation_name' => 'Timor-Leste'],
                ['nation_name' => 'Togo'],
                ['nation_name' => 'Tonga'],
                ['nation_name' => 'Trinidad and Tobago'],
                ['nation_name' => 'Tunisia'],
                ['nation_name' => 'Turkey'],
                ['nation_name' => 'Turkmenistan'],
                ['nation_name' => 'Tuvalu'],
                ['nation_name' => 'Uganda'],
                ['nation_name' => 'Ukraine'],
                ['nation_name' => 'United Arab Emirates'],
                ['nation_name' => 'United Kingdom'],
                ['nation_name' => 'United States of America'],
                ['nation_name' => 'Uruguay'],
                ['nation_name' => 'Uzbekistan'],
                ['nation_name' => 'Vanuatu'],
                ['nation_name' => 'Venezuela'],
                ['nation_name' => 'Vietnam'],
                ['nation_name' => 'Yemen'],
                ['nation_name' => 'Zambia'],
                ['nation_name' => 'Zimbabwe']
            ]
        );
        DB::table('animal_detail')->insert(
            [
                [
                    'animal_name' => 'Sư Tử',
                    'animal_scientific_name' => 'Panthera leo',
                    'animal_description' => 'Sư tử ( Panthera leo ) là một loài mèo lớn thuộc chi Panthera có nguồn gốc từ Châu Phi và Ấn Độ . Nó là biểu tượng động vật được công nhận rộng rãi nhất trong văn hóa nhân loại và nó đã được mô tả rộng rãi trong các tác phẩm điêu khắc và tranh vẽ, trên quốc kỳ cũng như trong các bộ phim và văn học đương đại. Những mô tả văn hóa về sư tử rất nổi bật ở Ai Cập cổ đại, và những mô tả này đã xuất hiện ở hầu hết các nền văn hóa cổ đại và trung cổ trong phạm vi lịch sử và hiện tại của sư tử.',
                    'appearance_description' => 'Sư tử là một loài mèo hoang lớn có bộ lông ngắn màu hung và phần dưới màu trắng. Đuôi dài kết thúc bằng một chùm lông màu đen. Những con vật này thể hiện sự dị hình giới tính với con đực, có bờm đặc biệt, có màu từ đen đến vàng. Chúng phát triển bờm khi được 3 tuổi. Trong khi đó, bờm của những người sống ở khu vực thoáng đãng lại đầy đặn hơn một cách đáng chú ý. Chiếc bờm khiến sư tử trông to lớn hơn nhiều so với thực tế, giúp con vật đe dọa đối thủ khi đối đầu với những con sư tử khác cũng như linh cẩu Đốm, vốn là đối thủ cạnh tranh chính của con vật trong phạm vi của nó. Sư tử non có bộ lông màu xám, phủ đầy các mảng màu nâu, sau đó biến mất khi được 3 tháng tuổi. Tuy nhiên, sư tử ở miền đông châu Phi có xu hướng giữ lại những đốm này trên bụng.',
                    'geography_description' => 'Hiện tại, sư tử phân bố khắp khu vực cận Sahara của Châu Phi và ở Rừng Gir ở bang Gujarat của Ấn Độ. Họ thích những đồng bằng cỏ và xavan, những con sông giáp ranh và những khu rừng rộng mở có nhiều bụi rậm. Chúng hiếm khi đi vào những khu rừng kín. Quần thể còn sót lại cũng có thể được tìm thấy trong các khu rừng ẩm nhiệt đới ở Tây Phi và các khu rừng trên núi ở Đông Phi.',
                    'habit_lifestyle_description' => 'Sư tử có thể hoạt động bất cứ lúc nào trong ngày nhưng hoạt động của chúng thường đạt đỉnh điểm sau hoàng hôn sau khoảng thời gian giao lưu và chải chuốt. Hầu hết hoạt động săn bắn thường diễn ra vào lúc hoàng hôn. Ngoài ra, sư tử châu Phi dành phần lớn thời gian để nghỉ ngơi. Chúng nghỉ ngơi để tiết kiệm năng lượng khi không có con mồi hoặc để trốn cái nóng giữa trưa. Sư tử châu Phi là loài động vật có tính xã hội cao, tập hợp thành nhóm hoặc đàn, bao gồm tối đa 3 con sư tử đực và nhiều con sư tử cái cùng con non. Niềm tự hào được bảo vệ bởi những con đực, những người tuần tra và đánh dấu lãnh thổ. Tuy nhiên, có sự cạnh tranh gay gắt giữa các con đực để giành lãnh thổ và vị trí trong đàn. Trong một trường hợp, nếu một con đực khác vượt qua con đực đầu đàn, nó thường giết chết tất cả đàn con do con đực trước đó lai tạo. Trong khi đó, con đực không có xu hướng săn mồi do tốc độ chậm và ngoại hình bắt mắt. Thay vào đó, việc săn bắn được giao cho những con cái của niềm tự hào, chúng đi săn theo nhóm, hợp tác với nhau trong các chuyến đi săn của chúng. Con cái là những thợ săn xuất sắc: chúng nhanh nhẹn và linh hoạt hơn con đực, có thể săn lùng những con vật to lớn và nhanh hơn chúng rất nhiều. Sư tử có một kho giọng hát lớn. Hầu hết chúng là các biến thể của tiếng gầm gừ, gầm gừ, kêu meo meo và gầm rú. Các âm thanh khác được tạo ra bao gồm tiếng gừ gừ, thở hổn hển, chảy máu và vo ve. Tiếng gầm được sử dụng để quảng cáo sự hiện diện của họ. Sư tử thường gầm lên vào ban đêm, âm thanh có thể nghe thấy từ khoảng cách 8 km (5 mi).',
                    'diet_nutrition_description' => 'Sư tử là loài ăn thịt nói chung. Chúng chủ yếu săn ngựa vằn, linh dương, linh dương, hươu, trâu, hươu cao cổ non, lợn lòi, linh dương đầu bò, voi non và ít thường xuyên hơn - thỏ rừng và chim. Sư tử cũng có thể ăn xác thối khi có cơ hội; họ nhặt rác những động vật chết vì nguyên nhân tự nhiên như bệnh tật hoặc những con bị giết bởi những kẻ săn mồi khác như linh cẩu.',
                    'mating_habit_description' => 'Sư tử có hệ thống giao phối đa thê, nghĩa là sư tử đực có thể giao phối với một số sư tử cái. Chúng sinh sản quanh năm với thời kỳ cao điểm nhất là vào mùa mưa. Thời gian mang thai kéo dài từ 110 đến 119 ngày, sinh trung bình 3-6 con. Con cái sinh con trong một vườn ươm ẩn, đơn độc. Khi được 4 - 6 tuần tuổi, đàn con tham gia đàn con. Thông thường, tất cả các con cái của niềm tự hào đều nuôi dưỡng và chăm sóc con non; Khi một con cái mẹ rời đàn để đi săn, một con cái đang cho con bú khác sẽ nuôi con của mình. Việc cai sữa xảy ra khi được 6-7 tháng tuổi, mặc dù đàn con thường ở gần mẹ trong hai năm đầu đời. Con đực trưởng thành về mặt sinh sản khi được 5 tuổi trong khi con cái trưởng thành sớm hơn, ở độ tuổi 2,5-3.',
                    'population_description' => 'Mối đe dọa dân số
Sư tử từ lâu đã bị săn lùng vì sợ hãi và vì chiến lợi phẩm. Tuy nhiên, săn bắn vẫn là một trong những yếu tố chính, đe dọa quần thể loài động vật này trên khắp châu Phi. Hiện tại, chúng bị mất phạm vi phân bố do sự phát triển của con người và sự thay đổi môi trường sống của chúng thành đất nông nghiệp. Trong khi đó, những người sống gần các khu định cư của con người phải đối mặt với các bệnh lây lan do chó nhà lây lan.

Số dân số
Theo Sách đỏ IUCN, tổng số lượng sư tử là 23.000-39.000 cá thể trưởng thành. Hiện nay, loài này được xếp vào loại sắp nguy cấp (VU) trong Sách đỏ IUCN và số lượng của loài này ngày nay đang giảm dần.

Hốc sinh thái
Sư tử là một mắt xích không thể thay thế trong hệ sinh thái trong phạm vi của chúng. Ăn các động vật ăn cỏ như ngựa vằn hoặc trâu, chúng kiểm soát số lượng quần thể của những loài này. Nếu không, những động vật ăn cỏ này có thể cạnh tranh với các loài động vật khác trong phạm vi của chúng, dẫn đến sự tuyệt chủng hoàn toàn của những loài này và do đó phá hủy sự đa dạng sinh học của hệ sinh thái.',
                    'fun_fact' => 'Khi nghỉ ngơi, sư tử thể hiện hành vi thân thiện và hòa đồng cao, dành thời gian cho nhau và củng cố mối liên kết xã hội giữa các thành viên trong đàn: chúng chơi đùa cùng nhau, cọ xát vào đầu nhau cũng như ngủ theo nhóm.
                Không có lông, sư tử và hổ trông giống nhau. Chúng cực kỳ khó phân biệt vì cấu trúc cơ thể gần như giống hệt nhau. Ngoài ra, sư tử châu Phi còn là họ hàng của báo hoa mai và báo đốm.
                Sư tử đực là loài mèo duy nhất có bờm đặc trưng, ​​mang lại cho con vật vẻ ngoài oai vệ, xứng đáng được mệnh danh là “Vua của các loài thú”.
                Sư tử là loài mèo lớn thứ hai (sau hổ).
                Đàn con sơ sinh có những đốm màu nâu, chúng thường mất đi khi lớn lên, mặc dù một số cá thể vẫn giữ được những vết nhạt trong suốt cuộc đời.
                Trong niềm tự hào, con cái chịu trách nhiệm săn bắn, trong khi con đực có nhiệm vụ bảo vệ lãnh thổ. Tuy nhiên, bất chấp sự phân bổ trách nhiệm này, nam giới luôn ăn trước.
                Bờm của sư tử đực dần dần sẫm màu trong suốt cuộc đời của con vật, là dấu hiệu tốt cho biết tuổi của sư tử.
                Khi bước đi, gót chân của sư tử không chạm đất do cấu tạo của chân.',
                    'animal_length' => '140-250',
                    'animal_height' => '140-250',
                    'animal_weight' => '120-249',
                    'population_size' => '23-39',
                    'avg_lifespan' => '12-25',
                    'animal_sound' => '',
                    'animal_video' => 'https://www.youtube.com/watch?v=uFIEIFLJtSQ',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'animal_category_id' => '4',
                    'population_trending_id' => '2',
                    'created_by' => '1'
                ],
                [
                    'animal_name' => 'Báo',
                    'animal_scientific_name' => 'Acinonyx jubatus',
                    'animal_description' => 'Báo săn ( Acinonyx jubatus ) là một loài mèo lớn có nguồn gốc từ Châu Phi và miền trung Iran . Nó là động vật trên cạn nhanh nhất, ước tính có khả năng chạy với tốc độ 80 đến 128 km/h (50 đến 80 mph) với tốc độ nhanh nhất được ghi nhận đáng tin cậy là 93 và 98 km/h (58 và 61 mph). Nó có một số khả năng thích ứng với tốc độ, bao gồm thân hình nhẹ nhàng, đôi chân thon dài và cái đuôi dài. Trong quá khứ, loài báo được thuần hóa và huấn luyện để săn động vật móng guốc. Chúng đã được miêu tả rộng rãi trong nghệ thuật, văn học, quảng cáo và hoạt hình.',
                    'appearance_description' => 'Báo gêpa là loài mèo lớn được nhận dạng bằng những vết đen (còn gọi là "vết rách"), chạy từ mắt trong dọc theo mũi ra ngoài miệng. Loài mèo này là loài động vật cực kỳ nhanh nhẹn, có hai chân sau mạnh mẽ và cột sống cơ bắp rất linh hoạt. Cơ thể dài và mảnh mai, được bao phủ bởi bộ lông thô màu vàng nhạt với những mảng nhỏ màu đen. Đuôi có các đốm tròn, có đầu màu đen ở đầu. Ngoài ra, chiếc đuôi khá dài giúp báo săn giữ thăng bằng và đổi hướng. Đầu nhỏ và mắt đặt cao, giúp chúng tìm được con mồi tiềm năng trên đồng cỏ. Móng vuốt của báo gêpa không thể rút lại được; chúng đào móng vuốt của mình xuống đất, giúp tăng cường khả năng bám của chúng ở tốc độ cao.',
                    'geography_description' => 'Báo gêpa phân bố khắp miền đông và miền nam châu Phi cũng như ở Trung Đông. Chúng thường sống ở đồng cỏ và thảo nguyên nhưng cũng có thể được tìm thấy ở nhiều môi trường sống khác nhau như vùng núi và thung lũng. Để ẩn náu khỏi những kẻ săn mồi, những loài động vật này thích môi trường có thảm thực vật tươi tốt như cỏ cao hoặc bụi rậm.',
                    'habit_lifestyle_description' => 'Không giống như các loài săn mồi lớn khác ở châu Phi như sư tử hay linh cẩu, báo săn hoạt động tích cực nhất vào ban ngày; bằng cách này, họ tránh được sự cạnh tranh thức ăn với những động vật này. Báo gêpa sống thành ba nhóm xã hội chính: con cái và đàn con của chúng, "liên minh" đực và những con đực đơn độc. Con cái sống cuộc sống du mục tìm kiếm con mồi trong phạm vi sống rộng lớn, trong khi con đực ít vận động hơn và thay vào đó thiết lập các vùng lãnh thổ nhỏ hơn nhiều ở những khu vực có nhiều con mồi và khả năng tiếp cận với con cái. Phạm vi sinh sống của báo gêpa có thể bao phủ một lãnh thổ rộng lớn, đôi khi chồng chéo với phạm vi lãnh thổ của một con báo khác hoặc một con sư tử. Săn bắn là hoạt động chính của báo săn suốt cả ngày, đỉnh điểm là vào lúc bình minh và hoàng hôn. Các nhóm nghỉ ngơi trên bãi cỏ sau khi hoàng hôn. Báo gêpa thường kiểm tra vùng lân cận của chúng tại các điểm quan sát như độ cao để kiểm tra con mồi hoặc động vật ăn thịt lớn hơn; ngay cả khi đang nghỉ ngơi, họ cũng thay nhau canh gác. Khi săn báo gêpa sử dụng thị giác thay vì khứu giác; chúng canh chừng con mồi từ những nơi nghỉ ngơi hoặc những cành cây thấp. Chúng sẽ rình rập con mồi, cố gắng không bị phát hiện trong chỗ ẩn nấp và tiếp cận càng gần càng tốt, thường trong phạm vi 60 đến 70 m (200 đến 230 ft) tính từ con mồi. Chúng cũng có thể nằm ẩn nấp trong chỗ nấp và chờ đợi con mồi đến gần. Ở những khu vực có độ che phủ tối thiểu, báo gêpa sẽ tiếp cận con mồi trong vòng 200 m (660 ft) và bắt đầu cuộc rượt đuổi. Những con mèo đốm này rất kêu và có nhiều tiếng kêu và âm thanh như tiếng hót líu lo (hoặc "tiếng sủa"), tiếng churrs (hoặc tiếng churtling), tiếng gừ gừ, kêu be be, ho, gầm gừ, rít, meo meo và rên rỉ (hoặc ngáp). ). Các cách phát âm khác bao gồm tiếng ồn ríu rít, âm thanh "nyam nyam" "ihn ihn" để tập hợp đàn con và "prr prr" để hướng dẫn chúng trong một cuộc hành trình. Một tiếng kêu báo động nhỏ được sử dụng để cảnh báo đàn con đứng yên.',
                    'diet_nutrition_description' => 'Báo là động vật ăn thịt. Chúng ăn chủ yếu là linh dương trong khi các loài động vật móng guốc cỡ nhỏ và vừa như linh dương Impala là nguồn thức ăn bổ sung tốt cho chế độ ăn thông thường của chúng. Khi thiếu thức ăn phù hợp, chúng cũng có thể tiêu thụ các loài nhỏ như thỏ rừng hoặc chim.',
                    'mating_habit_description' => 'Báo gêpa có hệ thống giao phối đa thê, trong đó một con đực giao phối với nhiều con cái. Ngoài ra, báo gêpa đực chỉ kết hợp với báo cái để giao phối và không cung cấp sự chăm sóc của cha mẹ. Những con vật này sinh sản quanh năm. Thời gian mang thai kéo dài khoảng ba tháng, sau đó 2-5 con được sinh ra. Trẻ sơ sinh bị mù, hoàn toàn dễ bị tổn thương. Trong vài tháng tiếp theo, đàn con được bú sữa mẹ cho đến khi chúng bắt đầu ăn thịt. Chẳng mấy chốc, những đứa trẻ bắt đầu đi cùng mẹ trong cuộc đi săn để xem và học các kỹ năng săn bắn. Ngoài ra, chúng còn học các kỹ thuật săn mồi khi chơi với anh chị em của mình. Đàn con sống với mẹ cho đến khi chúng có thể tự đi săn mồi. Sau đó, từ 18 tháng đến 2 tuổi, chúng rời đi để tìm lãnh thổ riêng. Báo gêpa cái đạt đến tuổi trưởng thành sinh sản khi được 21-22 tháng tuổi.',
                    'population_description' => 'Mối đe dọa dân số
Các mối đe dọa lớn đối với quần thể báo gêpa bao gồm bệnh tật, mất môi trường sống, săn bắn và bị đàn áp trực tiếp. Những con vật này bị nông dân bức hại vì là kẻ săn mồi và săn bắt gia súc. Sự phát triển du lịch tại các khu vực sinh sống của chúng có thể trở thành một mối đe dọa nghiêm trọng khác: các phương tiện du lịch có thể xua đuổi báo săn khỏi con mồi của chúng và tách đàn con khỏi mẹ của chúng. Báo săn được biết đến là loài có biến thể di truyền cực thấp, điều này khiến cho sự sinh tồn của loài này càng khó khăn hơn.

Số dân số
Quần thể báo săn trên toàn cầu hiện đang giảm và trong Danh sách đỏ của IUCN, loài này được phân loại là dễ bị tổn thương (VU). Quần thể báo gêpa ở châu Phi có khoảng 6.674 cá thể trưởng thành. Ngoài ra, khoảng 60-100 con báo sống trong các quần thể nhỏ biệt lập ở Iran.

Hốc sinh thái
Do là loài săn mồi, báo săn kiểm soát quần thể loài con mồi mà chúng ăn. Nếu không, quần thể của những loài động vật này có thể trở nên lớn đến mức chúng sẽ phá vỡ toàn bộ mạng lưới thức ăn, ăn hết thực vật trong khu vực và hủy hoại đất. Mặt khác, báo săn săn những con vật yếu hoặc ốm yếu, do đó không để gen yếu hơn truyền sang thế hệ sau và duy trì sức khỏe cho loài săn mồi.',
                    'fun_fact' => 'Những con mèo này không thể gầm gừ, nhưng chúng có thể kêu gừ gừ như mèo nhà khi hít vào và thở ra.
Cheetah là một từ tiếng Ấn Độ, có nghĩa là "đốm".
Trong số các loài động vật trên cạn, báo săn là loài nhanh nhất. Con vật chỉ mất 3 giây để tăng tốc từ 0 lên 100 km/h!
Đuôi báo săn có tác dụng giống như bánh lái của thuyền, giúp con vật đánh lái khi chạy.
Báo gêpa sử dụng nét mặt để thể hiện tâm trạng của mình.
Đây là loài mèo lớn duy nhất có khả năng lộn nhào trên không khi chạy nước rút.',
                    'animal_length' => '112-150',
                    'animal_height' => '70-90',
                    'animal_weight' => '21-72',
                    'population_size' => '6.674',
                    'avg_lifespan' => '10-20',
                    'animal_sound' => 'sssss',
                    'animal_video' => 'https://www.youtube.com/watch?v=qwcGAFSCJes',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'animal_category_id' => '11',
                    'population_trending_id' => '2',
                    'created_by' => '1'
                ],
                [
                    'animal_name' => 'Cá Sấu Sông Nile',
                    'animal_scientific_name' => 'Crocodylus niloticus',
                    'animal_description' => 'Cá sấu sông Nile ( tên khoa học Crocodylus niloticus ) là loài cá sấu lớn sống ở môi trường nước ngọt ở Châu Phi. Ở đó nó có mặt ở 26 quốc gia. Cá sấu sông Nile là một trong những loài cá sấu nguy hiểm nhất và là nguyên nhân gây ra cái chết cho hàng trăm người mỗi năm. Nó phổ biến và không có nguy cơ tuyệt chủng, mặc dù có một số loài bị suy giảm hoặc tuyệt chủng trong khu vực.',
                    'appearance_description' => 'Cá sấu sông Nile là một trong những loài cá sấu lớn nhất. Con cái nhỏ hơn đáng kể so với con đực. Cơ thể của chúng thon gọn, đuôi dài và cứng cáp, bàn chân sau có màng. Cá sấu sông Nile có bộ hàm dài và khỏe, rất phù hợp để bắt và giữ con mồi. Nhờ một chiếc van đặc biệt được tìm thấy ở phía sau cổ họng, những con cá sấu này có thể di chuyển dưới nước với cái miệng mở và tóm và giữ con mồi mà không cần uống nước. Cá sấu sông Nile có màu ô liu xám và bụng màu vàng. Các cá thể non được xác định bằng màu xanh lục hoặc nâu ô liu sẫm và các dải chéo màu đen trên khắp cơ thể và đuôi. Khi chúng lớn lên, các dải trên cơ thể chúng trở nên mờ nhạt hơn.',
                    'geography_description' => 'Cá sấu sông Nile được tìm thấy ở châu Phi cận Sahara. Chúng thường xảy ra nhất ở các khu vực miền trung, miền đông và miền nam châu Phi cũng như miền Tây Madagascar. Cá sấu sông Nile có thể sống ở nhiều loại môi trường sống khác nhau, bao gồm các dòng nước lợ nhỏ, sông chảy xiết, đầm lầy, đập, hồ thủy triều và cửa sông. Ở Đông Phi, chúng được tìm thấy chủ yếu ở sông, hồ, đầm lầy và đập, ưa thích những vùng nước rộng, thoáng đãng hơn những vùng nước nhỏ hơn. Chúng thường được tìm thấy ở vùng nước tiếp giáp với nhiều môi trường sống mở khác nhau như xavan hoặc thậm chí bán sa mạc nhưng cũng có thể thích nghi với các đầm lầy có nhiều cây cối, các vùng ven sông có nhiều cây cối rậm rạp, đường thủy của các khu rừng khác và chu vi của rừng. Ở Madagascar, quần thể cá sấu sông Nile còn sót lại đã thích nghi với cuộc sống trong hang động. Mặc dù không phải là loài thường xuyên đi biển nhưng cá sấu sông Nile sở hữu các tuyến muối giống như tất cả các loài cá sấu thực sự và đôi khi có thể xâm nhập vào vùng nước ven biển và thậm chí cả biển.',
                    'habit_lifestyle_description' => 'Cá sấu sông Nile là loài động vật sống đơn độc. Tuy nhiên, đôi khi người ta có thể thấy chúng kiếm ăn theo nhóm nhỏ, bao gồm nhiều cá thể. Họ thường sử dụng một kỹ thuật đặc biệt, bao vây một vùng nước để tập trung cá vào đó. Sau đó, hệ thống phân cấp thống trị quyết định các thành viên trong nhóm sẽ kiếm ăn theo thứ tự nào. Những loài bò sát này chủ yếu sống về đêm. Ban ngày, cá sấu thường tắm nắng hoặc ngâm mình trong nước nếu cần. Cá sấu đực có tính lãnh thổ cao; họ tuần tra và bảo vệ lãnh thổ của mình, thường bao gồm một phần bờ biển, kéo dài khoảng 50 mét xuống nước. Cá sấu sông Nile thường lặn trong vài phút trước khi nổi lên mặt nước; tuy nhiên, khi bị đe dọa, chúng có thể chìm dưới nước tới 30 phút. Hơn nữa, khi hoàn toàn không hoạt động, loài bò sát này có khả năng nín thở tới 2 giờ. Chúng là loài chạy cực kỳ nhanh và nhìn chung, những con cá sấu này có phản xạ rất nhanh, nhưng thật không may, chúng nhanh chóng mệt mỏi.',
                    'diet_nutrition_description' => 'Cá sấu sông Nile là loài ăn thịt và ăn xác thối. Chúng ăn nhiều loại động vật, bao gồm côn trùng, động vật lưỡng cư, cá và động vật có vú trên cạn như hươu cao cổ hoặc trâu Cape. Cá sấu mới nở thường bắt đầu bằng côn trùng, cuối cùng chuyển sang con mồi lớn hơn. Cá sấu sông Nile cũng nhặt rác hoặc ăn trộm thịt của những kẻ săn mồi khác, chẳng hạn như sư tử và báo, và các nhóm cá sấu sông Nile có thể di chuyển hàng trăm mét từ đường thủy để ăn xác. Chúng cũng sẽ dễ dàng ăn những con hà mã đã chết.',
                    'mating_habit_description' => 'Cá sấu sông Nile có hệ thống giao phối đa thê, trong đó một con đực giao phối với một số con cái. Cá sấu đực thường thu hút những con cái dễ tiếp thu bằng cách tạo ra nhiều loại tiếng động khác nhau bằng cách gầm lên, đập mõm xuống nước hoặc thổi nước ra khỏi mũi. Trong khi đó, những con đực lớn hơn thường thành công hơn trong việc tìm kiếm bạn tình. Mùa làm tổ của loài này xảy ra vào tháng 11-12. Trong thời kỳ này, cá sấu cái đào tổ, đó là một cái hố ở bờ sông hoặc lòng sông đầy cát. Sau đó, đẻ 25-80 trứng và ấp trong 80 - 90 ngày. Khi thời gian nở đến gần, con cái mở tổ, mang con xuống nước. Sau một thời gian, những con non tham gia vào một trại trẻ con do con cái chăm sóc. Những con non có thể ở trong chuồng này trong 2 năm đầu đời. Cá sấu sông Nile trưởng thành về mặt sinh sản khi được 12-16 tuổi.',
                    'population_description' => 'Mối đe dọa dân số
Các mối đe dọa chính đối với loài này liên quan đến con người. Vì vậy, loài bò sát này thu hút các thợ săn vì làn da của nó, được sử dụng để sản xuất da chất lượng cao. Mặt khác, là loài săn mồi to lớn và nguy hiểm, cá sấu sông Nile phải đối mặt với sự hung hãn từ con người, những kẻ phá hủy tổ của chúng và thường xuyên giết chết cá sấu. Cố gắng gỡ cá đánh bắt ra khỏi lưới đánh cá, những con vật này thỉnh thoảng làm hỏng lưới, dẫn đến xung đột giữa cá sấu và ngư dân. Tại Công viên đất ngập nước Greater St Lucia ở Nam Phi, các loài động vật đang bị đe dọa bởi sự xâm lấn của các loài thực vật kỳ lạ che bóng và thay thế nơi làm tổ của chúng, làm mát trứng của chúng, điều này có khả năng mang lại một quần thể toàn con cái.

Số dân số
Được phân loại là loài ít quan tâm nhất (LC) trong Danh sách đỏ IUCN, loài bò sát này hiện không có nguy cơ tuyệt chủng. Tổng số lượng ước tính của cá sấu sông Nile dao động từ 250.000 đến 500.000 cá thể.',
                    'fun_fact' => 'Giới tính của con sau này phụ thuộc rất nhiều vào nhiệt độ ấp: khi nhiệt độ dưới 31 độ C, con nở nhiều khả năng là con cái, còn nhiệt độ trên 31-34 độ C thường sinh con đực. Khi đến thời điểm nở, chim non phát ra tiếng kêu “nhìn trộm”; con cái nghe thấy tiếng gọi và đào trứng, giúp con non ra ngoài.
Cá sấu sông Nile cùng với trứng của chúng đã được tìm thấy trong các ngôi mộ ở Ai Cập.
Quá trình trao đổi chất ngoại nhiệt của những con cá sấu này rất có lợi cho chúng. Một cá thể lớn, nặng hơn 900 kg (2000 lb.), có thể di chuyển trong thời gian dài mà không cần ăn.
Khi con non bị đe dọa, chim mẹ sẽ bế chúng lên, đưa chúng vào túi cổ họng của mình, nơi chúng tìm thấy sự bảo vệ.
Thông thường, cả bố và mẹ đều giúp con non ra khỏi trứng; chúng cuộn trứng giữa lưỡi và vòm miệng, đập vỡ vỏ trứng để con cái trốn thoát dễ dàng hơn.',
                    'animal_length' => '3.5-6',
                    'animal_height' => '70-90',
                    'animal_weight' => '225-500',
                    'population_size' => '250-500',
                    'avg_lifespan' => '50-80',
                    'animal_sound' => 'sssss',
                    'animal_video' => 'https://www.youtube.com/watch?v=qwcGAFSCJes',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'animal_category_id' => '1',
                    'population_trending_id' => '3',
                    'created_by' => '1'
                ],
                [
                    'animal_name' => 'Đại Bàng',
                    'animal_scientific_name' => 'Haliaeetus leucocephalus',
                    'animal_description' => 'Đại bàng đầu trắng ( Haliaeetus leucocephalus ) là một loài chim săn mồi tuyệt đẹp được tìm thấy ở Bắc Mỹ. Nó được tìm thấy gần những vùng nước rộng lớn với nguồn cung cấp thức ăn dồi dào và những cây cổ thụ để làm tổ. Nó xây dựng tổ lớn nhất so với bất kỳ loài chim Bắc Mỹ nào và tổ trên cây lớn nhất từng được ghi nhận cho bất kỳ loài động vật nào. Vào cuối thế kỷ 20, đại bàng hói đang trên bờ vực tuyệt chủng ở Hoa Kỳ tiếp giáp, tuy nhiên, quần thể đã phục hồi và loài này đã bị loại khỏi danh sách các loài có nguy cơ tuyệt chủng của chính phủ Hoa Kỳ vào ngày 12 tháng 7 năm 1995.',
                    'appearance_description' => 'Đại bàng đầu trắng là loài chim dễ nhận biết. Thân và cánh của nó có màu nâu sẫm trong khi đầu và đuôi có màu trắng. Chân và bàn chân có màu vàng sáng, mắt màu vàng nhạt. Đại bàng hói có móng vuốt sắc nhọn ở chân và mỏ lớn có hình móc câu. Con đực của loài này nhỏ hơn con cái. Con non và con non có màu nâu với các mức độ đốm trắng khác nhau ở phần dưới cơ thể.',
                    'geography_description' => 'Đại bàng sinh sống trên một lãnh thổ rộng lớn, trải dài từ phía bắc Mexico đến Hoa Kỳ và Canada, do đó bao phủ phần lớn Bắc Mỹ. Những con chim này di cư một phần, tùy thuộc vào vị trí. Nếu lãnh thổ của chúng có nguồn nước thoáng, các loài chim vẫn ở đó quanh năm, nhưng nếu vùng nước đóng băng trong mùa đông khiến không thể kiếm được thức ăn, chúng sẽ di cư về phía nam hoặc đến bờ biển. Trong mùa sinh sản, đại bàng hói xuất hiện ở bất kỳ loại môi trường sống đất ngập nước nào của Mỹ như bờ biển, sông, hồ lớn hoặc đầm lầy hoặc các vùng nước rộng lớn khác có nhiều cá. Chúng đòi hỏi những cây lá kim hoặc cây gỗ cứng già và trưởng thành để đậu, đậu và làm tổ. Chúng cũng sẽ làm tổ trong các đầm lầy ngập mặn, vùng đất thông, rừng cây ngập nước theo mùa, đầm lầy gỗ cứng, đồng cỏ rộng mở và vùng đồng cỏ có cây cao rải rác. Trong khi trú đông, đại bàng Hói có xu hướng chọn môi trường sống thoáng đãng, chẳng hạn như thảo nguyên, đồng cỏ hoặc lãnh nguyên hoặc những khu rừng trống thường xuyên có xác thối xâm nhập.',
                    'habit_lifestyle_description' => 'Đại bàng hói thường sống đơn độc, tụ tập thành đàn trong mùa làm tổ. Chúng cũng tụ tập thành những ổ lớn lên tới 400 con và các nhóm cũng có thể tụ tập ở những khu vực có đủ số lượng con mồi. Đại bàng hói tương đối ít hoạt động khi có gió mạnh và vào mùa đông. Khi mùa sinh sản đến, chúng kêu lên và đuổi theo đồng loại để bảo vệ lãnh thổ. Đại bàng hói săn mồi ban ngày một mình hoặc theo đàn bay dọc theo suối, lội nước, bắt cá và ăn ngay tại chỗ. Những con chim giao tiếp với nhau bằng cách sử dụng ngắt âm yếu, tiếng huýt sáo, kleek kik ik ik ik, nhịp điệu hơi giống với tiếng kêu của mòng biển. Tiếng kêu của chim non có xu hướng gay gắt và chói tai hơn chim trưởng thành',
                    'diet_nutrition_description' => 'Đại bàng hói là loài ăn thịt (ăn cá) và ăn chủ yếu là cá. Chế độ ăn của chúng cũng bao gồm các loài chim nhỏ, thỏ, bò sát, cua và động vật lưỡng cư. Ngoài ra, chúng còn có thể ăn trứng của các loài chim khác.',
                    'mating_habit_description' => 'Đại bàng hói là loài chung thủy một vợ một chồng, giao phối một lần trong đời hoặc sống cùng nhau cho đến khi một trong hai bạn tình chết. Những màn tán tỉnh do đại bàng hói biểu diễn rất ấn tượng và ngoạn mục. Họ cũng biểu diễn các màn chiến đấu, trong đó những con chim lao vào nhau. Cặp đôi tiến hành làm tổ và sau đó 1-3 tháng sẽ đẻ trứng. Mùa đẻ trứng là cuối đông đầu xuân, con cái thường đẻ 2 quả trứng. Cả con đực và con cái đều tham gia ấp trứng trong 34-36 ngày. Sau khi gà con nở, một trong hai bố mẹ thường xuyên ở bên chúng trong khoảng 2 tuần. Sau đó, khi được 10-12 tuần tuổi, gà con bắt đầu bay nhưng bố mẹ vẫn tiếp tục cho ăn và bảo vệ chúng thêm 2-3 tháng nữa. Đại bàng trưởng thành về mặt sinh sản và bắt đầu sinh sản khi chúng được 4 đến 5 tuổi.',
                    'population_description' => 'Mối đe dọa dân số
Mặc dù thực tế là việc phục hồi dân số đã được tiến hành nhưng các mối đe dọa vẫn hiện hữu. Một trong những mối đe dọa là mất môi trường sống do sự chiếm đóng của các khu vực ven biển và sự thoát nước của vùng đất ngập nước của con người. Mặt khác, bắn súng trái phép, xáo trộn con người, ô nhiễm, va chạm với đường dây điện và phương tiện hàng không là một trong những mối đe dọa đáng chú ý đối với quần thể loài này. Và cuối cùng, các chất ô nhiễm tiềm ẩn nguy cơ ngộ độc nghiêm trọng: Ví dụ, DDT có thể làm mỏng vỏ trứng và suy giảm khả năng sinh sản.

Số dân số
Theo nguồn tài liệu All About Birds, tổng quy mô quần thể sinh sản của đại bàng hói là 250.000 cá thể. Hiện nay, loài này được phân loại là loài ít quan tâm (LC) trong Sách đỏ IUCN và số lượng của nó ngày nay đang tăng lên.

Hốc sinh thái
Do là loài săn mồi hàng đầu nên đại bàng đầu trắng đóng vai trò quan trọng trong hệ sinh thái. Sự suy giảm dân số và sự phục hồi sau đó đã có tác động rất lớn đến các sinh vật trong môi trường sống của chúng. Ví dụ, nó đã gây ra sự suy giảm dân số của Murres trong khu vực.',
                    'fun_fact' => 'Một con đại bàng hói có khoảng 7.000 chiếc lông. Khi mất một chiếc lông ở cánh này, nó cũng sẽ mất một chiếc lông tương ứng ở cánh kia để giữ thăng bằng.
Do tốc độ cao và móng vuốt sắc nhọn, đại bàng hói có thể cướp đi sự săn mồi của các loài chim khác và đôi khi là cả con người.
Mặc dù có tên như vậy nhưng đại bàng hói không thực sự hói! Trong tiếng Latin, tên của loài này có nghĩa là đại bàng biển đầu trắng do đại bàng trưởng thành có bộ lông màu trắng trên đầu.
Đại bàng hói không thể ngửi nhưng nó có khứu giác hoàn hảo: nếu thức ăn có mùi hư hỏng, đại bàng sẽ không ăn nó.
Đầu và đuôi của đại bàng hói chỉ trở nên trắng khi được 4-5 tuổi.
Đại bàng hói thở không khí qua lỗ trên mỏ có tên là “nare”.
Thính giác của chúng tốt như con người trong khi tầm nhìn xa tốt hơn con người tới 3-4 lần.
Kể từ năm 1782, đại bàng đầu trắng đã trở thành loài chim quốc gia của Hoa Kỳ.
Đại bàng hói chỉ được tìm thấy ở Bắc Mỹ, là một trong 7 loài đại bàng biển.
Đại bàng hói có thể băng qua mặt nước mà không cần bơi hoặc bay qua: nó ngồi trên mặt nước và tự chèo qua bằng đôi cánh.',
                    'animal_length' => '70-102',
                    'animal_height' => '70-90',
                    'animal_weight' => '3-6.3',
                    'population_size' => '250.000',
                    'avg_lifespan' => '28-36',
                    'animal_sound' => 'sssss',
                    'animal_video' => 'https://www.youtube.com/watch?v=9JTfcWIPvng',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'animal_category_id' => '4',
                    'population_trending_id' => '1',
                    'created_by' => '1'
                ],
            ]
        );
        DB::table('animal_image')->insert(
            [
                [
                    'image_name' => 'lion.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'cheetah.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'crocodile.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'eagle.jpg',
                    'detail_id' => '4'
                ],
            ]
        );
        DB::table('animal_between_area')->insert(
            [
                [
                    'animal_detail_id' => '1',
                    'animal_area_id' => '1'
                ],
                [
                    'animal_detail_id' => '1',
                    'animal_area_id' => '2'
                ],
                [
                    'animal_detail_id' => '1',
                    'animal_area_id' => '3'
                ],
                [
                    'animal_detail_id' => '2',
                    'animal_area_id' => '2'
                ],
                [
                    'animal_detail_id' => '2',
                    'animal_area_id' => '4'
                ],
                [
                    'animal_detail_id' => '3',
                    'animal_area_id' => '4'
                ],
                [
                    'animal_detail_id' => '4',
                    'animal_area_id' => '5'
                ],
                [
                    'animal_detail_id' => '4',
                    'animal_area_id' => '6'
                ],
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm, cao điểm vào mùa mưa',
                    'pregnancy_duration' => '110-119 ngày',
                    'baby_carrying' => '3-6 con',
                    'independent_age' => '2 năm',
                    'population_threat' => 'Sư tử từ lâu đã bị săn lùng vì sợ hãi và làm chiến lợi phẩm. Tuy nhiên, săn bắn vẫn là một trong những yếu tố chính, đe dọa quần thể động vật này trên khắp châu Phi. Hiện tại, chúng bị mất phạm vi do các khu định cư của con người ngày càng tăng và thay đổi môi trường sống của chúng thành đất nông nghiệp. Trong khi đó, những người, sống gần các khu định cư của con người, tiếp xúc với các bệnh, lây lan bởi chó nhà.',
                    'population_number' => 'Theo Sách đỏ IUCN, tổng quy mô quần thể của sư tử là 23.000-39.000 cá thể trưởng thành. Hiện tại, loài này được phân loại là Dễ bị tổn thương (VU) trong Sách đỏ IUCN và số lượng của nó ngày nay đang giảm.',
                    'ecological_niche' => 'Sư tử là một mắt xích không thể thay thế trong hệ sinh thái phạm vi của chúng. Ăn các động vật ăn cỏ như ngựa vằn hoặc trâu, chúng kiểm soát số lượng quần thể của các loài này. Nếu không, những động vật ăn cỏ này có thể cạnh tranh với các động vật khác trong phạm vi của chúng, dẫn đến sự tuyệt chủng hoàn toàn của các loài này và do đó phá hủy đa dạng sinh học của hệ sinh thái.',
                    'fun_fact' => 'Khi nghỉ ngơi, sư tử thể hiện hành vi thân thiện và hòa đồng cao, dành thời gian cho nhau và củng cố mối liên kết xã hội giữa các thành viên trong đàn: chúng chơi đùa cùng nhau, cọ xát vào đầu nhau cũng như ngủ theo nhóm.
                Không có lông, sư tử và hổ trông giống nhau. Chúng cực kỳ khó phân biệt vì cấu trúc cơ thể gần như giống hệt nhau. Ngoài ra, sư tử châu Phi còn là họ hàng của báo hoa mai và báo đốm.
                Sư tử đực là loài mèo duy nhất có bờm đặc trưng, ​​mang lại cho con vật vẻ ngoài oai vệ, xứng đáng được mệnh danh là “Vua của các loài thú”.
                Sư tử là loài mèo lớn thứ hai (sau hổ).
                Đàn con sơ sinh có những đốm màu nâu, chúng thường mất đi khi lớn lên, mặc dù một số cá thể vẫn giữ được những vết nhạt trong suốt cuộc đời.
                Trong niềm tự hào, con cái chịu trách nhiệm săn bắn, trong khi con đực có nhiệm vụ bảo vệ lãnh thổ. Tuy nhiên, bất chấp sự phân bổ trách nhiệm này, nam giới luôn ăn trước.
                Bờm của sư tử đực dần dần sẫm màu trong suốt cuộc đời của con vật, là dấu hiệu tốt cho biết tuổi của sư tử.
                Khi bước đi, gót chân của sư tử không chạm đất do cấu tạo của chân.',
                    'top_speed' => '56',
                    'animal_length' => '140-250',
                    'animal_weight' => '120-249',
                    'animal_swing' => '',
                    'population_size' => '23-39',
                    'avg_lifespan' => '12-25',
                    'animal_sound' => '',
                    'animal_video' => 'https://www.youtube.com/watch?v=uFIEIFLJtSQ',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'category_id' => '4',
                    'population_trending_id' => '2',
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
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm',
                    'pregnancy_duration' => '90 ngày',
                    'baby_carrying' => '2-5 con',
                    'independent_age' => '1,5-2 năm',
                    'population_threat' => 'Các mối đe dọa chính đối với quần thể báo bao gồm bệnh tật, mất môi trường sống, săn bắn và đàn áp trực tiếp. Những con vật này bị nông dân bức hại do là động vật ăn thịt và săn bắn gia súc. Sự phát triển của du lịch trong các khu vực môi trường sống của chúng có thể trở thành một mối đe dọa nghiêm trọng khác: các phương tiện du lịch có thể xua đuổi những con báo ra khỏi con mồi và tách đàn con ra khỏi mẹ của chúng. Những con báo được biết là có biến thể di truyền cực kỳ thấp, khiến sự sống sót của loài này thậm chí còn khó khăn hơn.',
                    'population_number' => 'Dân số báo đốm toàn cầu hiện đang giảm và trong Sách đỏ IUCN, loài này được phân loại là Dễ bị tổn thương (VU). Dân số báo đốm ở châu Phi là khoảng 6.674 cá thể trưởng thành. Ngoài ra, khoảng 60 - 100 con báo sống trong các quần thể nhỏ bị cô lập ở Iran.',
                    'ecological_niche' => 'Do là động vật ăn thịt, báo đốm kiểm soát quần thể các loài con mồi mà chúng ăn. Nếu không, quần thể của những con vật này có thể trở nên quá lớn, đến nỗi chúng sẽ phá vỡ toàn bộ mạng lưới thức ăn, ăn tất cả các thảm thực vật trong khu vực và hủy hoại đất. Mặt khác, báo đốm săn mồi trên động vật yếu hoặc ốm, do đó không cho phép các gen yếu hơn truyền sang các thế hệ tiếp theo và duy trì sức khỏe của các loài con mồi.',
                    'fun_fact' => 'Những con mèo này không thể gầm gừ, nhưng chúng có thể kêu gừ gừ như mèo nhà khi hít vào và thở ra.
Cheetah là một từ tiếng Ấn Độ, có nghĩa là "đốm".
Trong số các loài động vật trên cạn, báo săn là loài nhanh nhất. Con vật chỉ mất 3 giây để tăng tốc từ 0 lên 100 km/h!
Đuôi báo săn có tác dụng giống như bánh lái của thuyền, giúp con vật đánh lái khi chạy.
Báo gêpa sử dụng nét mặt để thể hiện tâm trạng của mình.
Đây là loài mèo lớn duy nhất có khả năng lộn nhào trên không khi chạy nước rút.',
                    'top_speed' => '56',
                    'animal_length' => '112-150',
                    'animal_weight' => '21-72',
                    'animal_swing' => '',
                    'population_size' => '6.674',
                    'avg_lifespan' => '10-20',
                    'animal_sound' => 'sssss',
                    'animal_video' => 'https://www.youtube.com/watch?v=qwcGAFSCJes',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'category_id' => '11',
                    'population_trending_id' => '2',
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
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Tháng 11 - Tháng 12',
                    'pregnancy_duration' => '80 - 90 ngày',
                    'baby_carrying' => '80 trứng',
                    'independent_age' => '2 năm',
                    'population_threat' => 'Các mối đe dọa chính đối với loài này có liên quan đến con người. Do đó, loài bò sát này thu hút thợ săn vì làn da của nó, được sử dụng trong sản xuất da chất lượng cao. Mặt khác, là loài săn mồi to lớn và nguy hiểm, cá sấu sông Nile phải đối mặt với sự hung dữ từ con người, chúng phá hủy tổ của chúng và thường xuyên giết chết cá sấu. Cố gắng loại bỏ cá đánh bắt khỏi lưới đánh cá, những con vật này đôi khi làm hỏng lưới, dẫn đến xung đột giữa cá sấu và ngư dân. Trong Công viên đất ngập nước Greater St Lucia ở Nam Phi, các loài động vật đang bị đe dọa bởi sự xâm lược của các loài thực vật kỳ lạ che bóng và thay thế vị trí làm tổ của chúng, làm mát trứng của chúng, có khả năng mang lại một quần thể toàn nữ.',
                    'population_number' => 'Được phân loại là Ít quan tâm nhất (LC) trong Sách đỏ IUCN, loài bò sát này hiện không có nguy cơ tuyệt chủng. Dân số ước tính tổng thể của cá sấu sông Nile dao động từ 250.000 đến 500.000 cá thể.',
                    'ecological_niche' => '',
                    'fun_fact' => 'Giới tính của con sau này phụ thuộc rất nhiều vào nhiệt độ ấp: khi nhiệt độ dưới 31 độ C, con nở nhiều khả năng là con cái, còn nhiệt độ trên 31-34 độ C thường sinh con đực. Khi đến thời điểm nở, chim non phát ra tiếng kêu “nhìn trộm”; con cái nghe thấy tiếng gọi và đào trứng, giúp con non ra ngoài.
Cá sấu sông Nile cùng với trứng của chúng đã được tìm thấy trong các ngôi mộ ở Ai Cập.
Quá trình trao đổi chất ngoại nhiệt của những con cá sấu này rất có lợi cho chúng. Một cá thể lớn, nặng hơn 900 kg (2000 lb.), có thể di chuyển trong thời gian dài mà không cần ăn.
Khi con non bị đe dọa, chim mẹ sẽ bế chúng lên, đưa chúng vào túi cổ họng của mình, nơi chúng tìm thấy sự bảo vệ.
Thông thường, cả bố và mẹ đều giúp con non ra khỏi trứng; chúng cuộn trứng giữa lưỡi và vòm miệng, đập vỡ vỏ trứng để con cái trốn thoát dễ dàng hơn.',
                    'top_speed' => '35',
                    'animal_length' => '3.5-6',
                    'animal_weight' => '225-500',
                    'animal_swing' => '',
                    'population_size' => '250-500',
                    'avg_lifespan' => '50-80',
                    'animal_sound' => 'sssss',
                    'animal_video' => 'https://www.youtube.com/watch?v=qwcGAFSCJes',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '1',
                    'population_trending_id' => '3',
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
                    'mating_behavior' => 'Đơn phối ngẫu',
                    'reproduction_season' => 'Cuối mùa đông-đầu mùa xuân',
                    'pregnancy_duration' => '34 -36 ngày',
                    'baby_carrying' => '2 trứng',
                    'independent_age' => '120 - 170 ngày',
                    'population_threat' => 'Mặc dù thực tế là sự phục hồi của dân số đã được tiến hành, các mối đe dọa vẫn còn hiện diện. Một trong những mối đe dọa là mất môi trường sống vì sự chiếm đóng của các khu vực ven biển và sự thoát nước của vùng đất ngập nước của con người. Mặt khác, bắn súng bất hợp pháp, gây rối của con người, ô nhiễm, va chạm với đường dây điện và phương tiện hàng không là một trong những mối đe dọa đáng chú ý đối với quần thể loài này. Và cuối cùng, các chất ô nhiễm chứa một mối đe dọa ngộ độc nghiêm trọng: DDT, ví dụ, có thể gây mỏng vỏ trứng và suy sinh sản.',
                    'population_number' => 'Theo tài nguyên All About Birds, tổng quy mô quần thể sinh sản của đại bàng hói là 250.000 cá thể. Hiện tại, loài này được phân loại là Ít quan tâm nhất (LC) trong Sách đỏ IUCN và số lượng của nó ngày nay đang tăng lên.',
                    'ecological_niche' => 'Do là loài săn mồi hàng đầu, đại bàng hói đóng vai trò quan trọng trong hệ sinh thái. Sự suy giảm dân số của chúng và sau khi phục hồi đã có tác động rất lớn đến các sinh vật trong môi trường sống của chúng. Ví dụ, nó đã gây ra sự suy giảm dân số của murres trong khu vực.',
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
                    'top_speed' => '120',
                    'animal_length' => '70-102',
                    'animal_weight' => '3-6.3',
                    'animal_swing' => '1.8-2.3',
                    'population_size' => '250.000',
                    'avg_lifespan' => '28-36',
                    'animal_sound' => 'sssss',
                    'animal_video' => 'https://www.youtube.com/watch?v=9JTfcWIPvng',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '4',
                    'population_trending_id' => '1',
                ],
            ]
        );
        DB::table('image')->insert(
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
                    'area_id' => '1'
                ],
                [
                    'animal_detail_id' => '1',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '1',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '2',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '2',
                    'area_id' => '4'
                ],
                [
                    'animal_detail_id' => '3',
                    'area_id' => '4'
                ],
                [
                    'animal_detail_id' => '4',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '4',
                    'area_id' => '6'
                ],
            ]
        );
        DB::table('animal_between_nation')->insert(
            [
                ['animal_detail_id' => '1', 'nation_id' => '22'],
                ['animal_detail_id' => '3', 'nation_id' => '13'],
                ['animal_detail_id' => '4', 'nation_id' => '37'],
                ['animal_detail_id' => '2', 'nation_id' => '49'],
                ['animal_detail_id' => '1', 'nation_id' => '5'],
                ['animal_detail_id' => '3', 'nation_id' => '10'],
                ['animal_detail_id' => '2', 'nation_id' => '25'],
                ['animal_detail_id' => '4', 'nation_id' => '47'],
                ['animal_detail_id' => '3', 'nation_id' => '9'],
                ['animal_detail_id' => '1', 'nation_id' => '15'],
                ['animal_detail_id' => '2', 'nation_id' => '34'],
                ['animal_detail_id' => '4', 'nation_id' => '2'],
                ['animal_detail_id' => '3', 'nation_id' => '19'],
                ['animal_detail_id' => '1', 'nation_id' => '27'],
                ['animal_detail_id' => '4', 'nation_id' => '40'],
                ['animal_detail_id' => '2', 'nation_id' => '8'],
                ['animal_detail_id' => '1', 'nation_id' => '21'],
                ['animal_detail_id' => '3', 'nation_id' => '30'],
                ['animal_detail_id' => '2', 'nation_id' => '12'],
                ['animal_detail_id' => '4', 'nation_id' => '18'],
                ['animal_detail_id' => '1', 'nation_id' => '42'],
                ['animal_detail_id' => '3', 'nation_id' => '11'],
                ['animal_detail_id' => '2', 'nation_id' => '24'],
                ['animal_detail_id' => '4', 'nation_id' => '33'],
                ['animal_detail_id' => '1', 'nation_id' => '45'],
                ['animal_detail_id' => '3', 'nation_id' => '6'],
                ['animal_detail_id' => '2', 'nation_id' => '20'],
                ['animal_detail_id' => '4', 'nation_id' => '26'],
                ['animal_detail_id' => '1', 'nation_id' => '29'],
                ['animal_detail_id' => '3', 'nation_id' => '50']
            ]
        );
        DB::table('animal_between_biome')->insert(
            [
                ['animal_detail_id' => '1', 'biome_id' => '3'],
                ['animal_detail_id' => '2', 'biome_id' => '5'],
                ['animal_detail_id' => '3', 'biome_id' => '14'],
                ['animal_detail_id' => '3', 'biome_id' => '5'],
                ['animal_detail_id' => '4', 'biome_id' => '1'],
                ['animal_detail_id' => '4', 'biome_id' => '27'],
                ['animal_detail_id' => '3', 'biome_id' => '11'],
                ['animal_detail_id' => '3', 'biome_id' => '17'],
                ['animal_detail_id' => '1', 'biome_id' => '22'],
                ['animal_detail_id' => '1', 'biome_id' => '21'],
                ['animal_detail_id' => '3', 'biome_id' => '22'],
                ['animal_detail_id' => '1', 'biome_id' => '2'],
                ['animal_detail_id' => '1', 'biome_id' => '18'],
                ['animal_detail_id' => '4', 'biome_id' => '26'],
                ['animal_detail_id' => '2', 'biome_id' => '3'],
                ['animal_detail_id' => '4', 'biome_id' => '11'],
                ['animal_detail_id' => '4', 'biome_id' => '21'],
                ['animal_detail_id' => '3', 'biome_id' => '8'],
                ['animal_detail_id' => '2', 'biome_id' => '1'],
                ['animal_detail_id' => '3', 'biome_id' => '2'],
                ['animal_detail_id' => '3', 'biome_id' => '1'],
                ['animal_detail_id' => '2', 'biome_id' => '4'],
                ['animal_detail_id' => '1', 'biome_id' => '7'],
                ['animal_detail_id' => '2', 'biome_id' => '21'],
                ['animal_detail_id' => '4', 'biome_id' => '14'],
                ['animal_detail_id' => '1', 'biome_id' => '5']
            ]
        );
        DB::table('animal_between_climate')->insert(
            [
                ['animal_detail_id' => '1', 'climate_id' => '3'],
                ['animal_detail_id' => '2', 'climate_id' => '5'],
                ['animal_detail_id' => '3', 'climate_id' => '2'],
                ['animal_detail_id' => '4', 'climate_id' => '4'],
                ['animal_detail_id' => '1', 'climate_id' => '1'],
                ['animal_detail_id' => '2', 'climate_id' => '3'],
                ['animal_detail_id' => '3', 'climate_id' => '5'],
                ['animal_detail_id' => '4', 'climate_id' => '2'],
                ['animal_detail_id' => '1', 'climate_id' => '4'],
                ['animal_detail_id' => '2', 'climate_id' => '1'],
                ['animal_detail_id' => '3', 'climate_id' => '4'],
                ['animal_detail_id' => '4', 'climate_id' => '5'],
                ['animal_detail_id' => '1', 'climate_id' => '2'],
                ['animal_detail_id' => '2', 'climate_id' => '4'],
                ['animal_detail_id' => '3', 'climate_id' => '3']
            ]
        );
        DB::table('animal_between_color')->insert(
            [
                ['animal_detail_id' => 3, 'color_id' => 8],
                ['animal_detail_id' => 2, 'color_id' => 5],
                ['animal_detail_id' => 1, 'color_id' => 9],
                ['animal_detail_id' => 4, 'color_id' => 3],
                ['animal_detail_id' => 1, 'color_id' => 4],
                ['animal_detail_id' => 2, 'color_id' => 6],
                ['animal_detail_id' => 4, 'color_id' => 1],
                ['animal_detail_id' => 3, 'color_id' => 10],
                ['animal_detail_id' => 2, 'color_id' => 7],
                ['animal_detail_id' => 1, 'color_id' => 2],
                ['animal_detail_id' => 4, 'color_id' => 5],
                ['animal_detail_id' => 3, 'color_id' => 9],
                ['animal_detail_id' => 1, 'color_id' => 8],
                ['animal_detail_id' => 2, 'color_id' => 3],
                ['animal_detail_id' => 4, 'color_id' => 10],
                ['animal_detail_id' => 3, 'color_id' => 2],
                ['animal_detail_id' => 1, 'color_id' => 7],
                ['animal_detail_id' => 4, 'color_id' => 6],
                ['animal_detail_id' => 2, 'color_id' => 1],
                ['animal_detail_id' => 3, 'color_id' => 4],
                ['animal_detail_id' => 1, 'color_id' => 5],
                ['animal_detail_id' => 4, 'color_id' => 9],
                ['animal_detail_id' => 2, 'color_id' => 8],
                ['animal_detail_id' => 3, 'color_id' => 6],
                ['animal_detail_id' => 1, 'color_id' => 1],
                ['animal_detail_id' => 4, 'color_id' => 2],
                ['animal_detail_id' => 2, 'color_id' => 9],
                ['animal_detail_id' => 3, 'color_id' => 7],
                ['animal_detail_id' => 1, 'color_id' => 10],
                ['animal_detail_id' => 4, 'color_id' => 4],
                ['animal_detail_id' => 2, 'color_id' => 10],
                ['animal_detail_id' => 3, 'color_id' => 1],
                ['animal_detail_id' => 1, 'color_id' => 6],
                ['animal_detail_id' => 4, 'color_id' => 7],
                ['animal_detail_id' => 2, 'color_id' => 2],
                ['animal_detail_id' => 3, 'color_id' => 5],
                ['animal_detail_id' => 1, 'color_id' => 3],
                ['animal_detail_id' => 4, 'color_id' => 8],
                ['animal_detail_id' => 2, 'color_id' => 4],
                ['animal_detail_id' => 3, 'color_id' => 3]
            ]
        );
        DB::table('animal_between_ocean')->insert(
            [
                ['animal_detail_id' => 1, 'ocean_id' => 4],
                ['animal_detail_id' => 3, 'ocean_id' => 2],
                ['animal_detail_id' => 2, 'ocean_id' => 5],
                ['animal_detail_id' => 4, 'ocean_id' => 1],
                ['animal_detail_id' => 1, 'ocean_id' => 3],
                ['animal_detail_id' => 2, 'ocean_id' => 2],
                ['animal_detail_id' => 3, 'ocean_id' => 5],
                ['animal_detail_id' => 4, 'ocean_id' => 4],
                ['animal_detail_id' => 1, 'ocean_id' => 1],
                ['animal_detail_id' => 3, 'ocean_id' => 3],
                ['animal_detail_id' => 2, 'ocean_id' => 4],
                ['animal_detail_id' => 4, 'ocean_id' => 2],
                ['animal_detail_id' => 1, 'ocean_id' => 5],
                ['animal_detail_id' => 2, 'ocean_id' => 3],
                ['animal_detail_id' => 3, 'ocean_id' => 1]
            ]
        );
    }
}

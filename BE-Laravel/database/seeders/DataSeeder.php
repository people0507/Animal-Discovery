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
                    'fun_fact' => 'Khi nghỉ ngơi, sư tử thể hiện hành vi thân thiện và hòa đồng cao, dành thời gian bên nhau và củng cố mối quan hệ xã hội giữa các thành viên trong đàn: chúng chơi đùa cùng nhau, cọ đầu vào nhau cũng như ngủ theo nhóm.
Nếu không có lông, sư tử và hổ trông giống nhau, chúng cực kỳ khó phân biệt với nhau vì cấu trúc cơ thể của chúng gần như giống hệt nhau.
Ngoài ra, sư tử châu Phi là họ hàng của báo hoa mai và báo đốm.
Sư tử đực là loài mèo duy nhất có bờm đặc trưng, ​​mang lại cho loài vật vẻ ngoài uy nghi, mang đến cho chúng danh hiệu "Vua của các loài thú".
Sư tử là loài mèo lớn thứ hai còn sống (sau hổ).
Những chú gấu con mới sinh có các đốm màu nâu trên cơ thể, thường mất đi khi chúng lớn lên, mặc dù một số cá thể vẫn giữ lại các đốm nhạt trong suốt cuộc đời.
Trong bầy, con cái chịu trách nhiệm săn mồi, trong khi con đực phải bảo vệ lãnh thổ, tuy nhiên bất chấp sự phân bổ trách nhiệm này, con đực luôn ăn trước.
Bờm của sư tử đực sẽ sẫm màu dần theo thời gian sống của chúng, đây là dấu hiệu tốt để xác định tuổi của sư tử.
Khi đi bộ, gót chân của sư tử không chạm đất do cấu trúc của chân chúng',
                    'top_speed' => '56',
                    'animal_length' => '140-250',
                    'animal_weight' => '120-249',
                    'animal_swing' => '',
                    'population_size' => '23.000-39.000',
                    'avg_lifespan' => '12-25',
                    'animal_sound' => 'lion.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/uFIEIFLJtSQ?si=5JWfJa_7VdiFv9Rv',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '11',
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
                    'fun_fact' => 'Những con mèo này không thể gầm, nhưng chúng có thể kêu gừ gừ như mèo nhà khi hít vào và thở ra.
Cheetah là một từ tiếng Ấn Độ có nghĩa là "có đốm".
Trong số các loài động vật trên cạn, báo gêpa là loài nhanh nhất, loài vật này chỉ mất 3 giây để tăng tốc từ 0 đến 100 km/h!
Đuôi của báo gêpa có chức năng giống như bánh lái của thuyền, giúp con vật điều khiển khi chạy.
Báo gêpa sử dụng biểu cảm khuôn mặt để thể hiện tâm trạng của mình.
Đây là loài mèo lớn duy nhất có khả năng xoay người trên không khi chạy nước rút',
                    'top_speed' => '112',
                    'animal_length' => '112-150',
                    'animal_weight' => '21-72',
                    'animal_swing' => '',
                    'population_size' => '6.674',
                    'avg_lifespan' => '10-20',
                    'animal_sound' => 'cheetah.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/qwcGAFSCJes?si=-NxvXhhL1ww0upok',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '2',
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
                    'fun_fact' => 'Người ta đã tìm thấy cá sấu sông Nile cùng với trứng của chúng trong các ngôi mộ Ai Cập.
Quá trình trao đổi chất biến nhiệt của những con cá sấu này rất có lợi cho chúng,một cá thể lớn nặng hơn 900 kg, có thể sống trong thời gian dài mà không cần ăn.
Khi chim non gặp nguy hiểm, chim mẹ sẽ nhặt chúng lên, đưa vào túi họng của mình, nơi chúng được bảo vệ.
Thông thường, cả bố và mẹ đều giúp con non chui ra khỏi trứng, chúng lăn trứng giữa lưỡi và vòm miệng, làm vỡ vỏ trứng để con non dễ dàng thoát ra ngoài hơn',
                    'top_speed' => '35',
                    'animal_length' => '3.5-6',
                    'animal_weight' => '225.000-500.000',
                    'animal_swing' => '',
                    'population_size' => '250-500',
                    'avg_lifespan' => '50-80',
                    'animal_sound' => 'nile_crocodile.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/04Jym9woVHM?si=hF_km-vwUvBqnW_h',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'category_id' => '3',
                    'population_trending_id' => '3',
                ],
                [
                    'animal_name' => 'Đại Bàng Đầu Trắng',
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
                    'fun_fact' => 'Một con đại bàng đầu hói có khoảng 7000 chiếc lông vũ, khi nó mất một chiếc lông ở một bên cánh, nó cũng sẽ mất một chiếc lông tương ứng ở bên cánh kia để giữ thăng bằng.
Nhờ tốc độ cao và móng vuốt sắc nhọn, đại bàng đầu hói có thể cướp mồi từ các loài chim khác và đôi khi là từ con người.
Mặc dù có tên như vậy, nhưng đại bàng đầu hói thực ra không hề hói!,trong tiếng Latin, tên của loài này có nghĩa là đại bàng biển đầu trắng vì đại bàng trưởng thành có lông màu trắng trên đầu.
Đại bàng đầu hói không thể ngửi nhưng lại có vị giác rất tốt: nếu thức ăn có vị hư hỏng, đại bàng sẽ không ăn.
Đầu và đuôi của đại bàng đầu hói chỉ chuyển sang màu trắng khi được 4-5 tuổi.
Đại bàng đầu hói hít thở không khí qua lỗ trên mỏ gọi là “nare”.
Thính giác của chúng tốt như con người trong khi thị lực nhìn xa tốt hơn con người tới 3-4 lần.
Từ năm 1782, đại bàng đầu hói đã trở thành loài chim quốc gia của Hoa Kỳ.
Đại bàng đầu hói chỉ được tìm thấy ở Bắc Mỹ và là một trong 7 loài đại bàng biển.
Đại bàng đầu hói có thể băng qua nước mà không cần bơi hoặc bay qua: chúng đậu trên mặt nước và chèo thuyền qua bằng đôi cánh',
                    'top_speed' => '120',
                    'animal_length' => '70-102',
                    'animal_weight' => '3-6.3',
                    'animal_swing' => '1.8-2.3',
                    'population_size' => '250.000',
                    'avg_lifespan' => '28-36',
                    'animal_sound' => 'bald_eagle.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/9JTfcWIPvng?si=fLPvGVQLTelF_EIW',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '1',
                    'diet_type_id' => '2',
                    'category_id' => '4',
                    'population_trending_id' => '1',
                ],
                [
                    'animal_name' => 'Sói Vàng Châu Phi',
                    'animal_scientific_name' => 'Canis lupaster',
                    'animal_description' => 'Sói vàng châu Phi ( Canis lupaster ) là loài chó đóng vai trò nổi bật trong một số nền văn hóa châu Phi. Trước đây, loài này được phân loại là một biến thể châu Phi của chó rừng vàng . Năm 2015, một loạt các phân tích về DNA ty thể và bộ gen hạt nhân của loài này đã chứng minh rằng trên thực tế, loài này khác với chó rừng vàng và có quan hệ họ hàng gần hơn với sói xám và chó sói đồng cỏ .',
                    'appearance_description' => 'Sói vàng châu Phi có mõm và tai tương đối dài, và đuôi tương đối ngắn. Màu lông thay đổi theo từng cá thể, theo mùa và theo địa lý, mặc dù màu sắc điển hình là vàng đến xám bạc, với các chi hơi đỏ và đốm đen trên đuôi và vai. Họng, bụng và các dấu hiệu trên mặt thường có màu trắng, và mắt có màu hổ phách. Con cái có từ hai đến bốn cặp núm vú. Mặc dù bề ngoài giống với chó rừng vàng (đặc biệt là ở Đông Phi), sói vàng châu Phi có mõm nhọn hơn và răng sắc hơn, chắc khỏe hơn. Tai dài hơn ở sói châu Phi và hộp sọ có trán cao hơn.',
                    'geography_description' => 'Sói vàng châu Phi thường được tìm thấy ở châu Phi ở phía đông bắc và tây bắc, ở phía đông từ Senegal đến Ai Cập, khắp Libya, Algeria và Morocco ở phía bắc, và ở phía nam đến Chad, Nigeria và Tanzania. Sói vàng châu Phi thích nghi để sống ở nhiều môi trường sống khác nhau; ở Algeria, chúng xuất hiện ở Địa Trung Hải, các vùng ven biển và đồi núi (bao gồm cả đất nông nghiệp có hàng rào, đất bụi rậm, rừng thông và rừng sồi), trong khi quần thể ở Senegal sinh sống ở các vùng khí hậu nhiệt đới, bán khô hạn bao gồm cả thảo nguyên Sahel. Quần thể ở Mali đã được ghi nhận ở các khối núi Sahel khô cằn. Ở Ai Cập, loài động vật châu Phi này sinh sống ở các vùng nông nghiệp, đất hoang, rìa sa mạc, vùng đá và vách đá. Ở Hồ Nasser, chúng sống gần bờ hồ.',
                    'habit_lifestyle_description' => 'Tổ chức xã hội của loài sói vàng châu Phi rất linh hoạt và khác nhau tùy theo nguồn thức ăn có sẵn. Cặp sinh sản là đơn vị cơ bản, cùng với con cái hiện tại của nó và có lẽ các thành viên của lứa trước ở lại làm "người giúp việc". Các nhóm lớn rất hiếm, chỉ được quan sát thấy ở những khu vực có nhiều chất thải của con người. Mối quan hệ trong các gia đình sói vàng châu Phi tương đối hòa bình. Những con sói sẽ nằm cạnh nhau và chải lông cho nhau. Chúng hoạt động nhiều hơn vào ban ngày. Những loài động vật này rất có tính lãnh thổ, với cặp đôi tuần tra và đánh dấu lãnh thổ của chúng cùng nhau. Cả hai đối tác, cũng như những người giúp đỡ chúng, sẽ có hành vi hung hăng đối với những kẻ xâm nhập, đặc biệt là những kẻ cùng giới tính. Các đối tác không giúp nhau đẩy lùi những kẻ xâm nhập là những kẻ khác giới. Sói vàng châu Phi thường xuyên chải lông cho nhau, đặc biệt là trong thời gian tán tỉnh, có thể kéo dài tới 30 phút. Khi chào hỏi, chúng cắn vào mặt và cổ của nhau. Khi chiến đấu, sói vàng châu Phi đập hông đối thủ, cắn và lắc vai. Tiếng kêu của chúng tương tự như tiếng chó nhà, với bảy âm thanh đã được ghi lại, bao gồm tiếng hú, tiếng sủa, tiếng gầm gừ, tiếng rên rỉ và tiếng cục tác. Có thể nhận ra các phân loài bằng sự khác biệt trong tiếng hú của chúng. Một trong những âm thanh thường nghe thấy nhất là tiếng hú cao, the thé, có ba loại; tiếng hú liên tục một âm dài, một tiếng hú lên và xuống, và một loạt tiếng hú ngắn, ngắt quãng. Những tiếng hú này được sử dụng để xua đuổi những kẻ xâm nhập và thu hút các thành viên trong gia đình. Sói vàng châu Phi cũng hú theo từng đàn; người ta cho rằng chúng làm như vậy để củng cố mối quan hệ gia đình và thiết lập địa vị lãnh thổ.',
                    'diet_nutrition_description' => 'Sói vàng châu Phi là loài ăn thịt và ăn xác thối. Chúng ăn những con mồi nhỏ, bao gồm thỏ rừng, chuột, máy cắt cỏ, sóc đất, rắn, thằn lằn và chim làm tổ trên mặt đất, chim francolin và chim booster. Chúng cũng ăn nhiều loại côn trùng, bao gồm bọ phân, mối, ấu trùng và châu chấu. Chúng cũng sẽ săn linh dương non, lợn bướu và linh dương duiker, và ăn xác động vật, trái cây và chất thải của con người.',
                    'mating_habit_description' => 'Sói châu Phi là loài chung thủy. Nghi lễ tán tỉnh của chúng cực kỳ dài, trong thời gian đó cặp đôi gần như luôn ở bên nhau. Trước khi giao phối, chúng tuần tra và đánh dấu lãnh thổ của mình bằng mùi hương. Sau thời gian mang thai khoảng 63 ngày, con cái sinh một lứa từ 1 đến 9 con. Ở Serengeti (ở Đông Phi), chó sói con được sinh ra vào tháng 12-tháng 1. Chúng bắt đầu ăn thức ăn rắn sau một tháng. Cai sữa bắt đầu ở độ tuổi 2 tháng và kết thúc ở tháng thứ 4. Khi đó, chó sói con có thể mạo hiểm đi xa hang tới 50 m, trở nên bán độc lập, đôi khi ngủ ngoài trời. Chó mẹ cho chó con ăn thường xuyên hơn chó bố hoặc chó giúp việc. Hành vi chơi đùa của chó con ngày càng trở nên hung dữ hơn khi chúng cạnh tranh thứ hạng, điều này được thiết lập sau 6 tháng.',
                    'mating_behavior' => 'Đơn phối ngẫu',
                    'reproduction_season' => 'Tháng 12-tháng 1 ở Serengeti (Đông Phi)',
                    'pregnancy_duration' => '63 ngày',
                    'baby_carrying' => '1-9 con',
                    'independent_age' => 'sau 6 tháng',
                    'population_threat' => 'Mối đe dọa chính đối với loài sói vàng châu Phi là mất môi trường sống. Khi dân số loài người tăng lên, điều này dẫn đến việc mở rộng đường sá, khu định cư và nông nghiệp, đe dọa loài này. Mất môi trường sống, loài sói vàng châu Phi xâm chiếm các khu định cư của con người, nơi mọi người coi chúng là mối nguy hiểm đối với gia súc và gia cầm, và giết chúng như loài gây hại.',
                    'population_number' => 'Sách đỏ IUCN và các nguồn khác không cung cấp số lượng tổng thể quần thể sói vàng châu Phi. Hiện tại, loài này được phân loại là loài ít quan tâm (LC) trong Sách đỏ IUCN nhưng số lượng của chúng hiện đang giảm dần.',
                    'ecological_niche' => 'Vì sói vàng châu Phi ăn rác và xác động vật nên chúng đóng vai trò rất quan trọng trong hệ sinh thái như loài ăn xác thối. Chúng cũng kiểm soát sự gia tăng số lượng loài gặm nhấm và côn trùng, tiêu thụ chúng như con mồi.',
                    'fun_fact' => 'Sói vàng châu Phi thường mang theo nhiều thức ăn hơn mức chúng có thể tiêu thụ và cất giấu phần thức ăn dư thừa, thường được phục hồi trong vòng 24 giờ.
Sói vàng châu Phi có thể bắt châu chấu và mối bay khi chúng đang ở trên không trung hoặc bằng cách lao vào chúng khi chúng đang ở trên mặt đất.
Sói vàng châu Phi cực kỳ không khoan nhượng với những loài ăn xác thối khác, chúng thống trị kền kền khi giết chết và một con sói có thể giữ hàng chục con kền kền ở lại bằng cách đe dọa, cắn và lao vào chúng.
Sói vàng châu Phi thường kiếm ăn cùng với linh cẩu đốm, mặc dù chúng sẽ bị đuổi nếu đến quá gần, linh cẩu đốm đôi khi cũng đi theo sói trong mùa linh dương đầu bò, vì sói rất hiệu quả trong việc theo dõi và bắt những con non.
Theo truyền thuyết dân gian Ai Cập Ả Rập, sói vàng châu Phi có thể khiến gà ngất xỉu vì sợ hãi chỉ bằng cách đi qua dưới ổ gà',
                    'top_speed' => '64',
                    'animal_length' => '90–100',
                    'animal_weight' => '7-15',
                    'animal_swing' => '',
                    'population_size' => 'Không xác định',
                    'avg_lifespan' => '8',
                    'animal_sound' => 'african_golden_wolf.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/iZKS5kzL6l4?si=KaPBs_dVYjsvufRs',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '2',
                    'diet_type_id' => '2',
                    'category_id' => '10',
                    'population_trending_id' => '1',
                ],
                [
                    'animal_name' => 'Cá Heo Sẫm Màu',
                    'animal_scientific_name' => 'Lagenorhynchus obscurus',
                    'animal_description' => 'Cá heo sẫm màu ( Lagenorhynchus obscurus ) là một loài cá heo được tìm thấy ở vùng nước ven biển ở Nam bán cầu. Tên gọi cụ thể của loài này là tiếng Latin có nghĩa là "tối" hoặc "mờ". Loài này có quan hệ di truyền rất gần với loài cá heo hông trắng Thái Bình Dương , nhưng sự đồng thuận khoa học hiện tại cho rằng chúng là những loài riêng biệt. Phạm vi phân bố của loài cá heo này không đồng đều, với các quần thể chính xung quanh Nam Mỹ , Tây Nam Châu Phi , New Zealand và nhiều đảo đại dương khác nhau, với một số lần nhìn thấy xung quanh miền Nam Úc và Tasmania . Cá heo sẫm màu thích các dòng nước mát và vùng nước ven bờ, nhưng cũng có thể được tìm thấy ngoài khơi. Chúng ăn nhiều loại cá và mực và có chiến thuật săn mồi linh hoạt. Cá heo sẫm màu được biết đến với những màn nhào lộn đáng kinh ngạc, có một số hành vi trên không. Tình trạng của loài cá heo này vẫn chưa được biết rõ, nhưng chúng thường bị bắt bằng lưới rê.',
                    'appearance_description' => 'Ban đầu được Charles Darwin đặt tên là cá heo Fitzroy, loài động vật này là một loài cá heo tương đối nhỏ và gọn gàng. Lưng và đuôi của cá heo Dusky có màu đen xanh sẫm, thể hiện một vệt đen, kéo dài theo đường chéo qua hai bên sườn đến đuôi. Loài động vật này là họ hàng gần của cá heo hông trắng Thái Bình Dương. Tuy nhiên, các nghiên cứu khoa học đã tìm thấy một số điểm khác biệt giữa hai loài này, cho phép phân loại chúng thành hai loài riêng biệt. Một trong những đặc điểm nhận dạng dễ nhất của cá heo Dusky là không có mỏ cũng như đầu dốc đều từ lỗ phun nước đến chóp mõm. Cả con đực và con cái đều có vây lưng, con đực cong hơn. Cả hai giới đều có kích thước gần như nhau.',
                    'geography_description' => 'Những con cá heo này xuất hiện ngoài khơi bờ biển Nam Mỹ (mặc dù chúng cũng được nhìn thấy gần Argentina và xung quanh Quần đảo Falkland), Tây Nam Châu Phi và New Zealand. Những con vật này thường sống ở vùng nước ôn đới ấm đến mát và có thể được tìm thấy ở các vùng ven biển.',
                    'habit_lifestyle_description' => 'Hành vi và thói quen của loài cá heo này phụ thuộc rất nhiều vào loài cũng như khu vực môi trường sống. Theo quy luật chung, cá heo Dusky thường ở gần bờ. Vào ban ngày, những con vật này nghỉ ngơi theo nhóm nhỏ từ 10 - 20 con. Vào lúc chạng vạng, chúng di chuyển theo nhóm này ra xa bờ để kiếm ăn, tụ tập thành từng đàn lớn lên đến 1.000 con cá heo, bao gồm cả con đực và con cái. Chúng thường săn mồi trong những nhóm lớn này, bao quanh đàn cá. Sau khi kiếm ăn, những loài động vật rất hòa đồng và thích đùa nghịch này thường được quan sát thấy đang chải chuốt và nhảy cùng nhau. Sau đó, chúng tập hợp lại thành những đàn nhỏ hơn, quay trở lại bờ biển, nơi chúng nghỉ ngơi. Những con cá heo này giao tiếp bằng tiếng kêu, tiếng huýt sáo, tiếng kêu lách cách và tiếng kêu chít chít, phát ra những tiếng kêu lớn, có thể nghe thấy từ khoảng cách lên tới 2 dặm, khi những con vật này ra khỏi nước.',
                    'diet_nutrition_description' => 'Là loài ăn thịt (ăn cá), cá heo sẫm màu tiêu thụ nhiều loại sinh vật thủy sinh, bao gồm mực, tôm, cá cơm và cá.',
                    'mating_habit_description' => 'Những con cá heo này có hệ thống giao phối đa thê (lăng nhăng). Thông thường, những con đực của loài này sẽ quyết liệt bảo vệ quyền giao phối của mình, cạnh tranh với nhau. Mùa giao phối diễn ra vào mùa xuân trong khi thời kỳ mang thai kéo dài 11 tháng, sinh ra một con duy nhất, thường là vào khoảng tháng 6 đến tháng 8. Cá cái cho con bú, cho đến khi, khi được khoảng 18 tháng tuổi, cá con học cách săn mồi cùng mẹ. Trong 3 năm đầu đời, cá heo con thường ở với mẹ, sau đó chúng rời khỏi cá cái, cá mẹ có thể giao phối lại. Khi rời đi, cá heo con sẽ tìm đàn riêng của mình với những con đực, thường gia nhập các nhóm độc thân. Chúng trưởng thành về mặt tình dục khi được khoảng 4 - 5 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Mùa xuân',
                    'pregnancy_duration' => '11 tháng',
                    'baby_carrying' => '1 con',
                    'independent_age' => '3 năm',
                    'population_threat' => 'Hiện nay, cá heo Dusky đang phải chịu ảnh hưởng nặng nề từ hoạt động đánh bắt thương mại, làm xáo trộn môi trường sống tự nhiên của chúng. Mặt khác, những con cá heo này cạnh tranh thức ăn với ngư dân (đặc biệt là cá sống theo đàn). Hơn nữa, chúng thường bị bắt bằng lưới lớn. Ở một số khu vực trong môi trường sống của chúng như Peru, những con cá heo này bị săn bắt để lấy thịt. Những con vật này cũng thường xuyên bị tàu thuyền đâm phải, gây ra những thương tích nghiêm trọng.',
                    'population_number' => 'Theo Sách đỏ IUCN, tổng quy mô quần thể của cá heo Dusky vẫn chưa được biết. Tuy nhiên, ước tính có quần thể loài này ở các khu vực sau: Bờ biển Patagonia - 7.252 cá thể; giữa Punta Ninfas và Cabo Blanco (Argentina) - 6.628 cá thể. Hiện tại, cá heo Dusky được phân loại là Thiếu dữ liệu (DD) trong Sách đỏ IUCN.',
                    'ecological_niche' => '',
                    'fun_fact' => 'Cá heo sẫm thải không khí và nước từ phổi qua một lỗ phun nước đặc biệt nằm trên đỉnh đầu, khi lặn chúng có thể ở dưới nước tới 90 giây.
Khi nhìn thấy thuyền, cá heo Dusky thường bơi tới gần để bám đuôi.
Những con cá heo này kiếm ăn cả ở bề mặt và dưới đáy nước - một yếu tố khiến chúng trở thành những thợ săn cực kỳ thành công, người ta đã quan sát thấy chúng săn mồi theo nhóm lên đến 300 cá thể, săn những đàn cá lớn hơn. Thỉnh thoảng chúng cũng có thể thay đổi kỹ thuật săn mồi. Khi săn mồi, chúng giao tiếp với nhau để đảm bảo chúng bắt đủ con mồi để cung cấp cho bản thân.
Trong thời gian cho con bú, con cái và con của chúng có thể được nhìn thấy ở những vùng nước nông, nơi chúng nghỉ ngơi, chăm sóc con cũng như bảo vệ con khỏi các mối đe dọa.
Theo quan điểm chung, con của cá heo Dusky không được sinh ra với kỹ năng nhào lộn, thay vào đó, chúng có được những khả năng này bằng cách quan sát màn trình diễn của cá heo trưởng thành',
                    'top_speed' => '37',
                    'animal_length' => '170-200',
                    'animal_weight' => '70–85',
                    'animal_swing' => '',
                    'population_size' => 'Không xác định',
                    'avg_lifespan' => '18-25',
                    'animal_sound' => 'dusky_dolphin.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/zJkwRcgTa7c?si=mXCoF-wII3QeTQw5',
                    'conservation_status_id' => '8',
                    'activity_time_id' => '1',
                    'diet_type_id' => '2',
                    'category_id' => '24',
                    'population_trending_id' => '3',
                ],
                [
                    'animal_name' => 'Cá Voi Sát Thủ',
                    'animal_scientific_name' => 'Orcinus orca',
                    'animal_description' => 'Cá voi sát thủ ( Orcinus orca ) là một loài cá voi có răng thuộc họ cá heo đại dương. Đây là thành viên lớn nhất của họ này. Các kỹ thuật săn mồi tinh vi và hành vi phát ra âm thanh của cá voi sát thủ đã được mô tả là biểu hiện của văn hóa động vật. Chúng xuất hiện nhiều trong thần thoại của các nền văn hóa bản địa và danh tiếng của chúng trong các nền văn hóa khác nhau dao động từ việc là linh hồn của con người đến những kẻ giết người tàn nhẫn.',
                    'appearance_description' => 'Cá voi sát thủ có thân dài, tròn với vây lưng lớn ở giữa lưng. Cơ thể của chúng có màu đen với các mảng trắng bên dưới và gần mắt. Những hoa văn đặc biệt này giúp chúng ngụy trang khi đi tìm thức ăn. Ở cá voi sơ sinh, các phần màu trắng trên cơ thể chúng có màu cam.',
                    'geography_description' => 'Cá voi sát thủ được coi là loài cá có tính toàn cầu và xuất hiện ở mọi đại dương, từ vùng Nam Cực và Bắc Cực đến các vùng biển nhiệt đới. Chúng cũng sinh sống ở nhiều vùng biển nội địa hoặc bán khép kín, chẳng hạn như Vịnh California, Vịnh Mexico, Địa Trung Hải, Vịnh Ả Rập và Biển Đỏ. Ở Nam Cực, cá voi sát thủ di chuyển đến rìa của lớp băng trôi và được cho là mạo hiểm vào lớp băng trôi dày đặc hơn, tìm kiếm những lối đi mở giống như cá voi trắng ở Bắc Cực. Tuy nhiên, chúng chỉ là những du khách theo mùa đến vùng biển Bắc Cực và không đến gần lớp băng trôi vào mùa hè. Chúng thường thích vùng nước sâu từ 20 đến 60 mét, nhưng cũng di chuyển qua vùng nước nông dọc theo bờ biển. Các mô hình di cư của cá voi sát thủ vẫn chưa được hiểu rõ. Mỗi mùa hè, những cá thể giống nhau lại xuất hiện ngoài khơi bờ biển British Columbia và Washington. Mặc dù đã có nhiều thập kỷ nghiên cứu, nhưng vẫn chưa biết loài động vật này đi đâu trong phần còn lại của năm. Người ta đã nhìn thấy những đàn cá voi sát thủ di cư từ miền nam Alaska đến miền trung California.',
                    'habit_lifestyle_description' => 'Cá voi sát thủ là loài động vật có tính xã hội cao; chúng hoạt động vào ban ngày và ngủ vào ban đêm. Chúng di chuyển theo đàn từ 3 đến 50 cá thể, do con cái dẫn đầu. Chúng thiết lập hệ thống phân cấp xã hội. Các cá thể trong đàn thường có quan hệ họ hàng với nhau và bao gồm khoảng 20% ​​con đực trưởng thành và 20% bê con, phần còn lại là con cái và con đực non. Chúng phân tán hạn chế khỏi đàn mẹ. Cá voi sát thủ có thể chia sẻ con mồi và hiếm khi rời đàn quá vài giờ. Các thành viên trong đàn học các kỹ năng thông qua quá trình học nghề, chẳng hạn như săn mồi và nuôi con. Cá voi sát thủ đôi khi được gọi là "sói biển", vì chúng săn mồi theo nhóm như bầy sói. Chúng dành phần lớn thời gian ở độ sâu nông, nhưng thỉnh thoảng lặn xuống vài trăm mét tùy thuộc vào con mồi. Cá voi sát thủ dành cả ngày để kiếm ăn, di chuyển, nghỉ ngơi và giao lưu. Chúng thường tham gia vào các hành vi trên mặt nước như nhảy lên khỏi mặt nước (nhảy hẳn ra khỏi mặt nước) và vỗ đuôi. Những hoạt động này có thể có nhiều mục đích khác nhau, chẳng hạn như tán tỉnh, giao tiếp, xua đuổi ký sinh trùng hoặc chơi đùa. Cá voi sát thủ là loài động vật rất hay kêu và giao tiếp với nhau bằng cách huýt sáo và nhấp chuột thông qua định vị bằng tiếng vang, và thông qua hành vi vật lý như nhảy lên khỏi mặt nước, vỗ đuôi hoặc vây, và nhảy do thám, khi chúng ngẩng đầu lên khỏi mặt nước để quan sát xung quanh.',
                    'diet_nutrition_description' => 'Cá voi sát thủ là loài săn mồi đỉnh cao và đứng đầu chuỗi thức ăn. Chúng săn nhiều loại con mồi lớn bao gồm hải cẩu, cá voi và cá heo nhỏ hơn, sư tử biển, các loại cá khác nhau, cá mập, mực, bạch tuộc, chim biển, rùa biển, rái cá biển và rái cá sông.',
                    'mating_habit_description' => 'Cá voi sát thủ là loài đa thê (lăng nhăng), cả con đực và con cái đều có nhiều bạn tình trong suốt mùa sinh sản. Chúng không giao phối trong đàn của mình mà với những cá thể từ đàn khác. Giao phối diễn ra bất cứ lúc nào trong năm, thường là vào mùa hè. Sau thời gian mang thai từ 15-18 tháng, con cái sẽ sinh một con non. Cá voi con sẽ bú sữa mẹ trong vòng 2 năm, nhưng khi được 12 tháng sẽ bắt đầu ăn thức ăn rắn. Cá voi mẹ dạy con mình cách săn mồi và đưa chúng vào mạng lưới xã hội của đàn. Cá voi con ở lại với đàn của mình sau khi chúng giành được sự độc lập. Cá cái trưởng thành về mặt sinh sản khi chúng được 15 tuổi và sẽ sinh con một lần sau mỗi 5 năm cho đến khi 40 tuổi. Cá đực đạt đến độ tuổi trưởng thành về mặt sinh sản khi chúng khoảng 15 tuổi, nhưng thường không sinh sản cho đến khi 21 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm, thường là vào mùa hè',
                    'pregnancy_duration' => '15-18 tháng',
                    'baby_carrying' => '1 con',
                    'independent_age' => '2 năm',
                    'population_threat' => 'Mối đe dọa lớn nhất đối với loài cá voi này đến từ sự suy thoái và xáo trộn môi trường sống của chúng. Là loài đứng đầu chuỗi thức ăn, cá voi sát thủ dễ bị tổn thương do các chất gây ô nhiễm tích tụ trong mô của chúng, chẳng hạn như hàm lượng PCB (polychlorinated biphenyls) cao được tìm thấy trong một số quần thể, có khả năng gây ra những tác động tiêu cực đến khả năng sinh sản và sự sống còn của chúng. Sự cố tràn dầu trên diện rộng có thể ảnh hưởng đến những loài động vật này, trực tiếp hoặc gián tiếp, vì nó làm giảm số lượng con mồi của chúng. Sự xáo trộn do tàu thuyền và các tiếng ồn dưới nước khác do con người gây ra có thể ảnh hưởng đến hành vi của chúng, làm gián đoạn tiếng gọi xã hội và định vị bằng tiếng vang, và ảnh hưởng đến khả năng kiếm ăn hiệu quả của cá voi sát thủ ở những nơi mà hoạt động ngắm cá voi ngày càng phổ biến. Giao thông bằng tàu thuyền cũng làm tăng nguy cơ bị thương do va chạm.',
                    'population_number' => 'Theo Sách đỏ IUCN, quần thể cá voi sát thủ trên toàn thế giới ước tính vào khoảng 50.000 con. Loài này hiện được phân loại là Thiếu dữ liệu (DD) trong danh sách các loài bị đe dọa của IUCN.',
                    'ecological_niche' => '',
                    'fun_fact' => 'Cá voi sát thủ thường không tấn công con người, nhưng chúng có tên này vì khả năng hạ gục các loài động vật lớn, chẳng hạn như cá voi khác và sư tử biển, chúng sẽ săn bắt hầu hết mọi loài động vật dưới biển, trên không trung phía trên chúng hoặc dọc theo bờ biển.
Người La Mã đặt tên cho loài cá voi này là "cá voi sát thủ" và cái tên này đã trở nên phổ biến trong những năm qua.
Khi cá voi sát thủ mới sinh, chúng có vây lưng mềm dẻo, nhưng sẽ cứng dần khi chúng lớn lên.
Vào những năm 1960, cá voi sát thủ đã có màn ra mắt ấn tượng trong các chương trình biểu diễn trên biển.
Những bộ phim nổi tiếng nhất có sự góp mặt của cá voi sát thủ bao gồm Happy Feet, Free Willy và Namu: The Killer whale.
Loài cá voi này có bộ não lớn thứ hai trong số tất cả các loài động vật có vú sống ở biển và chỉ đứng sau cá nhà táng, loài có bộ não lớn nhất trong số các loài động vật còn sống',
                    'top_speed' => '45',
                    'animal_length' => '600-900',
                    'animal_weight' => '3000–6000',
                    'animal_swing' => '',
                    'population_size' => '50.000',
                    'avg_lifespan' => '30-100',
                    'animal_sound' => 'kill_whale.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/fs8ZveNZQ8g?si=pRIJklZ7gaoAIEPG',
                    'conservation_status_id' => '8',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'category_id' => '24',
                    'population_trending_id' => '3',
                ],
                [
                    'animal_name' => 'Voi Châu Á',
                    'animal_scientific_name' => 'Elephas maximus',
                    'animal_description' => 'Voi châu Á ( Elephas maximus ) là một trong ba loài voi hoặc họ voi còn sống duy nhất trên thế giới, hai loài còn lại là voi bụi rậm châu Phi và voi rừng châu Phi . Voi châu Á là loài động vật trên cạn lớn nhất còn sống ở châu Á .',
                    'appearance_description' => 'Nhìn chung, voi châu Á nhỏ hơn voi bụi rậm châu Phi và có điểm cơ thể cao nhất trên đầu. Vòi đặc trưng của loài động vật này là phần kéo dài của mũi và môi trên kết hợp; lỗ mũi nằm ở đầu, có một nhánh giống như ngón tay. Vòi chứa tới 60.000 cơ, bao gồm các bộ dọc và tỏa ra. Voi sử dụng vòi để thở, uống nước, ăn, chạm, phủi bụi, tạo ra âm thanh và giao tiếp, tắm rửa, véo, nắm bắt, phòng thủ và tấn công. Ngà dùng để đào nước, muối và đá, để lột vỏ và nhổ rễ cây, làm đòn bẩy để điều khiển cây và cành cây đổ, để làm việc, để trưng bày, để đánh dấu cây, làm vũ khí tấn công và phòng thủ, làm chỗ tựa vòi và để bảo vệ vòi. Voi được biết là có ngà phải hoặc trái. Màu da của voi châu Á thường là xám và có thể bị che khuất bởi đất do phủi bụi và lăn lộn. Da nhăn nheo của chúng có thể cử động và chứa nhiều trung tâm thần kinh. Nó mịn hơn voi châu Phi và có thể mất sắc tố ở thân, tai hoặc cổ. Lớp biểu bì và lớp hạ bì của cơ thể dày trung bình 18 mm (0,71 in); da ở lưng dày 30 mm (1,2 in) giúp bảo vệ khỏi vết cắn, va chạm và thời tiết khắc nghiệt. Các nếp gấp của nó làm tăng diện tích bề mặt để tản nhiệt. Chúng có thể chịu lạnh tốt hơn là chịu nhiệt quá mức.',
                    'geography_description' => 'Voi châu Á sống trên một lãnh thổ rộng lớn, bao phủ bán đảo Hindustan và Đông Dương, đảo Borneo và nói chung là hầu hết Đông Nam Á. Môi trường sống của chúng bao gồm đồng bằng, rừng nhiệt đới, rừng thường xanh và bán thường xanh, rừng rụng lá ướt và khô, rừng gai cũng như đất canh tác.',
                    'habit_lifestyle_description' => 'Những con voi này là loài động vật có vú rất giỏi giao tiếp. Theo quy luật chung, chúng sống theo bầy đàn, bao gồm hơn 20 con cái. Con cái lớn tuổi nhất dẫn đầu đàn trong các tuyến đường di chuyển, tìm kiếm thức ăn và nguồn nước. Đôi khi đàn có thể chia thành các nhóm nhỏ hơn. Ngược lại, voi đực sống đơn độc. Tuy nhiên, thỉnh thoảng, chúng gửi và nhận thông điệp từ đàn qua những khoảng cách rất xa bằng âm thanh tần số cao, mà tai người không thể nghe được. Voi châu Á hoàn toàn không có lãnh thổ. Những loài động vật này hoạt động vào ban ngày và chạng vạng. Chúng ăn và đi bộ vào lúc chạng vạng và xuống núi trong khi hoàn toàn thụ động trong cái nóng ban ngày. Nguồn nước uống đáng tin cậy là điều kiện sống bắt buộc đối với voi vì chúng uống không dưới một lần một ngày.',
                    'diet_nutrition_description' => 'Voi châu Á là loài ăn cỏ (ăn lá, ăn gỗ, ăn cỏ). Các thành phần chính trong chế độ ăn uống thông thường của chúng là cỏ, lá, rễ, vỏ cây và bụi cây.',
                    'mating_habit_description' => 'Voi châu Á là loài đa thê, nghĩa là một con voi đực có thể giao phối với nhiều con voi cái. Trước khi giao phối, con đực sẽ đánh nhau để tìm ra con đực thống trị (con sẽ giao phối với nhóm voi cái). Voi châu Á giao phối quanh năm, không phụ thuộc vào mùa nào trong năm. Trong điều kiện thuận lợi, một con voi cái có thể sinh con sau mỗi 3-4 năm. Thời kỳ mang thai kéo dài khá dài, 18-22 tháng, sau đó chỉ sinh một con. Con non bú sữa mẹ cũng như những con voi cái đang cho con bú khác nếu cần. Vài tháng sau, con non sẽ bổ sung thêm cỏ vào chế độ ăn hàng ngày của mình trong khi vẫn tiếp tục ăn sữa mẹ trong vòng 1,5 năm. Ngay cả sau khi cai sữa, voi mẹ vẫn tiếp tục chăm sóc và bảo vệ con non. Voi con đạt đến độ tuổi trưởng thành về mặt sinh sản khi khoảng 14 tuổi. Tuy nhiên, điều này không dễ dàng đối với con đực; chúng chỉ được phép giao phối khi có thể thống trị những con đực khác trong khu vực.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm',
                    'pregnancy_duration' => '18-22 tháng',
                    'baby_carrying' => '1 con',
                    'independent_age' => '18 tháng',
                    'population_threat' => 'Các mối đe dọa chủ yếu liên quan đến hoạt động của con người. Từ thời xa xưa, những loài động vật này đã bị săn bắt và giết hại với số lượng lớn, như một nguồn thức ăn, và sau đó là ngà voi. Việc săn bắt ngà voi vẫn tiếp tục cho đến ngày nay, là mối đe dọa đáng chú ý đối với toàn bộ quần thể voi châu Á. Nạn phá rừng và các hoạt động nông nghiệp nằm trong số các mối đe dọa, dẫn đến việc thu hẹp môi trường sống của loài voi.',
                    'population_number' => 'Sách đỏ IUCN cho biết số lượng ước tính chính thức của loài voi châu Á hiện là 41.410-52.345 cá thể. Nếu liệt kê theo quốc gia, đứng đầu là Ấn Độ với 26.390-30.770 cá thể trên khắp cả nước. Sau đó là Myanmar (4.000-5.000) và Sri Lanka (2.500-4.000). Các quốc gia khác có số lượng voi châu Á lớn tương đương là Indonesia (2.400-3.400), Thái Lan (2.500-3.200), Malaysia (2.100-3.100), Lào (500-1.000), Campuchia (250-600), Bhutan (250-500), Trung Quốc (200-250), Bangladesh (150-250), Việt Nam (70-150) và Nepal (100-125). Khoảng 13.000 cá thể được thuần hóa, chủ yếu làm việc trong lĩnh vực giải trí. ICUN Red Lit xếp loại voi châu Á vào nhóm Nguy cấp (EN) với xu hướng quần thể đang giảm dần.',
                    'ecological_niche' => 'Voi châu Á có tác động rất lớn đến hệ sinh thái của môi trường sống của chúng. Chúng biến một số khu vực rừng thành đồng cỏ và phát tán hạt giống. Hơn nữa, đã có những trường hợp voi đào hố ở lòng sông khô cạn để lấy nước cho các loài khác. Khi voi đi qua rừng, chúng mở ra những con đường rộng, giúp ngăn chặn sự lan rộng của cháy rừng.',
                    'fun_fact' => 'Không chỉ voi ​​mẹ có trách nhiệm chăm sóc và bảo vệ voi con mà những con voi cái khác trong đàn (gọi là dì) cũng có trách nhiệm này.
Voi có thể hát! Chúng sử dụng tần số siêu âm cực thấp mà tai người không thể nghe thấy, chúng hát khi muốn giữ đàn của mình ở cùng nhau và tìm bạn tình.
Voi dành phần lớn thời gian trong ngày (16 giờ) để ăn, ngoài ra, một con voi trung bình uống tới 40-50 gallon nước mỗi ngày.
Thời gian ngủ của chúng chỉ có 2 giờ mỗi ngày.
Chúng thích chuối! Hơn nữa, trước khi ăn, chúng còn lột vỏ chuối cũng như ngô và các loại thực phẩm khác.
Nước là thành phần quan trọng trong cuộc sống của loài voi, chúng không chỉ uống nước: chúng bơi, chơi đùa trong nước và đổ nước lên người nhau.
Không giống như hầu hết các loài động vật khác, voi dùng vòi để uống nước, chúng hút nước vào vòi và phun vào miệng',
                    'top_speed' => '43',
                    'animal_length' => '550-650',
                    'animal_weight' => '2700-4000',
                    'animal_swing' => '',
                    'population_size' => '41.000-52.000',
                    'avg_lifespan' => '70',
                    'animal_sound' => 'asian_elephant.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/Mxe4Z7P74vs?si=GxCVB8JbyV5FYDaq',
                    'conservation_status_id' => '4',
                    'activity_time_id' => '1',
                    'diet_type_id' => '1',
                    'category_id' => '51',
                    'population_trending_id' => '4',
                ],
                [
                    'animal_name' => 'Gấu Bắc Cực',
                    'animal_scientific_name' => 'Ursus maritimus',
                    'animal_description' => 'Gấu Bắc Cực ( Ursus maritimus ) là loài gấu ăn thịt cực độ được tìm thấy trong Vòng Bắc Cực, bao gồm Bắc Băng Dương , các vùng biển xung quanh và các khối đất liền xung quanh. Đây là loài gấu lớn nhất còn tồn tại, cũng như là loài ăn thịt lớn nhất còn tồn tại trên cạn. Mặc dù là loài chị em với gấu Nâu , nhưng chúng đã tiến hóa để chiếm một hốc sinh thái hẹp hơn, với nhiều đặc điểm cơ thể thích nghi với nhiệt độ lạnh, để di chuyển qua tuyết, băng và vùng nước rộng, và để săn hải cẩu , tạo nên phần lớn chế độ ăn của chúng. Mặc dù hầu hết gấu Bắc Cực được sinh ra trên cạn, nhưng chúng dành phần lớn thời gian trên băng biển. Tên khoa học của chúng có nghĩa là "gấu biển" và bắt nguồn từ thực tế này. Do phụ thuộc vào băng biển, gấu Bắc Cực được phân loại là động vật có vú biển. Trong hàng ngàn năm, gấu Bắc Cực là nhân vật chủ chốt trong đời sống vật chất, tinh thần và văn hóa của người dân quanh cực, và những chú gấu này vẫn quan trọng trong nền văn hóa của họ. Trong lịch sử, gấu Bắc Cực cũng được gọi là "gấu trắng". Đôi khi nó còn được gọi là "nanook", dựa trên thuật ngữ nanuq của người Inuit .',
                    'appearance_description' => 'Gấu Bắc Cực là một trong số ít loài động vật có vú lớn có thể thích nghi tốt với cuộc sống trên băng. Bộ lông của chúng bao gồm một lớp lông tơ dày và một lớp lông bảo vệ bên ngoài, có màu từ trắng đến nâu rám nắng nhưng thực chất là trong suốt. Bộ lông màu trắng thường chuyển sang màu vàng theo tuổi tác. Bàn chân của những loài động vật khổng lồ này rất lớn để phân bổ tải khi đi trên tuyết hoặc băng mỏng và để tạo lực đẩy khi bơi; chúng có thể dài tới 30 cm (12 inch) ở một con trưởng thành. Các miếng đệm của bàn chân được bao phủ bởi các gai nhỏ, mềm (các cục da), tạo lực kéo trên băng. Các móng vuốt được khoét sâu ở mặt dưới để hỗ trợ đào sâu vào lớp băng của môi trường sống tự nhiên.',
                    'geography_description' => 'Gấu Bắc Cực được tìm thấy ở Vòng Bắc Cực và các khối đất liền kề xa về phía nam như Newfoundland. Mặc dù chúng hiếm khi xuất hiện ở phía bắc vĩ độ 88°, nhưng có bằng chứng cho thấy chúng phân bố khắp Bắc Cực và xa về phía nam như Vịnh James ở Canada. Phạm vi phân bố của chúng bao gồm lãnh thổ của năm quốc gia: Đan Mạch (Greenland), Na Uy (Svalbard), Nga, Hoa Kỳ (Alaska) và Canada. Gấu Bắc Cực thích sống trên lớp băng biển hàng năm bao phủ vùng nước trên thềm lục địa và quần đảo liên đảo Bắc Cực. Những khu vực này, được gọi là "vành đai sự sống Bắc Cực", có năng suất sinh học cao so với vùng nước sâu của Bắc Cực cao. Gấu Bắc Cực thường xuyên lui tới những khu vực mà băng biển gặp nước, chẳng hạn như các khe nứt và khe nứt (những vùng nước mở tạm thời trong băng Bắc Cực), để săn hải cẩu, đây là nguồn thức ăn chính của chúng.',
                    'habit_lifestyle_description' => 'Gấu Bắc Cực sống đơn độc. Chúng có thể cạnh tranh với nhau khi có cơ hội kiếm ăn khi một con hải cẩu bị giết. Trong những trường hợp như vậy, con gấu nhỏ hơn thường bỏ chạy. Gấu Bắc Cực có thể lặn xuống nước để bắt con mồi, mở mắt trong khi nín thở tới 2 phút. Chúng không hoạt động trong phần lớn thời gian, nằm, ngủ hoặc chờ đợi (vẫn săn mồi). Phần thời gian còn lại thường dành cho việc di chuyển, đi bộ hoặc bơi, kiếm ăn hoặc rình rập con mồi. Chúng có thể di chuyển xa để tìm kiếm thức ăn. Gấu Bắc Cực thường im lặng nhưng giao tiếp bằng nhiều âm thanh và giọng nói khác nhau. Gấu cái giao tiếp với con non bằng tiếng rên rỉ và tiếng khịt mũi, và tiếng kêu đau khổ của cả gấu con và gấu con chưa trưởng thành đều là tiếng kêu be be. Gấu con có thể ngân nga trong khi bú. Khi lo lắng, gấu sẽ thở hổn hển, khịt mũi và khịt mũi trong khi tiếng rít, tiếng gầm gừ và tiếng gầm là dấu hiệu của sự hung dữ. Giao tiếp bằng hóa chất cũng có thể quan trọng: gấu để lại mùi hương trên đường đi của chúng, cho phép các cá thể theo dõi nhau trong vùng hoang dã rộng lớn của Bắc Cực.',
                    'diet_nutrition_description' => 'Hầu hết thức ăn của gấu Bắc Cực là mỡ và lông của hải cẩu đeo nhẫn. Chúng thường để lại phần xác còn lại, trở thành nguồn thức ăn quan trọng cho các loài động vật khác. Chúng cũng ăn chim, cá, quả mọng, tuần lộc và đôi khi là cả hải mã. Xác hải mã, hải cẩu và thậm chí cả cá voi có thể cung cấp nguồn thức ăn thường xuyên cho gấu Bắc Cực. Đôi khi chúng đột nhập vào hang hải cẩu dưới lòng đất để săn những chú hải cẩu con bên trong.',
                    'mating_habit_description' => 'Gấu Bắc Cực là loài đa thê và không tạo thành cặp. Việc tán tỉnh và giao phối diễn ra trên băng biển vào tháng 4 và tháng 5, khi chúng tụ tập ở những khu vực săn hải cẩu tốt nhất. Một con đực có thể theo dấu vết của một con cái đang sinh sản trong 100 km (60 dặm) trở lên và sau khi tìm thấy con cái, chúng sẽ tham gia vào cuộc chiến dữ dội với những con đực khác để giành quyền giao phối; các cuộc chiến thường dẫn đến sẹo và răng bị gãy. Sau khi giao phối, trứng đã thụ tinh vẫn ở trạng thái lơ lửng cho đến tháng 8 hoặc tháng 9. Khi các tảng băng trôi ở mức tối thiểu vào mùa thu, chấm dứt khả năng săn mồi, mỗi con cái mang thai sẽ đào một hang sinh sản bao gồm một đường hầm hẹp dẫn đến một đến ba khoang. Trong hang, nó sẽ ngủ đông tương tự như ngủ đông. Từ tháng 11 đến tháng 2, những chú gấu con được sinh ra trong tình trạng mù, được bao phủ bởi lớp lông tơ mỏng và nặng dưới 0,9 kg (2,0 lb). Trung bình, mỗi lứa có 2 con non. Gia đình gấu mẹ ở trong hang cho đến giữa tháng 2 đến giữa tháng 4, nuôi con bằng sữa giàu chất béo. Vào thời điểm mẹ phá vỡ lối vào hang, đàn con của nó nặng khoảng 10 đến 15 kg (22 đến 33 lb). Trong khoảng 12 đến 15 ngày, gia đình dành thời gian bên ngoài hang trong khi vẫn ở gần hang; chúng gặm cỏ trong khi đàn con quen với việc đi bộ và chơi đùa. Sau đó, chúng bắt đầu đi bộ đường dài từ khu vực hang đến băng biển, nơi mẹ có thể một lần nữa bắt hải cẩu. Những con non thường ở với mẹ của chúng trong 2 đến 3 năm. Con cái bắt đầu sinh sản ở độ tuổi 4 tuổi ở hầu hết các khu vực và 5 tuổi ở khu vực Biển Beaufort. Con đực thường đạt đến độ tuổi trưởng thành sinh sản ở tuổi 6; tuy nhiên, vì sự cạnh tranh giành con cái rất khốc liệt, nhiều con không sinh sản cho đến khi 8 hoặc 10 tuổi.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Tháng 4-tháng 5',
                    'pregnancy_duration' => '195 đến 265 ngày',
                    'baby_carrying' => '2 con',
                    'independent_age' => '2-3 năm',
                    'population_threat' => 'Gấu Bắc Cực vẫn bị người dân bản địa Bắc Cực săn bắt để lấy lông và thịt. Chúng cũng bị đe dọa bởi hoạt động khoan tìm khí đốt và dầu, hoạt động vận chuyển gia tăng và ô nhiễm từ hóa chất công nghiệp. Nhưng mối đe dọa lớn nhất là biến đổi khí hậu và sự nóng lên toàn cầu khiến băng biển tan chảy sớm hơn trong năm và buộc gấu phải lên bờ trước khi chúng tích lũy đủ lượng mỡ dự trữ để sống sót qua giai đoạn khan hiếm thức ăn. Người ta cho rằng gấu Bắc Cực có thể tuyệt chủng ngoài tự nhiên trong vòng 30 năm tới.',
                    'population_number' => 'Theo IUCN, tính đến năm 2010, ước tính có khoảng 22.000 đến 31.000 con gấu Bắc Cực đang lang thang gần Bắc Cực, phần lớn ở miền bắc Canada. Hiện tại, loài này được phân loại là loài dễ bị tổn thương (VU) trong Sách đỏ IUCN.',
                    'ecological_niche' => 'Gấu Bắc Cực là loài ăn thịt hàng đầu ở Bắc Cực. Xác hải cẩu do gấu để lại có thể là nguồn thức ăn quan trọng cho những con gấu và cáo Bắc Cực trẻ hơn, ít kinh nghiệm hơn',
                    'fun_fact' => 'Gấu Bắc Cực là động vật có vú biển vì chúng dành nhiều tháng trong năm ở biển. tuy nhiên, chúng là loài động vật có vú biển duy nhất còn sống có chân tay và bàn chân to khỏe cho phép chúng đi bộ hàng km và chạy trên cạn.
Bộ lông của gấu Bắc Cực rỗng và phản chiếu ánh sáng, vì vậy nó không thực sự có màu trắng. Bộ lông của chúng cũng không thấm nước và nhờn, gấu có thể tự rũ mình khô sau khi bơi.
Gấu Bắc Cực có khứu giác cực kỳ phát triển, có thể phát hiện hải cẩu cách xa gần 1,6 km (1 dặm) và bị chôn vùi dưới 1 m (3 ft) tuyết, thính giác của chúng nhạy bén như thính giác của con người, và thị lực của chúng cũng tốt ở khoảng cách xa.
Gấu Bắc Cực là loài bơi lội tuyệt vời và thường bơi trong nhiều ngày, với lớp mỡ trên cơ thể giúp chúng nổi, loài gấu này bơi theo kiểu chèo thuyền chó bằng cách sử dụng bàn chân trước lớn để đẩy, gấu Bắc Cực có thể bơi với tốc độ 10 km/h (6 dặm/giờ), khi đi bộ, chúng có xu hướng đi chậm chạp và duy trì tốc độ trung bình khoảng 5,6 km/h (3,5 dặm/giờ), khi chạy nước rút, chúng có thể đạt tới tốc độ 40 km/h (25 dặm/giờ)!
Gấu Bắc Cực cái thích xây hang bằng "tuyết cũ" từ những năm trước thay vì tuyết mới rơi.
Gấu Bắc Cực cái được biết đến là những bà mẹ rất tốt và có thể nhận nuôi những con gấu con khác.
Một con gấu Bắc Cực đủ mạnh để giết chết một con vật chỉ bằng một cú đá bằng chân.
Khi cuộn tròn, gấu có thể đặt một bàn chân lên mõm để giúp giữ nhiệt',
                    'top_speed' => '40',
                    'animal_length' => '180-250',
                    'animal_weight' => '150-800',
                    'animal_swing' => '',
                    'population_size' => '22.000-31.000',
                    'avg_lifespan' => '25-30',
                    'animal_sound' => 'polar_bear.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/zNO0kxTClYo?si=-2P05vgB_LWr6pjK',
                    'conservation_status_id' => '3',
                    'activity_time_id' => '3',
                    'diet_type_id' => '2',
                    'category_id' => '15',
                    'population_trending_id' => '2',
                ],
                [
                    'animal_name' => 'Chuột Túi Đỏ',
                    'animal_scientific_name' => 'Osphranter rufus',
                    'animal_description' => 'Chuột túi đỏ ( Osphranter rufus ) là loài chuột túi lớn nhất, là loài động vật có vú trên cạn lớn nhất có nguồn gốc từ Úc và là loài thú có túi lớn nhất còn tồn tại . Đây là biểu tượng của Úc và giống như tất cả các loài động vật hoang dã khác của Úc, chuột túi đỏ được pháp luật bảo vệ.',
                    'appearance_description' => 'Chuột túi đỏ có đôi tai dài, nhọn và mõm hình vuông. Con đực có bộ lông ngắn, màu nâu đỏ, chuyển sang màu vàng nhạt ở phía dưới và trên các chi. Con cái nhỏ hơn con đực và có màu xám xanh với một chút nâu, và màu xám nhạt ở phía dưới, mặc dù con cái ở vùng khô cằn có màu giống con đực hơn. Chuột túi đỏ có hai chi trước với móng vuốt nhỏ, hai chi sau cơ bắp, được sử dụng để nhảy và một cái đuôi khỏe thường được sử dụng để tạo thành chân máy khi đứng thẳng. Chuột túi đỏ duy trì nhiệt độ bên trong ở mức cân bằng nội môi khoảng 36 °C (97 °F) bằng cách sử dụng nhiều cách thích nghi về mặt vật lý, sinh lý và hành vi. Những điều này bao gồm có một lớp lông cách nhiệt, ít hoạt động hơn và ở trong bóng râm khi nhiệt độ cao, thở hổn hển, đổ mồ hôi và liếm chân trước của nó.',
                    'geography_description' => 'Chuột túi đỏ sinh sống ở các vùng đất khô cằn của lục địa Úc, ngoại trừ cực bắc và cực tây nam của đất nước, và bờ biển phía đông. Chúng có thể được tìm thấy ở các môi trường sống bụi rậm, đồng cỏ và sa mạc. Chúng thích môi trường sống thoáng đãng với một số cây để tạo bóng râm.',
                    'habit_lifestyle_description' => 'Chuột túi đỏ tụ tập thành từng nhóm nhỏ khoảng 10 con, được gọi là "bầy đàn". Các nhóm này chủ yếu bao gồm con cái và con non, với một hoặc một vài con đực. Con cái ở trong bầy đàn mà chúng được sinh ra. Thỉnh thoảng, một số lượng lớn những con chuột túi này tụ tập ở nơi có thức ăn tuyệt vời, đôi khi lên tới 1.500 cá thể. Chúng chủ yếu hoạt động vào lúc chạng vạng và ban đêm, nghỉ ngơi vào ban ngày trong bóng râm - nhưng đôi khi chúng di chuyển xung quanh vào ban ngày. Chúng dành phần lớn thời gian hoạt động của mình để gặm cỏ. Khi gặm cỏ theo bầy, chúng luôn để ý đến nguy hiểm và chúng cảnh báo những con khác bằng cách dậm chân. Khi thấy dấu hiệu này, những con chuột túi con sẽ nhảy trở lại túi của mẹ để được an toàn. Chuột túi đỏ cũng là loài bơi lội giỏi và thường chạy trốn vào đường thủy nếu bị động vật ăn thịt đe dọa. Nếu bị đuổi xuống nước, chúng có thể sử dụng chân trước để giữ kẻ săn mồi dưới nước để làm nó chết đuối.',
                    'diet_nutrition_description' => 'Chuột túi đỏ là loài ăn cỏ (folivores) và chỉ ăn thực vật, thích các loại cỏ xanh, chẳng hạn như cây có hoa, cây thân thảo và cỏ. Chúng có thể sống trong thời gian dài mà không cần nước bằng cách ăn các loại cây mọng nước chứa đầy độ ẩm.',
                    'mating_habit_description' => 'Chuột túi đỏ là loài động vật đa thê, với những con đực cạnh tranh để giành cơ hội giao phối với nhiều con cái. Chúng sẽ cố gắng tiếp cận độc quyền với nhiều con cái, chủ động xua đuổi những con đực khác. Sự cạnh tranh như vậy đôi khi dẫn đến các trận đấu "đấm bốc", khi con đực đánh nhau bằng chân trước và đá ra bằng chân. Mùa sinh sản diễn ra quanh năm nếu điều kiện thuận lợi. Con cái thường sinh một con non duy nhất, sau thời gian mang thai khoảng 32 đến 34 ngày. Khi được sinh ra, con non trèo lên qua lớp lông của mẹ và vào túi của mẹ, nơi nó ở lại, gắn chặt vào núm vú trong 70 ngày. Lần đầu tiên nó thò đầu ra khỏi túi sau 150 ngày, ra ngoài trong thời gian ngắn sau 190 ngày. Một con cái tiết sữa trong khoảng một năm, mang con non trong túi của mình trong khoảng 235 ngày. Những con cái non có thể sinh sản sớm nhất là 18 tháng tuổi và muộn nhất là 5 năm trong thời kỳ hạn hán, nhưng thông thường chúng phải được 2,5 tuổi mới bắt đầu sinh sản.',
                    'mating_behavior' => 'Đa thê',
                    'reproduction_season' => 'Quanh năm',
                    'pregnancy_duration' => '32-34 ngày',
                    'baby_carrying' => '1 con',
                    'independent_age' => '1 năm',
                    'population_threat' => 'Chuột túi đỏ không phải đối mặt với bất kỳ mối đe dọa lớn nào, và nó vẫn tiếp tục là một loài phong phú và phân bố rộng rãi. Nông nghiệp thâm canh sẽ ảnh hưởng đến loài này, nhưng cho đến nay, chưa có nhiều môi trường sống của nó bị ảnh hưởng. Tuy nhiên, một số người cho rằng sự cạnh tranh với thỏ và gia súc du nhập, đặc biệt là trong thời kỳ hạn hán, có thể là một mối đe dọa. Loài chuột túi này ở một số khu vực đông đến mức chúng bị săn bắt thương mại để lấy da và thịt, và đôi khi cũng bị bắn như một loài gây hại.',
                    'population_number' => 'Theo Bộ Môi trường của Chính phủ Úc, tổng số loài kangaroo đỏ là 11.514.298 cá thể. Số lượng loài này hiện nay ổn định và được phân loại là loài ít quan tâm (LC) trong Sách đỏ IUCN.',
                    'ecological_niche' => 'Chuột túi đỏ có vai trò quan trọng trong việc hình thành cộng đồng thực vật trong hệ sinh thái nơi chúng sinh sống do hoạt động ăn cỏ của chúng.',
                    'fun_fact' => 'Con đực được gọi là "boomers", con cái được gọi là "flyers" và con non được gọi là "joeys".
Kangaroo đỏ được đặt tên như vậy vì màu lông của chúng, màu đỏ thực chất là dầu màu đỏ xạ hương được tiết ra từ các tuyến trên da của chúng.
Một chú chuột túi có kích thước bằng một quả thạch đậu khi mới sinh.
Chuột túi đỏ có thể nhảy cao tới sáu feet (1,8 m) và nhảy xa tới 29 feet (8,8 m).
Trên cạn, kangaroo luôn đá hai chân sau cùng nhau, nhưng khi bơi dưới nước, chúng sẽ đá từng chân một cách độc lập.
Do vị trí của mắt, phạm vi thị lực của kangaroo đỏ là khoảng 300° (324° với khoảng 25° chồng lên nhau).
Kangaroo là loài động vật lớn duy nhất nhảy như phương pháp di chuyển chính của chúng, đây là phương tiện di chuyển nhanh và tiết kiệm năng lượng, cho phép chúng đi xa ở những nơi có ít nước và thức ăn.
Đôi khi, một con chuột túi sẽ nhảy đầu vào túi của mẹ nó nếu nó sợ hãi.
Số lượng Kangaroo nhiều hơn người dân ở Úc. Chúng là biểu tượng quốc gia của đất nước này và xuất hiện trên tiền xu, tem bưu chính và máy bay',
                    'top_speed' => '56',
                    'animal_length' => '85-160',
                    'animal_weight' => '18-90',
                    'animal_swing' => '',
                    'population_size' => '11.500.000',
                    'avg_lifespan' => '16-23',
                    'animal_sound' => 'red_kangaroo.mp3',
                    'animal_video' => 'https://www.youtube.com/embed/RwwgbVHE8Dk?si=6pWzCp8BLjRuQjlA',
                    'conservation_status_id' => '1',
                    'activity_time_id' => '1',
                    'diet_type_id' => '1',
                    'category_id' => '5',
                    'population_trending_id' => '3',
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
                    'image_name' => 'lion1.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'lion2.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'lion3.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'lion4.jpg',
                    'detail_id' => '1'
                ],
                [
                    'image_name' => 'cheetah.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'cheetah1.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'cheetah2.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'cheetah3.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'cheetah4.jpg',
                    'detail_id' => '2'
                ],
                [
                    'image_name' => 'crocodile.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'crocodile1.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'crocodile2.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'crocodile3.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'crocodile4.jpg',
                    'detail_id' => '3'
                ],
                [
                    'image_name' => 'eagle.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'eagle1.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'eagle2.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'eagle3.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'eagle4.jpg',
                    'detail_id' => '4'
                ],
                [
                    'image_name' => 'african_golden_wolf.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'african_golden_wolf1.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'african_golden_wolf2.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'african_golden_wolf3.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'african_golden_wolf4.jpg',
                    'detail_id' => '5'
                ],
                [
                    'image_name' => 'dusky_dolphin.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'dusky_dolphin1.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'dusky_dolphin2.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'dusky_dolphin3.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'dusky_dolphin4.jpg',
                    'detail_id' => '6'
                ],
                [
                    'image_name' => 'killer_whale.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'killer_whale1.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'killer_whale2.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'killer_whale3.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'killer_whale4.jpg',
                    'detail_id' => '7'
                ],
                [
                    'image_name' => 'asian_elephant.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'asian_elephant1.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'asian_elephant2.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'asian_elephant3.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'asian_elephant4.jpg',
                    'detail_id' => '8'
                ],
                [
                    'image_name' => 'polar_bear.jpg',
                    'detail_id' => '9'
                ],
                [
                    'image_name' => 'polar_bear1.jpg',
                    'detail_id' => '9'
                ],
                [
                    'image_name' => 'polar_bear2.jpg',
                    'detail_id' => '9'
                ],
                [
                    'image_name' => 'polar_bear3.jpg',
                    'detail_id' => '9'
                ],
                [
                    'image_name' => 'polar_bear4.jpg',
                    'detail_id' => '9'
                ],

                [
                    'image_name' => 'red_kangaroo.jpg',
                    'detail_id' => '10'
                ],
                [
                    'image_name' => 'red_kangaroo1.jpg',
                    'detail_id' => '10'
                ],
                [
                    'image_name' => 'red_kangaroo2.jpg',
                    'detail_id' => '10'
                ],
                [
                    'image_name' => 'red_kangaroo3.jpg',
                    'detail_id' => '10'
                ],
                [
                    'image_name' => 'pred_kangaroo4.jpg',
                    'detail_id' => '10'
                ],
            ]
        );
        DB::table('animal_between_area')->insert(
            [
                [
                    'animal_detail_id' => '1',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '1',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '2',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '2',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '3',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '4',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '4',
                    'area_id' => '1'
                ],
                [
                    'animal_detail_id' => '4',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '5',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '6',
                    'area_id' => '3'
                ]
                ,[
                    'animal_detail_id' => '6',
                    'area_id' => '4'
                ]
                ,[
                    'animal_detail_id' => '6',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '6',
                    'area_id' => '1'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '4'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '5'
                ],
                [
                    'animal_detail_id' => '7',
                    'area_id' => '6'
                ],
                [
                    'animal_detail_id' => '8',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '9',
                    'area_id' => '1'
                ],
                [
                    'animal_detail_id' => '9',
                    'area_id' => '2'
                ],
                [
                    'animal_detail_id' => '9',
                    'area_id' => '3'
                ],
                [
                    'animal_detail_id' => '10',
                    'area_id' => '6'
                ],
            ]
        );
        DB::table('animal_between_nation')->insert(
            [
                ['animal_detail_id' => '1', 'nation_id' => '5'],
                ['animal_detail_id' => '1', 'nation_id' => '19'],
                ['animal_detail_id' => '1', 'nation_id' => '23'],
                ['animal_detail_id' => '1', 'nation_id' => '27'],
                ['animal_detail_id' => '1', 'nation_id' => '31'],
                ['animal_detail_id' => '1', 'nation_id' => '33'],
                ['animal_detail_id' => '1', 'nation_id' => '56'],
                ['animal_detail_id' => '1', 'nation_id' => '75'],
                ['animal_detail_id' => '1', 'nation_id' => '86'],
                ['animal_detail_id' => '1', 'nation_id' => '101'],
                ['animal_detail_id' => '1', 'nation_id' => '116'],
                ['animal_detail_id' => '1', 'nation_id' => '118'],
                ['animal_detail_id' => '1', 'nation_id' => '124'],
                ['animal_detail_id' => '1', 'nation_id' => '150'],
                ['animal_detail_id' => '1', 'nation_id' => '158'],
                ['animal_detail_id' => '1', 'nation_id' => '159'],
                ['animal_detail_id' => '1', 'nation_id' => '160'],
                ['animal_detail_id' => '1', 'nation_id' => '163'],
                ['animal_detail_id' => '1', 'nation_id' => '55'],
                ['animal_detail_id' => '1', 'nation_id' => '170'],
                ['animal_detail_id' => '1', 'nation_id' => '180'],
                ['animal_detail_id' => '1', 'nation_id' => '192'],
                ['animal_detail_id' => '1', 'nation_id' => '193'],
                ['animal_detail_id' => '1', 'nation_id' => '64'],
                ['animal_detail_id' => '2', 'nation_id' => '3'],
                ['animal_detail_id' => '2', 'nation_id' => '5'],
                ['animal_detail_id' => '2', 'nation_id' => '19'],
                ['animal_detail_id' => '2', 'nation_id' => '23'],
                ['animal_detail_id' => '2', 'nation_id' => '27'],
                ['animal_detail_id' => '2', 'nation_id' => '33'],
                ['animal_detail_id' => '2', 'nation_id' => '34'],
                ['animal_detail_id' => '2', 'nation_id' => '77'],
                ['animal_detail_id' => '2', 'nation_id' => '86'],
                ['animal_detail_id' => '2', 'nation_id' => '104'],
                ['animal_detail_id' => '2', 'nation_id' => '116'],
                ['animal_detail_id' => '2', 'nation_id' => '124'],
                ['animal_detail_id' => '2', 'nation_id' => '159'],
                ['animal_detail_id' => '2', 'nation_id' => '160'],
                ['animal_detail_id' => '2', 'nation_id' => '170'],
                ['animal_detail_id' => '2', 'nation_id' => '180'],
                ['animal_detail_id' => '2', 'nation_id' => '192'],
                ['animal_detail_id' => '2', 'nation_id' => '193'],
                ['animal_detail_id' => '2', 'nation_id' => '53'],
                ['animal_detail_id' => '2', 'nation_id' => '55'],
                ['animal_detail_id' => '3', 'nation_id' => '5'],
                ['animal_detail_id' => '3', 'nation_id' => '19'],
                ['animal_detail_id' => '3', 'nation_id' => '23'],
                ['animal_detail_id' => '3', 'nation_id' => '27'],
                ['animal_detail_id' => '3', 'nation_id' => '28'],
                ['animal_detail_id' => '3', 'nation_id' => '31'],
                ['animal_detail_id' => '3', 'nation_id' => '33'],
                ['animal_detail_id' => '3', 'nation_id' => '24'],
                ['animal_detail_id' => '3', 'nation_id' => '39'],
                ['animal_detail_id' => '3', 'nation_id' => '50'],
                ['animal_detail_id' => '3', 'nation_id' => '52'],
                ['animal_detail_id' => '3', 'nation_id' => '53'],
                ['animal_detail_id' => '3', 'nation_id' => '56'],
                ['animal_detail_id' => '3', 'nation_id' => '60'],
                ['animal_detail_id' => '3', 'nation_id' => '61'],
                ['animal_detail_id' => '3', 'nation_id' => '64'],
                ['animal_detail_id' => '3', 'nation_id' => '68'],
                ['animal_detail_id' => '3', 'nation_id' => '69'],
                ['animal_detail_id' => '3', 'nation_id' => '86'],
                ['animal_detail_id' => '3', 'nation_id' => '95'],
                ['animal_detail_id' => '3', 'nation_id' => '100'],
                ['animal_detail_id' => '3', 'nation_id' => '101'],
                ['animal_detail_id' => '3', 'nation_id' => '104'],
                ['animal_detail_id' => '3', 'nation_id' => '107'],
                ['animal_detail_id' => '3', 'nation_id' => '116'],
                ['animal_detail_id' => '3', 'nation_id' => '118'],
                ['animal_detail_id' => '3', 'nation_id' => '124'],
                ['animal_detail_id' => '3', 'nation_id' => '125'],
                ['animal_detail_id' => '3', 'nation_id' => '142'],
                ['animal_detail_id' => '3', 'nation_id' => '150'],
                ['animal_detail_id' => '3', 'nation_id' => '153'],
                ['animal_detail_id' => '3', 'nation_id' => '158'],
                ['animal_detail_id' => '3', 'nation_id' => '159'],
                ['animal_detail_id' => '3', 'nation_id' => '160'],
                ['animal_detail_id' => '3', 'nation_id' => '155'],
                ['animal_detail_id' => '3', 'nation_id' => '170'],
                ['animal_detail_id' => '3', 'nation_id' => '173'],
                ['animal_detail_id' => '3', 'nation_id' => '180'],
                ['animal_detail_id' => '3', 'nation_id' => '192'],
                ['animal_detail_id' => '3', 'nation_id' => '193'],
                ['animal_detail_id' => '4', 'nation_id' => '32'],
                ['animal_detail_id' => '4', 'nation_id' => '109'],
                ['animal_detail_id' => '4', 'nation_id' => '184'],
                ['animal_detail_id' => '4', 'nation_id' => '18'],
                ['animal_detail_id' => '4', 'nation_id' => '79'],
                ['animal_detail_id' => '4', 'nation_id' => '141'],
                ['animal_detail_id' => '5', 'nation_id' => '3'],
                ['animal_detail_id' => '5', 'nation_id' => '27'],
                ['animal_detail_id' => '5', 'nation_id' => '31'],
                ['animal_detail_id' => '5', 'nation_id' => '33'],
                ['animal_detail_id' => '5', 'nation_id' => '34'],
                ['animal_detail_id' => '5', 'nation_id' => '46'],
                ['animal_detail_id' => '5', 'nation_id' => '53'],
                ['animal_detail_id' => '5', 'nation_id' => '56'],
                ['animal_detail_id' => '5', 'nation_id' => '68'],
                ['animal_detail_id' => '5', 'nation_id' => '86'],
                ['animal_detail_id' => '5', 'nation_id' => '96'],
                ['animal_detail_id' => '5', 'nation_id' => '107'],
                ['animal_detail_id' => '5', 'nation_id' => '115'],
                ['animal_detail_id' => '5', 'nation_id' => '124'],
                ['animal_detail_id' => '5', 'nation_id' => '125'],
                ['animal_detail_id' => '5', 'nation_id' => '150'],
                ['animal_detail_id' => '5', 'nation_id' => '158'],
                ['animal_detail_id' => '5', 'nation_id' => '160'],
                ['animal_detail_id' => '5', 'nation_id' => '163'],
                ['animal_detail_id' => '5', 'nation_id' => '170'],
                ['animal_detail_id' => '5', 'nation_id' => '176'],
                ['animal_detail_id' => '5', 'nation_id' => '191'],
                ['animal_detail_id' => '6', 'nation_id' => '7'],
                ['animal_detail_id' => '6', 'nation_id' => '9'],
                ['animal_detail_id' => '6', 'nation_id' => '35'],
                ['animal_detail_id' => '6', 'nation_id' => '118'],
                ['animal_detail_id' => '6', 'nation_id' => '132'],
                ['animal_detail_id' => '6', 'nation_id' => '135'],
                ['animal_detail_id' => '6', 'nation_id' => '159'],
                ['animal_detail_id' => '7', 'nation_id' => '3'],
                ['animal_detail_id' => '7', 'nation_id' => '6'],
                ['animal_detail_id' => '7', 'nation_id' => '7'],
                ['animal_detail_id' => '7', 'nation_id' => '9'],
                ['animal_detail_id' => '7', 'nation_id' => '12'],
                ['animal_detail_id' => '7', 'nation_id' => '14'],
                ['animal_detail_id' => '7', 'nation_id' => '15'],
                ['animal_detail_id' => '7', 'nation_id' => '18'],
                ['animal_detail_id' => '7', 'nation_id' => '19'],
                ['animal_detail_id' => '7', 'nation_id' => '24'],
                ['animal_detail_id' => '7', 'nation_id' => '25'],
                ['animal_detail_id' => '7', 'nation_id' => '30'],
                ['animal_detail_id' => '7', 'nation_id' => '31'],
                ['animal_detail_id' => '7', 'nation_id' => '32'],
                ['animal_detail_id' => '7', 'nation_id' => '35'],
                ['animal_detail_id' => '7', 'nation_id' => '36'],
                ['animal_detail_id' => '7', 'nation_id' => '37'],
                ['animal_detail_id' => '7', 'nation_id' => '38'],
                ['animal_detail_id' => '7', 'nation_id' => '39'],
                ['animal_detail_id' => '7', 'nation_id' => '40'],
                ['animal_detail_id' => '7', 'nation_id' => '42'],
                ['animal_detail_id' => '7', 'nation_id' => '45'],
                ['animal_detail_id' => '7', 'nation_id' => '46'],
                ['animal_detail_id' => '7', 'nation_id' => '47'],
                ['animal_detail_id' => '7', 'nation_id' => '48'],
                ['animal_detail_id' => '7', 'nation_id' => '49'],
                ['animal_detail_id' => '7', 'nation_id' => '51'],
                ['animal_detail_id' => '7', 'nation_id' => '60'],
                ['animal_detail_id' => '7', 'nation_id' => '52'],
                ['animal_detail_id' => '7', 'nation_id' => '57'],
                ['animal_detail_id' => '7', 'nation_id' => '59'],
                ['animal_detail_id' => '7', 'nation_id' => '61'],
                ['animal_detail_id' => '7', 'nation_id' => '64'],
                ['animal_detail_id' => '7', 'nation_id' => '66'],
                ['animal_detail_id' => '7', 'nation_id' => '67'],
                ['animal_detail_id' => '7', 'nation_id' => '68'],
                ['animal_detail_id' => '7', 'nation_id' => '69'],
                ['animal_detail_id' => '7', 'nation_id' => '70'],
                ['animal_detail_id' => '7', 'nation_id' => '72'],
                ['animal_detail_id' => '7', 'nation_id' => '75'],
                ['animal_detail_id' => '7', 'nation_id' => '76'],
                ['animal_detail_id' => '7', 'nation_id' => '77'],
                ['animal_detail_id' => '7', 'nation_id' => '79'],
                ['animal_detail_id' => '7', 'nation_id' => '80'],
                ['animal_detail_id' => '7', 'nation_id' => '81'],
                ['animal_detail_id' => '7', 'nation_id' => '82'],
                ['animal_detail_id' => '7', 'nation_id' => '83'],
                ['animal_detail_id' => '7', 'nation_id' => '86'],
                ['animal_detail_id' => '8', 'nation_id' => '14'],
                ['animal_detail_id' => '8', 'nation_id' => '20'],
                ['animal_detail_id' => '8', 'nation_id' => '30'],
                ['animal_detail_id' => '8', 'nation_id' => '36'],
                ['animal_detail_id' => '8', 'nation_id' => '76'],
                ['animal_detail_id' => '8', 'nation_id' => '75'],
                ['animal_detail_id' => '8', 'nation_id' => '91'],
                ['animal_detail_id' => '8', 'nation_id' => '102'],
                ['animal_detail_id' => '8', 'nation_id' => '117'],
                ['animal_detail_id' => '8', 'nation_id' => '120'],
                ['animal_detail_id' => '8', 'nation_id' => '162'],
                ['animal_detail_id' => '8', 'nation_id' => '171'],
                ['animal_detail_id' => '8', 'nation_id' => '189'],
                ['animal_detail_id' => '9', 'nation_id' => '32'],
                ['animal_detail_id' => '9', 'nation_id' => '128'],
                ['animal_detail_id' => '9', 'nation_id' => '141'],
                ['animal_detail_id' => '9', 'nation_id' => '184'],
                ['animal_detail_id' => '10', 'nation_id' => '9'],

            ]
        );
        DB::table('animal_between_biome')->insert(
            [
                ['animal_detail_id' => '4', 'biome_id' => '1'],
                ['animal_detail_id' => '4', 'biome_id' => '3'],
                ['animal_detail_id' => '4', 'biome_id' => '5'],
                ['animal_detail_id' => '4', 'biome_id' => '9'],
                ['animal_detail_id' => '4', 'biome_id' => '26'],
                ['animal_detail_id' => '4', 'biome_id' => '4'],
                ['animal_detail_id' => '4', 'biome_id' => '18'],
                ['animal_detail_id' => '4', 'biome_id' => '10'],
                ['animal_detail_id' => '3', 'biome_id' => '1'],
                ['animal_detail_id' => '3', 'biome_id' => '3'],
                ['animal_detail_id' => '3', 'biome_id' => '5'],
                ['animal_detail_id' => '3', 'biome_id' => '21'],
                ['animal_detail_id' => '3', 'biome_id' => '4'],
                ['animal_detail_id' => '3', 'biome_id' => '10'],
                ['animal_detail_id' => '3', 'biome_id' => '20'],
                ['animal_detail_id' => '3', 'biome_id' => '22'],
                ['animal_detail_id' => '3', 'biome_id' => '25'],
                ['animal_detail_id' => '2', 'biome_id' => '8'],
                ['animal_detail_id' => '2', 'biome_id' => '26'],
                ['animal_detail_id' => '2', 'biome_id' => '18'],
                ['animal_detail_id' => '1', 'biome_id' => '26'],
                ['animal_detail_id' => '1', 'biome_id' => '9'],
                ['animal_detail_id' => '1', 'biome_id' => '18'],
                ['animal_detail_id' => '1', 'biome_id' => '8'],
                ['animal_detail_id' => '5', 'biome_id' => '26'],
                ['animal_detail_id' => '5', 'biome_id' => '15'],
                ['animal_detail_id' => '5', 'biome_id' => '18'],
                ['animal_detail_id' => '5', 'biome_id' => '13'],
                ['animal_detail_id' => '5', 'biome_id' => '12'],
                ['animal_detail_id' => '5', 'biome_id' => '9'],
                ['animal_detail_id' => '5', 'biome_id' => '8'],
                ['animal_detail_id' => '5', 'biome_id' => '11'],
                ['animal_detail_id' => '6', 'biome_id' => '4'],
                ['animal_detail_id' => '6', 'biome_id' => '16'],
                ['animal_detail_id' => '6', 'biome_id' => '20'],
                ['animal_detail_id' => '7', 'biome_id' => '4'],
                ['animal_detail_id' => '7', 'biome_id' => '16'],
                ['animal_detail_id' => '7', 'biome_id' => '20'],
                ['animal_detail_id' => '8', 'biome_id' => '9'],
                ['animal_detail_id' => '8', 'biome_id' => '26'],
                ['animal_detail_id' => '8', 'biome_id' => '18'],
                ['animal_detail_id' => '8', 'biome_id' => '12'],
                ['animal_detail_id' => '8', 'biome_id' => '13'],
                ['animal_detail_id' => '9', 'biome_id' => '16'],
                ['animal_detail_id' => '9', 'biome_id' => '27'],
                ['animal_detail_id' => '9', 'biome_id' => '4'],
                ['animal_detail_id' => '10', 'biome_id' => '12'],
                ['animal_detail_id' => '10', 'biome_id' => '18'],
                ['animal_detail_id' => '10', 'biome_id' => '26'],
                ['animal_detail_id' => '10', 'biome_id' => '13'],
                ['animal_detail_id' => '10', 'biome_id' => '9'],
            ]
        );
        DB::table('animal_between_climate')->insert(
            [
                ['animal_detail_id' => '1', 'climate_id' => '1'],
                ['animal_detail_id' => '1', 'climate_id' => '2'],
                ['animal_detail_id' => '2', 'climate_id' => '1'],
                ['animal_detail_id' => '2', 'climate_id' => '2'],
                ['animal_detail_id' => '3', 'climate_id' => '1'],
                ['animal_detail_id' => '3', 'climate_id' => '3'],
                ['animal_detail_id' => '4', 'climate_id' => '1'],
                ['animal_detail_id' => '4', 'climate_id' => '3'],
                ['animal_detail_id' => '4', 'climate_id' => '4'],
                ['animal_detail_id' => '5', 'climate_id' => '1'],
                ['animal_detail_id' => '5', 'climate_id' => '2'],
                ['animal_detail_id' => '6', 'climate_id' => '3'],
                ['animal_detail_id' => '6', 'climate_id' => '4'],
                ['animal_detail_id' => '7', 'climate_id' => '1'],
                ['animal_detail_id' => '7', 'climate_id' => '3'],
                ['animal_detail_id' => '7', 'climate_id' => '4'],
                ['animal_detail_id' => '7', 'climate_id' => '5'],
                ['animal_detail_id' => '8', 'climate_id' => '1'],
                ['animal_detail_id' => '9', 'climate_id' => '4'],
                ['animal_detail_id' => '9', 'climate_id' => '5'],

            ]
        );
        DB::table('animal_between_color')->insert(
            [
                ['animal_detail_id' => 1, 'color_id' => 4],
                ['animal_detail_id' => 1, 'color_id' => 6],
                ['animal_detail_id' => 1, 'color_id' => 8],
                ['animal_detail_id' => 4, 'color_id' => 4],
                ['animal_detail_id' => 4, 'color_id' => 6],
                ['animal_detail_id' => 4, 'color_id' => 7],
                ['animal_detail_id' => 2, 'color_id' => 4],
                ['animal_detail_id' => 2, 'color_id' => 6],
                ['animal_detail_id' => 2, 'color_id' => 8],
                ['animal_detail_id' => 3, 'color_id' => 9],
                ['animal_detail_id' => 3, 'color_id' => 6],
                ['animal_detail_id' => 3, 'color_id' => 1],
                ['animal_detail_id' => 3, 'color_id' => 4],
                ['animal_detail_id' => 5, 'color_id' => 4],
                ['animal_detail_id' => 5, 'color_id' => 6],
                ['animal_detail_id' => 5, 'color_id' => 8],
                ['animal_detail_id' => 5, 'color_id' => 9],
                ['animal_detail_id' => 6, 'color_id' => 9],
                ['animal_detail_id' => 6, 'color_id' => 7],
                ['animal_detail_id' => 7, 'color_id' => 7],
                ['animal_detail_id' => 7, 'color_id' => 8],
                ['animal_detail_id' => 7, 'color_id' => 9],
                ['animal_detail_id' => 8, 'color_id' => 9],
                ['animal_detail_id' => 8, 'color_id' => 6],
                ['animal_detail_id' => 9, 'color_id' => 7],
                ['animal_detail_id' => 10, 'color_id' => 6],
                ['animal_detail_id' => 10, 'color_id' => 9],

            ]
        );
        DB::table('animal_between_ocean')->insert(
            [
                ['animal_detail_id' => 6, 'ocean_id' => 1],
                ['animal_detail_id' => 6, 'ocean_id' => 3],
                ['animal_detail_id' => 7, 'ocean_id' => 1],
                ['animal_detail_id' => 7, 'ocean_id' => 3],
                ['animal_detail_id' => 7, 'ocean_id' => 4],
                ['animal_detail_id' => 9, 'ocean_id' => 4],

            ]
        );

    }
}

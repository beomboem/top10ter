<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\ArticleDetail;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$path='images/articles/seeder';

    	//polusi
        $article=Article::create([
        	'title' => '10 Negara Dengan Tingkat Polusi Tertinggi di Dunia',
        	'content' => '<p>Polusi merupakan salah satu partikel yang paling mudah ditemui sehari-hari. Namun partikel ini sangat berbahaya bagi kesehatan. Bukan hanya berbahaya bagi manusia saja, namun polusi juga dapat memengaruhi keseimbangan lingkungan. Polusi terbagi menjadi beberapa bagian yaitu polusi udara, air, dan suara.</p><p>Karena merupakan masalah umum di dunia khususnya di negara-negara berkembang, Organisasi Kesehatan Dunia (WHO) pun mengelompokkan negara-negara berdasarkan kadar polusi udara yang mencemari negara tersebut. Berikut ini merupakan 10 negara dengan tingkat polusi tertinggi di dunia.</p><p>Sumber: http://www.tentik.com/10-negara-dengan-tingkat-polusi-tertinggi-di-dunia/</p>',
        	'author' => 'Cynthia C.'
        ]);
        $article_detail_1=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Saudi Arabia',
            'content' => '<p>Tak heran jika Saudi Arabia dikenal sebagai salah satu negara dengan tingkat polusi tertinggi. Pasalnya, negara ini adalah penghasil minyak terbesar di dunia yang menguasai 1/5 minyak dunia dan penghasil petroleum terbesar di dunia, yaitu bahan bakar yang digunakan untuk kendaraan. Polusi udara di Saudi Arabia mencapai 490 juta ton per tahun yang didapatkan dari emisi kendaraan ditunjang lingkungan yang kering dan berangin.</p>'
        ]);
        $article_detail_1->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'saudi arabia', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_2=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Kanada',
            'content' => '<p>Fakta mengejutkan juga datang dari Kanada yang disebut-sebut sebagai negara dengan lingkungan terindah. Ternyata Kanada menghasilkan sekitar 614 juta ton CO2 setiap tahunnya. Penelitian menyebutkan bahwa polusi di Kanada disebabkan dari industri pertambangan yang mengakibatkan polusi air, polusi udara, dan suara. Bahkan mamalia laut di Kanada seperti paus misalnya, mengalami kematian dalam jumlah yang sangat besar karena kanker.</p>'
        ]);
        $article_detail_2->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'kanada', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_3=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Korea Selatan',
            'content' => '<p>Korea Selatan terkontaminasi polusi akibat sisa-sisa industrial. Fenomena ini mendukung pencemaran udara yang merusak keseimbangan lingkungan. Tak heran jika tingkat polusi udaranya mencapai hingga 563 juta ton per tahun. Melihat hal ini, pemerintah Korea Selatan terus berusaha menekan kadar polusi di negaranya. Meski masih saja polusi akibat emisi kendaraan dan asap industri menjadi masalah utama di negara ini.</p>'
        ]);
        $article_detail_3->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'korea', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_4=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Iran',
            'content' => '<p>Iran memiliki masalah polusi yang cukup menyeramkan. Selain beberapa kotanya masuk dalam kota dengan tingkat polusi tertinggi di dunia, kerusakan ekologi di negara ini juga mengakibatkan laut Caspian menjadi tercemar. Polusi rata-rata terjadi akibat limbah pabrik dan limbah rumah tangga yang terus meningkat. Diperkirakan polusi di Iran menghasilkan sekitar 574 juta ton CO2 per tahunnya.</p>'
        ]);
        $article_detail_4->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'iran', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_5=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Jerman',
            'content' => '<p>Meski masuk dalam sepuluh besar negara dengan tingkat polusi tertinggi di dunia, Jerman tetap berambisi mengurangi tingkat polusi setiap tahunnya. Tingkat polusi negara ini cukup tinggi, berkisar sekitar 762 juta ton gas. Keseriusan Jerman untuk mengurangi tingkat polusi dibuktikan dengan membuat sebuah tanaman yang dapat mendaur polusi udara dari batu bara dan sejenisnya. Jerman pun optimis pada tahun 2020, konsumsi listrik akan berkurang hingga 13%.</p>'
        ]);
        $article_detail_5->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'jerman', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_6=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Jepang',
            'content' => '<p>Negara yang dijuluki negara matahari terbit ini ternyata setiap tahun menghasilkan polusi sekitar 1,2 miliar ton CO2. Walaupun pemerintah telah berusaha mengurangi tingkat polusi, nyatanya Jepang tetap masuk dalam lima besar negara dengan tingkat polusi tertinggi di dunia. Polusi tersebut dihasilkan dari berbagai bidang industri, wilayah perkotaan, dan transportasi umum.</p>'
        ]);
        $article_detail_6->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'jepang', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_7=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Rusia',
            'content' => '<p>Cukup aneh memang jika tingkat polusi negara ini besar karena jumlah penduduknya tidak begitu banyak yaitu sekitar 141.950.000 jiwa. Polusi yang cukup tinggi kurang lebih sekitar 1,7 miliar ton gas per tahunnya didapat dari kota industri Rusia. Dimana setiap tahunnya lebih dari 500 ton tembaga dan nikel dan 2 juta sulfur oksida dilepaskan di udara. Bukan hanya polusi yang tinggi, namun fakta mengejutkan juga didapat dari pekerja-pekerja pabrik di Rusia yang mengalami penurunan umur 10 tahun dibanding orang-orang yang bekerja di bidang lain.</p>'
        ]);
        $article_detail_7->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'rusia', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_8=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'India',
            'content' => '<p>Dikenal sebagai negara dengan penduduk terbesar ke-2 di dunia, India ternyata menyimpan tingkat polusi udara yang cukup tinggi yaitu 2 miliar ton per tahunnya. Polusi ini berasal dari berbagai sektor industri di negara tersebut.
Perkembangan pembangunan pabrik yang luar biasa di India mengakibatkan produksi karbon dioksida pun cukup besar di negara tersebut. Bahkan tak jarang di sana pun Anda akan melihat banyaknya anak-anak yang dieksploitasi untuk bekerja sebagai buruh pabrik dengan upah sangat minim.</p>'
        ]);
        $article_detail_8->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'india', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_9=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Amerika',
            'content' => '<p>Sebagai negara adikuasa, Amerika mampu menguasai perekonomian dunia dengan perkembangan industrinya yang luar biasa. Hal ini juga menyebabkan Amerika menjadi salah satu negara dengan tingkat polusi terbesar yaitu 5,4 miliar ton per tahunnya. </p><p>Denda yang ditetapkan untuk perusahaan-perusahaan industri yang melanggar aturan polusi di Amerika cukup besar, yakni sebesar USD 25.000. Namun peraturan ini rupanya tidak mengakibatkan efek jera. Pengeluaran sebesar itu pasti mampu dibayarkan perusahaan-perusahaan industri besar tanpa menganggapnya sebagai kerugian utama.</p>'
        ]);
        $article_detail_9->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'amerika', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_10=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Cina',
            'content' => '<p>Cina adalah salah satu negara yang perkembangannya cukup pesat di Asia. Bagaimana tidak? Negara di berbagai belahan dunia berlomba melakukan investasi ke Cina. Bahkan banyak yang memprediksikan bahwa Cina akan menjadi negara terkuat se-Asia, hingga bisa menyaingi Amerika Serikat dalam hal keuangan.</p><p>Namun perkembangan yang pesat di berbagai bidang termasuk industri ini, mengakibatkan Cina juga menjadi negara dengan tingkat polusi nomor satu di dunia. Tingkat polusi gas mencapai hingga 8,2 miliar ton per tahunnya. Jumlah penduduk yang tinggi yaitu sekitar 1,3 milyar berkontribusi pula pada polusi di negara tersebut, baik dari sektor transportasi, perkantoran, produksi makanan, dan sebagainya.</p>'
        ]);
        $article_detail_10->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/polusi/', 
            'file_name' => 'China', 
            'extension' => 'jpg', 
        ]); 

        //museum
        $article=Article::create([
            'title' => 'Inilah 10 Museum Paling Populer di Dunia',
            'content' => '<p>Saat ini, travelling bisa dibilang telah menjadi gaya hidup. Banyak orang yang berlomba-lomba untuk melakukan perjalanan baik ke dalam negeri maupun ke luar negeri. Tujuannya adalah untuk melihat keragaman suatu daerah sekaligus untuk refreshing. Berkunjung ke suatu negara, tidak afdol rasanya jika belum mengunjungi museum karena museum adalah tempat yang merangkum seluruh perjalanan kebudayaan suatu bangsa. Berikut adalah daftar sepuluh museum paling populer di dunia yang layak dikunjungi.</p><p>Source: http://www.tentik.com/inilah-10-museum-paling-populer-di-dunia/ </p>',
            'author' => 'Leni M.'
        ]);
        $article_detail_1=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Egyptian Museum',
            'content' => '<p>Museum yang terletak di Kairo, Mesir, ini adalah salah satu museum paling populer di dunia. Museum ini berisi berbagai koleksi antik dari peradaban Mesir kuno. Terdapat lebih dari 120.000 benda dalam museum ini dimana tidak semua dipertontonkan. Di dalam sebuah ruangan, yaitu Museum’s Royal Mummy Room, terdapat 27 mumi dari Kerajaan Fi’raun. Museum ini pernah ditutup pada 1981, tetapi dibuka kembali pada 1985.</p>'
        ]);
        $article_detail_1->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '1', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_2=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'The Rijksmuseum',
            'content' => '<p>Bila kita berkunjung ke Amsterdam, Belanda, kita pun bisa mengunjungi museum yang terkenal yaitu The Rijksmuseum Amsterdam atau State Museum. Di dalam museum ini, kita bisa menemukan berbagai koleksi seni, kerajinan maupun benda-benda yang bersejarah. Terdapat juga beragam lukisan dari masa keemasan Belanda.</p>'
        ]);
        $article_detail_2->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '2', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_3=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'The Kunsthistorisches Museum',
            'content' => '<p>Museum of Art History atau The Kunsthistorisches Museum adalah salah satu museum paling populer yang terdapat di Wina. Museum ini berbentuk bangunan megah dan meriah yang dihiasi mahkota kubah persegi delapan. Museum yang berisi koleksi seni halus dan dekoratif ini dibuka pada 1981.</p>'
        ]);
        $article_detail_3->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '3', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_4=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Prado Museum',
            'content' => '<p>Ini adalah salah satu museum paling populer di dunia. Prado Museum terletak di Madrid dan mulai didirikan pada abad ke-12. Terdapat karya-karya Majas dari Goya dan Las Meninas dari Velazquez di dalam museum ini.</p>'
        ]);
        $article_detail_4->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '4', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_5=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Uffizi Gallery',
            'content' => '<p>Museum paling populer selanjutnya terletak di Florence, Italia, yaitu Galleria degli Uffizi. Ini adalah salah satu museum paling tua dan terkenal di dunia yang dibangun pada abad ke-16. Bagi wisatawan, Uffizi Gallery adalah salah satu destinasi wisata yang tidak boleh dilewatkan ketika berkunjung ke Florence.</p>'
        ]);
        $article_detail_5->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '5', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_6=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'National Gallery of Art',
            'content' => '<p>Seperti namanya, museum ini menyimpan berbagai koleksi seni nasional. National Gallery of Art yang terletak di Washington DC ini didirikan pada 1938. Tujuan awal pendiriannya adalah untuk orang-orang di Amerika Serikat. Namun, kini museum ini bisa dikunjungi oleh siapapun secara bebas dan gratis.</p>'
        ]);
        $article_detail_6->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '6', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_7=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'The Met',
            'content' => '<p>Museum yang dikenal The Met atau The Metropolitan Museum of Art adalah termasuk museum paling populer di dunia. Museum ini terletak di New York City, Amerika Serikat. Di dalam museum ini, kita bisa menjumpai dua juta koleksi karya seni. Bangunan utama dalam museum ini dikenal sebagai galeri terbesar di dunia.</p>'
        ]);
        $article_detail_7->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '7', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_8=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'British Museum',
            'content' => '<p>Museum paling populer selanjutnya adalah British Museum yang terletak di London. Di dalam museum ini, kita bisa menjumpai lebih dari 7 juta benda yang berasal dari seluruh penjuru dunia. Tujuan kehadiran museum ini adalah menyimpan sejarah peradaban manusia sejak awal sampai sekarang. Tidak dibutuhkan biaya untuk masuk ke dalam museum ini.</p>'
        ]);
        $article_detail_8->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '8', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_9=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Museum Hermitage',
            'content' => '<p>Museum Hermitage terletak di Saint Petersburg, Rusia. Ini adalah museum seni dan budaya serta termasuk museum tertua di dunia. Museum ini didirikan oleh Katarina yang Agung pada 1764. Namun, museum Hermitage baru mulai dibuka untuk orang banyak pada 1852. Di museum ini, kita bisa menjumpai koleksi lukisan paling besar di dunia, seperti Rembrandt, Da Vinci, Michealangelo, dan sebagainya.</p>'
        ]);
        $article_detail_9->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '9', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_10=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Museum Louvre',
            'content' => '<p>Museum pertama yang masuk dalam daftar museum paling populer di dunia adalah Museum Louvre atau Musee du Louvre. Museum ini terletak di Paris, Prancis. Pada awalnya, Louvre adalah istana bangsawan yang sudah tidak digunakan lagi. Museum ini mulai bisa dikunjungi sejak 8 November 1793.</p>'
        ]);
        $article_detail_10->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/museum/', 
            'file_name' => '10', 
            'extension' => 'jpg', 
        ]); 

        //nama tempat terpanjang
        $article=Article::create([
            'title' => '10 Nama Tempat Terpanjang di Dunia',
            'content' => '<p>Nama tempat biasanya menggunakan kata yang singkat agar mudah diingat, namun lain halnya dengan nama-nama tempat di bawah ini. Menggunakan nama yang panjang dan sulit diingat justru menjadi keunikan tersendiri bagi tempat-tempat yang namanya sudah diresmikan ini.</p><p>Sumber: http://www.apasih.com/2011/07/10-nama-tempat-terpanjang-di-dunia.html</p>',
            'author' => 'Apasih'
        ]);
        $article_detail_1=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Krung Thep Mahanakhon Amon Rattanakosin Mahinthara Yuthaya Mahadilok Phop Noppharat Ratchathani Burirom Udomratchaniwet Mahasathan Amon Piman Awatan Sathit Sakkathattiya Witsanukam Prasit (Thailand)',
            'content' => '<p>Nama kota yang panjangnya ngalah-ngalahin gerbong kereta api ini adalah nama lain atau seremonial dari Kota Bangkok, Thailand. Nama tersebut diberikan oleh Raja Buddha Yodfa Chulaloke dan disunting oleh Raja Mongkut.</p><p>Arti dari nama tersebut adalah "Kota para malaikat, kota yang besar, kota permata yang abadi, kota yang tak terkalahkan milik  Dewa Indra, ibukota dunia yang terbesar, dikaruniai dengan 9 permata yang berharga, kota yang bahagia, penuh dengan Istana Kerajaan yang sangat besar yang menyerupai tempat tinggal surgawi dimana para dewa yang bereinkarnasi berkuasa,kota yang diberikan oleh Indra dan dibangun oleh Vishnu karma.</p>'
        ]);
        $article_detail_1->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '1', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_2=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Taumatawhakatangihangakoauauotamateaturipukakapiki-maungahoronukupokaiwhenuakitanatahu (Selandia Baru)
',
            'content' => '<p>Nama sebuah bukit dalam Bahasa Mäori di Selandia Baru. Tempat ini tercatat dalam Guiness World Records sebagai tempat dengan nama terpanjang di dunia (85 huruf).</p>'
        ]);
        $article_detail_2->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '2', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_3=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Llanfairpwllgwyngyllgogerychwyrndrobwllllantysiliogogogoch (Inggris)',
            'content' => '<p>Sebuah desa dalam Bahasa Welsh di daerah Anglesey, Wales, Inggris.</p>'
        ]);
        $article_detail_3->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '3', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_4=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Chargoggagoggmanchauggagoggchaubunagungamaugg (Massachusets, US)',
            'content' => '<p>Danau dalam Bahasa Nipmuc ini merupakan danau dengan nama terpanjang di Amerika Serikat. Danau ini berlokasi di Massachusets.</p>'
        ]);
        $article_detail_4->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '4', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_5=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Pekwachnamaykoskwaskwaypinwanik (Kanada)',
            'content' => '<p>Danau yang diberi nama menggunakan Bahasa Inuktitut ini berlokasi di Manitoba dan Nunavut, Kanada.</p>'
        ]);
        $article_detail_5->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '5', 
            'extension' => 'gif', 
        ]); 
        $article_detail_6=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Przedmieście Szczebrzeszyńskie (Polandia)',
            'content' => '<p>Daerah ini merupakan sebuah desa di Lublin  Voivodeship, di Polandia bagian timur. Desa
ini hanya memiliki populasi sebanyak 386 jiwa.
</p>'
        ]);
        $article_detail_6->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '6', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_7=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Beaujeu-Saint-Vallier-Pierrejux-et-Quitteur (Perancis)',
            'content' => '<p>Daerah ini berada di Haute-Saône wilayah Franche-Comté, Perancis sebelah timur.</p>'
        ]);
        $article_detail_7->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '7', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_8=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Tweebuffelsmeteenskootmorsdoodgeskietfo ntein (Afrika Selatan)',
            'content' => '<p>Nama sebuah peternakan 200 km sebelah barat Pretoria, Afrika Selatan bagian barat laut.</p>'
        ]);
        $article_detail_8->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '8', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_9=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Äteritsiputeritsipuolilautatsijänkä (Finlandia)',
            'content' => '<p>Nama sebuah rawa di Finlandia ini merupakan nama tempat yang terpanjang dalam 1 kata di Finlandia.</p>'
        ]);
        $article_detail_9->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '9', 
            'extension' => 'jpg', 
        ]); 
        $article_detail_10=ArticleDetail::create([
            'article_id' => $article->id,
            'title' => 'Gorsafawddacha idraigodanheddogleddollônpe nrhyna-reurdraethceredigione (Inggris)',
            'content' => '<p>Ini adalah nama stasiun kereta api kecil di Gwynedd, Wales sebelah barat. Nama ini dipilih untuk mengalahkan popularitas Desa Llanfairpwllgwyngyllgogerychwyrndrobw-llllantysiliogogogoch yang juga berada di daerah Wales.</p>'
        ]);
        $article_detail_10->files()->create([ 
            'attachment_type_id' => 1, 
            'name' => '', 

            'type' => 'cover', 
            'file_type' => 'image', 

            'base_url' => $path.'/namatempat/', 
            'file_name' => '10', 
            'extension' => 'jpg', 
        ]); 

    }
}

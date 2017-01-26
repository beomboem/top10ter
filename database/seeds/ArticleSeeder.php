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
        	'content' => '<p>Polusi merupakan salah satu partikel yang paling mudah ditemui sehari-hari. Namun partikel ini sangat berbahaya bagi kesehatan. Bukan hanya berbahaya bagi manusia saja, namun polusi juga dapat memengaruhi keseimbangan lingkungan. Polusi terbagi menjadi beberapa bagian yaitu polusi udara, air, dan suara.</p><p>Karena merupakan masalah umum di dunia khususnya di negara-negara berkembang, Organisasi Kesehatan Dunia (WHO) pun mengelompokkan negara-negara berdasarkan kadar polusi udara yang mencemari negara tersebut. Berikut ini merupakan 10 negara dengan tingkat polusi tertinggi di dunia.</p><p>Source: http://www.tentik.com/10-negara-dengan-tingkat-polusi-tertinggi-di-dunia/</p>',
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


    }
}

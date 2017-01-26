<?php

use Illuminate\Database\Seeder;
use App\Polling;
use App\Option;

class PollingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $polling=Polling::create([
        	'question' => 'Pilih Topik Makanan'
        ]);
        Option::create([
        	'polling_id' => $polling->id,
		    'answer' => '10 Jajanan Indonesia Terenak',
		]);
		Option::create([
        	'polling_id' => $polling->id,
		    'answer' => '10 Pizza Termahal di Dunia',
		]);
		Option::create([
        	'polling_id' => $polling->id,
		    'answer' => '10 Cabai Terpedas di Dunia',
		]);
		$polling=Polling::create([
        	'question' => 'Pilih Topik Liburan'
        ]);
        Option::create([
        	'polling_id' => $polling->id,
		    'answer' => '10 Wisata Lokal Terbaik',
		]);
		Option::create([
        	'polling_id' => $polling->id,
		    'answer' => '10  Wisata Musim Salju',
		]);
		Option::create([
        	'polling_id' => $polling->id,
		    'answer' => '10 Aktivitas Liburan Terproduktif',
		]);
		$polling=Polling::create([
        	'question' => 'Pilih Topik Musik'
        ]);
        Option::create([
        	'polling_id' => $polling->id,
		    'answer' => '10 Band Legendaris Dunia',
		]);
		Option::create([
        	'polling_id' => $polling->id,
		    'answer' => '10 Alat Musik Terunik',
		]);
		Option::create([
        	'polling_id' => $polling->id,
		    'answer' => '10 Gitaris Terhebat Sepanjang Masa',
		]);
    }
}

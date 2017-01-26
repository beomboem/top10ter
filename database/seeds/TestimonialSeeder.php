<?php

use Illuminate\Database\Seeder;
use App\Message;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
        	'name' => 'Anonymous Me',
        	'email' => 'anonymousme@gmail.com',
        	'content' => 'I’m amazed, I should say thank you so much for your awesome information. I will look into TOP10TER everyday.'
        ]);
        Message::create([
        	'name' => 'Anonymous Me',
        	'email' => 'anonymousme@gmail.com',
        	'content' => 'Thank you for the information that TOP10TER  give. I haven\'t known any of that before, but now I know.'
        ]);
        Message::create([
        	'name' => 'Anonymous Me',
        	'email' => 'anonymousme@gmail.com',
        	'content' => 'Fun + Knowledge = Top10Ter'
        ]);
    }
}

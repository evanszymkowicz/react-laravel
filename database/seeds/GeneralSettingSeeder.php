<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Washington Burger',
            'logo_image_url' => '/img/clipart-restaurant-restaurant-logo-5.png',
            'address_1' => '730 17St NW',
            'address_2' => '',
            'city' => 'Washington',
            'state' => 'DC',
            'zipcode' => '200009',
            'phone_number' => '202-555-5555',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}

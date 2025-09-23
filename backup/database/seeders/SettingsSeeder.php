<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Setting::create([
            'phone_1' => '##########',
            'phone_2' => '######',
            'email' => '###@thrawaat.com',
            'address' => '################################',
            'fb_link' => '#',
            'twitter_link' => '#',
            'google_link' => '#',
            'insta_link' => '#',
            'logo' => 'tharawatlogo.png'
        ]);
    }
}

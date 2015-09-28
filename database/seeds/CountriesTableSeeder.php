<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Country;
use App\CountryTranslation;


class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        CountryTranslation::truncate();
        Country::truncate();
        DB::statement("SET foreign_key_checks=1");

        $data = [
            'code' => 'es',
            'en'  => ['name' => 'Spain'],
            'es'  => ['name' => 'España'],
        ];

        Country::create($data);

        $data = [
            'code' => 'br',
            'en'  => ['name' => 'Brazil'],
            'es'  => ['name' => 'Brasil'],
        ];

        Country::create($data);

    }
}
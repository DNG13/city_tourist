<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Відень',
            'Брюссель',
            'Софія',
            'Лондон',
            'Афіни',
            'Копенгаген',
            'Таллінн',
            'Дублін',
            'Мадрид',
            'Рим'
        ];
        $country = [
            'Австрія',
            'Бельгія',
            'Болгарія',
            'Велика Британія',
            'Греція',
            'Данія',
            'Естонія',
            'Ірландія',
            'Іспанія',
            'Італія'
        ];
        for ($i=0; $i < 10; $i++) {
            \App\City::create([
                'name' => $name[$i],
                'country' => $country[$i],
                'created_at' => '2018-01-08 12:37:0'.$i,
            ]);
        };
    }
}

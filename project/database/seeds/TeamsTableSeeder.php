<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->truncate();
        $params = [
            [
                'name' => 'fourest',
                'is_announced' => false,
            ],
            [
                'name' => 'buzzer-beaters',
                'is_announced' => false,
            ],
            [
                'name' => '雪うさぎ',
                'is_announced' => false,
            ],
            [
                'name' => 'じゃんけんブラザーズ',
                'is_announced' => false,
            ],
            [
                'name' => 'yeswecan',
                'is_announced' => false,
            ],
            [
                'name' => 'まいなすイオン',
                'is_announced' => false,
            ],
            [
                'name' => '新人ハッカソン選抜',
                'is_announced' => false,
            ],
        ];
        DB::table('teams')->insert($params);
    }
}

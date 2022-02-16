<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JudgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('judges')->truncate();
        $params = [
            [
                'name' => '影嶋',
            ],
            [
                'name' => '湯山',
            ],
            [
                'name' => '日菜',
            ],
            [
                'name' => '檀野',
            ],
            [
                'name' => 'スティーブ',
            ],
            [
                'name' => '彩音',
            ],
            [
                'name' => 'シュート',
            ],
            [
                'name' => 'まきこ',
            ],
            [
                'name' => 'まゆな',
            ],
            [
                'name' => '新島',
            ],
        ];
        DB::table('judges')->insert($params);
    }
}

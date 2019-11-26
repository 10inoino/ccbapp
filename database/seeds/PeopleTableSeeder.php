<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'number' => 12,
            'name' => '山田航希',
            'position' => 1,
            'height' => 173,
            'affiliation' => '社員（ネクサス事業部）',
            'info' => 'ヌルヌルしている鰻のような動きに定評のある男',
        ];
        DB::table('people')->insert($param);

        $param = [
            'number' => 15,
            'name' => '岩村岳',
            'position' => 4,
            'height' => 180,
            'affiliation' => '社員（SP事業部）',
            'info' => '岳のエナジャイズが見れた次の日には雪が降ると言われている',
        ];
        DB::table('people')->insert($param);

        $param = [
            'number' => 3,
            'name' => '伊星淳一郎',
            'position' => 2,
            'height' => 175,
            'affiliation' => 'しがくメンバー',
            'info' => '最近風邪気味',
        ];
        DB::table('people')->insert($param);
    }
}

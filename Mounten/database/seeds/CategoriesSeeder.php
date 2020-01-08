<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['ハンドルバー','グリップ','ステム','サドル','シートポスト','ペダル','クランク'];

        foreach ($titles as $title) {
          DB::table('categories')->insert([
            'part_name' => $title,
          ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoryspecsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categoryspecs')->insert([
          'category_id' => 1,
          'spec' => "直径",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "φ３１．８ｍｍ",
          'spec_detail3' => "φ３５．０ｍｍ",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 1,
          'spec' => "材質",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "カーボン",
          'spec_detail3' => "アルミ",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 1,
          'spec' => "ライズ",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "１０ｍｍ以上",
          'spec_detail3' => "１５ｍｍ以上",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 2,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "RaceFace",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 2,
          'spec' => "カラー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ブラック",
          'spec_detail3' => "イエロー",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 3,
          'spec' => "直径",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "φ３１．８ｍｍ",
          'spec_detail3' => "φ３５．０ｍｍ",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 3,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "Renthal",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 4,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "RaceFace",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 4,
          'spec' => "カラー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ブラック",
          'spec_detail3' => "イエロー",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 5,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "THOMSON",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 5,
          'spec' => "材質",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "カーボン",
          'spec_detail3' => "アルミ",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 6,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "RaceFace",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 6,
          'spec' => "カラー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ブラック",
          'spec_detail3' => "イエロー",
      ]);

      DB::table('categoryspecs')->insert([
          'category_id' => 7,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Hope",
          'spec_detail3' => "RaceFace",
      ]);
    }
}

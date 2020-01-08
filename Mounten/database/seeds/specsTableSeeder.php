<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class specsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('specs')->insert([
          'category_id' => 1,
          'spec' => "サイト",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ChainReaction",
          'spec_detail3' => "bikeINN",
      ]);

      DB::table('specs')->insert([
          'category_id' => 1,
          'spec' => "材質",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "カーボン",
          'spec_detail3' => "アルミ",
      ]);

      DB::table('specs')->insert([
          'category_id' => 1,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "RaceFace",
      ]);

      DB::table('specs')->insert([
          'category_id' => 2,
          'spec' => "サイト",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ChainReaction",
          'spec_detail3' => "bikeINN",
      ]);

      DB::table('specs')->insert([
          'category_id' => 2,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "RaceFace",
      ]);

      DB::table('specs')->insert([
          'category_id' => 3,
          'spec' => "サイト",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ChainReaction",
          'spec_detail3' => "bikeINN",
      ]);

      DB::table('specs')->insert([
          'category_id' => 3,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "Renthal",
      ]);

      DB::table('specs')->insert([
          'category_id' => 4,
          'spec' => "サイト",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ChainReaction",
          'spec_detail3' => "bikeINN",
      ]);

      DB::table('specs')->insert([
          'category_id' => 4,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "RaceFace",
      ]);

      DB::table('specs')->insert([
          'category_id' => 5,
          'spec' => "サイト",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ChainReaction",
          'spec_detail3' => "bikeINN",
      ]);

      DB::table('specs')->insert([
          'category_id' => 5,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "THOMSON",
      ]);

      DB::table('specs')->insert([
          'category_id' => 6,
          'spec' => "サイト",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ChainReaction",
          'spec_detail3' => "bikeINN",
      ]);

      DB::table('specs')->insert([
          'category_id' => 6,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Cromag",
          'spec_detail3' => "RaceFace",
      ]);

      DB::table('specs')->insert([
          'category_id' => 7,
          'spec' => "サイト",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "ChainReaction",
          'spec_detail3' => "bikeINN",
      ]);

      DB::table('specs')->insert([
          'category_id' => 7,
          'spec' => "メーカー",
          'spec_detail1' => "選択なし",
          'spec_detail2' => "Hope",
          'spec_detail3' => "RaceFace",
      ]);
    }
}

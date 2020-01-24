<?php

namespace App\Http\Controllers;

use App\Category;
use App\Spec;
use App\Serch_result_handlebar;
use App\Serch_result_grip;
use App\Serch_result_stem;
use App\Serch_result_sadlle;
use App\Serch_result_seatpost;
use App\Serch_result_pedal;
use App\Serch_result_crank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SerchController extends Controller
{
  // メインページのコントラーラー
    public function main()
    {
      $categories = Category::all();

      return view('categories/main',[
        'categories' => $categories,
      ]);
    }

    // サーチページのコントローラー
    public function result(int $id ,Request $request)
    {
      $categories = Category::all();

      // 選ればれたパーツを取得する
      $current_category_id = Category::find($id);
      $current_part_name = Category::find($id);
      $spec = Spec::where('category_id', $current_category_id->id)->get();
      // $res = $request->all();

      $handlebar_results = Serch_result_handlebar::paginate(9);
      $grip_results = Serch_result_grip::paginate(9);
      $stem_results = Serch_result_stem::paginate(9);
      $sadlle_results = Serch_result_sadlle::paginate(9);
      $seatpost_results = Serch_result_seatpost::paginate(9);
      $pedal_results = Serch_result_pedal::paginate(9);
      $crank_results = Serch_result_crank::paginate(9);

      return view('results/result',[
        'categories' => $categories,
        'current_category_id' => $id,
        'current_part_name' => $current_part_name,
        'spec' => $spec,
        // 'res' => $res,
        'handlebar_results' => $handlebar_results,
        'grip_results' => $grip_results,
        'stem_results' => $stem_results,
        'sadlle_results' => $sadlle_results,
        'seatpost_results' => $seatpost_results,
        'pedal_results' => $pedal_results,
        'crank_results' => $crank_results,
      ]);
    }
}

// $diameter = Diameter::whereIn('categoryspec_id', $spec->pluck('id'))->get();
// $material = Material::whereIn('categoryspec_id', $spec->pluck('id'))->get();
// $rise = Rise::whereIn('categoryspec_id', $spec->pluck('id'))->get();
// $detail = Specdetail::whereIn('categoryspec_id', $spec->pluck('id'))->get();

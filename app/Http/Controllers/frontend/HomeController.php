<?php

namespace App\Http\Controllers\frontend;

use App\Models\Home;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Nvabar;
use App\Models\Banner;
use App\Models\TopBanner;
use App\Models\BottomBanner;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    // getData();
    $navbar = DB::table('nvabars')
      ->where(['status' => 1])
      ->get();
    foreach ($navbar as $list) {
      $category_parent_id = $list->id;
    }
    $home_categories = DB::table('categories')
      ->where(['status' => 1])
      // ->where('category_parent_id', $category_parent_id)
      ->get();

    $banner= Banner::where('status','=',1)
    ->get();
    
    $top_banner= TopBanner::where('status','=',1)
    ->get();

    $bottom_banner= BottomBanner::where('status','=',1)
    ->get();

    $product= Product::where('status','=',1)
    ->get();

    // $product = DB::table('products')
    // ->where(['status' => 1])
    // ->get();

  return view('frontend.home',
          compact('navbar','home_categories','banner','top_banner','bottom_banner', 'product'));
     
  }
}

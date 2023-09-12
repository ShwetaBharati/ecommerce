<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Nvabar;
use App\Models\Banner;
use App\Models\TopBanner;
use App\Models\Category;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function common_function($category_parent_id)
    {
        $navbar = Nvabar::where(['status' => 1])
        ->get();

        
      foreach ($navbar as $list) {
        $category_parent_id = $list->id;
      }

      $home_categories = Category::where(['status' => 1])
        ->where('category_parent_id', $category_parent_id)
        ->get();
  
      $banner= Banner::where('status','=',1)
      ->get();
      
      $top_banner= TopBanner::where('status','=',1)
      ->get();



      return [
        'navbar'=>$navbar,
        'home_categories'=>$home_categories,
        'banner'=>$banner,
        'top_banner'=>$top_banner
      ];
  
     
    }
}

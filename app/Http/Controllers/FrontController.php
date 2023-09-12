<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['home_categories']=DB::table('categories');
        echo"<pre>";
        print_r($result['home_categories']);
        die();
 
       return view('front.index',$result);
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BottomBanner;

class BottomBannerController extends Controller
{
    public function index()
    {
        $result['data'] = BottomBanner::all();
        return view('admin/bottom_banner', $result);
    }
    public function manage_bottom_banner(Request $request, $id = '')
    {
        if ($id > 0) {
            $arr = BottomBanner::where(['id' => $id])->get();
            $result['id'] = $arr[0]->id;
            $result['name'] = $arr[0]->name;
            $result['image'] = $arr[0]->image;
            // $result['btn_txt'] = $arr[0]->btn_txt;
            // $result['btn_link'] = $arr[0]->btn_link;
            $result['desc'] = $arr[0]->desc;
            $result['meta_title'] = $arr[0]->meta_title;
            $result['meta_desc'] = $arr[0]->meta_desc;
            $result['meta_keyword'] = $arr[0]->meta_keyword;
        } else {
            $result['id'] = '';
            $result['name'] = '';
            $result['image'] = '';
            // $result['btn_txt'] = '';
            // $result['btn_link'] = '';
            $result['meta_title'] = '';
            $result['meta_desc'] = '';
            $result['short_desc'] = '';
            $result['desc'] = '';
            $result['meta_keyword'] = '';
        }
        // $result['bottom_banner'] = DB::table('bottom_banners')->where(['status'=>1])->get();
        return view('admin/manage_bottom_banner', $result);
    }
    public function manage_bottom_banner_process(Request $request)
    {
        if ($request->post('id') > 0) {
            $image_validation = "mimes:jpeg,jpg,png";
        } else {
            $image_validation = "required|mimes:jpeg,jpg,png";
        }
        $request->validate([
            'name' => 'required',
            'image' => $image_validation,
            'attr_image.*' => 'mimes:jpg,jpeg,png'
        ]);
        if ($request->post('id') > 0) {
            $model = BottomBanner::find($request->post('id'));
            $msg = "Bottom Banner Update";
        } else {
            $model = new BottomBanner();
            $msg = "Bottom Banner Insert";
        }
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name=time().'.'.$ext;
            // print_r($image_name);die;
            $image->storeAs('/public/media', $image_name);
            $model->image = $image_name;
        }
        $model->name = $request->post('name');
        // print_r($model->name);die;
        $model->meta_title = $request->post('meta_title');
        $model->meta_keyword = $request->post('meta_keyword');
        $model->desc = $request->post('desc');
        $model->meta_desc = $request->post('meta_desc');
        $model->status = 1;
        $model->save();
        $request->session()->flash('message', $msg);
        return redirect('admin/bottom_banner');
    }

    public function delete(Request $request, $id)
    {
        $model = BottomBanner::find($id);
        $model->delete();
        $request->session()->flash('message', 'Bottom Banner Delete');
        return redirect('admin/bottom_banner');
    }
    public function status(Request $request, $type, $id)
    {
        $model = BottomBanner::find($id);
        $model->status = $type;
        $model->save();
        $request->session()->flash('message', 'Bottom Banner status updated');
        return redirect('admin/bottom_banner');
    }
}
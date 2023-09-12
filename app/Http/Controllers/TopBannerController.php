<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopBanner;

class TopBannerController extends Controller
{
    public function index()
    {
        $result['data'] = TopBanner::all();
        return view('admin/top_banner', $result);
    }
    public function manage_top_banner(Request $request, $id = '')
    {
        if ($id > 0) {
            $arr = TopBanner::where(['id' => $id])->get();
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
        return view('admin/manage_top_banner', $result);
    }
    public function manage_top_banner_process(Request $request)
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
            $model = TopBanner::find($request->post('id'));
            $msg = "Top Banner Update";
        } else {
            $model = new TopBanner();
            $msg = "Top Banner Insert";
        }
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media', $image_name);
            $model->image = $image_name;
        }
        $model->name = $request->post('name');
        $model->meta_title = $request->post('meta_title');
        $model->meta_keyword = $request->post('meta_keyword');
        $model->desc = $request->post('desc');
        $model->meta_desc = $request->post('meta_desc');
        $model->status = 1;
        $model->save();
        $request->session()->flash('message', $msg);
        return redirect('admin/top_banner');
    }

    public function delete(Request $request, $id)
    {
        $model = TopBanner::find($id);
        $model->delete();
        $request->session()->flash('message', 'Top Banner Delete');
        return redirect('admin/top_banner');
    }
    public function status(Request $request, $type, $id)
    {
        $model = TopBanner::find($id);
        $model->status = $type;
        $model->save();
        $request->session()->flash('message', 'Top Banner status updated');
        return redirect('admin/top_banner');
    }
}


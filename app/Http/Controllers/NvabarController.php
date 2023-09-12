<?php

namespace App\Http\Controllers;

use App\Models\Nvabar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NvabarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data'] =Nvabar::all();
        return view('admin/navbar',$result);
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function manage_navbar(Request $request,$id='')
     {
         if($id>0){
             $arr=Nvabar::where(['id'=>$id])->get();
             $result['name']=$arr[0]->name;
             $result['slug']=$arr[0]->slug;
            //  $result['parent_id']=$arr[0]->parent_id;
             $result['desc']=$arr[0]->desc;
             $result['meta_key']=$arr[0]->meta_key;
             $result['meta_des']=$arr[0]->meta_des;
             $result['meta_title']=$arr[0]->meta_title;
             $result['image']=$arr[0]->image;
             $result['id']=$arr[0]->id;
         }
         else{
             $result['name']='';
             $result['slug']='';
            //  $result['parent_id']='';
             $result['desc']='';
             $result['image']='';
             $result['meta_key']='';
             $result['meta_des']='';
             $result['meta_title']='';
             $result['id']='';
         }
         $result['navbar'] = DB::table('nvabars')->where(['status'=>1])->get(); 
         return view('admin/manage_navbar',$result);
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function manage_navbar_process(Request $request)
     {
         if($request->post('id')>0){
         $image_validation="mimes:jpeg,jpg,png";
      }
      else{
         $image_validation="required|mimes:jpeg,jpg,png";
      }
     $request->validate([
         'name'=>'required',
         'image'=>$image_validation,
         'slug'=>'required|unique:nvabars,slug,'.$request->post('id'),
        
 
 
     ]);
     // $model= new navbar();
     // $model= new navbar();
     if($request->post('id')>0){
        $model=Nvabar::find($request->post('id'));
        $msg = "navbar Update";
     }
     else{
         $model=new Nvabar();
         $msg = "Nvabar Insert";
     }
     if($request->hasfile('image')){
         $image=$request->file('image');
         $ext=$image->extension();
         $image_name=time().'.'.$ext;
         $image->storeAs('/public/media',$image_name);
         $model->image= $image_name;
     }
     $model->name=$request->post('name');
    //  $model->parent_id=$request->post('parent_id');
     // print_r($model->id);die;
     $model->slug=$request->post('slug');
     $model->meta_title=$request->post('meta_title');
     $model->meta_key=$request->post('meta_key');
    
     $model->desc=$request->post('desc');
     $model->meta_des=$request->post('meta_des');
     $model->status=1;
     $model->save();
     $request->session()->flash('message',$msg);
     return redirect('admin/navbar');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  \App\Models\navbar  $navbar
      * @return \Illuminate\Http\Response
      */
     public function delete(Request $request,$id)
     {
        $model=Nvabar::find($id);
        $model->delete();
        $request->session()->flash('message','navbar Delete');
        return redirect('admin/navbar');
     }
     public function status(Request $request,$type,$id)
     {
        $model=Nvabar::find($id);
        $model->status=$type;
        $model->save();
        $request->session()->flash('message','navbar status updated');
        return redirect('admin/navbar');
     
     }
}

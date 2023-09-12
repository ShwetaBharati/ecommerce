<?php

namespace App\Http\Controllers;
use App\Models\Nvabar;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data'] =Category::all();
       return view('admin/category',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_category(Request $request,$id='')
    {
        if($id>0){
            $arr=Category::where(['id'=>$id])->get();
            $result['category_name']=$arr[0]->category_name;
            $result['category_slug']=$arr[0]->category_slug;
            $result['category_parent_id']=$arr[0]->category_parent_id;
            $result['desc']=$arr[0]->desc;
            $result['meta_key']=$arr[0]->meta_key;
            $result['meta_des']=$arr[0]->meta_des;
            $result['meta_title']=$arr[0]->meta_title;
            $result['image']=$arr[0]->image;
            $result['id']=$arr[0]->id;
        }
        else{
            $result['category_name']='';
            $result['category_slug']='';
            $result['category_parent_id']='';
            $result['desc']='';
            $result['image']='';
            $result['meta_key']='';
            $result['meta_des']='';
            $result['meta_title']='';
            $result['id']='';
        }
        $result['category'] = DB::table('categories')->where(['status'=>1])->get(); 
        return view('admin/manage_category',$result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function manage_category_process(Request $request)
    {
        if($request->post('id')>0){
        $image_validation="mimes:jpeg,jpg,png";
     }
     else{
        $image_validation="required|mimes:jpeg,jpg,png";
     }
    $request->validate([
        'category_name'=>'required',
        'image'=>$image_validation,
        'category_slug'=>'required|unique:categories,category_slug,'.$request->post('id'),
       


    ]);
    // $model= new Category();
    // $model= new Category();
    if($request->post('id')>0){
       $model=Category::find($request->post('id'));
       $msg = "Category Update";
    }
    else{
        $model=new Category();
        $msg = "Category Insert";
    }
    if($request->hasfile('image')){
        $image=$request->file('image');
        $ext=$image->extension();
        $image_name=time().'.'.$ext;
        $image->storeAs('/public/media',$image_name);
        $model->image= $image_name;
    }
    $model->category_name=$request->post('category_name');
    $model->category_parent_id=$request->post('category_parent_id');
    // print_r($model->id);die;
    $model->category_slug=$request->post('category_slug');
    $model->meta_title=$request->post('meta_title');
    $model->meta_key=$request->post('meta_key');
   
    $model->desc=$request->post('desc');
    $model->meta_des=$request->post('meta_des');
    $model->status=1;
    $model->save();
    $request->session()->flash('message',$msg);
    return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
       $model=Category::find($id);
       $model->delete();
       $request->session()->flash('message','Category Delete');
       return redirect('admin/category');
    }
    public function status(Request $request,$type,$id)
    {
       $model=Category::find($id);
       $model->status=$type;
       $model->save();
       $request->session()->flash('message','Category status updated');
       return redirect('admin/category');
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data'] =Size::all();
       return view('admin/size',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_size(Request $request,$id='')
    {
        if($id>0){
            $arr=Size::where(['id'=>$id])->get();
            $result['size']=$arr[0]->size;
            $result['id']=$arr[0]->id;
        }
        else{
            $result['size']='';
            $result['id']='';
        }
        return view('admin/manage_size',$result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function manage_size_process(Request $request)
    {
        // return $request->post();

        $request->validate([
            
            'size'=>'required|unique:sizes,size,'.$request->post('id'),

        ]);
        // $model= new Category();
        if($request->post('id')>0){
           $model=Size::find($request->post('id'));
           $msg = "Size Update";
        }
        else{
            $model=new Size();
            $msg = "Size Insert";
        }
        $model->size=$request->post('size');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/size');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $Size
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
       $model=Size::find($id);
       $model->delete();
       $request->session()->flash('message','Product Size');
       return redirect('admin/Size');
    }
    public function status(Request $request,$type,$id)
    {
       $model=Size::find($id);
       $model->status=$type;
       $model->save();
       $request->session()->flash('message','Size status updated');
       return redirect('admin/size');
    
    }

    
}

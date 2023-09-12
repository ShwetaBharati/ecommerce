@extends('admin/layout')

@section('page_title','Size')
@section('container') 

<div class="row">
{{session('message')}}
    <h1>Size</h1>
    
    <br>
      
                            <div class="col-lg-12">
                            <a href="size/manage_size">
    <button type="button" class="btn btn-success">
        Add Size
    </button>
</a>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                
                                                <th>order ID</th>
                                                <th>Size</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $list)
                                            <tr>
                                               
                                                <td>{{$list->id}}</td>
                                                <td>{{$list->size}}</td>
                                              
                                                <td>
                                                    @if($list->status==1)
                                                    <a href="{{url('admin/size/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
                                                    @elseif($list->status==0)
                                                    <a href="{{url('admin/size/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                                                    @endif
                                                    <a href="{{url('admin/size/delete')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    <a href="{{url('admin/size/manage_size/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                                                </td>
                                               
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                          
                        </div>

@endsection
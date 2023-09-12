@extends('admin/layout')

@section('page_title','TopBanner')
@section('container')

<div class="row">
    {{session('message')}}
    <h1>Ad Top Banner</h1>
    <br>
    <div class="col-lg-12">
        <a href="banner/manage_top_banner">
            <button type="button" class="btn btn-success">
                Add Top Banner
            </button>
        </a>
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Banner name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->name}}</td>
                        <td>
                            @if($list->image!='')
                            <img src="{{asset('storage/app/public/media/'.$list->image)}}" width="100">
                            @endif
                        </td>
                        <td>
                            @if($list->status==1)
                            <a href="{{url('admin/top_banner/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
                            @elseif($list->status==0)
                            <a href="{{url('admin/top_banner/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                            @endif
                            <a href="{{url('admin/top_banner/delete')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                            <a href="{{url('admin/banner/manage_top_banner/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
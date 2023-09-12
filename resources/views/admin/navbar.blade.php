@extends('admin/layout')

@section('page_title','Nvabar')
@section('container')

<div class="row">
    {{session('message')}}
    <div>

    </div>
    <h1>Navbar</h1>
    <div style="margin-left:50rem;">
    <a href="navbar/manage_navbar">
            <button type="button" class="btn btn-success">
                Add Navbar
            </button>
        </a>
    </div>
    <br>

    <div class="col-lg-12">
        <!-- <a href="category/manage_category">
            <button type="button" class="btn btn-success">
                Add Category
            </button>
        </a> -->
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>

                        <th>S.no</th>
                        <th>Navbar name</th>
                        <th>Navbar Slug</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>

                        <td>{{$list->id}}</td>
                        <td>{{$list->name}}</td>
                        <td>{{$list->slug}}</td>
                        <td>
                            @if($list->status==1)
                            <a href="{{url('admin/navbar/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
                            @elseif($list->status==0)
                            <a href="{{url('admin/navbar/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                            @endif
                            <a href="{{url('admin/navbar/delete')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                            <a href="{{url('admin/navbar/manage_navbar/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection

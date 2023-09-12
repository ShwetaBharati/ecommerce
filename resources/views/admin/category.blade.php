@extends('admin/layout')

@section('page_title','Category')
@section('container')

<div class="row">
    {{session('message')}}
    <div>

    </div>
    <h1>Navbar</h1>
    <div style="margin-left:50rem;">
    <a href="category/manage_category">
            <button type="button" class="btn btn-success">
                Add Navbar
            </button>
        </a>
    </div>
    <br>

    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>order ID</th>
                        <th>Category name</th>
                        <th>Category Slug</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>

                        <td>{{$list->id}}</td>
                        <td>{{$list->category_name}}</td>
                        <td>{{$list->category_slug}}</td>
                        <td>
                            @if($list->status==1)
                            <a href="{{url('admin/category/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
                            @elseif($list->status==0)
                            <a href="{{url('admin/category/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                            @endif
                            <a href="{{url('admin/category/delete')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                            <a href="{{url('admin/category/manage_category/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection

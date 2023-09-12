@extends('admin/layout')

@section('page_title', 'Product')
@section('container')

    <div class="row">
        {{ session('message') }}
        <h1>Product</h1>

        <br>

        <div class="col-lg-12">
            <a href="product/manage_product">
                <button type="button" class="btn btn-success">
                    Add Product
                </button>
            </a>
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>

                            <th>order ID</th>
                            <th>Product name</th>
                            <th>Product Slug</th>
                            <th>Image</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>

                                <td>{{ $list->id }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->slug }}</td>
                                <td>
                                    @if ($list->image != '')
                                        <img src="{{ asset('storage/media/' . $list->image) }}" width="100">
                                    @endif

                                </td>
                                <td>
                                    @if ($list->status == 1)
                                        <a href="{{ url('admin/product/status/0') }}/{{ $list->id }}"><button
                                                type="button" class="btn btn-primary">Active</button></a>
                                    @elseif($list->status == 0)
                                        <a href="{{ url('admin/product/status/1') }}/{{ $list->id }}"><button
                                                type="button" class="btn btn-warning">Deactive</button></a>
                                    @endif
                                    <a href="{{ url('admin/product/delete') }}/{{ $list->id }}"><button type="button"
                                            class="btn btn-danger">Delete</button></a>
                                    <a href="{{ url('admin/product/manage_product/') }}/{{ $list->id }}"><button
                                            type="button" class="btn btn-success">Edit</button></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection

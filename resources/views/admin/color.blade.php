@extends('admin/layout')

@section('page_title', 'Color')
@section('container')

    <div class="row">
        {{ session('message') }}
        <h1>Color</h1>

        <br>

        <div class="col-lg-12">
            <a href="color/manage_color">
                <button type="button" class="btn btn-success">
                    Add Color
                </button>
            </a>
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>

                            <th>order ID</th>
                            <th>Color</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $list)
                            <tr>

                                <td>{{ $list->id }}</td>
                                <td>{{ $list->color }}</td>

                                <td>
                                    @if ($list->status == 1)
                                        <a href="{{ url('admin/color/status/0') }}/{{ $list->id }}"><button type="button"
                                                class="btn btn-primary">Active</button></a>
                                    @elseif($list->status == 0)
                                        <a href="{{ url('admin/color/status/1') }}/{{ $list->id }}"><button
                                                type="button" class="btn btn-warning">Deactive</button></a>
                                    @endif
                                    <a href="{{ url('admin/color/delete') }}/{{ $list->id }}"><button type="button"
                                            class="btn btn-danger">Delete</button></a>
                                    <a href="{{ url('admin/color/manage_color/') }}/{{ $list->id }}"><button
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

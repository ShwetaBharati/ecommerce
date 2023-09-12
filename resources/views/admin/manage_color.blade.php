@extends('admin/layout')
@section('page_title', 'Manage Color')

@section('container')




    <div class="row">
        <h1> Manage Color</h1>
        <br>

        <div class="col-lg-12">
            <a href="color">
                <button type="button" class="btn btn-success">
                    Back Color
                </button>
            </a>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Manage Color</h3>
                </div>
                <hr>


                <form action="{{ route('color.manage_color_process') }}" method="post">
                    @csrf

                    <div class="form-group has-success">
                        <label for="cc-name" class="control-label mb-1">color name</label>
                        <input id="cc-name" name="color" type="text" class="form-control cc-name valid"
                            value="{{ $color }}" required>
                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                            data-valmsg-replace="true"></span>
                        @error('color')
                            {{ $message }}
                        @enderror
                    </div>


                    <div>
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">

                            <span id="payment-button-amount">Submit</span>

                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
@endsection

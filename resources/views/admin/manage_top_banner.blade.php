@extends('admin/layout')
@section('page_title','Manage Top Banner')
@section('container')
<!-- @if($id>0) 
       {{$image_required=""}}
       @else
       {{$image_required="required"}}
   @endif -->
<div class="row">
    <h1> Manage Top Banner</h1>
    {{session('sku_error')}}

    <br>
    <div class="col-lg-12">

        <form action="{{route('banner.manage_top_banner_process')}}" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Manage Top Banner</h3>
                </div>
                <hr>
                @csrf
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Banner name</label>

                    <input id="cc-name" name="name" type="text" class="form-control cc-name valid" value="{{$name}}" required>
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    @error('banner')
                    {{$message}}
                    @enderror
                </div>

                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Banner Image</label>
                    <br>
                    @if($image!='')
                    <img src="{{asset('storage/app/public/media/'.$image)}}" width="100">
                    @endif
                    <input id="cc-name" name="image" type="file" class="form-control cc-name valid" value="" {{$image_required}}>
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    @error('image')
                    {{$message}}
                    @enderror
                </div>

                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Meta Title</label>
                    <input id="cc-name" name="meta_title" type="text" class="form-control cc-name valid" value="{{$meta_title}}" required>
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    @error('product')
                    {{$message}}
                    @enderror
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Meta Keyword</label>
                    <input id="cc-name" name="meta_keyword" type="text" class="form-control cc-name valid" value="{{$meta_keyword}}" required>
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    @error('product')
                    {{$message}}
                    @enderror
                </div>

                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Desc</label>
                    <textarea id="desc" name="desc" type="text" class="form-control" aria-required="true" required>{{$desc}}</textarea>
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    @error('desc')
                    {{$message}}
                    @enderror
                </div>
                <div class="form-group has-success">
                    <label for="cc-name" class="control-label mb-1">Meta Description</label>
                    <input id="cc-name" name="meta_desc" type="text" class="form-control cc-name valid" value="{{$meta_desc}}" required>
                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                    @error('meta_desc')
                    {{$message}}
                    @enderror
                </div>

                <input type="hidden" name="id" value="{{$id}}">
            </div>

            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                <span id="payment-button-amount">Submit</span>
            </button>
        </form>
    </div>
</div>
<script>
    CKEDITOR.replace('desc', {
        height: 300,
        filebrowserUploadUrl: "upload.php"
    });
</script>
@endsection
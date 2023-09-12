@extends('admin/layout')
@section('page_title','Manage Navbar')

@section('container') 

@if($id>0)
{{$image_required=""}}
@else
{{$image_required="required"}}
@endif
    
    
    <div class="row">
    <h1> Manage Navbar</h1>
    <br>
    
                            <div class="col-lg-12">
                            
                            <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Manage Navbar</h3>
                                        </div>
                                        <hr>

                                      
                                        <form action="{{route('navbar.manage_navbar_process')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Navbar name</label>
                                                <input id="cc-name" name="name" type="text" class="form-control cc-name valid" value="{{$slug}}" required>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                             @error('name')
                                             {{$message}} 

                                             @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Navbar Slug</label>
                                                <input id="cc-number" name="slug" type="text" class="form-control cc-number identified visa" value="{{$slug}}" 
                                                  required>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                @error('slug')
                                             {{$message}} 

                                             @enderror
                                            </div>
                                            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Navbar Image (The image must be a file of type: jpeg, jpg, png.)*</label>
               <br>
               
               <input id="cc-name" name="image" type="file" class="form-control cc-name valid" accept="image/png, image/gif, image/jpeg" value="" {{$image_required}}>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               
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
               <label for="cc-name" class="control-label mb-1">Meta Title</label>
               <input id="cc-name" name="meta_title" type="text" class="form-control cc-name valid" value="{{$meta_title}}" required="true">
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('product')
               {{$message}}
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Meta Description</label>
               <input id="cc-name" name="meta_des" type="text" class="form-control cc-name valid" value="{{$meta_des}}" required="true">
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('meta_des')
               {{$message}}
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Meta Keyword</label>
               <input id="cc-name" name="meta_key" type="text" class="form-control cc-name valid" value="{{$meta_key}}" required="true">
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('product')
               {{$message}}
               @enderror
            </div>
          
                                            <div>
                                            <input type="hidden" name="id" value="{{$id}}">
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
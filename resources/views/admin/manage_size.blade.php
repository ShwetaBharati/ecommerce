@extends('admin/layout')
@section('page_title','Manage Size')

@section('container') 


    
    
    <div class="row">
    <h1> Manage Size</h1>
    <br>
    
                            <div class="col-lg-12">
                            <a href="size">
    <button type="button" class="btn btn-success">
       Back Size
    </button>
</a>
                            <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Manage Size</h3>
                                        </div>
                                        <hr>

                                      
                                        <form action="{{route('size.manage_size_process')}}" method="post">
                                            @csrf
                                            
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Size name</label>
                                                <input id="cc-name" name="size" type="text" class="form-control cc-name valid" value="{{$size}}" required>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                             @error('size')
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
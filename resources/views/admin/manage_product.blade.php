@extends('admin/layout')
@section('page_title','Manage Product')
@section('container') 
@if($id>0)
{{$image_required=""}}
@else
{{$image_required="required"}}
@endif
<div class="row">
   <h1> Manage Product</h1>
   {{session('sku_error')}}
   
   <br>
   <div class="col-lg-12">
      <a href="color">
      <button type="button" class="btn btn-success">
      Back Product
      </button>
      </a>
      <form action="{{route('product.manage_product_process')}}" method="post" enctype="multipart/form-data">
         <div class="card-body">
            <div class="card-title">
               <h3 class="text-center title-2">Manage Product</h3>
            </div>
            <hr>
            @csrf
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Product name</label>
               <input id="cc-name" name="name" type="text" class="form-control cc-name valid" value="{{$name}}" required>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('product')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Product Slug</label>
               <input id="cc-name" name="slug" type="text" class="form-control cc-name valid" value="{{$slug}}" required>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('product')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Product Image</label>
               <input id="cc-name" name="image" type="file" class="form-control cc-name valid" value="" {{$image_required}}>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('image')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Categorys</label>
               <select name="category_id" id="category_id"  class="form-control cc-name valid">
                  <option value="">Select Ctaegories</option>
                  @foreach($category as $list)
                  @if($category_id==$list->id)
                  <option selected value="{{$list->id}}">
                  {{$list->category_name}}
                  </option>
                     @else   
                  <option value="{{$list->id}}">
                     {{$list->category_name}}
                  </option>
                  @endif
                  @endforeach
               </select>
               @error('product')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Brand</label>
               <input id="cc-name" name="brand" type="text" class="form-control cc-name valid" value="{{$brand}}"  required>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('product')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Model</label>
               <input id="cc-name" name="model" type="text" class="form-control cc-name valid" value="{{$model}}" required>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('product')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Purity</label>
               <input id="cc-name" name="pur" type="text" class="form-control cc-name valid" value="{{$pur}}" required>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('pur')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Short Desc</label>
               <textarea id="short_desc" name="short_desc" type="text" class="form-control" aria-required="true" required>{{$short_desc}}</textarea>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('short_desc')
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
               <label for="cc-name" class="control-label mb-1">Keywords</label>
               <input id="cc-name" name="keywords" type="text" class="form-control cc-name valid" value="{{$keywords}}" required>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('keywords')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Technical Specification</label>
               <input id="cc-name" name="technical_specification" type="text" class="form-control cc-name valid" value="{{$technical_specification}}" required>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('technical_specification')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Uses</label>
               <input id="cc-name" name="uses" type="text" class="form-control cc-name valid" value="{{$uses}}" required>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('uses')
               {{$message}} 
               @enderror
            </div>
            <div class="form-group has-success">
               <label for="cc-name" class="control-label mb-1">Warranty</label>
               <input id="cc-name" name="warranty" type="text" class="form-control cc-name valid" value="{{$warranty}}" required>
               <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
               @error('warranty')
               {{$message}} 
               @enderror
            </div>
            <input type="hidden" name="id" value="{{$id}}">
         </div>
         <div class="card-title">
            <h3 class="text-center title-2"> Product Attributes</h3>
           
         </div>
         <div class="card-body" id="product_attr_box">
            
            @php
         $loop_count_num=1;
         
         @endphp
         @foreach($productAttrArr as $key=>$val)
                @php
                $loop_count_prev=$loop_count_num;
                $pAArr=(array)$val;
                @endphp
                <input id="paid" name="paid[]" type="hidden"  value="{{$pAArr['id']}}" >
            <div class="row" id="product_attr_{{$loop_count_num++}}">
               
               
               <div class="col-lg-2">
                  <div class="form-group has-success">
                     <label for="cc-name" class="control-label mb-1">Sku</label>
                     <input id="cc-name" name="sku[]" type="text" class="form-control cc-name valid" value="{{$pAArr['sku']}}" required>
                     @error('sku')
                     {{$message}} 
                     @enderror
                  </div>
               </div>
               <div class="col-lg-2">
                  <div class="form-group has-success">
                     <label for="cc-name" class="control-label mb-1">Mrp</label>
                     <input id="cc-name" name="mrp[]" type="text" class="form-control cc-name valid" value="{{$pAArr['mrp']}}" required>
                     @error('product')
                     {{$message}} 
                     @enderror
                  </div>
               </div>
               
               <div class="col-lg-2">
                  <div class="form-group has-success">
                     <label for="cc-name" class="control-label mb-1">Price</label>
                     <input id="cc-name" name="price[]" type="text" class="form-control cc-name valid" value="{{$pAArr['price']}}" required>
                     @error('product')
                     {{$message}} 
                     @enderror
                  </div>
               </div>
               <div class="col-lg-2">
                  <div class="form-group has-success">
                     <label for="cc-name" class="control-label mb-1">Quantity</label>
                     <input id="cc-name" name="qty[]" type="text" class="form-control cc-name valid" value="{{$pAArr['qty']}}" required>
                     @error('product')
                     {{$message}} 
                     @enderror
                  </div>
               </div>
               <div class="col-lg-2">
                  <div class="form-group has-success">
                     <label for="cc-name" class="control-label mb-1">Weight</label>
                     <input id="cc-name" name="weight[]" type="text" class="form-control cc-name valid" value="{{$pAArr['weight']}}" required>
                     @error('product')
                     {{$message}} 
                     @enderror
                  </div>
               </div>
               <div class="col-lg-2">
                  <div class="form-group has-success">
                     <label for="cc-name" class="control-label mb-1">Color</label>
                     <select name="color_id[]" id="color_id"  class="form-control cc-name valid">
                        <option value="">Select color</option>
                        @foreach($color as $list)
                         @if($pAArr['color_id']==$list->id)
                        <option value="{{$list->id}}" selected>
                           {{$list->color}}
                        </option>
                        @else
                        <option value="{{$list->id}}">
                           {{$list->color}}
                        </option>
                        @endif
                        @endforeach
                     </select>
                     @error('product')
                     {{$message}} 
                     @enderror
                  </div>
               </div>
               <div class="col-lg-2">
                  <div class="form-group has-success">
                     <label for="cc-name" class="control-label mb-1">Size</label>
                     <select name="size_id[]" id="size_id"  class="form-control cc-name valid">
                        <option value="">Select size</option>
                        @foreach($size as $list)
                        @if($pAArr['size_id']==$list->id)
                        <option value="{{$list->id}}" selected>
                           {{$list->size}}
                        </option>
                        @else
                        <option value="{{$list->id}}">
                           {{$list->size}}
                        </option>
                        @endif
                        
                        @endforeach
                     </select>
                     @error('product')
                     {{$message}} 
                     @enderror
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="form-group has-success">
                     <label for="cc-name" class="control-label mb-1">Product Image</label>
                     <input id="cc-name" name="attr_image[]" type="file" class="form-control cc-name valid" value="" {{$image_required}}>
                    
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="form-group has-success">
                     Action:
                  </div>
                    @if($loop_count_num==2)
                  <button type="button"  class="btn  btn-success btn-sm" onclick="add_more()">
                  <span id="">ADD</span>
                  </button>
                  @else
                 <a href="{{url('admin/product/product_attr_delete/')}}/{{$pAArr['id']}}/{{$id}}"> <button type="button"  class="btn  btn-danger btn-sm">
                  <span id="">Remove</span></a>
                  </button>
                  @endif

               </div>
             
            </div>
            @endforeach
         </div>
         <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
         <span id="payment-button-amount">Submit</span>
         </button>
      </form>
   </div>
</div>
<script>
   var loop_count=1;
   function add_more()
   {
       loop_count++;
       var html ='<input id="paid" name="paid[]" type="hidden" ><div class="row" id="product_attr_'+loop_count+'">';
   
       html+='<div class="col-lg-2"><div class="form-group has-success"><label for="cc-name" class="control-label mb-1">Sku</label><input id="sku" name="sku[]" type="text" class="form-control cc-name valid" value="" required> @error('product') {{$message}} @enderror </div> </div>';
       html+='<div class="col-lg-2"><div class="form-group has-success"><label for="cc-name" class="control-label mb-1">MRP</label><input id="mrp" name="mrp[]" type="text" class="form-control cc-name valid" value="" required> @error('product') {{$message}} @enderror </div> </div>';
       html+='<div class="col-lg-2"><div class="form-group has-success"><label for="cc-name" class="control-label mb-1">Price</label><input id="price" name="price[]" type="text" class="form-control cc-name valid" value="" required> @error('product') {{$message}} @enderror </div> </div>';
       html+='<div class="col-lg-2"><div class="form-group has-success"><label for="cc-name" class="control-label mb-1">Qty</label><input id="qty" name="qty[]" type="text" class="form-control cc-name valid" value="" required> @error('product') {{$message}} @enderror </div> </div>';
       html+='<div class="col-lg-2"><div class="form-group has-success"><label for="cc-name" class="control-label mb-1">weight</label><input id="weight" name="weight[]" type="text" class="form-control cc-name valid" value="" required> @error('product') {{$message}} @enderror </div> </div>';
       var color_id_html = jQuery('#color_id').html();
       color_id_html=color_id_html.replace("selected","");
       html+='<div class="col-lg-2"><div class="form-group has-success"><label for="cc-name" class="control-label mb-1">Color</label><select id="color_id" name="color_id[]" type="text" class="form-control cc-name valid" value="" >'+color_id_html+'</select> </div> </div>';
       var size_id_html = jQuery('#size_id').html();
       size_id_html=size_id_html.replace("selected","");
       html+='<div class="col-lg-2"><div class="form-group has-success"><label for="cc-name" class="control-label mb-1">Size</label><select id="size_id" name="size_id[]" type="text" class="form-control cc-name valid" value="" >'+size_id_html+'</select> </div> </div>';
       html+='<div class="col-lg-4"><div class="form-group has-success"><label for="cc-name" class="control-label mb-1">Image</label><input id="attr_image" name="attr_image[]" type="file" class="form-control cc-name valid" value="" ></div> </div>';
       html+='<div class="col-lg-4"><div class="form-group has-success"> Action:</div><button type="button"  class="btn  btn-danger btn-sm" onclick=remove_more("'+loop_count+'")><span id="">Remove</span></button></div> </div>';
       html+='</div>';
       jQuery('#product_attr_box').append(html);
   }
   function remove_more(loop_count)
   {
       jQuery('#product_attr_'+loop_count).remove();
   }
</script>
@endsection
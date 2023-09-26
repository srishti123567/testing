@extends('layouts.main')
@section('content')
<style>
    label.error{color:red}
</style>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-body">
                <form id="form_edit" method="post" enctype="multipart/form-data"  action="{{url('/update_products')}}">
                    @csrf

                <h4 class="card-title" style="color:rgb(14, 14, 66)">Edit Product</h4>
                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Product Id</label>
                    <div class="col-md-9">
                        <input type="text" readonly value="{{$product->productId}}" class="form-control" id="productid" placeholder="Product Id" name="productid">
                    </div>

                    <input type="hidden" name="id" id="id" value="{{$product->id}}">
                </div>

                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Mobile No:</label>
                    <div class="col-md-9">
                        <input type="number" minlength="10"  value="{{$product->mobile}}" maxlength="13" class="form-control"  placeholder="Mobile No" id="mobile" name="mobile">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Product Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  value="{{ucfirst($product->productName)}}" id="prdname" placeholder="Product Name" name="prdname">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Product Type</label>
                    <div class="col-md-9">
                        <select class="select2 form-control custom-select" id="producttype" name="producttype" style="width: 100%; height:36px;">
                            <option value="">Select</option>
                            
                                <option value="Traditional" @if($product->ProductType=='Traditional') selected @endif>Traditional</option>
                                <option value="Casual" @if($product->ProductType=='Casual') selected @endif>Casual</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Colour</label>
                    <div class="col-md-9">
                        <select class="select2 form-control custom-select" id="color" name="color" style="width: 100%; height:36px;">
                            <option value="">Select</option>
                            
                                <option value="Black" @if($product->color=='Black') selected @endif>Black</option>
                                <option value="White" @if($product->color=='White') selected @endif>White</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Price</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="{{$product->price}}" id="price" placeholder="Price" name="price">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3">Product Image</label>
                    <div class="col-md-9">
                        <div class="custom-file">
                            <input type="file"  accept="image/png, image/jpeg,image/Jpeg,image/jpg" name="prdimage" id="prdimage" onchange='openFile(event);'>
                           
                           
                            
                        </div>
                        <div id="TheImageContents" style="padding-top: 12px;">

                            <img  width="100" height="100" src="{{url('assets/productimage/'.$product->product_image)}}">
            
                        </div>
                    </div>
                </div>

                
                
               
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        </div>

    </div>
</div>

@endsection


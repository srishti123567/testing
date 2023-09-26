@extends('layouts.main')
@section('content')
<style>
    label.error{color:red}
</style>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-body">
                <form id="form" method="post" enctype="multipart/form-data"  action="{{url('/save_products')}}">
                    @csrf

                <h4 class="card-title" style="color:rgb(14, 14, 66)">Add Products</h4>
                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Product Id</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="productid" placeholder="Product Id" name="productid">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Mobile No:</label>
                    <div class="col-md-9">
                        <input type="number" minlength="10" maxlength="13" class="form-control"  placeholder="Mobile No" id="mobile" name="mobile">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Product Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="prdname" placeholder="Product Name" name="prdname">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Product Type</label>
                    <div class="col-md-9">
                        <select class="select2 form-control custom-select" id="producttype" name="producttype" style="width: 100%; height:36px;">
                            <option value="">Select</option>
                            
                                <option value="Traditional">Traditional</option>
                                <option value="Casual">Casual</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Colour</label>
                    <div class="col-md-9">
                        <select class="select2 form-control custom-select" id="color" name="color" style="width: 100%; height:36px;">
                            <option value="">Select</option>
                            
                                <option value="Black">Black</option>
                                <option value="White">White</option>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Price</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="price" placeholder="Price" name="price">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3">Product Image</label>
                    <div class="col-md-9">
                        <div class="custom-file">
                            <input type="file"  accept="image/png, image/jpeg,image/Jpeg,image/jpg" name="prdimage" id="prdimage" onchange='openFile(event);'>
                           
                           
                            
                        </div>
                        <div id="TheImageContents" style="padding-top: 12px">
	
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


@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Product List</h4>
        <div style="padding-bottom: 14px;margin-left: 674px;font-size: 19px;"><a href="{{url('/add_products')}}"><button type="button" class="btn btn-cyan btn-sm text-white" fdprocessedid="4o10rl">

          <i class="mdi mdi-plus fs-3 font-16"></i> Add New Product</button></a></div>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Serial No:</th>
                        
                        <th>Image</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Mobile</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                @foreach($productlist as $products)
                    <tr>
                        <td>{{$i}}</td>
                        <td><img src="{{url('assets/productimage/'.$products->product_image)}}" width="50Px" height="50Px"></td>
                        <td>{{ucfirst($products->productId)}}</td>
                        <td>{{ucfirst($products->productName)}}</td>
                        <td>{{$products->ProductType}}</td>
                        <td>{{$products->mobile}}</td>
                        <td>{{$products->color}}</td>
                        <td>{{$products->price}}</td>
                        <th><a href="{{url('/edit_products/'.$products->id)}}"><button type="button" class="btn btn-cyan btn-sm text-white" fdprocessedid="wf07gv">
                            Edit
                          </button></a>
                          <button type="button" class="btn btn-danger btn-sm text-white" fdprocessedid="pvth1" onclick="deleteproduct({{$products->id}})">
                            Delete
                          </button>
                        </th>
                    </tr>
                    <?php $i++;?>
                @endforeach
                    
                </tbody>
               
            </table>
        </div>

    </div>
</div>

@endsection
@section('scripts')
@endsection

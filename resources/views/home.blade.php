@extends('layouts.main')

@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
              <i class="fa fa-user m-b-5 font-16"></i>
              <h5 class="m-b-0 m-t-5">{{$usercount}}</h5>
              <small class="font-light">Total Users</small>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
               <i class="fa fa-product-hunt" aria-hidden="true"></i>
              <h5 class="m-b-0 m-t-5">{{$productcount}}</h5>
              <small class="font-light">Total Products</small>
            </div>
        </div>
    </div>
     <!-- Column -->
   
</div>
@endsection

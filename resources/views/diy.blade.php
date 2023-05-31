@extends('layouts.app')
@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
<div class="row">
  <img src="../img/bar2.png" alt="f" style="padding:0%;" width="200px">
  </div>
    
<div class="row d-flex justify-content-center" >
  <div class="col-6" style="text-align: center;font-family: Tajawal;margin-bottom: 20px;">
  <h1 style="color:#5D6D7E">... أهلا بـكـم في المتجر</h1>
  </div>
  </div>

  <div class="row">
    <img src="../img/bar.png" alt="f" style="padding:0%;" width="200px">
    </div>
    <div class=" " style="margin-top: 29px; ">
<div class="row d-flex justify-content-center" >
      @foreach ($products as $item)
        
      
        <div class="card col-sm-12 col-md-4 col-lg-3" style="width: 18em;padding:0%; background: #EBEDEF; margin:10px; ">
      
          <img class="card-img-top" src="img\{{$item->img}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <p class="card-text">{{$item->description}}</p>
            <p class="card-text">{{$item->moredescription}}</p>
            <h1>{{$item->price}}</h1>
            <a href="/checkout/{{$item->id}}" class="btn btn-primary">اضف الى السلة</a>
          </div>
        </div>
      
      

      @endforeach
    </div>


    </div>
    @endsection
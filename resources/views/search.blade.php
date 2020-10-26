@extends('master')
@section('content')
  
   <div class="custom-product " style="padding-top: 2%;">
    <div class="row">
          <div class="col-sm-4">
      	<a href="">Filter</a>
      </div>
      <div class="col-sm-4">
      	<div class="trending-wrapper">
          <h1 class="">Result for product</h1>
           <div class=" ">
		    	@foreach($products as $item)
		         <div class="search-item">
		           <a href="detail/{{$item['id']}}">	
			           <img class="trnding_img" src="{{$item['gallery']}}" >
					   <div class="">
					      <h2>{{$item['name']}}</h2>
					      <h6>{{$item['description']}}</h6> 	 
					    </div>
		            </a> 
		         </div>
            </div>
		     @endforeach
	        </div>
        </div>       	
      </div>	
    </div>
    
@endsection
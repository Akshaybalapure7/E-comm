@extends('master')
@section('content')
  
   <div class="custom-product " style="padding-top: 2%;">  
      <div class="col-sm-10">
      	<div class="trending-wrapper">
          <h1 class="">Orders List</h1>
           
		    	  @foreach($orders as $item)
		         <div class=" row search-item cart-list-devider">
  		           <div class="col-sm-3">
                    <a href="detail/{{$item->id}}"> 
                       <img class="list_img" src="{{$item->gallery}}" >
                    </a> 
                 </div>
                 <div class="col-sm-3">
                     <div class="">
                       <h2>Product Name :  {{$item->name}}</h2>
                       <h6>Product Status: {{$item->status}}</h6>
                       <h6>Payment Status:{{$item->payment_status}}</h6>
                       <h6>Payment Method:{{$item->payment_method}}</h6>  
                       <h6>Delivery Address:{{$item->address}}</h6> 
                     </div> 
                 </div>
                 <div class="col-sm-3">
                         
                </div>
		         
             </div>
              @endforeach
         </div>
		       
	        </div>
        </div>       		
    </div>
    
@endsection
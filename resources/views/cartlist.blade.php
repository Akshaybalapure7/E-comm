@extends('master')
@section('content')
  
   <div class="custom-product " style="padding-top: 2%;">  
      <div class="col-sm-10">
      	<div class="trending-wrapper">
          <h1 class="">Cart List</h1>
          <a class="btn btn-success order_btn" href="/orderNow">Order Now</a>
           <div class=" ">
		    	  @foreach($products as $item)
		         <div class=" row search-item cart-list-devider">
  		           <div class="col-sm-3">
                    <a href="detail/{{$item->id}}"> 
                       <img class="list_img" src="{{$item->gallery}}" >
                    </a> 
                 </div>
                 <div class="col-sm-3">
                     <div class="">
                       <h2>{{$item->name}}</h2>
                       <h6>{{$item->description}}</h6>   
                     </div> 
                 </div>
                 <div class="col-sm-3">
                         <div class="">
                          <a href="/removeProduct/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>  
                         </div>    
                </div>
		         
             </div>
              @endforeach
              <a class="btn btn-success order_btn" href="/orderNow">Order Now</a>
            </div>
		       
	        </div>
        </div>       		
    </div>
    
@endsection
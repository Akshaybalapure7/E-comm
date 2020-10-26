@extends('master')
@section('content')
 <div class="container custom_detail">
 	 <div class="row">
 	 	<div class='col-sm-6'>
 	 		<img class="detail-img" src="{{$products['gallery']}}">
 	 	</div>
 	 	<div class='col-sm-6'>
 	 		<a href="/">Go back</a>
 	 		<h2 class="p_detail">Name :{{$products['name']}}</h2>
 	 		<h3 class="p_detail">Price :{{$products['price']}}</h3>
 	 		<h4 class="p_detail">Category :{{$products['category']}}</h4>
 	 		<h4 class="p_detail">Description :{{$products['description']}}</h4>

 	 		<form action="/add_to_cart" method="POST" >
 	 			@csrf
 	 			<input type="hidden" name='product_id' value="{{$products['id']}}">
				<button class="btn btn-success p_detail_b">Add to cart</button>
 	 		</form>
 	 		<button class="btn btn-primary p_detail_b">Buy Now</button>
 	 	</div>
 	 </div>
 </div>

@endsection
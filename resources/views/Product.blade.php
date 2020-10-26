@extends('master')
@section('content')
  
     
       <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
         
		  <ul class="carousel-indicators">
		 @foreach($products as $item)
		    <li data-target="#demo" data-slide-to="{{$item['id']}}" class="{{$item['id']==1?'active':''}}"></li>
		 @endforeach
		 <!--    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li> -->
		  </ul>
         
		  <!-- The slideshow -->
		  <div class="carousel-inner ">
		  	@foreach($products as $item)
		    <div class="carousel-item {{$item['id']==1?'active':''}} ">
             <a href="detail/{{$item['id']}}">
			      <img class="C_img" src="{{$item['gallery']}}" alt="Los Angeles">
			      <div class="carousel-caption  c_text">
			    	<h1>{{$item['name']}}</h1><br>
			    	<p>{{$item['description']}}</p>
			      </div>
		      </a>
		    </div>
		    
		    @endforeach
		  </div>
          <!--   -->

		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>

       </div>

        <div class="trending-wrapper" style="margin-bottom:2%;">
          <h1 class="text-center">Trending Products</h1>
          <div class=" ">
		  	@foreach($products as $item)
		    <div class="trending-item">
		     <a href="detail/{{$item['id']}}">	
		      <img class="trnding_img" src="{{$item['gallery']}}" >
			      <div class="">
			    	<h3>{{$item['name']}}</h3>
			    	 
			      </div>
		     </a> 
		    </div>
        </div>
		 @endforeach
	</div>
@endsection
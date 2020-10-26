<!DOCTYPE html>
<html>
<head>
	<title>E-commers</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- jQuery and JS bundle w/ Popper.js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
<style type="text/css">
	

	.custom-login{
		height:50px;
		margin-left: 30%;
		 margin-top:5%;
	}

img.C_img {
    height: 500px;
    
    width: 100%;
}

div#demo {
    background-color: black;
}
.trnding_img{
	height:100px;
}
.trending-item
{
	float:left;
	width:19%;
}
.trending-wrapper{
	margin-left:2% ;
}
.detail-img
{
	height:300px;
}

.p_detail{
	padding-top:2%;
}
.p_detail_b{
   display: block;
   margin-top: 2%;
}
.custom_detail{
	margin-top: 5%;
}
 
.list_img{
   height:129px;
}
.row.search-item.cart-list-devider {
    border-bottom: 1px solid black;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
.order_btn{
	margin-bottom: 20px;
}

</style>
 
 
</html>
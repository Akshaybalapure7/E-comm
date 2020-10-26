@extends('master')
@section('content')
  
   <div class="container order_now" style="padding-top: 2%;">  
      <div class="col-sm-7">
         <table class="table">
             
            <tbody>
              <tr>
                <td>Price</td>
                <td>{{$total}} INR</td>
                 
              </tr>
              <tr>
                <td>Tax</td>
                <td>0 INR</td>
                 
              </tr>
              <tr>
                <td>Delivery Charges</td>
                <td>100 INR</td>
              </tr>
              <tr>
                <td>Total </td>
                <td>{{$total+100}} INR</td>
              </tr>
            </tbody>
          </table>

      

      <form method="POST" action="orderPlace">
        @csrf
        <div class="form-group">
          <textarea  name="address" placeholder="Enter your address" class="form-control">
          </textarea>
        </div>
        <div>
          <label>Payment Mehtode</label>
          <p><input type="radio" value="cash" name="payment"><span>Online Payment</span></p>
          <p><input type="radio" value="cash" name="payment"><span>EMI Payment</span></p> 
          <p><input type="radio" value="cash" name="payment"><span>Payment on delivery</span></p>  
        </div>
        <button type="Submit" class="btn btn-primary">Order Now</button>        
      </form>
	    </div> 	
    </div>
    
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
@include('frontend.css')

<style type="text/css">

    .center
    {
        margin:auto;
        width:100%;
        text-align:center;
        padding:30px;
    }
    .img_de
    {
        height:100px;
        width:100px;
    }
    .total_de
    {
        font-size:30px;
        padding:40px;
    }
</style>
</head>

<body>

<div class="super_container">

	<!-- Header -->

	@include('frontend.header')

    <br><br><br><br><br><br><br><br>

    @if(Auth::user()->hasrole('user'))
    <div class="heading_container heading_center">
        <h2 style="text-align: center; color: red; font-size:30px; font-weight:30px;">
           <strong></strong> <span><strong> Orders</strong></span>
        </h2>
     </div>

    
    <div class="center">
        <table class="table">
                 <tr>
                   <th>Product Title</th>
                   <th>Quantity</th>
                   <th>Price</th>
                   <th>Image</th>
                   <th>Payment Status</th>
                   <th>Delivery Status</th>
                   <th>Order cancel</th>
                 </tr>
                 @foreach ($order as $order)
                    <tr>
                       <td>{{$order->product_title}}</td>  
                       <td>{{$order->quantity}}</td>
                       <td>{{$order->price}}</td>            
                       <td class="img_de"> <img src="/product/{{$order->image}}" alt=""> </td> 
                       <td>{{$order->payment_status}}</td> 
                       <td>{{$order->delivery_status}}</td>
                       <td>
                          @if($order->delivery_status=='processing')
                       <a onclick="return confirm('Are you sure you want to cancel this order !!!')" 
                        class="btn btn-danger" href="{{url('/cancel_order',$order->id)}}" >Order Cancel</a>
                       
                       @else
                       <p style="color:blueviolet;">Not Allowed</p>
                           
                       @endif
                       </td>
                    </tr>
                 @endforeach
        </table>
     </div>

	

	<!-- Newsletter -->

        @include('frontend.letter')

	<!-- Footer -->

        @include('frontend.footer')

</div>

        @include('frontend.script')

        @endif
</body>

</html>
        
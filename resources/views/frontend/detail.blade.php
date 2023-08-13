<style type="text/css">

   .heading_container 
{
  display: flex;
  flex-direction: column;
  align-items: flex-start;

  h2 {
    position: relative;
    margin-bottom: 0;
    font-size: 2.5rem;
    font-weight: bold;

    span {
      color: $primary1;
    }
  }

  p {
    margin-top: 10px;
    margin-bottom: 0;
  }

  &.heading_center {
    align-items: center;
    text-align: center;
  }
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    
@include('frontend.css')
</head>

<body>
  <div class="super_container">

	<!-- Header -->

	@include('frontend.header')
           


   
        
  <div class="row">

   <div class="col-sm-3">
      <br><br> <br><br>
      
   </div>
       <div class="col-sm-3">
         <br><br> <br><br>
          <img style=" margin-left:50px;"src="/product/{{$product->image}}" alt="">
      </div>
      <div class="col-sm-6">
         <br>
         <br>
         <br>
         <br>
         <br>
          
                  <h2> {{$product->title}}</h2>
      
                  <h3>Details: {{$product->description}} </h3>
      
                  <h3>Category:{{$product->catagory}} </h3>
                  @if($product->discount_price!=null)    

   
                       <h6 style="color:red;">
                         Discount Price
                         <br>
                          ${{$product->discount_price}}
                       </h6>
                       <h6 style="text-decoration:line-through; color:blue;">
                       price
                       <br>

                          ${{$product->price}}
                       </h6>
                       @else
                       <h6 style="color:blue;">
                        price
                        <br>
                           ${{$product->price}}
                        </h6>
                           
                       @endif
     
                       <form action="{{url('/add_cart',$product->id)}}" method="POST">

                        @csrf
                        
                        
                        <input type="number" name="quantity" value="1" min="1" style="width:100px;">
                        <br>
                        <br>
                        
                                       <input style="border-radius:20px;" class="btn btn-danger"  type="submit" value="Add Cart">
                                       <br><br>
                                         <!-- <a href="" class="btn btn-success">Buy Now</a>-->
                                          <a href="{{url('/')}}" class="btn btn-primary">Go Back</a>

                     </form>                                  
      </div>
   </div>     



        @include('frontend.letter')

	<!-- Footer -->

        @include('frontend.footer')

</div>

        @include('frontend.script')
</body>

</html>

        
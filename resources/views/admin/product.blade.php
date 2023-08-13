
<style type="text/css">
    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }
    .h1_size
    {
        font-size: 30px;
        padding-bottom: 20px; 
        color: blue;     
    }
    .text_color
    {
        color:black;
        padding-bottom: 20px;
    }
    .lable 
    {
      display:inline-block;
      width:200px;
    }

 </style>

<x-admin-layout>
<div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            
                            <div class="div_center">

                                <h1 class="h1_size">Add Products</h1>
                 
                                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                                 @csrf
                 
                                <div>
                                <label> Product Title:</label>
                                 <input class="text_color" type="text" name="title" placeholder="Write Title" required="">
                                </div>
                 
                                <br>
                 
                 
                                <div>
                                <label> Product Description:</label>
                                 <input class="text_color" type="text" name="description" placeholder="Write description" required="">
                                </div>
                 
                                <br>
                 
                                <div>
                                <label> Product Price:</label>
                                 <input class="text_color" type="number" min="1" name="price" placeholder="Write Price" required="">
                                </div>
                 
                                <br>
                                <div>
                                    <label> Product Discount Price:</label>
                                     <input class="text_color" type="number" min="1" name="disprice" placeholder="Write Disct Price">
                                    </div>
                     
                                    <br>
                 
                                <div>
                                <label> Product Quantity:</label>
                                 <input class="text_color" type="number" name="quantity" min="0" placeholder="Write Quantity" required="">
                                </div>
                 
                                <br>
                 
                                
                 
                                <div>
                                <label> Product Catagory:</label>
                                 <select class="text_color" name="catagory" required="">
                                   <option value="" selected="">Select Catagory</option>
                 
                                   @foreach($catagory as $catagory)
                                     <option value="{{$catagory->catagory_name}}"> {{$catagory->catagory_name}}</option>
                 
                                     @endforeach
                                 </select>
                                </div>
                 
                                <br>
                 
                                <div>
                                <label> Product Image:</label>
                                 <input type="file" name="image" required="">
                                </div>
                 
                                <br>
                 
                                <div>
                                 <input type="submit" 
                                 class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md"
                                 value="Add Product" class="btn btn-primary">
                                </div>
                 
                       </form>
                 
                 
                                </div>
                 
                              </div>

                               
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</x-admin-layout>
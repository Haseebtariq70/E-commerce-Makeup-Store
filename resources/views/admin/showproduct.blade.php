
<style class="text/css">
    .img_size
    {
        width:100px;
        height:100px:
    }
    .div_center
        {
            text-align: center;
            padding-top: 20px;

        }
        .h1_font
        {
            font-size: 40px;
            padding-bottom: 20px;
            color:rgb(23, 23, 233);
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

                                    <h1 class="h1_font">Products</h1>

                      

                             </div>
                            <table class="center">
                                <thead class="bg-gray-50">
                                    <tr>
                                        
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Title</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Price </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Quantity</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Discription</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Category</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Discount Price</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Image</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Update</th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($product as $product)
                                        <tr>
                                                    <td scope="col" class="px-6 py-3 text-center  font-mediun text-gray-500  tracking-wider">{{$product->title}}</td>
                                                    <td scope="col" class="px-6 py-3 text-center  font-medium text-gray-500  tracking-wider">{{$product->price}}</td>
                                                    <td scope="col" class="px-6 py-3 text-center  font-medium text-gray-500  tracking-wider">{{$product->quantity}}</td>
                                                    <td scope="col" class="px-6 py-3 text-center  font-medium text-gray-500  tracking-wider">{{$product->description}}</td>
                                                    <td scope="col" class="px-6 py-3 text-center  font-medium text-gray-500  tracking-wider">{{$product->catagory}}</td>
                                                    <td scope="col" class="px-6 py-3 text-center  font-medium text-gray-500  tracking-wider">{{$product->discount_price}}</td>
                                                    <td scope="col" class="px-6 py-3 text-center  font-medium text-gray-500  tracking-wider">
                                                        <img class="img_size" src="/product/{{$product->image}}" >
                                                    </td>
                                                    <td scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500  tracking-wider"> 
                                                        <div class="flex justify-end">
                                                            <div class="flex space-x-2">
                                                             <a onclick="return confirm('Are you sure to delete this.')" 
                                                             href="{{url('/delete_product',$product->id)}}"
                                                             class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td scope="col" class="px-6 py-3 text-center  font-medium text-gray-500  tracking-wider">
                                                        <div class="flex justify-end">
                                                            <div class="flex space-x-2">
                                                             <a href="{{url('update_product',$product->id)}}"
                                                             class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded-md">Edit</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                        </tr>
                                            
                                        @endforeach
                                      
                                    </tbody>
            
                
               
                            </table>

            
            
          
        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</x-admin-layout>
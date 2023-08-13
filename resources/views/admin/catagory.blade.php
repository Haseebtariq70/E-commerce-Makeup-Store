
     <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 20px;

        }
        .h1_font
        {
            font-size: 30px;
            padding-bottom: 20px;
        }
        .input_color
        {
            color : black;
        }
        .center
        {
            margin:auto;
            width:50%;
            text-align: center;
            margin-top: 20px;
            border:3px solid gray;
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

                           <h1 class="h1_font">Add Catagory</h1>

                          <form action="{{url('/add_catagory')}}" method="POST">

                             @csrf

                          <input class="input_color" type="text" name="catagory_name" placeholder="Write Catagory name">

                          <input type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md" name="submit" value="Add Catagory">
                          </form>

                    </div>
                                <table class="center">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($catagory as $data)
                                            <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $data->catagory_name }}
                                            </div>
                                            </td>
                                            <td>
                                                <div class="flex justify-end">
                                                    <div class="flex space-x-2">
                                                     <a onclick="return confirm('Are you sure to delete this.')" 
                                                     href="{{url('/delete_catagory',$data->id)}}"
                                                     class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md">Delete</a>
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
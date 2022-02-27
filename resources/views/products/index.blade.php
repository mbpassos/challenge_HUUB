<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h6 class="text-2xl font-bold mb-2 text-gray-800">
            {{ __('LIST OF PRODUCTS') }}
        </h6>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-devices shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="overflow-devices sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-devices">
                                    <table class="w-full shadow-md rounded">
                                        <thead class="border-b" style="background-color:#f9fafb">
                                            <tr>
                                                <th scope="col" class="text-center text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                ID
                                                </th>
                                                <th scope="col" class="text-center text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                NAME
                                                </th>
                                                <th scope="col" class="text-center text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                VIEW DETAILS
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($products as $product)
                                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{$product->getId()}}
                                                </td>
                                                <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{$product->getName()}}
                                                </td>
                                                <td class="text-center text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    <a href="{{ Route('productView', $product->getId()) }}" class="px-4 py-1 text-sm text-white rounded" style="background-color: #818cf8">MORE INFO</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div><br />
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="text-center pb-8">
        <ul class="pagination">
        @if(isset($current_page))
            <?php
                $next_page = $current_page + 1;
                $after_next_page = $next_page + 1;
                $second_to_last_page = $numOfpages - 1;
                $before_second_to_last_page = $second_to_last_page - 1;
                $prev_page = $before_second_to_last_page - 1;
            ?>
            @if($current_page == 1)
                <li><span class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m">First</span></li>
                <li>...</li>
                <li><span class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m"><?php echo $current_page ?></span></li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$next_page)}}"><?php echo $next_page ?></a></li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$after_next_page)}}"><?php echo $after_next_page ?></a></li>
                <li>...</li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$numOfpages)}}">Last</a></li>
            @elseif($current_page == $numOfpages)
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.'1')}}">First</a></li>
                <li>...</li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$before_second_to_last_page)}}"><?php echo $before_second_to_last_page ?></a></li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$second_to_last_page)}}"><?php echo $second_to_last_page ?></a></li>
                <li><span class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m"><?php echo $current_page ?></span></li>
                <li>...</li>
                <li><span class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m">Last</span></li>
            @elseif($current_page == $second_to_last_page)
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.'1')}}">First</a></li>
                <li>...</li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$prev_page)}}"><?php echo $prev_page ?></a></li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$before_second_to_last_page)}}"><?php echo $before_second_to_last_page ?></a></li>
                <li><span class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m"><?php echo $current_page ?></span></li>
                <li>...</li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$numOfpages)}}">Last</a></li>
            @else
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.'1')}}">First</a></li>
                <li>...</li>
                <li><span class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m"><?php echo $current_page ?></span></li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$next_page)}}"><?php echo $next_page ?></a></li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$after_next_page)}}"><?php echo $after_next_page ?></a></li>
                <li>...</li>
                <li><a class="px-4 py-1 text-sm text-white rounded bg-indigo-500 m" href="{{url('all-products/'.$numOfpages)}}">Last</a></li>
            @endif
        @endif
        </ul>
    </div>
</x-app-layout>

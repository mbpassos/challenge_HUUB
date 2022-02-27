<x-app-layout>
    <div class="p-20 bg-indigo-100" style="height: 100%">
        <div class="mb-4">
            <a href="{{ url()->previous() }}" class="underline text-gray-500 font-light py-6 font-bold ">Go back to Products</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h2 class="text-base sm:text-2xl font-bold mb-2 text-indigo-400">{{$product->getName()}}</h2>
          <p class="text-gray-700 font-bold">Description:</p>
          <p class="text-gray-700">{{$product->getDescription()}}</p></br>
          <p class="text-gray-700 font-bold">Season:</p>
          <p class="text-gray-700">{{$product->getSeason()}}</p></br>
          <p class="text-gray-700 font-bold">Supplier:</p>
          <p class="text-gray-700">{{$product->getSupplier()}}</p></br>
          <p class="text-gray-700 font-bold mb-1">List of Variants:</p>
          <ul>
              @php
                foreach ($product->getVariants() as $variants) {
                    $test = array_filter($variants);
                    foreach($test as $x => $x_value) {
                    echo "<li>";
                    echo $x . ": " . '<span class="text-gray-500 font-light">' . $x_value . "</span>";
                    echo "</li>";
                    }
                }
            @endphp
          </ul>
        </div>
    </div>
</x-app-layout>

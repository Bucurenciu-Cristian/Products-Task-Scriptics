<x-layout>
    <x-button href="/products/create" class="px-5 py-2">
        Add a new product
    </x-button>
    @if(!empty($products))
        @foreach($products as $product)
            <div
                class="max-w-prose w-full rounded   hover:bg-gray-400 overflow-hidden bg-neutral-100 shadow-lg my-3">

                <a href="/products/{{$product->id}}">

                    <div class="px-6 py-4  hover:text-purple-600 ">
                        <div class="font-bold text-xl mb-2">
                            {{$product->title}}
                        </div>
                    </div>

                </a>
                <div class="px-6 pt-4 pb-2 flex justify-between">
                    <div>
                            <span
                                class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                            Q: {{$product->quantity}}
                            </span>
                    </div>
                    <div>
                        <x-button class="px-5 py-3" href="/products/{{$product->id}}/edit">
                            EDIT
                        </x-button>
                    </div>
                </div>

            </div>

        @endforeach
    @else
        {{--        <li>No Products for now</li>--}}
    @endif

    <div>{{$products->links()}}</div>
</x-layout>

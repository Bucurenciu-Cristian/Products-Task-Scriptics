<x-layout>
    <x-button href="/" class="px-10 py-3 m-5">
        Back
    </x-button>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 rounded p-6 p-24">
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-3xl font-bold mb-4">{{ $product->title }}</h3>

                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">
                        Price
                    </h3>
                    <div class="text-lg space-y-6">
                        {{  $product->price  }}
                    </div>
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>

                <div>
                    <h3 class="text-2xl font-bold mb-4">
                        Quantity
                    </h3>
                    <div class="text-lg space-y-6">
                        {{  $product->quantity  }}
                    </div>
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">
                        Product Description
                    </h3>
                    <div class="text-lg space-y-6">
                        {{ $product->description }}
                    </div>
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <form method="POST" class="bg-red-600 text-white rounded py-2 px-4 hover:bg-black"
                          action="/products/{{$product->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-white">
                            <i class="fa-solid fa-trash"></i>
                            DELETE
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

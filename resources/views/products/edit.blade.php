<x-layout>
    <x-button href="/" class="px-10 py-3 m-5">
        Back
    </x-button>
    <form action="/products/{{$product->id}}" method="post">
        @csrf
        @method("PUT")

        <div class="flex justify-center flex-col bg-gray-50 border border-gray-200 rounded px-24 py-10 ">
            <div class="mx-auto my-5 mx-2 flex justify-center">
                <div class="flex text-center flex-col items-center">
                    <h3 class="text-3xl font-bold mb-4">
                        <input name="title"
                               class="w-full rounded-full p-2 bg-green-400 mx-auto"
                               id="title" type="text"
                               value="{{$product->title}}" placeholder="Title">
                    </h3>

                    <div class="border border-gray-200 w-full mb-6"></div>
                    @error('title')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>
            <div class="mx-auto my-5 mx-2 flex justify-center">
                <label for="quantity" class="w-1/3 text-center text-xl font-bold">Quantity: </label>
                <div>
                    <input name="quantity" class="w-full rounded-full p-2 bg-green-400 mx-auto" id="quantity" type="text"
                           value="{{$product->quantity}}">
                    @error('quantity')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>
            <div class="mx-auto my-5 mx-2 flex justify-center">
                <label for="price" class="w-1/3 text-center text-xl font-bold">Price: </label>
                <div>
                    <input name="price" class="w-full rounded-full p-2 bg-green-400 mx-auto" id="price" type="text"
                           value="{{ $product->price}}">
                    @error('price')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>
            <div class="mx-auto my-5 mx-2 mx-3 flex justify-center hover:min-w-0">
                <label for="description" class="w-1/3 text-center text-xl font-bold">Description: </label>
                <div>
                <textarea name="description" class="w-full rounded-2xl p-2 bg-green-400 mx-auto" id="description"
                          type="text">
                          {{ $product->description }}
                </textarea>
                    @error('description')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
            </div>
            <div class="my-6 flex justify-center items-center">
                <button type="submit"
                        class="px-5 py-2 bg-emerald-400 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">
                    Update Product
                </button>
            </div>
        </div>
    </form>
</x-layout>

<x-layout>
    <div></div>
    <form action="create" method="post">

        <div class="flex justify-center flex-col">
            <div class="mx-auto my-5 flex justify-center">
                <label for="title" class="w-1/3">Title: </label>
                <input name="title" class="w-2/3 rounded-full bg-green-400 mx-auto" id="title" type="text">
            </div>
            <div class="mx-auto my-5 flex justify-center">
                <label for="quantity" class="w-1/3">Quantity: </label>
                <input name="quantity" class="w-2/3 rounded-full bg-green-400 mx-auto" id="quantity" type="text">
            </div>
            <div class="mx-auto my-5 flex justify-center">
                <label for="price" class="w-1/3">Price: </label>
                <input name="price" class="w-2/3 rounded-full bg-green-400 mx-auto" id="price" type="text">
            </div>
            <div class="mx-auto my-5 flex justify-center hover:min-w-0">
                <label for="description" class="w-1/3">Title: </label>
                <textarea name="description" class="w-2/3 rounded-2xl bg-green-400 mx-auto" id="description" type="text">
                </textarea>
            </div>
            <div class="mx-auto">
                <button type="submit" class="bg-blue-400 rounded-2xl p-3">SUBMIT</button>
            </div>
        </div>
    </form>
</x-layout>

<x-layout>
<a href="/products/create">
    <button class="px-4 py-1 bg-emerald-400 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">
        Add a new product
    </button>
</a>

<table>
    <th>
        <tr>
            <td>ID</td>
            <td>TITLE</td>
            <td>DESCRIPTION</td>
            <td>QUANTITY</td>
            <td>PRICE</td>
        </tr>
    </th>
    @if(!empty($products))
        @foreach($products as $item)
            <tr>
                <td>
                    {{$item->title}}
                </td>
                <td>
                    {{$item->description}}
                </td>
                <td>
                    {{$item->quantity}}
                </td>

                <td>
                    {{$item->price}}
                </td>
            </tr>
        @endforeach
    @else
        <li>No Products for now</li>
    @endif
</table>

<div>{{$products->links()}}</div>
</x-layout>

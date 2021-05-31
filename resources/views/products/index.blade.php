@extends('base')
@section('content')
    <h1 class="text-center">hello this is a test</h1>
    {{-- dd($products) --}}



    @if ($message = Session::get('success'))
        <div class="alert alert-success m-t-lg m-b-lg">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-warning m-t-lg m-b-lg">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <tr>
            <th>
                #
            </th>
            <th>
                product name
            </th>
            <th>
                product price
            </th>
            <th>
                action
            </th>
        </tr>
        @foreach($products as $product )
            <tr>
                <td>
                    {{$product->id}}
                </td>
                <td>
                    {{$product->name}}
                </td>
                <td>
                    {{$product->prix}}
                </td>
                <td>
                    <form action="{{ route('Product.destroy', $product->id) }}" method="POST" class="d-inline">
                        <a class="btn btn-success" href="{{ route('Product.show', $product->id) }}">Show </a>
                        <a class="btn btn-warning" href="{{ route('Product.edit', $product->id) }}">Edit</a>
                        @csrf
                        <input type="submit" title="delete" class="btn btn-danger d-inline-block" value="Delete">
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $products->links() }}
    </div>
@endsection

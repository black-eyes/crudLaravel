@extends('base')

@section('content')
<h1 class="text-center m-t-lg m-b-lg">Product details</h1>
    {{-- dump($product) --}}



@if ($message = Session::get('success'))
    <div class="alert alert-success m-t-lg m-b-lg">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="card text-white bg-secondary mb-3 col-lg-offset-3" style="max-width: 50%" >
    <div class="card-header">{{ $product->name }}</div>
    <div class="card-body m-l-md m-r-lg">

        <p class="card-text">{{$product->description}}</p>
        <h3 class="text-center">
            Price : {{  $product->prix }}
        </h3>
    </div>
</div>

    <div  class="mb-3 col-lg-offset-3 text-center m-t-lg" style="max-width: 50%">
        <form action="{{ route('Product.destroy', $product->id) }}" method="POST" class="d-inline">
        <a class="btn btn-warning" href="{{route('Product.edit',$product->id)}}">
            Update
        </a>

        @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>

@endsection

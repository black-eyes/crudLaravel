@extends('base')

@section('content')
<h1 class="text-center m-t-lg m-b-lg">Product details</h1>
    {{-- dump($product) --}}

<div class="card text-white bg-secondary mb-3 col-lg-offset-3" style="max-width: 50%" >
    <div class="card-header">{{ $product->name }}</div>
    <div class="card-body m-l-md m-r-lg">

        <p class="card-text">{{$product->description}}</p>
        <h3 class="text-center">
            Price : {{  $product->prix }}
        </h3>
    </div>
</div>

@endsection

@extends('base')

@section('content')
    <h4 class="m-t-lg m-b-lg text-center">
        Update product info
    </h4>

    <form action="{{ route('Product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label  for="nameID">Name:</label>
                    <input  id="nameID" type="text" name="name" class="form-control" value="{{ $product->name }}"/>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="descriptionID">Description:</label>
                    <textarea  id="descriptionID" name="description" class="form-control">{{ $product->description }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="priceID">Price:</label>
                    <input  id="priceID" type="number" name="prix" class="form-control"
                           value="{{$product->prix}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection

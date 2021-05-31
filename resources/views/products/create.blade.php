@extends('base')
@section('content')


    <h1 class="text-center m-t-lg" >
        Create a new product
    </h1>


    <form action="{{ route('Product.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label  for="nameID">Name:</label>
                    <input  id="nameID" type="text" name="name" class="form-control" />
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="descriptionID">Description:</label>
                    <textarea  id="descriptionID" name="description" class="form-control"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="priceID">Price:</label>
                    <input  id="priceID" type="number" name="prix" class="form-control"/>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>

    </form>

@endsection


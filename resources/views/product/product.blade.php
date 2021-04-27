@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>{{ $product->name }}</h1>
                <h3 class="text-success" >{{ $product->price }} $</h3>
                <div class="mb-3" >{!! nl2br($product->description) !!}</div>
                <div class="bg-white mt-3 p-3 border text-center" >
                    <p>Commander <strong>{{ $product->name }}</strong></p>
                    <form method="POST" action="{{ route('basket.add', $product) }}" class="form-inline d-inline-block" >
                        {{ csrf_field() }}
                        <input type="number" name="quantity" placeholder="Quantité ?" class="form-control mr-2" >
                        <button type="submit" class="btn btn-warning" >+ Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

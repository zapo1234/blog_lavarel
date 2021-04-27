@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row justify-content-center">
            @foreach($listes as $liste)
            <div>
                <h1>{{ $liste->name }}</h1>
                <h3 class="text-success" >{{ $liste->price }} $</h3>
                <div class="mb-3" >{!! nl2br($liste->description) !!}</div>
                <div class="bg-white mt-3 p-3 border text-center" >
                    <p><a href ="product/{{ $liste->id  }}">Commander <strong>{{ $liste->name }}</strong></a></p>
                </div>
        @endforeach

    </div>
        </div>
@endsection

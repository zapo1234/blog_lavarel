@extends('layouts.app')

@section('title','Message User')
@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
                {{ session('failed') }}
            </div>
        @endif

        <form method="POST" action="{{ route('add_message') }}">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="" required>
                @if($errors->has('title'))
                    <div class="error">{{$errors->first('title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">message</label>
                <textarea  class="form-control" id="formGroupExampleInput2" name="message" placeholder=""
                           required></textarea>
            </div>

            <button type="submit" id="buuton" >envoyer</button>
        </form>


    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">nom</th>
        </tr>
        </thead>
        <tbody>

        @foreach($message as $messages)
            <tr>
                <td>{{ $messages->message }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

    </div>
@endsection



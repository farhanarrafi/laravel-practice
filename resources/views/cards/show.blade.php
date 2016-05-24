@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $card->title }}</h1>
            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">{{ $note->body }}</li>
                @endforeach
            </ul>

            <hr />
            <h3>Add a new Note</h3>

            <form action="/cards/{{$card->id}}/notes" method="POST">
                <div class="form-group">
                    <textarea name="body" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="Submit" class="btn-primary">Add Note</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>

@stop

@extends('layout')

@section('content')
    <h1>All Cards</h1>
    <ul class="list-group">
    @foreach ($cards as $card)
        <div>
            <li class="list-group-item"><a href="{{ $card->path() }}">{{$card->title}}</a></li>
        </div>
    @endforeach
    </ul>
@stop

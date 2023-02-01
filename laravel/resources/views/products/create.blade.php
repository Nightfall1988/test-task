@extends('layouts.app')
@section('content')
    <div>
        <div  style="display: flex; justify-content: center">
        <form action="/create-product" method="post">
            @csrf
            <br>
            {{ Form::label('name', 'Nosaukums') }}
            <br>
            {{ Form::text('name', '') }}
            <br>
            {{ Form::label('quantity', 'Daudzums') }}
            <br>
            {{ Form::number('quantity', '') }}
            <br>
            {{ Form::label('price', 'Cena') }}
            <br>
            {{ Form::number('price', '') }}
            <br>
            {{ Form::submit('Izveidot') }}
        </form>
        </div>
    </div>
@endsection

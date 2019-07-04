@extends('layouts.admin')

@section('title')
    <h1>Leírás</h1>
@stop

@section('content')


    {!! Form::open(['method'=>'POST', 'action'=>'AdminAboutController@store'])!!}

    <div class="form-group">
        {!! Form::label('text_top', 'Felső:', ['class'=>'h3']) !!}
        {!! Form::textarea('text_top', null, ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('text_bottom', 'Alsó:', ['class'=>'h3']) !!}
        {!! Form::textarea('text_bottom', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Létrehozás', ['class'=>'btn btn-info']) !!}
    </div>

    {!! Form::close() !!}

@stop
@extends('layouts.admin')

@section('title')
    <h1 class="h1">Elérhetőségek</h1>

@stop

@section('content')

    {!! Form::model($contact, ['method'=>'PATCH', 'action'=>['AdminContactsController@update', $contact->id]])!!}

        <div class="form-group">
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Név'])!!}
        </div>
        <div class="form-group">
            {!! Form::text('phone', null, ['class'=>'form-control', 'placeholder'=>'Telefonszám'])!!}
        </div>
        <div class="form-group">
            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'E-mail'])!!}
        </div>
        <div class="form-group">
            {!! Form::text('location', null, ['class'=>'form-control', 'placeholder'=>'Lakhely'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Frissítés', ['class'=>'btn btn-primary btn-block']) !!}
        </div>

    {!! Form::close() !!}

@stop
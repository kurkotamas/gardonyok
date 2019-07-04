@extends('layouts.admin')

@section('title')
    <h1>Leírás</h1>
@stop

@section('content')

    @if($about->isNotEmpty())

        @foreach($about as $a)
        {!! Form::model($a, ['method'=>'PATCH', 'action'=>['AdminAboutController@update', $a->id]])!!}

        <div class="form-group">
            {!! Form::label('text_top', 'Felső:', ['class'=>'h3']) !!}
            {!! Form::textarea('text_top', $a->text_top, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('text_bottom', 'Alsó:', ['class'=>'h3']) !!}
            {!! Form::textarea('text_bottom', $a->text_bottom, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Szerkesztés', ['class'=>'btn btn-info']) !!}
        </div>

        {!! Form::close() !!}

        @endforeach


    @else
        <ul class="text-center list-unstyled">
            <li><p class="display-4">Nem található leírás</p></li>
            <li><a href="{{route('about.create')}}" class="btn btn-primary btn-lg">Hozzáad</a></li>
        </ul>
    @endif
@stop
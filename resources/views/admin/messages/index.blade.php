@extends('layouts.admin')

@section('title')
    <h1>Üzenetek</h1>
@stop

@section('content')

    @if($messages->isNotEmpty())
        <table class="table table-striped">
            <thead class="bg-dark text-white">
            <tr>
                <th>#</th>
                <th>Név</th>
                <th>E-mail</th>
                <th>Üzenet</th>
                <th>Ekkor</th>
                <th>Törlés</th>
            </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{++$message_count}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->message}}</td>
                        <td>{{$message->created_at->diffForHumans()}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMessagesController@destroy', $message->id]])!!}
                            <div class="form-group">
                                {!! Form::submit('Törlés', ['class'=>'btn btn-danger btn-sm']) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    @else
        <ul class="text-center list-unstyled">
            <li><p class="display-4">Nincs üzenet</p></li>
        </ul>
    @endif
@stop
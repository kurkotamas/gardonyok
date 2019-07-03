@extends('layouts.admin')

@section('title')
    <h1 class="h1">Galéria</h1>
    <button type="button" class="btn btn-primary active" data-toggle="modal" data-target="#exampleModal">
        Hozzáad
    </button>
@stop

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kép hozzáadása</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ Form::open(['method'=>'POST', 'action'=>'AdminPhotosController@store', 'files'=>true]) }}

                        <div class="form-group">

                            <div >
                                {{ Form::label('title', 'Cím:', ['class'=>'h6']) }}
                                {{ Form::text('title', null, ['class'=>'form-control']) }}
                            </div>


                            <div class="mt-3">
                                {{ Form::file('image', null, ['class'=>'form-control']) }}
                            </div>

                            <div class="mt-3">
                                {{ Form::label('description', 'Leírás:', ['class'=>'h6']) }}
                                {{ Form::textarea('description', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                    @include('includes.form_error')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Mégse</button>
                    {{ Form::submit('Feltöltés', ['class'=>'btn btn-primary']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!--End of  Modal -->

    <!-- Table -->
    @if($photos->isNotEmpty())
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th>Előnézet</th>
                <th>Név</th>
                <th>Leírás</th>
                <th>Hozzáadva</th>
                <th>Módosítva</th>
                <th>Törlés</th>
            </tr>
        </thead>
            @foreach($photos as $photo)
                <tbody>
                <tr>
                    <td>{{$photo->id}}</td>
                    <td class="p-1"><img height="150" src="{{$photo->path}}" alt=""></td>
                    <td>{{$photo->title}}</td>
                    <td>{{$photo->description ? $photo->description : ''}}</td>
                    <td>{{$photo->created_at->diffForHumans()}}</td>
                    <td>{{$photo->updated_at->diffForHumans()}}</td>

                    <td>
                        {{Form::open(['method'=>'DELETE', 'action'=>['AdminPhotosController@destroy', 'id'=>$photo->id]])}}

                        {{Form::submit('Eltávolít', ['class'=> 'btn btn-danger btn-sm'])}}

                        {{Form::close()}}
                    </td>
                </tr>
                </tbody>
            @endforeach
    </table>
    @else
        <div class="text-center bg-secondary text-white p-3 display-4">Nincs kép</div>


    @endif
    <!-- End of Table -->

@stop
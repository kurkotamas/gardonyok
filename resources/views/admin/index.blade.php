@extends('layouts.admin')

@section('title')
    <h1 class="h2">Áttekintés</h1>

@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mt-3">
                    <a href="{{route('messages.index')}}">
                        <div class="card bg-warning text-white p-3 text-center">
                            <div class="card-body">
                                <i class="fas fa-envelope fa-3x"></i><h5 class="">Üzenetek</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt-3">
                <a href="{{route('photos.index')}}">
                    <div class="card bg-primary text-white p-3 text-center">
                        <div class="card-body">
                            <i class="fas fa-images fa-3x"></i><h5 class="">Galéria</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mt-3">
                <a href="{{route('about.index')}}">
                    <div class="card bg-success text-white p-3 text-center">
                        <div class="card-body">
                            <i class="fas fa-edit fa-3x"></i><h5 class="">Leírás</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mt-3">
                <a href="{{route('contacts.index')}}">
                    <div class="card bg-danger text-white p-3 text-center">
                        <div class="card-body">
                            <i class="fas fa-id-card fa-3x"></i><h5 class="text-nowrap">Kapcsolatok</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@stop
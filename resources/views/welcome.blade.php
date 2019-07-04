@extends('layouts/app')

@section('gallery_photo_wider')
    <img class="card-img" src="images/gallery-wide.jpg" alt="">
@stop

@section('gallery_photo')

    @if($photos)
        @foreach( $photos as $photo)
            <div class="card">
                <img class="card-img-top img-fluid" src="{{$photo->path}}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{$photo->title}}</h4>
                    <p class="card-text">{{$photo->description}}</p>
                </div>
            </div>
        @endforeach
    @endif
@stop

@section('about_head_text_top')
    {{$about{0}->text_top}}
@stop
@section('about_head_text_bottom')
    {{$about{0}->text_bottom}}
@stop
@extends('layouts/app')

{{--@section('gallery_photo_wider')--}}
    {{--<img class="card-img" src="images/gallery-wide.jpg" alt="">--}}
{{--@stop--}}

@section('gallery_photo')
    @if($photos)
        <div class="row">
        @foreach( $photos as $photo)
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <a href="images/{{$photo->path}}" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
                        <img src="images/{{$photo->path}}" alt="" class="card-img-top img-fluid">
                    </a>
                </div>
            </div>
        @endforeach
        </div>
        <div class="row justify-content-center pt-5">
            {{ $photos->links() }}
        </div>
    @endif

@stop

@section('about_head_text_top')
    {{$about{0}->text_top}}
@stop
@section('about_head_text_bottom')
    {{$about{0}->text_bottom}}
@stop
@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="/css/app.css">
@endsection
@section('title-block')
Megogo - {{$content->title}}
@endsection
@section('content')

<div class="container" style="background-color: white;">

    <hr>
    <hr>
    <div class="row">
        <div class="col">
        <h1 class="text-left">{{$content->title}}</h1>
        </div>

    </div>

    <div class="row">
    <div class="col"><h4 style="color:black;">Watch trailer</h4></div>
    <iframe width="1400" height="600" src="{{ url($content->video_src) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br>

    <div class="row">
    <div class="col"><label for="description">Description</label>
    <h6 id="description">{{ $content->description }}</h6></div>
    </div>

    <div class="row">
        <div class="col">
            <label for="description">Country</label>
            <h6 id="description">{{ $content->country }}</h6>
        </div>

        <div class="col">
            <label for="description">Duration</label>
            <h6 id="description">{{ $content->duration }} mins</h6>
        </div>

        <div class="col">
            <label for="description">Rating</label>
            <h6 id="description">{{ $content->rating }}/10</h6>
        </div>

        <div class="col">
            <label for="description">Year</label>
            <h6 id="description">{{ $content->year }}</h6>
        </div>
    </div>

    <br><br>
    <h4>Poster to content ({{$content->type}}):</h4>
    <div class="row">
        <img src="{{ url($content->img_src) }}" alt="$content->img_alt"  width="100%" height="600">
    </div>

    <a class="row btn btn-outline-primary mb-4" href="{{url()->previous()}}">Go back</a>



</div>
@endsection

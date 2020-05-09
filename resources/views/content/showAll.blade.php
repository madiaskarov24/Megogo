@extends('layouts.app')
@section('title-block')
MEGOGO.NET - фильмы и телеканалы онлайн
@endsection
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/app.css">
@endsection
@section('content')
<!--
<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="https://s2.vcdn.biz/static/f/1846652231/image.jpg" alt=""  width="100%" height="100%" class="round">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <p><a class="btn btn-lg btn-primary" href="{{route('signup')}}" role="button">Watch NOW</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="https://s2.vcdn.biz/static/f/1636770971/image.jpg" alt=""  width="100%" height="100%" class="round">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <p><a class="btn btn-lg btn-primary" href="{{route('signup')}}" role="button">Watch NOW</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://s5.vcdn.biz/static/f/2003458901/image.jpg/pt/r0x0x4" alt=""  width="100%" height="100%" class="round">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <p><a class="btn btn-lg btn-primary" href="{{route('signup')}}" role="button">Watch NOW</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</main> -->
    <div class="container">
        <br>
    <div class="d-flex">
        <div class="ml-auto">
        <label for="search" style="color: whitesmoke;">Search by key</label>
        <form class="example" action="/content-search" name="search">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
</form>
    </div>
  </div>
    <div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
        @foreach($contents as $content)
        <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ url($content->img_src) }}" alt="$content->img_alt"  width="100%" height="225" class="round" >
                    <div class="card-body">
                        <p class="card-text" style = "text-align:center">{{ $content->title }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary" href="/content/{{$content->id}}" >Watch</a>
                                @if(session()->get('role') != null && session()->get('role') == 'admin')
                                <a href="/admin/content/{{ $content->id }}/edit" class="btn btn-sm btn-outline-secondary">Edit</a>
                                @endif
                            </div>
                            <small class="text-muted">Rating: {{ $content->rating }}/10</small>
                            <small class="text-muted">Duration: {{ $content->duration }} mins</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
    </div>
    </div>
    @endsection

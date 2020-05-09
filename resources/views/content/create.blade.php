@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="/css/app.css">
@endsection
@section('content')

<div class="container">
    <div class="card mt-5" style="background-color: white;">
    <div class="card">
        <div class="card-header"style="background-color: red;">
            <h2>Adding new content</h2>
        </div>
        <div class="card-body" >
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('content.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="name">Title:</label>
          <input type="text" class="form-control" name="title" placeholder="Title"/>
      </div>

      <div class="form-group">
          <label for="img_alt">Image name:</label>
          <input type="text" class="form-control" name="img_alt" placeholder="Image name"/>
      </div>

      <div class="form-group">
          <label for="video_src">Video link:</label>
          <input type="text" class="form-control" name="video_src" placeholder="Video link"/>
      </div>

      <div class="form-group">
          <label for="duration">Duration:</label>
          <input type="text" class="form-control" name="duration" placeholder="Duration"/>
      </div>
      <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Description" required></textarea>
        </div>

      <div class="form-group">
          <label for="country">Country: </label>
          <input type="text" class="form-control" name="country" placeholder="Country"/>
      </div>


      <div class="form-group">
          <label for="rating">Rating: </label>
          <input type="number" class="form-control" name="rating" placeholder="Rating"/>
      </div>

      <div class="form-group">
          <label for="year">Year: </label>
          <input type="number" class="form-control" name="year" placeholder="Year"/>
      </div>

      <div class="form-group">
        <label for="type">Type:</label>
        <select class="form-control" id="type" name="type">
            <option>films</option>
            <option>serials</option>
            <option>sports</option>
            <option>cartoons</option>
            <option>tvshow</option>
        </select>
     </div>

     <div class="form-group">
         <label for="file">Photo: </label>
         <input type="text" class="form-control" name="file" placeholder="Photo link"/>
     </div>


      <div class="form-group">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
    </div>
            <a href="{{url()->previous()}}">Go back</a>
        </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="/css/app.css">
@endsection

@section('title-block')
Admin panel - create new Admin
@endsection

@section('content')
<div class="container">
    <div class="card mt-5" style="background-color: white;">
    <div class="card">
        <div class="card-header"style="background-color: red;">
            <h2>Create new admin</h2>
        </div>
        <div class="card-body" >
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('store-admin') }}">
      @csrf
      <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" placeholder="Name"/>
      </div>

      <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" placeholder="admin@example.com"/>
      </div>

      <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" name="password" placeholder="Password"/>
      </div>


      <div class="form-group">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
    </div>
        </div>
        
        </div>
    </div>
</div>
@endsection

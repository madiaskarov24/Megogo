@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="/css/app.css">
@endsection
@section('content')
    <div class="container bootstrap snippet" style="background-color:blanchedalmond; padding-top:2%; margin-top:3%; padding-bottom:2%;">
        <div class="row">
            <div class="col-sm-3"><!--left col-->

                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">

                </div><br>




                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><a href="/admin/create"><strong>Add admin</strong></a> </li>
                    <li class="list-group-item text-right"><a href="/admin/content/add"><strong>Add content</strong></a></li>
                </ul>



            </div><!--/col-3-->
            <div class="col-sm-9">


                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="##" method="post" id="registrationForm">
                            <div class="form-group">

                                <h2>{{ $user->name }}</h2>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h4>Mobile</h4></label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>

                            <div class="form-group">


                        </form>

                        <hr>

                    </div><!--/tab-pane-->

@endsection

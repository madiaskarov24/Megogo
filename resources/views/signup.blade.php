<!DOCTYPE html>
<html>

<head>
    <title>Sign up</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <?php file_get_contents("css/app.css"); ?>
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>


  <section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Sign up Now</h2>
                <form action="/signup" method="post">
                   {{ csrf_field() }}
                  @if($errors->any())
                  <div class = "alert alert-danger" align="left">
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                    <div class="form-group">
                        <label for="name" class="text">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    </div>

                    <div class="form-group">
                        <label for="email" class="text">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com">

                    </div>
                    <div class="form-group">
                        <label for="password" class="text">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <small>Remember Me</small>
                        </label>
                        <button type="submit" class="btn btn-login float-right">Submit</button>
                    </div>
                    <div class="copy-text"><a href="/login">I have an account</a></div>
                    </div>

                  </form>

            <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                </div>
            </div>
        </div>
</section>

</html>

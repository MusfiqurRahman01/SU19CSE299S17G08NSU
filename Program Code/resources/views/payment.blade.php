<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>NPS payment</title>




      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    </head>


    <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">

        <a class="navbar-brand" href="#">NPS</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#myNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="myNav">
            <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link">Home</a>
                        <a href="/about" class="nav-item nav-link">About Us</a>
                        <a href="/contact" class="nav-item nav-link">Contact Us</a>
            </div>


        </div>

        <div class="navbar-nav">
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="email1" class="sr-only"> Email  </label>
                    <input type="text"  class="form-control" id="email1" value="email@example.com">
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                      <label for="inputPassword2" class="sr-only">Password</label>
                      <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Log In</button>
            </form>


        </div>
       </nav>


       <div class="container border-right border-left border-primary">

         <div class="jumbotron jumbotron-fluid bg-info mt-1">
             <div class="container text-light">
               <h1 class="display-4 text-center ">NPS payment </h1>
               <p class="lead text-center "> This is the payment section of NSU parking system</p>
             </div>
           </div>

  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-5">
          <!-- Credit card form tabs -->
            <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
              <li class="nav-item">
                <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                   <i class="fa fa-credit-card"></i>
                      Credit Card
                </a>
              </li>

             <li class="nav-item">    




            </ul>
      </div>
    </div>
  </div>







</div>




           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>

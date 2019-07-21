<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>NPS About US</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


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
                    <a href="#" class="nav-item nav-link">About Us</a>
                    <a href="#" class="nav-item nav-link">Contact Us</a>
            </div>


        </div>

        <div class="navbar-nav">
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="email1" class="sr-only">Email</label>
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
                <h1 class="display-4 text-center ">NPS About Us</h1>
                <p class="lead text-center ">This website is about Nsu Parking System</p>
              </div>
            </div>

              <p>

            <h2> <hr> BUSINESS INFO </hr> </h2>
              This website is based on the parking automation system.
              <p>The purpose is making easy to register and pay easily without any difficulty for the parking system.</p>

              </p>


             <p>
               <h2> <hr> About</hr> </h2>
               “NSU Parking Registration system” is a website where user visits this website and do  parking registration in online. User will fill up a form for registration like as parking registration form which is provide by the website. User will fill up this form and submit it.
               <p> After submission the authority (security dept, parking operator) verify all data which is given by the user. After verification user receive an email notification for deposit the amount (which is mention in the form section) in the bank (In this case user have to use NSU email account for registration).This website also has a payment section in this section, after verification user can payment parking fees or registration amount which is mention in the registration form.</p>
            </p>


            <p>
              <h2><hr>Developer Info</hr> </h2>

              <p>Developed & Maintained By</p>
               <em>Md.Musfiqur Rahman</em>
              <p><em>Student of North South University</em></p>





            </p>





        </div>

    </body>
</html>

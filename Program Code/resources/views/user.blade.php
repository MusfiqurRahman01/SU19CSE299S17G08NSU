<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parking System</title>

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
            <div class="container">
                <div class="d-flex flex-column">
                        <div class="p-2">Information</div>
                        <div class="p-2">Registration</div>
                        <div class="p-2">Payment</div>
                      </div>
            </div>
        
    </body>
</html>
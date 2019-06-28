<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parking System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Styles -->
     
    </head>
    <body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                            <a class="navbar-brand" href="#">NPS</a>
                            <button class="navbar-toggler" data-toggle="collapse" data-target="#myNav">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="myNav">
                                <a href="#" class="nav-item nav-link">Home</a>
                                <a href="#" class="nav-item nav-link">About Us</a>
                                <a href="#" class="nav-item nav-link">Contact Us</a>
                                <a href="#" class="nav-item nav-link">Log In</a>
                            </div>
                    </div>

                </nav>

                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="{{ asset('js/bootstrap.min.js') }}"></script>  
    </body>
</html>

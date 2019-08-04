<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Nps</title>

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
                                                <a href="/about" class="nav-item nav-link">About Us</a>
                                                <a href="/contact" class="nav-item nav-link">Contact Us</a>
                                        </div>      
                </div>
    </nav>
    
    <div class="container">
                <h1 class="mb-4 text-center">
                        Edit {{$user->first_name}} data
                </h1>
                <form class="form" method="POST" action="/user/{{$user->id}}">
                        @method('PATCH')
                        @csrf
            

                                <div class="form-group mb-2">
                                        <label for="email1" class="sr-only">Email</label>
                                        <input type="text"  class="form-control" id="email1" name="email" value="{{$user->email}}">
                                </div>
                                <div class="form-group mb-2">
                                        <label for="name" class="sr-only">First Name</label>
                                        <input type="text"  class="form-control" id="fname" name="first_name" value="{{$user->first_name}}">
                                </div>             
                                <div class="form-group mb-2">
                                        <label for="name" class="sr-only">Last Name</label>
                                        <input type="text"  class="form-control" id="lname" name="last_name" value="{{$user->last_name}}">
                                </div> 
                                <div class="form-group mb-2">
                                        <label for="password" class="sr-only">Password</label>
                                        <input type="password"  class="form-control" id="password" name="password">
                                </div> 
                                
                                <button type="submit" class="btn btn-primary mb-2">Update</button>   
                </form>            
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
</body>
</html>
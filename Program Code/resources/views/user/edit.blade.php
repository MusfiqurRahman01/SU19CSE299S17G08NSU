<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Nps</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="container">
                <h1 class="mb-4 text-center">
                        Edit {{$user->first_name}} data
                </h1>
                <form class="form">
            

                                <div class="form-group mb-2">
                                        <label for="email1" class="sr-only">Email</label>
                                        <input type="text"  class="form-control" id="email1" value="{{$user->email}}">
                                </div>
                                <div class="form-group mb-2">
                                        <label for="name" class="sr-only">First Name</label>
                                        <input type="text"  class="form-control" id="name" value="{{$user->first_name}}">
                                </div>             
                                <div class="form-group mb-2">
                                        <label for="name" class="sr-only">Last Name</label>
                                        <input type="text"  class="form-control" id="name" value="{{$user->last_name}}">
                                </div> 
                                
                                <a href="/user/{{$user->id}}/edit" class="btn btn-primary mb-4">Update</a>   
                </form>            
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
</body>
</html>
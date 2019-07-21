<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Edit data
    </h1>
    <div class="container">
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
                                
                                <button type="submit" class="btn btn-primary mb-2">Update</button>  
                </form>            
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
</body>
</html>
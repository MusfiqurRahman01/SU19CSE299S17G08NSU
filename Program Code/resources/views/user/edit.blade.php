<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        {{$user->id}}
    </h1>
    <form class="form">

            <div class="form-group mb-2">
                    <label for="email1" class="sr-only">Email</label>
                    <input type="text"  class="form-control" id="email1" value="{{$user->email}}">
            </div>
            <div class="form-group mb-2">
                    <label for="name" class="sr-only">Email</label>
                    <input type="text"  class="form-control" id="name" value="{{$user->first_name}}">
            </div>             
    </form>
</body>
</html>
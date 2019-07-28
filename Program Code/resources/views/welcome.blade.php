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
                <div class="container border-right border-left border-primary">

                    
                        <div class="jumbotron jumbotron-fluid bg-info mt-1">
                            <div class="container text-light">
                              <h1 class="display-4 text-center ">Nsu Parking System</h1>
                              <p class="lead text-center ">This website is about Nsu Parking System</p>
                            </div>
                          </div>

                          <h1 class="display-4 text-center ">SIGN UP FOR USING NSU PARKING SYSTEM</h1>
                          <form method="POST" action="/user">

                              @csrf

                              <div class="form-group">
                                <label for="subs1">Email address</label>
                                <input type="email" class="form-control" id="subs1" placeholder="name@northsouth.edu">
                              </div>
                              <div class="form-group">
                                <label for="subs2">First Name</label>
                                <input type="text" class="form-control" id="subs2" placeholder="First Name">
                              </div>
                              <div class="form-group">
                                <label for="subs3">Last Name</label>
                                <input type="text" class="form-control" id="subs3" placeholder="Last Name">
                              </div>
                              <div class="form-group">
                                <label for="subs4">Password</label>
                                <input type="password" class="form-control" id="subs4" placeholder="Your Password">
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                          </form>
                    

                </div>

                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="{{ asset('js/bootstrap.min.js') }}"></script>  
    </body>
</html>

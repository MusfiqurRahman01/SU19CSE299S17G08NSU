<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>NSU PARKING REGISTRATION FORM</title>
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


  <div  class="container border-right border-left border-primary">
    

    <div class="jumbotron jumbotron-fluid bg-info mt-1">
        <div class="container text-light">
          <h1 class="display-4 text-center ">PARKING REGISTRATION FORM</h1>
          <p class="lead text-center ">This website is about Nsu Parking System</p>
        </div>
      </div>







<form>
 <div class="form-group">
   <label for="exampleInputdate">Date:</label>
   <input type="date" class="form-control" name="date" id="exampleInputdate"  placeholder="Enter date">

 </div>

 <div class="form-group">
  <label for="formGroupApplicant'sNameInput">Applicant's Name</label>
  <input type="text" class="form-control" name="user_name" id="formGroupApplicant'sNameInput" placeholder="Name of applicant">
</div>

<div class="form-group">
 <label for="formGroupIDNoInput">ID No</label>
 <input type="text" class="form-control" name="user_id" id="formGroupIDNoInput" placeholder="Student/Employee ID">
</div>

<div class="form-group">
 <label for="formGroupDesignationInput">Designation</label>
 <input type="text" class="form-control" name="prefix" id="formGroupDesignationInput" placeholder="Designation of Student/Employee">
</div>

<div class="form-group">
 <label for="formGroupDepartmentInput">Department</label>
 <input type="text" class="form-control" name="department" d="formGroupDepartmentInput" placeholder="Department of Student/Employee">
</div>

<div class="form-group">
 <label for="formGroupContactNumberInput">Contact Number</label>
 <input type="text" class="form-control" name="contact" id="formGroupContactNumberInput" placeholder="Contact Number of Student/Employee">
</div>



<div class="form-group">

 <label for="formGroupSemesterApplyingForInput">Semester Applying For</label>

 <div class="form-check">

   <input class="form-check-input" type="radio" name="exampleRadios" id="semester" value="summer" checked>
   <label class="form-check-label" for="exampleRadios1">
     Summer
   </label>
</div>

<div class="form-check">

  <input class="form-check-input" type="radio" name="semester" id="exampleRadios1" value="winter" checked>
  <label class="form-check-label" for="exampleRadios1">
    Spring
  </label>
</div>

    <div class="form-check">

      <input class="form-check-input" type="radio" name="semester" id="exampleRadios1" value="fall" checked>
      <label class="form-check-label" for="exampleRadios1">
        Fall
      </label>
    </div>

</div>


<div class="form-group">
 <label for="formGroupVehicleInput">Vehicle Reg. No</label>
 <input type="text" class="form-control" name="vehicle_reg" id="formGroupDepartmentInput" placeholder="Registration number of vehicle to be parked">
</div>

<div class="form-group">
 <label for="formGroupCarInfoInput">Car Info</label>
 <input class="form-control form-control-lg" type="text" name="car_info" placeholder="e.g model, color, etc">
</div>


<div class="form-group">
 <label for="formGroupAddressInput">Address</label>
 <input class="form-control form-control-lg" type="text" name="address"placeholder="Details address of Student/Employee/Vendor including mobile number">
</div>

<div class="form-group">
 <label for="formGroupAddressInput">Required Documents</label>

 <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text">Driving license Photocopy</span>
   </div>
   <div class="custom-file">
     <input type="file" class="custom-file-input" name="dlicense" id="inputGroupFile01">
     <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
   </div>
 </div>


 <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text">PP Size Photograph</span>
   </div>
   <div class="custom-file">
     <input type="file" class="custom-file-input" name="pphoto" id="inputGroupFile01">
     <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
   </div>
 </div>

 <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text">ID card Photocopy</span>
   </div>
   <div class="custom-file">
     <input type="file" class="custom-file-input" name="iphoto" id="inputGroupFile01">
     <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
   </div>
 </div>




</div>


<p>Signature of the Applicant<input type="file" class="form-control-file" id="exampleFormControlFile1"></p>
<button type="button" class="btn btn-primary">Submit Form</button>

</form>
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

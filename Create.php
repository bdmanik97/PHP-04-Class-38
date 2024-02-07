
<?php
include 'config.php';

if(isset($_POST['submit'])) {
  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $phone   = $_POST['phone'];
  $roll    = $_POST['roll'];
  $class   = $_POST['class'];
  $address = $_POST['address'];


  $query= "INSERT INTO students(name, roll, phone, email, address, class) VALUES ('$name', '$roll', '$phone', '$email', '$address', '$class')";

  $success = mysqli_query( mysql: $connection, query: $query);
  
  if($success){
    echo 'Data is inserted successfully!';
  }
  else{
    echo 'Failed to insert. try again!!';
  }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP CRUD</title>
</head>
<body>
   
<nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Students Read</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Create.php">Create Students</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>

<section>
    <div class="container">
    <form class="row g-3" action="" method="post">
  <div class="col-md-6">
    <label for="inputname" class="form-label">Full Name</label>
    <input type="name" name="name" value="" class="form-control" id="inputname">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" name="email" value="" class="form-control" id="inputemail">
  </div>
  <div class="col-12">
    <label for="inputPhone" class="form-label">Phone</label>
    <input type="text" name="phone" value="" class="form-control" id="inputPhone">
  </div>
  <div class="col-12">
    <label for="inputroll" class="form-label">Roll</label>
    <input type="text" name="roll" value="" class="form-control" id="inputPhone">
  </div>
  <div class="col-12">
    <label for="inputClass" class="form-label">Class</label>
    <input type="number" name="class" value="" class="form-control" id="inputPhone">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address</label>
    <input type="text" name="address" value="" class="form-control" id="inputAddress2" >
  </div>
  <div class="col-12">
    <button type="submit" name="submit" value="" class="btn btn-primary">Sign in</button>
  </div>
</form>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
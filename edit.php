
<?php
include 'config.php';
// Data Edit start here
$id = $_GET['id'];
$query = "SELECT * FROM Students WHERE  id = $id";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

$id     = $row['id'];
$name   = $row['name'];
$roll   = $row['roll'];
$phone  = $row['phone'];
$email  = $row['email'];
$class  = $row['class'];
$address = $row['address']

if(isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $roll   = $_POST['roll'];
    $phone  = $_POST['phone'];
    $email  = $_POST['email'];
    $class  = $_POST['class'];
    $address = $_POST['address'];

    $sql = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', class = '$class', roll = '$roll', address = '$address', WHERE id = $id";
    $result = mysqli_query($connection, $query);
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
    <input type="name" name="name" value="<?php echo $name?>" class="form-control" id="inputname">
  </div>
  <div class="col-12">
    <label for="inputroll" class="form-label">Roll</label>
    <input type="text" name="roll" value="<?php echo $roll?>" class="form-control" id="inputPhone">
  </div>
  <div class="col-12">
    <label for="inputPhone" class="form-label">Phone</label>
    <input type="text" name="phone" value="<?php echo $phone?>" class="form-control" id="inputPhone">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" name="email" value="<?php echo $email?>" class="form-control" id="inputemail">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address</label>
    <input type="text" name="address" value="<?php echo $address?>" class="form-control" id="inputAddress2" >
  </div>
  <div class="col-12">
    <label for="inputClass" class="form-label">Class</label>
    <input type="number" name="class" value="<?php echo $class?>" class="form-control" id="inputPhone">
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
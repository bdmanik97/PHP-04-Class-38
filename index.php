
<?php
include 'config.php';
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
// Navbar start here
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
// Navbar end here

<Section>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Class</th>
      <th scope="col">Roll</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
    
    $query = "SELECT * FROM Students";

    $result = mysqli_query($connection, $query);
    if($result){
// Serial Number incriment start here
      $serialNumber = 1;
// Loop while start here
    while($row = mysqli_fetch_assoc($result)){

       $id      = $row['id'];
       $name    = $row['name'];
       $roll    = $row['roll'];
       $phone   = $row['phone'];
       $email   = $row['email'];
       $address = $row['address'];
       $class   = $row['class'];

      echo '<tr>
        <th>'.$serialNumber.'</th>
        <td>'.$name.'</td>
        <td>'.$roll.'</td>
        <td>'.$phone.'</td>
        <th>'.$email.'</th>
        <td>'.$address.'</td>
        <td>'.$class.'</td>
        <td>
// Button start here
          <a href="" class="btn btn-primary">Edit</a>
          <a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</a>
// Button end here
        </td>
    </tr>';
    $serialNumber++;
// Serial Number incriment end here
    };
    }
    ?>

  </tbody>
</table>
</Section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!-- https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->

<?php
include 'connect.php';
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];
  $sql = "INSERT INTO `crud` (name, email, phoneno, password) VALUES ('$name', '$email', '$phoneno', '$password')";
   $result = mysqli_query($conn, $sql);
   if($result) {
    //echo "Data inserted successfully";
    header('location:display.php');
   }else {
    die(mysqli_error($conn));
   }


}






?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

<title>Crud App</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" >
            </div>
             <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email" >
            </div>
              <div class="form-group">
                <label>Phoneno</label>
                <input type="text" class="form-control" name="phoneno" placeholder="Enter your Mobile Number" >
            </div>
              <div class="form-group">
                <label>Password</label>
                <input type="email" class="form-control" name="password" placeholder="Enter your password" >
            </div>


            <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




</body>

</html>
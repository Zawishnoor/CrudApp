<!-- https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->

<?php
include 'connect.php';
$id= $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name= $row['name'];
$email= $row['email'];
$phoneno = $row['phoneno'];
$password = $row['password'];
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];


  $sql = "Update `crud` set id=$id, name= '$name',email='$email',phoneno='$phoneno',password='$password' where id=$id";
   $result = mysqli_query($conn, $sql);
   if($result) {
    //echo "Updated successfully";
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
                <input type="text" class="form-control" name="name" placeholder="Enter your name"
                value="<?php echo $name; ?>" >
            </div>
             <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email" 
                value ="<?php echo $email; ?>" >
            </div>
              <div class="form-group">
                <label>Phoneno</label>
                <input type="text" class="form-control" name="phoneno" placeholder="Enter your Mobile Number" "
                value="<?php echo $phoneno; ?>" >
            </div>
              <div class="form-group">
                <label>Password</label>
                <input type="email" class="form-control" name="password" placeholder="Enter your password"
                value="<?php echo $password; ?>" >
            </div>


            <button type="submit"  name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>




</body>

</html>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Resorce/bootstrap.css" />
  <title>Admin</title>
</head>

<body class="bg-light">

<?php
include 'db.php';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM `admin` WHERE admin='$username' AND password='$password'";
  $result=mysqli_query($conn,$sql);
  mysqli_num_rows($result);
  // $_SESSION['admin'] = $username;
  
  if(mysqli_num_rows($result)){
    $_SESSION['admin'] = $username;
    ?>
    <script>
        alert("Welcome back Admin");
        location.replace("admin");
    </script>
    <?php
  }
}

?>





  <div class="container mt-5 border border-secondary rounded">
      <form class="mb-3 mt-3" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Admin User ID</label>
          <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Login">
      </form>
  </div>
</body>

</html>
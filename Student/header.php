<?php include 'download.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../Resorce/bootstrap.css">
    <link rel="stylesheet" href="../Resorce/student.css">
    <!-- <script src="../Resorce/droupdown.js"></script> -->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Student</title>
    <link rel="icon" href="../Resorce/logo.png" type="image/icon type">
</head>
<?php
session_start();
$_SESSION['Name'];
if (!isset($_SESSION['Name'])) {
    header("Location: student");
}
// <?php echo "<h1>Welcome " . $_SESSION['Name'] . "</h1>"; 
?>
<!-- // <a href="logout">logout</a>  -->
<!-- ?> -->

<body>
  <!-- Nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="student"><img src="../Resorce/logo.gif" style="height: 70px;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="#">Notice</a></b>
          </li> -->
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="homework">Home Work</a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="result">Result</a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="lecture">Lecture</a></b>
          </li>
        </ul>
        <div class="d-flex">
          <div class="dropdown float-right ">
            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            if(isset($_SESSION['image'])){
              echo "<img src='../Admin/".$_SESSION['image']."' class='rounded-circle z-depth-2' alt='...' height='50px' width='50px'>";
            }
            else{
              echo "<img src='../Resorce/default-avatar.jpg' class='rounded-circle z-depth-2' alt='...' height='50px' width='50px'>";
            }
            ?>
            </button>
            <ul class='dropdown-menu' aria-labelledby='dropdownMenu2'>
            <li><a class="dropdown-item" href="account"><i class="fa-solid fa-user"></i> Profile Info</a></li>
            <?php
            if (isset($_SESSION['Name'])) {
              echo "
              <li><a href='logout' class='logout'><button class='dropdown-item' type='button'><i class='fa-solid fa-arrow-right-from-bracket'></i> Logout</button></a></li>";
            }
            ?>
            </ul> 
          </div>
          <div>
            <h3 style="margin-top: 10px ;">
              <?php
              if(isset($_SESSION['Name'])){
                echo  $_SESSION['Name'];
              }
              ?>
            </h3>
          </div>
          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </div>
      </div>
    </div>
  </nav>

</body>
</html>
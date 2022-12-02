<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../Resorce/footer.css">
    <link rel="stylesheet" href="../Resorce/bootstrap.css">
    <link rel="stylesheet" href="../Resorce/sidebar.css">
    <link rel="stylesheet" href="../Resorce/student.css">
    <link rel="stylesheet" href="../Resorce/video.css">
    <script src="../Resorce/droupdown.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Lecture</title>
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
<!-- // <a href="logout.php">logout</a>  -->
<!-- ?> -->

<body>
  <div id="con">
    <div id="main">
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
            <b><a class="nav-link active" aria-current="page" href="lecture"><u>Lecture</u></a></b>
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
            <li><a class="dropdown-item" href="account."><i class="fa-solid fa-user"></i> Profile Info</a></li>
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
  <?php
  include 'db.php';
  if (isset($_POST['search-btn'])) {
    $titel = $_POST['titel'];
    $class = $_POST['class'];
    $query = "SELECT * FROM `lecture` WHERE LectureName='$titel' AND Class='$class'";
    $query_run = mysqli_query($conn, $query);

  ?>
  <div class="container">
        <div class="heading">Search Result</div>
        <div class="video-container">
        <?php
            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_array($query_run)){
                $lecture = $row['Lecture'];
                $titel = $row['LectureName'];
                $date = $row['Date'];
            ?>
            <div class="video">
                <h3><?php echo $titel; ?></h3>
            <video width="100%" controls><source src="<?php echo '../Lecture/'.$lecture; ?>" type="video/mp4"></video>
            <!-- <h6>Published on <?php echo $date; ?></h6> -->
            <p>Published on <?php echo $date; ?></p>  
            </div>
            <?php
            }
            ?>
        </div>
    </div>
  <?php
  }else {
    ?>
    <tr>
      <h3>No Data Found</h3>
    </tr>
  <?php
  }
  ?>
  <?php
  }
  ?>
    </div>
  </div>
  <footer id="footer">
  <p>© Copyright <script>document.write(new Date().getFullYear())</script>--Oliva School</p>
  <p>Design and Developed by: <a href="https://www.linkedin.com/in/aditya-das-513883222?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BJ57FP0esQ0WqqQX6Wx2s8w%3D%3D" target="_blank">Aditya Das</a></p>
  </footer>
</body>
</html>
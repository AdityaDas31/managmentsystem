<?php include 'homeworklogic.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Resorce/student.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../Resorce/footer.css">
    <link rel="stylesheet" href="../Resorce/bootstrap.css">
    <link rel="stylesheet" href="../Resorce/sidebar.css">
    <link rel="stylesheet" href="../Resorce/student.css">
    <script src="../Resorce/droupdown.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Home Work</title>
    <link rel="icon" href="../Resorce/logo.png" type="image/icon type">
</head>
<?php
session_start();
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
            <b><u><a class="nav-link active" aria-current="page" href="homework">Home Work</a></u></b>
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
  <div class="container mt-5 text-center ">
    <div class="row">
      <div class="col-md-12 bg-white shadow">
        <form method="POST" action="">
          <div class="row mb-3 mt-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="sub" id="inputEmail3" placeholder="Enter Subject" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Class</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="class" id="inputPassword3" placeholder="Enter Class" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            </div>
          </div>
          <button type="submit" name="search-btn mb-3" class="btn btn-primary">Search</button>
        </form>
      </div>
    </div>
  </div>
  <?php
  include 'db.php';
  if (isset($_POST['search-btn'])) {
    $sub = $_POST['sub'];
    $class = $_POST['class'];
    $query = "SELECT * FROM `homework` WHERE Subject='$sub' AND Class='$class' ";
    $query_run = mysqli_query($conn, $query);

  ?>
    <div class="container">
      <div class="row">
        <div class="table-responsive">
          <table class="table table-success table-striped mt-5">
            <thead class="text-center">
              <th scope="col">Home Work Title</th>
              <th scope="col">Subject</th>
              <th scope="col">Class</th>
              <th scope="col">Submit Date</th>
              <th scope="col">Download</th>
            </thead>
            <tbody>
              <?php
              if (mysqli_num_rows($query_run) > 0) {
                while ($row1 = mysqli_fetch_array($query_run)) {
              ?>
                  <tr class="text-center">
                    <td>
                      <?php echo $row1['Name'] ?>
                    </td>
                    <td>
                      <?php echo $row1['Subject'] ?>
                    </td>
                    <td>
                      <?php echo $row1['Class'] ?>
                    </td>
                    <td>
                      <?php echo $row1['Date'] ?>
                    </td>
                    <td><a href="../Home Work/<?php echo $row1['Work'] ?>" class="btn btn-primary">Download</a></td>
                  </tr>
                <?php
                }
              } else {
                ?>
                <tr>
                  <td colspan="9">No Data Found</td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
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
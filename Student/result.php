<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Resorce/student.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="../Resorce/bootstrap.css">
  <link rel="stylesheet" href="../Resorce/sidebar.css">
  <link rel="stylesheet" href="../Resorce/student.css">
  <script src="../Resorce/droupdown.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <title>Result</title>
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
            <b><a class="nav-link active" aria-current="page" href="result"><u>Result</u></a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="lecture">Lecture</a></b>
          </li>
        </ul>
        <div class="d-flex">
          <div class="dropdown float-right ">
            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
              if (isset($_SESSION['image'])) {
                echo "<img src='../Admin/" . $_SESSION['image'] . "' class='rounded-circle z-depth-2' alt='...' height='50px' width='50px'>";
              } else {
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
              </button>
            </ul>
          </div>
          <div>
            <h3 style="margin-top: 10px ;">
              <?php
              if (isset($_SESSION['Name'])) {
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
            <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Enter Your Full Name" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Student ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="sid" id="inputPassword3" placeholder="Enter your Student ID" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Semester No.</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="sem" id="inputPassword3" placeholder="Ex: sem1/sem2" required>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
            </div>
          </div>
          <button type="submit" name="search-btn" class="btn btn-primary">Search</button>
        </form>
      </div>
    </div>
  </div>
  <?php
  include 'db.php';
  if (isset($_POST['search-btn'])) {
    $name = $_POST['name'];
    $id = $_POST['sid'];
    $sem = $_POST['sem'];
    $query = "SELECT * FROM `result` WHERE Name='$name' AND StudentID='$id' AND Tital='$sem' ";
    $query_run = mysqli_query($conn, $query);

  ?>
    <div class="container">
      <div class="row">
        <div class="table-responsive">
          <table class="table table-success table-striped mt-5">
            <thead class="text-center">
              <th scope="col">Name</th>
              <th scope="col">Student ID</th>
              <th scope="col">Result</th>
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
                      <?php echo $row1['StudentID'] ?>
                    </td>
                    <td>
                      <?php echo $row1['Tital'] ?>
                    </td>
                    <td><a href="../Result/<?php echo $row1['Result'] ?>" class="btn btn-primary">Download</a></td>
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
</body>
<!-- <footer><?php include 'footer.php';  ?></footer> -->

</html>
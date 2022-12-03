<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../Resorce/footer.css"> -->
  <link rel="stylesheet" href="../Resorce/bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../Resorce/style.css">
  <script src="../Resorce/droupdown.js"></script>
  <title>Admin</title>
  <link rel="icon" href="../Resorce/logo.png" type="image/icon type">
</head>
<?php session_start();
if (!$_SESSION['admin']) {
  header("location:login");
}
?>

<body>
  <div id="con">
    <div id="main">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="admin"><img src="../Resorce/logo.gif" style="height: 70px;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="teachermanage">Teaching Staff</a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="studentmanage">Student</a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="uplodenotice">Notice</a></b>
          </li>
          <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
          <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
        </ul>
        <div class="d-flex">
          <div class="dropdown float-right ">
            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </button>
            <?php
            if (isset($_SESSION['admin'])) {
              echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenu2'>
              <li><a href='logout.php' class='link'><button class='dropdown-item bg-white' type='button'><i class='fa-solid fa-arrow-right-from-bracket'></i> Logout</button></a></li>";
            }
            ?>
            </ul>
          </div>
          <h3><?php if (isset($_SESSION['admin'])) {
                echo  $_SESSION['admin'];
              } ?></h3>
          <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        </div>
      </div>
    </div>
  </nav>


  <!-- student -->

  <div class="container">
    <div class="row">
      <h3 class="text-center mt-3">Student List</h3>
      <!-- search -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- <div class="card-header">

          </div> -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <form action="" method="POST">
                      <div class="row">
                      <div class="col">
                          <input type="text" name="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="col">
                      <button type="submit" name="search-btn" id="btn" class="btn btn-primary mb-2 "><i class="fa-solid fa-magnifying-glass"></i></button>
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
                <?php
                include 'db.php';
                if (isset($_POST['search-btn'])) {
                  $id = $_POST['search'];
                  $query = "SELECT * FROM `student` WHERE Name='$id' ";
                  $query_run = mysqli_query($conn, $query);

                ?>
                  <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                      <thead class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll</th>
                        <th scope="col">SID</th>
                        <th scope="col">Class</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Image</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                      </thead>
                      <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                          while ($row1 = mysqli_fetch_array($query_run)) {
                        ?>
                            <tr class="text-center">
                              <td><?php echo $row1['id'] ?></td>
                              <td><?php echo $row1['Name'] ?></td>
                              <td><?php echo $row1['Roll'] ?></td>
                              <td><?php echo $row1['StudentID'] ?></td>
                              <td><?php echo $row1['Class'] ?></td>
                              <td><?php echo $row1['DOB'] ?></td>
                              <td><img src=<?php echo $row1['Image'] ?> height='90px' width='100px'></td>
                              <td><a href="Supdate.php?ID=<?php echo $row1['id'] ?>" class='btn btn-primary'><i class='fa-regular fa-pen-to-square'></a></td>
                              <td><a href="Sdelete.php?ID=<?php echo $row1['id']?>" class="btn btn-danger"><i class="fa-solid fa-user-slash"></a></td>
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
                <?php
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- table -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive">
      <table class="table table-success ">
        <thead class="text-center">
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Roll</th>
          <th scope="col">SID</th>
          <th scope="col">Class</th>
          <th scope="col">DOB</th>
          <th scope="col">Image</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
        </thead>
        <tbody class="text-center">
          <?php
          include 'db.php';
          $record = mysqli_query($conn, "SELECT * FROM `student`");

          while ($row = mysqli_fetch_array($record))
            echo " 
      <tr>
      <td>$row[id]</td>
      <td>$row[Name]</td>
      <td>$row[Roll]</td>
      <td>$row[StudentID]</td>
      <td>$row[Class]</td>
      <td>$row[DOB]</td>
      <td><img src='$row[Image]' height= '90px' width='100px'></td>
      <td><a href='Supdate.php?ID=$row[id]' class='btn btn-primary'><i class='fa-regular fa-pen-to-square'></i></a></td>
      <td><a href='Sdelete.php?ID=$row[id]' class='btn btn-danger'><i class='fa-solid fa-user-slash'></i></a></td>
      </tr>
      ";
          ?>
        </tbody>
      </table>
      </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  <!-- Teacher -->

  <div class="container">
    <div class="row">
      <h3 class="text-center mt-3">Teacher List</h3>

      <!-- Search -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <!-- <div class="card-header">

          </div> -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">

                    <form action="" method="POST">
                      <div class="row">
                      <div class="col">
                          <input type="text" name="search1" class="form-control" aria-describedby="emailHelp">
                          <span id="name_error" class="error_field"></span>
                      </div>
                      <div class="col">
                      <button type="submit" name="search-btn-btn" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
                <?php
                include 'db.php';
                if (isset($_POST['search-btn-btn'])) {
                  $id = $_POST['search1'];
                  $query = "SELECT * FROM `teacher` WHERE Name='$id' ";
                  $query_run = mysqli_query($conn, $query);

                ?>
                  <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                      <thead class="text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>UID</th>
                        <th>Department</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </thead>
                      <tbody>
                        
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                          while ($row2 = mysqli_fetch_array($query_run)) {
                        ?>
                            <tr class="text-center">
                              <td><?php echo $row2['id'] ?></td>
                              <td><?php echo $row2['Name'] ?></td>
                              <td><?php echo $row2['TeacherID'] ?></td>
                              <td><?php echo $row2['Department'] ?></td>
                              <td><img src=<?php echo $row2['Image'] ?> height='90px' width='100px'></td>
                              <td><a href="Tupdate.php?Id=<?php echo $row2['id'] ?>" class='btn btn-primary'><i class="fa-regular fa-pen-to-square"></a></td>
                              <td><a href="Tdelete.php?Id=<?php echo $row2['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-user-slash"></a></td>
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
                <?php
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive">
      <table class="table table-success table-striped mt-5">
        <thead class="text-center">
          <th>ID</th>
          <th>Name</th>
          <th>UID</th>
          <th>Department</th>
          <th>Image</th>
          <th>Update</th>
          <th>Delete</th>
        </thead>
        <tbody class="text-center">
          <?php
          include 'db.php';
          $Record = mysqli_query($conn, "SELECT * FROM `teacher`");

          while ($row = mysqli_fetch_array($Record))
            echo " 
      <tr>
      <td>$row[id]</td>
      <td>$row[Name]</td>
      <td>$row[TeacherID]</td>
      <td>$row[Department]</td>
      <td><img src='$row[Image]' height= '90px' width='100px'></td>
      <td><a href='Tupdate.php?Id=$row[id]' class='btn btn-primary'><i class='fa-regular fa-pen-to-square'></a></td>
      <td><a href='Tdelete.php?Id=$row[id]' class='btn btn-danger'><i class='fa-solid fa-user-slash'></a></td>
      </tr>
      ";
          ?>
        </tbody>
      </table>
      </div>
      </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
    </div>
  </div>
  <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background: #ced4da; font-size: 18px;">
  © Copyright <script>document.write(new Date().getFullYear())</script>--Oliva School
  <p>Design and Developed by: <a href="https://www.linkedin.com/in/aditya-das-513883222?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BJ57FP0esQ0WqqQX6Wx2s8w%3D%3D" target="_blank" style="text-decoration: none; font-weight: bold; color: black;">Aditya Das</a></p>
  </div>
  <!-- Copyright -->
</footer>
<!-- <footer id="footer">
  <p>© Copyright <script>document.write(new Date().getFullYear())</script>--Oliva School</p>
  <p>Design and Developed by: <a href="https://www.linkedin.com/in/aditya-das-513883222?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BJ57FP0esQ0WqqQX6Wx2s8w%3D%3D" target="_blank">Aditya Das</a></p>
  </footer> -->
</body>

</html>
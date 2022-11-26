<?php include 'homeworklogic.php'; ?>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Resorce/bootstrap.css">
    <link rel="stylesheet" href="../Resorce/studentmanage.css">
    <link rel="stylesheet" href="../Resorce/style.css">
    <link rel="stylesheet" href="../Resorce/student.css">
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="teacher"><img src="../Resorce/logo.gif" style="height: 70px;" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="uplodenotice">Notice</a></b>
          </li>
          <li class="nav-item">
            <b><u><a class="nav-link active" aria-current="page" href="homework">Home Work</a></u></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="result">Result</a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link active" aria-current="page" href="lecture">Lecture</a></b>
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
            <?php
            if (isset($_SESSION['Name'])) {
              echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenu2'>
              <li><a href='logout' class='logout'><button class='dropdown-item bg-white' type='button'><i class='fa-solid fa-arrow-right-from-bracket'></i> Logout</button></a></li>";
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
  <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-6 bg-white shadow">
                <form method="POST" action="homeworklogic" enctype="multipart/form-data">
                    <legend class="text-center">Home Work Portal</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Home Work Title</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Home Work Titel" name="titel">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Subject</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Subject" name="sub">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Class</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Class" name="class">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Submit Date</label>
                        <input type="date" id="disabledTextInput" class="form-control" placeholder="Student Name" name="ndate">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Add Home Work</label>
                        <input type="file" id="disabledTextInput" class="form-control" placeholder="Student Name" name="myfile">
                    </div>
                    <button type="submit" name="upload" value="upload file" class="btn btn-primary w-100">Upload</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="row">
      <h3 class="text-center mt-3">How Work Table</h3>
      <table class="table table-success table-striped">
        <thead class="text-center">
        <th>No.</th>
        <th>Home Work Title</th>
        <th>Subject</th>
        <th>Class</th>
        <th>Submit Date</th>
        <th>Download</th>
        <th scope="col">Delete</th>
        </thead>
        <tbody class="text-center">
        <?php 
        $i = 0;
        foreach($file as $key => $file):
          $i = $key +1; 
        ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $file['Name'] ?></td>
            <td><?php echo $file['Subject'] ?></td>
            <td><?php echo $file['Class'] ?></td>
            <td><?php echo $file['Date'] ?></td>
            <td><a href="../Home Work/<?php echo $file['Work'] ?>" class="btn btn-primary">Download</a></td>
            <td><a href="hdelete?ID=<?php echo $file['id']?>" class="btn btn-danger">Delete</a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
</body>
<!-- <?php include 'footer.php'; ?>  -->
</html>
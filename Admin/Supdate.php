<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Resorce/bootstrap.css">
    <link rel="stylesheet" href="../Resorce/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Student</title>
    <link rel="icon" href="../Resorce/logo.png" type="image/icon type">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="admin.php"><img src="../Resorce/logo.gif" style="height: 70px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <b><a class="nav-link active" aria-current="page" href="teachermanage.php">Teaching Staff</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link active" aria-current="page" href="studentmanage.php">Student</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link active" aria-current="page" href="#">Notice</a></b>
                    </li>
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


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="bg-white shadow">
            <?php
include 'db.php';
$id = $_GET['ID'];
$q = "SELECT * FROM `student` WHERE id = {$id} ";
$record = mysqli_query($conn, $q) or die("Query Unsuccessful");
// $fetch = mysqli_fetch_array($record);
// $id=$_GET['id'];
// $Name=$_GET['name'];
// $Roll=$_GET['roll'];
// $StudentID=$_GET['sid'];
// $Class=$_GET['class'];
// $DOB=$_GET['dob'];
// $Image=$_GET['image'];
if(mysqli_num_rows($record)){
    while($row = mysqli_fetch_assoc($record)){
?>
                <form action="Supdate1.php" method="POST" enctype="multipart/form-data">
                    <legend class="text-center">Student Update Portal</legend>
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <label for="disabledTextInput" class="form-label">Student Name</label>
                        <input type="text" value="<?php echo $row['Name'] ?>" id="disabledTextInput" class="form-control" placeholder="Student Name" name="sname">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Student Roll</label>
                        <input type="text" value="<?php echo $row['Roll'] ?>" id="disabledTextInput" class="form-control" placeholder="Student Roll" name="sroll">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Student ID</label>
                        <input type="text" value="<?php echo $row['StudentID'] ?>" id="disabledTextInput" class="form-control" placeholder="Student ID" name="sid">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Student Class</label>
                        <input type="text" value="<?php echo $row['Class'] ?>" id="disabledTextInput" class="form-control" placeholder="Student Class" name="sclass">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Date Of Birth</label>
                        <input type="date" value="<?php echo $row['DOB'] ?>" id="disabledTextInput" class="form-control" placeholder="DOB" name="sdob">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Image</label>
                        <input type="file" id="disabledTextInput" class="form-control" placeholder="Image" name="simage"><br>
                        <img src="<?php echo $row['Image'] ?>" alt="" style="height: 100px;">
                    </div>
                    <button type="submit"  name="update" value="update" class="btn btn-primary w-100">Update</button>
                </form>
                <?php
    }
}
                ?>
            </div>
        </div>
    </div>
    
</body>

</html>
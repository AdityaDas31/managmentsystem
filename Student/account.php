<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../Resorce/footer.css">
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
                                </ul>
                            </div>
                            <div>
                                <h3 style="margin-top: 10px ;">
                                    <?php
if (isset($_SESSION['Name'])) {
    echo $_SESSION['Name'];
}
?>
                                </h3>
                            </div>
                            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container  overflow-auto mt-5">
                <div class="row gutters">
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="account-settings">
                                    <div class="user-profile">
                                        <div class="user-avatar text-center">
                                            <?php
if (isset($_SESSION['image'])) {
    echo "<img src='../Admin/" . $_SESSION['image'] . "' class='rounded-circle z-depth-2' alt='...' height='95px' width='95px'>";
} else {
    echo "<img src='../Resorce/default-avatar.jpg' class='rounded-circle z-depth-2' alt='...' height='70px' width='70px'>";
}
?>
                                        </div>
                                        <h5 class="user-name text-center">
                                            <?php if (isset($_SESSION['Name'])) {
    echo $_SESSION['Name'];
}?>
                                        </h5>
                                        <!-- <h6 class="user-email">yuki@Maxwell.com</h6> -->
                                    </div>
                                    <!-- <div class="about">
                                <h5>About</h5>
                                <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <form action="">
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6 class="mb-2 text-primary">Personal Details</h6>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="fullName">Full Name</label>
                                                <input type="text" class="form-control" value="<?php echo $_SESSION['Name'] ?>" id="fullName" placeholder="Enter full name" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="Roll">Roll</label>
                                                <input type="text" value="<?php if (isset($_SESSION['roll'])) {
    echo $_SESSION['roll'];
}?>" class="form-control" id="eMail" placeholder="Enter email ID" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="StudentID">StudentID</label>
                                                <input type="text" class="form-control" id="StudentID" value="<?php if (isset($_SESSION['id'])) {
    echo $_SESSION['id'];
}?>" placeholder="Enter phone number" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="DOB">Date Of Birth</label>
                                                <input type="date" class="form-control" id="dob" value="<?php if (isset($_SESSION['dob'])) {
    echo $_SESSION['dob'];
}?>" placeholder="Date of Birth" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="DOB">Class</label>
                                                <input type="text" class="form-control" id="class" value="<?php if (isset($_SESSION['class'])) {
    echo $_SESSION['class'];
}?>" placeholder="Website url" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row gutters">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right mt-3">
                                    <button type="button" id="submit" name="submit"
                                        class="btn btn-secondary">Cancel</button>
                                    <button type="button" id="submit" name="submit"
                                        class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div> -->
                                </form>
                                <form method="POST" action="">
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="Street">Street</label>
                                                <input type="text" value="<?php if (isset($_SESSION['street'])) {
    echo $_SESSION['street'];
}?>" class="form-control" id="Street" placeholder="Enter Street" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="ciTy">City</label>
                                                <input type="text" value="<?php if (isset($_SESSION['city'])) {
    echo $_SESSION['city'];
}?>" class="form-control" id="ciTy" placeholder="Enter City" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="sTate">State</label>
                                                <input type="text" value="<?php if (isset($_SESSION['state'])) {
    echo $_SESSION['state'];
}?>" class="form-control" id="sTate" placeholder="Enter State" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="zIp">Zip Code</label>
                                                <input type="text" value="<?php if (isset($_SESSION['zip'])) {
    echo $_SESSION['zip'];
}?>" class="form-control" id="zIp" placeholder="Zip Code" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gutters">
                                        <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right mt-3">
                                    <a href="address.php"><button type="button" id="submit" name="submit"
                                        class="btn btn-secondary">Add Info</button></a>
                                    <button type="button" id="submit" name="submit"
                                        class="btn btn-primary">Update</button>
                                </div>
                            </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
  <p>© Copyright <script>document.write(new Date().getFullYear())</script>--Oliva School</p>
  <p>Design and Developed by: <a href="https://www.linkedin.com/in/aditya-das-513883222?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BJ57FP0esQ0WqqQX6Wx2s8w%3D%3D" target="_blank">Aditya Das</a></p>
  </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
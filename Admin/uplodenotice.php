<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Resorce/bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../Resorce/footer.css">
  <link rel="stylesheet" href="../Resorce/style.css">
  <script src="../Resorce/droupdown.js"></script>
  <title>Notice</title>
  <link rel="icon" href="../Resorce/logo.png" type="image/icon type">
</head>
<?php session_start();
if (!$_SESSION['admin']) {
    header("location:login.php");
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
                        <b><a class="nav-link active" aria-current="page" href="uplodenotice"><u>Notice</u></a></b>
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
              <li><a href='logout' class='link'><button class='dropdown-item bg-white' type='button'><i class='fa-solid fa-arrow-right-from-bracket'></i> Logout</button></a></li>";
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
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-12 bg-white shadow">
                <form method="POST" action="download" enctype="multipart/form-data">
                    <legend class="text-center">Notice Manage Portal</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Notice Title</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Notice Title" name="titel">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Notice Date</label>
                        <input type="datetime-local" id="disabledTextInput" class="form-control" placeholder="Student Name" name="ndate">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Add Notice</label>
                        <input type="file" id="disabledTextInput" class="form-control" placeholder="Student Name" name="myfile">
                    </div>
                    <button type="submit" name="upload" value="upload file" class="btn btn-primary w-100">Upload</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<footer id="footer">
  <p>© Copyright <script>document.write(new Date().getFullYear())</script>--Oliva School</p>
  <p>Design and Developed by: <a href="https://www.linkedin.com/in/aditya-das-513883222?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BJ57FP0esQ0WqqQX6Wx2s8w%3D%3D" target="_blank">Aditya Das</a></p>
  </footer>
</body>

</html>
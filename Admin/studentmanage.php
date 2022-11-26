<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Resorce/bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="../Resorce/style.css">
  <script src="../Resorce/droupdown.js"></script>
  <title>Student</title>
  <link rel="icon" href="../Resorce/logo.png" type="image/icon type">
</head>
<?php session_start();
if (!$_SESSION['admin']) {
    header("location:login");
}
?>

<body>
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
                        <b><a class="nav-link active" aria-current="page" href="studentmanage"><u>Student</u></a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link active" aria-current="page" href="uplodenotice">Notice</a></b>
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
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class=" bg-white shadow">
                <form method="POST" action="sinsart" enctype="multipart/form-data">
                    <legend class="text-center">Student Manage Portal</legend>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Student Name</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Student Name" name="sname" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Student Roll</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Student Roll" name="sroll" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Student ID</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Student ID" name="sid" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Student Class</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Student Class" name="sclass" require>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Date Of Birth</label>
                        <input type="date" id="disabledTextInput" class="form-control" placeholder="DOB" name="sdob" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Image</label>
                        <input type="file" id="disabledTextInput" class="form-control" placeholder="Image" name="simage" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Street</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Street" name="street" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">City</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="City" name="city" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">State</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="state" name="state" required>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Zip Code</label>
                        <input type="text" id="disabledTextInput" maxlength="6" class="form-control" placeholder="zip code" name="pin" required>
                    </div>
                    <!-- <div class="mb-3">
                            <label for="disabledSelect" class="form-label">Disabled select menu</label>
                            <select id="disabledSelect" class="form-select">
                                <option>Disabled select</option>
                            </select>
                        </div> -->
                    <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</head>
</body>

</html>
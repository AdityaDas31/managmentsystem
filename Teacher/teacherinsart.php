<?php
session_start();

if(isset($_POST['submit'])){
    include 'db.php';
    $user_id = $_POST['uid'];
    $user_password = $_POST['password'];
    $sql = "SELECT * FROM `teacher` WHERE Name='$user_id' AND TeacherID='$user_password'";
    $Result = mysqli_query($conn,$sql);
    mysqli_num_rows($Result);
    if(mysqli_num_rows($Result)){
        $row = mysqli_fetch_assoc($Result);
        $_SESSION['street'] = $row['Street'];
        $_SESSION['city'] = $row['City'];
        $_SESSION['state'] = $row['State'];
        $_SESSION['zip'] = $row['Zip'];
        $_SESSION['department'] = $row['Department'];
        $_SESSION['phone'] = $row['Phone'];
        $_SESSION['id'] = $row['TeacherID'];
        $_SESSION['image'] = $row['Image'];
        $_SESSION['Name'] = $row['Name'];
        ?>
    <script>
        alert("Successfully Login");
        location.replace("teacher");
    </script>
    <?php
    }
    else{
        ?>
    <script>
        alert("Login Unsuccessfull");
        location.replace("../index");
    </script>
    <?php
    }
}




?>
<?php
session_start();
if(isset($_POST['submit'])){
    include 'db.php';
    $user_id = $_POST['uid'];
    $user_password = $_POST['password'];
    $sql = "SELECT * FROM `student` WHERE Roll='$user_id' AND StudentID='$user_password'";
    $result = mysqli_query($conn,$sql);
    
    $user_name = mysqli_num_rows($result);
    
    if($user_name){
        //  $fetch = mysqli_fetch_assoc($result);
         $row = mysqli_fetch_assoc($result);
         $_SESSION['street'] = $row['Street'];
         $_SESSION['city'] = $row['City'];
         $_SESSION['state'] = $row['State'];
         $_SESSION['zip'] = $row['Zip'];
         $_SESSION['class'] = $row['Class'];
         $_SESSION['dob'] = $row['DOB'];
         $_SESSION['id'] = $row['StudentID'];
         $_SESSION['roll'] = $row['Roll'];
         $_SESSION['image'] = $row['Image'];
         $_SESSION['Name'] = $row['Name'];
        ?>
    <script>
        alert("Successfully Login");
        location.replace("student");
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
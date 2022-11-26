<?php 

if(isset($_POST['sbumit'])){
    include 'db.php';

    $teacher_name = $_POST['tname'];
    $teacher_id = $_POST['tid'];
    $teacher_dep = $_POST['tdep'];
    $teacher_image = $_FILES['timage'];
    //print_r($teacher_image);
    $image_loc = $_FILES['timage']['tmp_name'];
    $image_name = $_FILES['timage']['name'];
    $img_des = "teacherimage/".$image_name;
    move_uploaded_file($image_loc, "teacherimage/".$image_name);
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];

    $idquery = "SELECT * FROM `teacher` WHERE TeacherID='$teacher_id' ";
    $IDquery = mysqli_query($conn,$idquery);
    $idcount = mysqli_num_rows($IDquery);

    if($idcount>0){
        ?>
        <script>
            alert("TeacherID already exists");
            location.replace("teachermanage");
        </script>
        <?php  
    }
    else{
        $q = mysqli_query($conn, "INSERT INTO `teacher`(`Name`, `TeacherID`, `Department`, `Image`, `Phone`, `Street`, `City`, `State`, `Zip`) VALUES ('$teacher_name','$teacher_id','$teacher_dep','$img_des','$phone','$street','$city','$state','$pin')");
        ?>
        <script>
            alert("Data Successfully inserted");
            location.replace("admin");
        </script>
        <?php
    }

}
?>
<?php

if(isset($_POST['submit'])){
    include 'db.php';

    $sudent_name = $_POST['sname'];
    $sudent_roll = $_POST['sroll'];
    $sudent_id = $_POST['sid'];
    $sudent_class = $_POST['sclass'];
    // $sudent_dob = $_POST['sdob'];
    $sudent_dob = date('Y-m-d', strtotime($_POST['sdob']));
    $sudent_image = $_FILES['simage'];
    // print_r($sudent_image);
    $image_loc = $_FILES['simage']['tmp_name'];
    $image_name = $_FILES['simage']['name'];
    $img_des = "studentimage/".$image_name;
    move_uploaded_file($image_loc, "studentimage/".$image_name);
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];

    $idquery = "SELECT * FROM `student` WHERE StudentID='$sudent_id' ";
    $IDquery = mysqli_query($conn,$idquery);
    $idcount = mysqli_num_rows($IDquery);

    if($idcount>0){
        ?>
        <script>
            alert("StudentID already exists");
            location.replace("studentmanage");
        </script>
        <?php  
    }
    else{
        $q = mysqli_query($conn, "INSERT INTO `student`(`Name`, `Roll`, `StudentID`, `Class`, `DOB`, `Image`, `Street`, `City`, `State`, `Zip`) VALUES ('$sudent_name','$sudent_roll','$sudent_id','$sudent_class','$sudent_dob','$img_des','$street','$city','$state','$pin')");
        ?>
        <script>
            alert("Data Successfully inserted");
            location.replace("admin");
        </script>
        <?php
    }

    

    




}
?>


<?php
    include 'db.php';
    if (isset($_POST['Supdate'])) {
        $id = $_POST['id'];
        $sudent_name = $_POST['sname'];
        $sudent_roll = $_POST['sroll'];
        $sudent_id = $_POST['sid'];
        $sudent_class = $_POST['sclass'];
        // $sudent_dob = $_POST['sdob'];
        $sudent_dob = date('Y-m-d', strtotime($_POST['sdob']));
        $sudent_image = $_FILES['simage'];
        // print_r($sudent_image);
        $image_loc = $_FILES['simage']['tmp_name'];
        $image_name = $_FILES['simage']['name'];
        $img_des = "studentimage/" . $image_name;
        move_uploaded_file($image_loc, "studentimage/" . $image_name);
        $q1 = "UPDATE `student` SET `Name`=' $sudent_name',`Roll`='$sudent_roll',`StudentID`='$sudent_id',`Class`='$sudent_class',`DOB`='$sudent_dob',`Image`='$img_des' WHERE id = $id";

        mysqli_query($conn,$q1);
        ?>
        <script>
        alert("Data Successfully inserted");
        location.replace("admin.php");
    </script>
        <?php
    }
    ?>
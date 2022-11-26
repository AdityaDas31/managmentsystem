<?php

include 'db.php';

if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $sid = $_POST['sid'];
    $tital = $_POST['title'];
    $file_name = $_FILES['myfile']['name'];
    $file_des = '../Result/' . $file_name;
    $extension = pathinfo($file_name,PATHINFO_EXTENSION);
    $file_tep_name = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    if(!in_array($extension,['pdf'])){
        echo "Error";
        ?>
        <script>
            alert("Wrong File Type....File type should be '.pdf','.doc','.docx','.xlsx'");
            location.replace("result");
        </script>
        <?php
    }
    elseif($_FILES['myfile']['size'] > 1000000){
        ?>
        <script>
            alert("Too large File....File should be under 1000 MB");
            location.replace("result");
        </script>
        <?php
    }
    else{
        if(move_uploaded_file($file_tep_name,$file_des)){
            $sql = "INSERT INTO `result`( `Name`, `StudentID`, `Tital`, `Result`, `Size`) VALUES ('$name','$sid','$tital','$file_name','$size')";
            if(mysqli_query($conn,$sql)){
                ?>
                <script>
                    alert("Result Successfully Published");
                    location.replace("teacher");
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert("Error....Something Went Wrong");
                    location.replace("result");
                </script>
                <?php
            }
        }
    }
}


?>
<?php
include 'db.php';
if(isset($_POST['upload'])){
$publisher = $_POST['publisher'];
$titel = $_POST['titel']; 
$class = $_POST['class'];
$date = date('Y-m-d', strtotime($_POST['ldate']));
$file_name = $_FILES['myfile']['name'];
$file_des = '../Lecture/' . $file_name;
$extension = pathinfo($file_name,PATHINFO_EXTENSION);
$file_tep_name = $_FILES['myfile']['tmp_name'];
// $size = $_FILES['myfile']['size'];
if(!in_array($extension,['mp4','mkv'])){
    ?>
    <script>
        alert("Wrong File Type....File type should be 'mp4','mkv'");
        location.replace("lecture");
    </script>
    <?php
}
else{
    if(move_uploaded_file($file_tep_name,$file_des)){
        $sql = "INSERT INTO `lecture`(`Publisher`, `LectureName`, `Class`, `Date`, `Lecture`) VALUES ('$publisher','$titel','$class','$date','$file_name')";
        if(mysqli_query($conn,$sql)){
            ?>
            <script>
                alert("Lecture Successfully Published");
                location.replace("lecture");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Error....Something Went Wrong");
                location.replace("lecture");
            </script>
            <?php
        }
    }
}       
}
?>
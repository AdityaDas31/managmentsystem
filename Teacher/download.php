<?php
include 'db.php';

$sql = "SELECT * FROM `notice` order by notice.id desc";

$result = mysqli_query($conn,$sql);

$file = mysqli_fetch_all($result,MYSQLI_ASSOC);

if(isset($_POST['upload'])){
    $titel = $_POST['titel'];
    // $noticedate = date('Y-m-d', strtotime($_POST['ndate']));
    $noticedate = $_POST['ndate'];
    $file_name = $_FILES['myfile']['name'];
    $file_des = '../Notice/' . $file_name;
    $extension = pathinfo($file_name,PATHINFO_EXTENSION);
    $file_tep_name = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if(!in_array($extension,['pdf','doc','docx','xlsx'])){
        echo "Error";
        ?>
        <script>
            alert("Wrong File Type....File type should be '.pdf','.doc','.docx','.xlsx'");
            location.replace("uplodenotice");
        </script>
        <?php
    }
    elseif($_FILES['myfile']['size'] > 1000000){
        echo "";
        ?>
        <script>
            alert("Too arge File....File should be under 1000 MB");
            location.replace("uplodenotice");
        </script>
        <?php
    }
    else{
        if(move_uploaded_file($file_tep_name,$file_des)){
            $sql = "INSERT INTO `notice`(`Name`, `Date`, `Notice`,`Size`) VALUES ('$titel','$noticedate','$file_name','$size')";
            if(mysqli_query($conn,$sql)){
                ?>
                <script>
                    alert("Notice Successfully Published");
                    location.replace("teacher");
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert("Error....Something Went Wrong");
                    location.replace("uplodenotice");
                </script>
                <?php
            }
        }
    }
    
}
?>
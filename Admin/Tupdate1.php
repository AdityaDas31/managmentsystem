<?php
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $teacher_name = $_POST['tname'];
    $teacher_id = $_POST['tid'];
    $teacher_dep = $_POST['tdep'];
    $teacher_image = $_FILES['timage'];
    //print_r($teacher_image);
    $image_loc = $_FILES['timage']['tmp_name'];
    $image_name = $_FILES['timage']['name'];
    $img_des = "teacherimage/".$image_name;
    move_uploaded_file($image_loc, "teacherimage/".$image_name);
    include 'db.php';

    $q1 = "UPDATE `teacher` SET `Name`='{$teacher_name}',`TeacherID`='{$teacher_id}',`Department`='{$teacher_dep}',`Image`='{$img_des}' WHERE id = {$id}";
    $data = mysqli_query($conn, $q1) or die("Query Unsuccessful");
    if ($data) {
?>
        <script>
            alert("Data Successfully Updated");
            location.replace("admin");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Error");
            location.replace("Supdate");
        </script>
<?php
    }
}

?>
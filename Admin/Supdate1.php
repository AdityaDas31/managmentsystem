<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $idupdate = $_GET['ID'];
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
    include 'db.php';
    $q1 = "UPDATE `student` SET `Name`='{$sudent_name}',`Roll`='{$sudent_roll}',`StudentID`='{$sudent_id}',`Class`='{$sudent_class}',`DOB`='{$sudent_dob}',`Image`='{$img_des}' WHERE id = {$id}";

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
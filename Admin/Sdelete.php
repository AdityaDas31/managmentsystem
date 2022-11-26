<?php

$Id = $_GET['ID'];
include 'db.php';
$q = "DELETE FROM `student` WHERE id = $Id";
$delete = mysqli_query($conn,$q);

if($delete){
    ?>
        <script>
            alert("Student Details Successfully Deleted");
            location.replace("admin");
        </script>
    <?php
}
else{
    ?>
        <script>
            alert("Error");
            location.replace("Supdate");
        </script>
<?php
}


?>
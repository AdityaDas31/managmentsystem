<?php

$Id = $_GET['ID'];
include 'db.php';
$q = "DELETE FROM `lecture` WHERE id = $Id";
$delete = mysqli_query($conn,$q);

if($delete){
    ?>
        <script>
            alert("Lecture Successfully Deleted");
            location.replace("lecture");
        </script>
    <?php
}
else{
    ?>
        <script>
            alert("Error");
            location.replace("lecture");
        </script>
<?php
}


?>
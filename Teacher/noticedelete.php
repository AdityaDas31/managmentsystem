<?php

$Id = $_GET['ID'];
include 'db.php';
$q = "DELETE FROM `notice` WHERE id = $Id";
$delete = mysqli_query($conn,$q);

if($delete){
    ?>
        <script>
            alert("Notice Successfully Deleted");
            location.replace("teacher");
        </script>
    <?php
}
else{
    ?>
        <script>
            alert("Error");
            location.replace("teacher");
        </script>
<?php
}


?>
<?php

$Id = $_GET['Id'];
include 'db.php';
$q = "DELETE FROM `teacher` WHERE id = $Id";
$delete = mysqli_query($conn,$q);

if($delete){
    ?>
        <script>
            alert("Teacher Details Successfully Deleted");
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
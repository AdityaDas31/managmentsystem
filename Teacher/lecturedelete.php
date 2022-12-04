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
        <META http-equiv="Refresh" content="0; URL=http://localhost/hit/Managment%20System/Teacher/lecture"></META>
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
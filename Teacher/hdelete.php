<?php

$Id = $_GET['ID'];
include 'db.php';
$q = "DELETE FROM `homework` WHERE id = $Id";
$delete = mysqli_query($conn,$q);

if($delete){
    ?>
        <script>
            alert("Home Work Successfully Deleted");
            location.replace("homework");
        </script>
        <META http-equiv="Refresh" content="0; URL=http://localhost/hit/Managment%20System/Teacher/homework"></META>
    <?php
}
else{
    ?>
        <script>
            alert("Error");
            location.replace("homework");
        </script>
<?php
}


?>
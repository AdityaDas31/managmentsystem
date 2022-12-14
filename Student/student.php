<?php 
include 'download.php'; 
include 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Resorce/student.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../Resorce/footer.css">
    <link rel="stylesheet" href="../Resorce/bootstrap.css">
    <link rel="stylesheet" href="../Resorce/sidebar.css">
    <link rel="stylesheet" href="../Resorce/student.css">
    <script src="../Resorce/droupdown.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Student</title>
</head>
<body>
  <div id="con">
    <div id="main">
    <div class="container">
    <div class="row">
      <h3 class="text-center mt-3">Notice Board</h3>
      <table class="table table-success table-striped">
        <thead class="text-center">
        <th>No.</th>
        <th>Notice Title</th>
        <th>Notice Date & Time</th>
        <th>Download</th>
        </thead>
        <tbody class="text-center">
        <?php 
        $i = 0;
        foreach($file as $key => $file):
          $i = $key +1; 
        ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $file['Name'] ?></td>
            <td><?php echo $file['Date'] ?></td>
            <td><a href="../Notice/<?php echo $file['Notice'] ?>" class="btn btn-primary"><i class="fa-solid fa-cloud-arrow-down"></i></a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
    </div>
  </div>
  <footer id="footer">
  <p>© Copyright <script>document.write(new Date().getFullYear())</script>--Oliva School</p>
  <p>Design and Developed by: <a href="https://www.linkedin.com/in/aditya-das-513883222?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BJ57FP0esQ0WqqQX6Wx2s8w%3D%3D" target="_blank">Aditya Das</a></p>
  </footer>
</body>
</html>
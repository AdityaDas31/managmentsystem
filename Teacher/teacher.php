<?php 
include 'download.php'; 
include 'header.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../Resorce/bootstrap.css">
    <link rel="stylesheet" href="teacher.css">
    <title>Teacher</title>
</head>
<body>
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
            <td><a href="../Notice/<?php echo $file['Notice'] ?>" class="btn btn-primary">Download</a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <h3 class="text-center mt-3">Result</h3>
      <table class="table table-success table-striped">
        <thead class="text-center">
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Title</th>
        <th>Download</th>
        </thead>
        <tbody class="text-center">
        <?php 
        include 'db.php';
        $i = 0;
        $record = mysqli_query($conn, "SELECT * FROM `result`");
        while ($row = mysqli_fetch_array($record)){
          $i = $key +1; 
        ?>
          <tr>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['StudentID'] ?></td>
            <td><?php echo $row['Tital'] ?></td>
            <td><a href="../Result/<?php echo $row['Result'] ?>" class="btn btn-primary">Download</a></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
<!-- <?php include 'footer.php'; ?>  -->
</html>
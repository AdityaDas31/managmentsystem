<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    
    <link rel="icon" href="Resorce/logo.png" type="image/x-icon">
    <title>UserLogin</title>

    <meta name="description" content="" />

    <link rel="stylesheet" href="Resorce/global.css" />
    <link rel="stylesheet" href="Resorce/index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap"
    />
  </head>
  <body>
    <div class="frame-div">
      <img
        class="pexels-miguel-padrin-25537-icon"
        alt=""
        src="Resorce/public/pexelsmiguelpadrin255379-1@2x.png"
      />
      <div class="logo-div">
        <img class="logo-1-icon" alt="" src="Resorce/public/logo-1@2x.png" />
        <p class="oliva-school-p">Oliva School</p>
      </div>
      
    </div>
     
      <div class="form-box">
          <div class="button-box">
              <div id="btn"></div>
              <button type="button" class="toggle-btn" onclick="teacher()">Teacher</button>
              <button type="button" class="toggle-btn" onclick="student()">Student</button>
          </div>
          <form action="Teacher/teacherinsart.php" method="POST" id="teacher" class="input-group">
              <h2>Login In To Your Account</h2>
              <h3>Teacher Login</h3>
              <input type="text" class="input-find" name="uid" placeholder="User ID" required>
              <input type="password" class="input-find" name="password" placeholder="Password" required>
              <button type="submit" name="submit" class="submit-btn">Login</button>
          </form>
          <form action="Student/studentinsart.php" method="POST" id="student" class="input-group">
              <h2>Login In To Your Account</h2>
              <h3>Student Login</h3>
              <input type="text" class="input-find" name="uid" placeholder="User ID" required>
              <input type="password" class="input-find" name="password" placeholder="Password" required>
              <button type="submit" name="submit" class="submit-btn">Login</button>
          </form>
      </div>

  <script>
    var x = document.getElementById("teacher");
    var y = document.getElementById("student");
    var z = document.getElementById("btn");

    function student(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function teacher(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }

</script>
  </body>
</html>

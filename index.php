<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Resorce/userlogin.css">
    <title>UserLogin</title>
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="teacher()">Teacher</button>
                <button type="button" class="toggle-btn" onclick="student()">Student</button>
            </div>
            <form action="Teacher/teacherinsart.php" method="POST" id="teacher" class="input-group">
                <input type="text" class="input-find" name="uid" placeholder="User ID" required>
                <input type="password" class="input-find" name="password" placeholder="Password" required>
                <button type="submit" name="submit" class="submit-btn">Login</button>
            </form>
            <form action="Student/studentinsart.php" method="POST" id="student" class="input-group">
                <input type="text" class="input-find" name="uid" placeholder="User ID" required>
                <input type="password" class="input-find" name="password" placeholder="Password" required>
                <button type="submit" name="submit" class="submit-btn">Login</button>
            </form>
        </div>
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
<?php
//  echo "<h1>Hello world</h1>";
include './config/connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    date_default_timezone_set('Asia/Kolkata');
    $time = date("y-m-d H:i:sa");
    $sql = "INSERT INTO `student`(student_name,student_email,student_dept,student_password,student_status, student_date_creation) VALUES('$name','$email','$dept','$password','ACTIVE',now())";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="container border px-5 py-4 shadow rounded" style="width: 30vw">
            <h1 class="text-center text-uppercase mb-3 fs-3 fw-bold">
                Registration
            </h1>
            <form action="" method="post">
                <div class="form-group">
                    <label class="form-label my-1" for="name">Name</label>
                    <input class="form-control my-2" type="text" name="name" id="uname" placeholder="Enter Your Name" required />
                </div>
                <div class="form-group">
                    <label class="form-label my-1" for="name">Department</label>
                    <select class="custom-select p-1 my-2 form-control" name="dept" id="dept" required>
                        <option value="CSE">CSE</option>
                        <option value="ISE">ISE</option>
                        <option value="ECE" selected>ECE</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label my-1" for="email">Email</label>
                    <input class="form-control my-2" type="email" name="email" id="email" placeholder="Enter Your Email" required />
                </div>
                <div class="form-group">
                    <label class="form-label my-1" for="password">Password</label>
                    <input class="form-control my-2" type="password" name="password" id="password" placeholder="Enter Your Password" required />
                </div>

                <div class="form-group d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn form-control btn-primary mt-2 px-4 py-2">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
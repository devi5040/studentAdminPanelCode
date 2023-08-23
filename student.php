<?php require_once './config/connection.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE student_id=$id";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Deleted succefully');location.href='student.php'</script>";
    } else {
        echo "<script>alert('delete unsuccessful');</script>";
    }
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
    <div class="container d-flex justify-content-center align-items-center">
        <table class="table table-bordered">
            <tr>
                <th>Serial No.</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Department</th>
                <th>Student Status</th>
                <th>Student Date Creation</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT * FROM student";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row['student_name'] . "</td>";
                    echo "<td>" . $row['student_email'] . "</td>";
                    echo "<td>" . $row['student_dept'] . "</td>";
                    echo "<td><span class='badge rounded-pill bg-primary'>" . $row['student_status'] . "</span></td>";
                    echo "<td>" . date_format(date_create($row['student_date_creation']), 'd M Y h:i A') . "</td>";
                    echo "<td><a href='edit_student.php?id=$row[student_id]' class='btn btn-info btn-sm'>EDIT</a>
                    <a href='?id=$row[student_id]' class='btn btn-danger btn-sm'>DELETE</a></td>";
                    echo "</tr>";
                    $i++;
                }
            }
            ?>
        </table>
    </div>
</body>

</html>
<?php
include "db_conn.php";

if(isset($_POST["submit"])){
    $student_no=$_POST["student_no"];
    $last_name=$_POST["last_name"];
    $first_name=$_POST["first_name"];
    $gender=$_POST["gender"];
    $age=$_POST["age"];
    $contact_no=$_POST["contact_no"];
    $email=$_POST["email"];
    $dept=$_POST["dept"];
    $major=$_POST["major"];
    $year=$_POST["year"];

    $sql = "INSERT INTO `stud_info`(`id`, `student_no`, `last_name`, `first_name`, `gender`, `age`, `contact_no`, `email`, `dept`, `major`, `year`) 
    VALUES (NULL,'$student_no','$last_name','$first_name','$gender','$age','$contact_no','$email','$dept','$major','$year')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: stud_info.php?msg=New record created successfully");
    }
    else {
        echo"Failed: " .mysqli_error( $conn);
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Add Student</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:rgba(49, 53, 50, 0.92);">
      STUDENT MANAGEMENT SYSTEM
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add Student</h3>
         <p class="text-muted">Complete the form below to add student</p>
      </div>

      <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:25vw; min-width:300px;">
          
                <div class="col">
                    <label class="form-label">Student Number:</label>
                    <input type="text" class="form-control" name="student_no" placeholder="XX-XXXXX">
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="-----">
                    </div>

                    <div class="col">
                        <label class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="-----">
                    </div>

                </div>
            

                <div class="form-group mb-3">
                    <label>Gender:</label><br>
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <label for="female" class="form-input-label">Female</label>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Age:</label>
                        <input type="text" class="form-control" name="age" placeholder="--">
                    </div>

                    <div class="col">
                        <label class="form-label">Contact Number:</label>
                        <input type="text" class="form-control" name="contact_no" placeholder="----------">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                </div>

                <div class="col">
                    <label class="form-label">Department:</label>
                    <input type="text" class="form-control" name="dept" placeholder="----">
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Major:</label>
                        <input type="text" class="form-control" name="major" placeholder="----">
                    </div>

                    <div class="col">
                        <label class="form-label">Year:</label>
                        <input type="text" class="form-control" name="year" placeholder="----">
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit" required>Save</button>
                    <a href="stud_info.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>



    </div>

    <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
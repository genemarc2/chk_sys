<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Student Management System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="stud_info.php">Students Information</a></li>
      <li><a href="course_list.php">Course List</a></li>
      <li><a href="stud_skill.php">Students Skill</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Inverted Navbar</h3>
  <p>An inverted navbar is black instead of gray.</p>
</div>

</body>
</html>

<?php 
}else{
     header("Location: login_p.php");
     exit();
}
 ?>
<?php
$insert = false;
if(isset($_POST['name'])){
   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server,$username,$password);

   if(!$con){
       die("connection this database failed due to". mysqli_connect_error());
   }
   echo "Success connecting to the db";


$name = $POST['name'];
$gender = $_OST['gender'];
$age = $POST['age'];
$email = $POST['email']; 
$phone = $POST['phone'];
$desc = $POST['desc'];
// $name = $_POST['name'];

$sql = "INSERT INTO `tour`.`tour` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES
 ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());"
  echo $sql;


  if($con->query($sql) == true){
    //   echo "Successfully inserted";
    $insert = true;
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  } 
  $con->close();
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="NSEC">
    <div class="container">
      <h1>Welcome To  The NSEC Tour Program</h1>
      <p>Enter your details to participation </p>
      <p class='Submitresult'>Thanks For Submitting this form .We will connect with you soon</p>

      <form action="index.php" method="post">
          <input type="text" name="name" id="name" placeholder="Enter Your name">
          <input type="text" name="age" id="age" placeholder="Enter Your age">
          <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
          <input type="text" name="email" id="email" placeholder="Enter Your email">
          <input type="text" name="phone" id="phone" placeholder="Enter Your phone">
          <textarea name="desc" id="desc" cols="20" rows="10" placeholder="Enter any information here"></textarea>
          <button class="btn">Submit</button>
          <button class="btn">Reset</button>
        </form>
    </div>
    <script src="index.js"></script>

</body>
</html>

<!-- optional file hai -->

<?php

// $name=$_POST["name"];
// $email=$_POST["email"];
// $website= $_POST["website"];
// $comment=$_POST["comment"];
// $gender=$_POST["gender"];

$name=$_POST["name"];
$urls3=$result->get("ObjectURL");

$servername = "surajdb.cur6fpv4lciz.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "Suraj123";
$dbname = "suraj";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO post(name,url) VALUES('$name','$urls3')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
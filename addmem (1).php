<?php
if(isset($_POST['submit']))
{ 
if(empty($_POST['guestname']) || empty($_POST['guestemail']) || empty($_POST['guestnumber']))
	header("location:index.html");
else
{
	$a=$_POST['guestname'];
	$b=$_POST['guestemail'];
	$c=$_POST['guestnumber'];
   
    
}
$dbHost = '127.0.0.1';//or localhost
$dbName = 'evento'; // your db_name
$dbUsername = 'root'; // root by default for localhost 
$dbPassword = '';  // by default empty for localhost

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully";



$sql = "CREATE TABLE if not exists guestlist(
    guestname VARCHAR(30) NOT NULL,
    guestemail varchar(30) NOT NULL, 
    guestnumber int NOT NULL);
    
if(mysqli_query($conn, $sql))
{
    echo  'created' ;
} 
else
{
    echo 'could not create' . mysqli_error($conn);
}

$sql = "INSERT INTO guestlist VALUES ('Guest','Guest_1_@example.com','9111111111')";
$sql = "INSERT INTO guestlist VALUES ('Guest2','Guest_2_@example.com','9222222222')";
$sql = "INSERT INTO guestlist VALUES ('Guest3','Guest_3_@example.com','9333333333')";
$sql = "INSERT INTO guestlist VALUES ('Guest4','Guest_4_@example.com','9444444444')";
$sql = "INSERT INTO guestlist VALUES ('Guest4','Guest_4_@example.com','9555555555')";
$sql = "INSERT INTO guestlist VALUES ('$a','$b','$c')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} 
else
{
    echo "ERROR: Could not insert values " . mysqli_error($conn);
}
mysqli_close($conn);

 }
 else
 {
 	header("location:formdatabase.html");
 }
?>

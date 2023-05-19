<?php
if(isset($_POST['submit']))
{ 
if(empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['mobile']) || empty($_POST['password']))
	{echo empty($_POST['fullname']);}
else
{
	$a=$_POST['fullname'];
	$b=$_POST['email'];
	$c=$_POST['mobile'];
    $d=$_POST['password'];
    
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



$sql = "CREATE TABLE if not exists User(
    fullname VARCHAR(30) NOT NULL,
    email varchar(100) NOT NULL,
   mobile bigint(10) NOT NULL, 
    password varchar(50) NOT NULL)";
if(mysqli_query($conn, $sql))
{
    echo "<br>Table created successfully</br>";
    
} 
else
{
    echo "ERROR: Could not create table " . mysqli_error($conn);
}



$sql = "INSERT INTO user VALUES ('$a','$b','$c','$d')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    header("location:login.html");
} 
else
{
    echo "ERROR: Could not insert values " . mysqli_error($conn);
}


/*$sql = "select * from user";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        while($row = mysqli_fetch_array($result)){
                
                echo "<br>";
                echo " " . $row['name'];
                echo " " . $row['age'];
                echo " " . $row['address'];
                echo " " . $row['series'];   
           
        }
      
        // Free result set
        mysqli_free_result($result);
    } 
    else{
        echo "No records could be retrieved.";
    }
}

$sql = "UPDATE series SET age=98 WHERE name='abc'";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$sql = "DELETE FROM series WHERE name='xyz'";
if(mysqli_query($conn, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
/*
$sql = "DELETE FROM series";
if(mysqli_query($conn, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
*/
mysqli_close($conn);

 }
 else
 {header("location:login.html");
 }
?>

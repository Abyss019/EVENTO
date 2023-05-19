<?php

if(isset($_POST["log-submit"]))
{ echo 'error 1';
    $useremail = $_POST["email"];
    $pwd = $_POST["password"];

    $dbhost = 'localhost';
    $dbUsername = 'root';
    $dbpassword = '';
    $dbname = 'evento';

    //Creating Database connection
    $conn  = mysqli_connect($dbhost,$dbUsername,$dbpassword,$dbname);
    if (!$conn)
    { echo 'not connected';
        die('Connection Failed: '.mysqli_connect_error());
    }
    else {echo 'connected';}

    $sql = "SELECT * FROM USER WHERE email = '$useremail';";
    if($result = mysqli_query($conn, $sql))
    { print_r ($result);
        if(mysqli_num_rows($result) == 0)
        {
            header("location:../login.php?error=UidDoesn'tExist");
            echo "Nahi Hogaya Bhai";
        }
  
        else{
            $row = mysqli_fetch_array($result);
            $pwdhashed = $row["password"];
            if($pwd!=$pwdhashed)
            { 
               /* header("location:login.php?error=WrongLogin");*/
                echo "Bilkul Nahi Hogaya Bhai";
            }
            else 
            {
                session_start();
                $_SESSION["email"] = $row["email"];
                header("location:../dashboard/index.php");
            }
        }
        
    }
    else{echo 'not fetched';}
}
?>
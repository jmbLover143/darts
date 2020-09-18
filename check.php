<?php


 session_start();
 include("connection.php");
 
 $password = $_POST['password'];
 $date = $_POST['date'];
 
 $query = "SELECT * from user Where password = '$password'";
 $result = mysqli_query($conn, $query);
 $found = 0;
 
 while(mysqli_fetch_array($result)){
     $found = 1;
 }
if($found == 1){
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['date'] = $_POST['date'];
       header("Location: home.php"); 
}else{
    
    header("Location:error-login.php");
    
}
?>

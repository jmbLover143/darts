<?php


 
  include ('connection.php');
  $date = $_POST['date'];
  echo "$date";
  
        $query = "DELETE FROM team Where date = '$date'";          
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            echo "Opps, ERROR. !!!"; 
        }else{
            header("Location:all-team-view.php");
        }
?>
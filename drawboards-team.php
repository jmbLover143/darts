
<?php
session_start();
include ('connection.php');
 $da = $_SESSION['date'];
 
 if($_SESSION['password'] == ""){
    header("Location:index.php");
}else{
   
}
//=======================================================================//
if(isset($_POST['submit'])){
 
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags always come first -->    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        
    <title>Summer Tournament 2020</title>
    
    <link href="lib/css/singleboards.css" rel="stylesheet">
 <link rel="shortcut icon" href="lib/img/logo.jpg" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="lib/css/material.indigo-blue.min.css">
    <script defer src="lib/js/material.min.js"></script>
    <link rel="stylesheet" href="lib/semantic/semantic.min.css">
    <!-- Bootstrap core CSS -->
    <link href="lib/css/compiled.min.css" rel="stylesheet">
    <script src="lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="lib/sweetalert2/sweetalert2.min.css">
    <script src="lib/js/jquery-3.2.1.js"></script>
    <script src="path/to/jquery.js"></script>
<script src="path/to/popper.js"></script>
<script src="path/to/bootstrap.js"></script>
<script src="path/to/bootstrap-confirmation.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    
      <script>
                   function validate(){
    var name = document.getElementById("name").value;
    
    if(name == "" || name == null){
        alert("Please enter name.");       
        return false;
    } 
}
          </script>
    
<script>
$(document).ready(function() {
function disableBack() { window.history.forward() }

window.onload = disableBack();
window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
});
</script>

<script>
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    </script>
<script>
        function CancelEvent() {
            var e = window.event;
            //e.cancelBubble is supported by IE
            e.cancelBubble = true;
            e.returnValue = false;
            //e.stopPropagation works only in Firefox.
            if (e.stopPropagation) {
                e.stopPropagation();
                e.preventDefault();
            }
        }

        //Disable the click event of form 
        $(document).keypress(function (e) {
            //Check which key is pressed on the document or window
            if (e.which == 13) {
                // if it is 13 that means enter key pressed, then call the function to cancel the event
                CancelEvent();
            }
        });
    </script>

    <style>
        .hidden_this{
            visibility: hidden;
        }
        select:required:invalid {
  text-align:  center;
}
option[value=""][disabled] {
  display: none;
}
option {
  color: black;
}
        
    </style>
    <script>
        function show_this(){
            $('.hidden_this').css('visibility', 'visible');
        }
         
        
        
              function validate() {
                  if(document.getElementById(vote).value){
                      
                  }
}
    </script>
    
        <style>
            .top{
                border:1px solid lightgray;
                height:370px;
                width: 1150px;
                margin:0 auto;
                border-radius: 5px;
                color:black
            }
            .content{
                border:1px solid lightgray;
                height:1770px;
                width: 1150px;
                margin:0 auto;
                border-radius: 5px;
                color:black
            }
            fieldset{
                color:black
            }
        
      
            .in{
                height:30px;
                width: 250px;
                text-align: center;
                text-transform: uppercase;
            }
            .profile{
                float: right;
                border: 1px solid black;
                height: 180px;
                width:180px;
                margin-top: -265px;
                border-radius:5px;
                margin-right:100px;
            }
            .side{
                border-radius: 6px;
                height:645px;
                width:207px;
                border: 1px solid lightgray;
                padding:0px;
                float:left;
                
            }
            .container{
                border: 1px solid lightgray;
                width: 100%;
                height: 645px;
                float:right;
                border-radius: 5px;
            }
             li:hover{
                background-color: whitesmoke;
            }
            ul,li{
             text-decoration: none;    
            }
            li{
                height:30px;
               
            }
            
            input {
                height:37px;
                font-size: 17px;
                text-transform: uppercase;
                width:240px;
                text-align: center;               
            }
         
         
            .prof{
                margin-left: 500px;
            }
          
             
            
           
        </style>
 
        
</head>
<body class=" ">

     
    <center>
     <br/>                    
    <div style="width:300px"class="alert alert-primary" role="alert">Darts Tournament Board TEAM</div>
     <div style="width:300px;float: left;margin-top: -57px"class="alert alert-warning" role="alert">Note: Select player properly</div>
    <div class="draw">
        <center>
            <strong style="margin:0 auto;text-align: center">WINNERS BRACKET</strong>
        </center>
        <form  action="save-score-team.php" method="POST">
            <input type="hidden" name="date" value="<?php echo date('m / d / Y')?>"/>
        <table>
            <tr>
                <td>
                    <select name="play1" style="border:1px solid black;background-color: white">
                        <option ></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select>
                    
                </td>
                <td><input style=" border:1px solid white;" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"  > </td>
            </tr>
            
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="win1" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
            <tr>
                <td><select name="play2" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="semi1" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
             
            
            <tr>
                <td><select name="play3" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style="background-color: whitesmoke " readonly="readonly" value="CHAMPIONSHIP ROUND"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
              
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="win2" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid black;background-color: whitesmoke" value="CHAMPION TEAM" readonly="readonly"> </td>
            </tr>
            
            <tr>
                <td><select name="play4" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="final1" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
             
            
        </table>
        
         <table>
            <tr>
                <td><select name="play5" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white;" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" value="VS" readonly="readonly"> </td>
                
                <td><select name="champ" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
            </tr>
            
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="win3" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="final2" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>            
            <tr>
                <td><select name="play6" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="semi2" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
             
            
            <tr>
                <td><select name="play7" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly" > </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
              
            <tr>
                <td><input  value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="win4" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
            <tr>
                <td><select name="play8" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
       
            
        </table>
    
            <hr style="background-color:black;border:2px solid ">
        
        <strong>LOSERS BRACKET</strong>
        <table>
            <tr>
                <td><select name="lose1" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
               <td> </td>
                  <td><input style=" border:1px solid white" readonly="readonly"> </td>
                  <td><input style="background-color: whitesmoke" readonly="readonly" value="LOSER SEMIS ROUND"> </td>
                  <td><input style="background-color: whitesmoke" readonly="readonly" value="LOSER FINAL ROUND"> </td>
            </tr>
            
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="lowin1" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                  <td>VS</td>
                  <td><select name="loser1" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                  <td><input style="border:1px solid white;" readonly="readonly"/></td>
                  <td><select name="losefinal1" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td></td>
            </tr>
            
            <tr>
                <td><select name="lose2" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                 <td><input value=" " style=" border:1px solid white" readonly="readonly"> </td>
                 <td> </td>
                  <td><input value=" " style=" border:1px solid white" readonly="readonly"></td>
                  <td><select name="losemi1" style="border:1px solid black;background-color: white">
                          <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
            </tr>
            
             
            
            <tr>
                <td><select name="lose3" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                 <td><input value=" " style=" border:1px solid white" readonly="readonly"> </td>
                 <td> </td>
                  <td><input value=" " style=" border:1px solid white" readonly="readonly"> </td>
                  <td><select name="losemi2" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
            </tr>
            
              
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td><select name="lowin2" style="border:1px solid black;background-color: white">
                        <option></option>
                       <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td>VS</td>
                <td><select name="loser2" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                <td><input style="border:1px solid white;" readonly="readonly"></td>
                <td><select name="losefinal2" style="border:1px solid black;background-color: white">
                        <option></option>
                        <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
               
            </tr>
            
            <tr>
                <td><select name="lose4" style="border:1px solid black;background-color: white">
                        <option></option>
                       <?php
                                include("connection.php");
                            
                            $q = "Select player1,player2 From double_discipline Where date='$_SESSION[date]'";
                            $re = mysqli_query($conn, $q);
                             
                             if($re -> num_rows > 0){
                    while($row = $re -> fetch_assoc()){           
                        echo"                   
                        <option name='n1'>" . $row['player1'] . " & " . $row['player2'] . "</option>
                   ";
    }                
}  
?>
                    </select></td>
                 
                <td><input type="hidden" readonly="readonly" style="border:1px solid white"></td>
                <td> </td>
                <td><input readonly="readonly" type="hidden" style="border:1px solid white"></td>
                <td><input readonly="readonly" type="hidden" style="border:1px solid white"></td>
                
            </tr>
            </table> 
        <button class="btn btn-success" type="submit" name="submit" style="margin-top:-1700px;margin-right: -800px;width:300px">DISPLAY BRACKETING BOARD</button>
 </form>           
       
     </div>
    
    
    
         </center>   
    </body>
    <!--Main Layout-->
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="lib/js/jquery-3.2.1.js"></script>
    <script src="lib/semantic/semantic.min.js"></script>
    <script type="text/javascript" src="lib/js/compiled.min.js"></script>
    <script src="lib/sweetalert2/sweetalert2.all.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script><div class="drag-target" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
<div class="hiddendiv common"></div></body></html>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
<script>
    var completed = $('#complete_checker').val();
    if (completed == 1)
        finish_na();
    else
        show_this();
</script>

<script>
    $('#score').keyup(function(){
        var score = $('#score').val();
        if(score == '')
            $('#score').val('');
    });
</script>
    
 
<?php
session_start();
include ('connection.php');
  
 if($_SESSION['password'] == ""){
    header("Location:index.php");
}else{
   
}
//=======================================================================//
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $date = $_POST['date'];


if(empty($name) ){
 
    header("Location:home.php");   
}else{
    $c = 0;
    $s = "Select * from player Where date = '$date'";
    $r = mysqli_query($conn, $s);
    
    while($row = mysqli_fetch_array($r)){
        $c = $row['id'];   
    }
    $count = $c + 1;
   
     $query = "INSERT into player(id,player,date) VALUES ('$count','$name','$date')";
     $result = mysqli_query($conn,$query);
  
     if(!$result){
         echo "WRONG.!!";
     }else{
          echo ""; 
     }    
}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags always come first -->    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Summer Tournament 2020</title>
    <link rel="stylesheet" href="lib/css/darts2.css">
 <link rel="shortcut icon" href="lib/img/logo.jpg" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="lib/css/material.indigo-blue.min.css">
    <script defer src="lib/js/material.min.js"></script>
    <script defer src="lib/js/print.js"></script>
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
        function printContent(el){
				
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();
			document.body.innerHTML = restorepage;
			
			}
        </script>
    
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
 <script type="text/javascript">
         /*code: 48-57 Numbers*/
         function restrictAlphabets(e) {
             var x = e.which || e.keycode;
             if ((x >= 48 && x <= 57))
                 return true;
             else
                 return false;
         }
      </script>

   
    
</head>
<body class=" ">

    <header class="hidden_this">
        <!-- Sidebar navigation -->
        
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav" style="background: #0277BD;">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="" data-activates="slide-out" class="button-collapse"><img src="lib/images/ACLC LOGO2.png" width="60px" style="padding: 0; margin: 0;height: 30px;"></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto" style="float: left; padding: 0; margin: 0;">
                <p style="font-size: 15px;"><b>SUMMER TOURNAMENT 2020</b></p>
                
            </div>
            <div class=" " style="float: right; padding: 0; margin-right: 90px;;">
                 
            </div>
            <p></p>
        </nav>
        <!-- /.Navbar -->
    </header>
    <br/>
                <form action="print-team-score.php" target="_blank" method="POST">
               
    <center>
        <center>
    <div style="width:300px;float: left;margin-left: 100px"class="alert alert-success" role="alert">
   Round 1 Brackets
</div> 
    <div style="width:250px;float: right;margin-right: 100px "class="alert alert-warning" role="alert">
   Note: Select properly player name
</div>   
        <div style="width:300px"class="alert alert-primary" role="alert">
   Darts Tournament Score Sheets
</div> 
            
                
         </center>
        <table style="border:1px solid black;height:500px;" class="sheets">
            <tr>
                <thead style="border:1px solid whitesmoke"><b>TEAM PLAYER</b></thead>
                
                
            </tr>
            <tr class="sheets">
                <td class="sheets">NAME</td>
                <td class="sheets2"> </td>
                <td class="sheets">NAME</td>
                <td class="sheets3">1st SCORE</td>
                <td class="sheets3">2nd SCORE</td>
                 <td class="sheets">WINNER</td>
             </tr>
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n1"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n2"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc1" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc2"placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select  name="w1"> 
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
                           
                        </select>
                </td>
                 
            </tr>
            </tr>
            
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n3"> 
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
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n4"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc3" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc4"placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w2"> 
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
                           
                        </select>
                </td>
                 
            </tr>
            </tr>
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n5"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n6"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc5" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc6"placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w3"> 
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
                           
                        </select>
                </td>
                
            </tr>
            </tr>
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n7"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n8"> 
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
                        </select>
                </td>
                <td class="sheets3"><input name="sc7" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc8"placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w4"> 
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
                           
                        </select>
                </td>
                
            </tr>
            </tr>
            
        </table>
        
    </center>
             <hr>             
   <center>
        <center>
    <div style="width:300px;float: left;margin-left: 100px"class="alert alert-success" role="alert">
   Round 2 Brackets
</div> 
     <br/>
     <br/>
     <br/>
     
        
        </center>
        <table style="border:1px solid black;height:500px;" class="sheets">
            <tr>
                <thead style="border:1px solid whitesmoke"> </thead>
                
                
            </tr>
            
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n9"> 
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
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n10"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc9" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc10" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w5"> 
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
                           
                        </select>
                </td>
                 
            </tr>
            </tr>
            
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n11"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n12"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc11" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc12"placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w6"> 
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
                        </select>
                </td>
               
            </tr>
            </tr>
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n13"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n14"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc13" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc14" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w7"> 
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
                           
                        </select>
                </td>
              
            </tr>
            </tr>
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n15"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n16"> 
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
                        </select>
                </td>
                <td class="sheets3"><input name="sc15" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc16" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w8"> 
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
                           
                        </select>
                </td>
               
            </tr>
            </tr>
            
        </table>
        
    </center>
             <hr>  
             <center>
        <center>
    <div style="width:300px;float: left;margin-left: 100px"class="alert alert-success" role="alert">
   Round 3 Brackets
</div> 
     
        <br/>
     <br/>
     <br/>
        </center>
        <table style="border:1px solid black;height:500px;" class="sheets">
            <tr>
                <thead style="border:1px solid whitesmoke"> </thead>
                
                
            </tr>
             
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n17"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n18"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc17" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc18" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w9"> 
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
                           
                        </select>
                </td>
                 
            </tr>
            </tr>
            
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n19"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n20"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc19" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc20" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w10"> 
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
                           
                        </select>
                </td>
               
            </tr>
            </tr>
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n21"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n22"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc21" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc22" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w11"> 
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
                           
                        </select>
                </td>
                 
            </tr>
            </tr>
            
            
        </table>
        
    </center>
             <hr>     
                  <center>
        <center>
    <div style="width:300px;float: left;margin-left: 100px"class="alert alert-success" role="alert">
   Round 4 Brackets
</div> 
     
        <br/>
     <br/>
     <br/>
        </center>
        <table style="border:1px solid black;height:500px;" class="sheets">
            <tr>
                <thead style="border:1px solid whitesmoke"> </thead>
                
                
            </tr>
             
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n23"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n24"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc23" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc24" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w12"> 
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
                           
                        </select>
                </td>
                 
            </tr>
            </tr>
            
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n25"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n26"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc25" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc26" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w13"> 
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
                           
                        </select>
                </td>
               
            </tr>
            </tr>
             
            
        </table>
        
    </center>
             <hr>  
                 <center>
        <center>
    <div style="width:300px;float: left;margin-left: 100px"class="alert alert-success" role="alert">
   Championship Round
</div> 
   
        <br/>
     <br/>
     <br/>
        </center>
        <table style="border:1px solid black;height:500px;" class="sheets">
            <tr>
                <thead style="border:1px solid whitesmoke"> </thead>
                
                
            </tr>
            <tr class="sheets">
                <td class="sheets">NAME</td>
                <td class="sheets2"> VS </td>
                <td class="sheets">NAME</td>
                <td class="sheets3">1st SCORE</td>
                <td class="sheets3">2nd SCORE</td>
                 <td class="sheets">WINNER</td>
             </tr>
            <tr>
                <tr class="sheets">
                    <td class="sheets">
                        
                        <select name="n27"> 
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
                           
                        </select>
                    </td>
                <td class="sheets2">VS</td>
                <td class="sheets">
                    <select name="n28"> 
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
                           
                        </select>
                </td>
                <td class="sheets3"><input name="sc27" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1"/></td>
                <td class="sheets3"><input name="sc28" placeholder="0"style="width:120px" type="" onkeypress='return restrictAlphabets(event)' minlength="1"maxlength="1" max="4"/></td>
                <td class="sheets">
                    <select name="w14"> 
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
                        </select>
                </td>
               
            </tr>
            </tr>          
        </table>
        
             <hr></div>
    <center>
        <button class="btn btn-primary" type="submit" name="submit">PRINT SCORE AND DOWNLOAD</button>
    </center>  
                   </form>
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
    
 
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
    <meta http-equiv="refresh" content="5"> 
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
    <body style="background-color:white">

    <?php
    include("connection.php");
    
    
    $sql = "Select * from score_single Where date='$da'";
    $result = mysqli_query($conn, $sql);
    
  
  $row = mysqli_fetch_array($result);
      $date = $row['date'];
      $play1 = $row['play1'];
      $play2 = $row['play2'];
      $play3 = $row['play3'];
      $play4 = $row['play4'];
      $play5 = $row['play5'];
      $play6 = $row['play6'];
      $play7 = $row['play7'];
      $play8 = $row['play8'];
      
      $win1 = $row['win1'];
      $win2 = $row['win2'];
      $win3 = $row['win3'];
      $win4 = $row['win4'];
      
      $semi1 = $row['semi1'];
      $semi2 = $row['semi2'];
      
       $final1 = $row['final1'];
      $final2 = $row['final2'];
      
      $champ = $row['champ'];
      
      $lose1 = $row['lose1'];
      $lose2 = $row['lose2'];
      $lose3 = $row['lose3'];
      $lose4 = $row['lose4'];
      
      $lowin1 = $row['lowin1'];
      $lowin2 = $row['lowin2'];
              
     $loser1 = $row['loser1'];
     $loser2 = $row['loser2'];
     
     $losemi1 = $row['losemi1'];
     $losemi2 = $row['losemi2'];
     
     $losefinal1 = $row['losefinal1'];     
     $losefinal2 = $row['losefinal2'];
    ?>
    <center>
     <br/>                    
    <div style="width:300px"class="alert alert-success" role="alert">Darts Tournament Single Brackets</div>
     <div class="draw2">
         <center>
        <strong style="margin:0 auto;text-align: center">WINNERS BRACKET</strong>
        </center>
     
         
        <table>
            <tr>
                <td><input style="background-color: lightblue;border-radius:5px" value="<?php echo "$play1"?>" readonly="readonly"/>
                    
                    
                    
                </td>
                <td><input style=" border:1px solid white;" readonly="readonly"> </td>
                <td><input  style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td>    <input readonly="readonly" value="DATE: <?php echo date('m / d / Y')?>"  />
</td>
            </tr>
            
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style="background-color: lightblue;border-radius:5px" value="<?php echo "$win1"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
            <tr>
                <td><input style="background-color: lightblue;border-radius:5px" value="<?php echo "$play2"?>" readonly="readonly"/>
                  </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style="background-color: lightblue;border-radius:5px" value="<?php echo "$semi1"?>" readonly="readonly"/>
                    
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
             
            
            <tr>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$play3"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style="background-color: whitesmoke " readonly="readonly" value="CHAMPIONSHIP ROUND"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
              
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$win2"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid black;background-color: whitesmoke" value="CHAMPION SINGLE" readonly="readonly"> </td>
            </tr>
            
            <tr>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$play4"?>" readonly="readonly"/>
                    
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$final1"?>" readonly="readonly"/>
                    
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
             
            
        </table>
        
         <table>
            <tr>
                <td><input style="background-color: lightblue;border-radius:5px" value="<?php echo "$play5"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white;" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" value="VS" readonly="readonly"> </td>
                
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$champ"?>" readonly="readonly"/>
                     </td>
            </tr>
            
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$win3"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style="background-color: lightblue;border-radius:5px" value="<?php echo "$final2"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>            
            <tr>
                <td><input style="background-color: lightblue;border-radius:5px" value="<?php echo "$play6"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$semi2"?>" readonly="readonly"/>
                    
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
             
            
            <tr>
                <td><input style="background-color: lightblue;border-radius:5px" value="<?php echo "$play7"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly" > </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
              
            <tr>
                <td><input  value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$win4"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
            <tr>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$play8"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
            </tr>
            
       
            
        </table>
    
            <hr style="background-color:black;border:2px solid;width: auto">
        
        <strong>LOSERS BRACKET</strong>
        <table>
            <tr>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$lose1"?>" readonly="readonly"/>
                     </td>
                <td><input style=" border:1px solid white" readonly="readonly"> </td>
               <td> </td>
                  <td><input style=" border:1px solid white" readonly="readonly"> </td>
                  <td><input style="background-color: whitesmoke" readonly="readonly" value="LOSER SEMIS ROUND"> </td>
                  <td><input style="background-color: whitesmoke" readonly="readonly" value="LOSER FINAL ROUND"> </td>
            </tr>
            
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$lowin1"?>" readonly="readonly"/>
                     </td>
                  <td>VS</td>
                  <td>
                      <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$loser1"?>" readonly="readonly"/>
                     </td>
                  <td><input style="border:1px solid white;" readonly="readonly"/></td>
                  <td>
                                          <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$losefinal1"?>" readonly="readonly"/>
 </td></td>
            </tr>
            
            <tr>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$lose2"?>" readonly="readonly"/>
                     </td>
                 <td><input value=" " style=" border:1px solid white" readonly="readonly"> </td>
                 <td> </td>
                  <td><input value=" " style=" border:1px solid white" readonly="readonly"></td>
                  <td>
                      <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$losemi1"?>" readonly="readonly"/>
                     </td>
            </tr>
            
             
            
            <tr>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$lose3"?>" readonly="readonly"/>
                    
                     </td>
                 <td><input value=" " style=" border:1px solid white" readonly="readonly"> </td>
                 <td> </td>
                  <td><input value=" " style=" border:1px solid white" readonly="readonly"> </td>
                  <td>
                      
                      <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$losemi2"?>" readonly="readonly"/>
                     </td>
            </tr>
            
              
            <tr>
                <td><input value="VS" style=" border:1px solid white" readonly="readonly"> </td>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$lowin2"?>" readonly="readonly"/>
                     </td>
                <td>VS</td>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$loser2"?>" readonly="readonly"/>
                    </td>
                <td><input style="border:1px solid white;" readonly="readonly"></td>
                <td>
                                        <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$losefinal2"?>" readonly="readonly"/>
 </td>
               
            </tr>
            
            <tr>
                <td>
                    <input style="background-color: lightblue;border-radius:5px" value="<?php echo "$lose4"?>" readonly="readonly"/>
                    
                     </td>
                 
                <td><input type="hidden" readonly="readonly" style="border:1px solid white"></td>
                <td> </td>
                <td><input readonly="readonly" type="hidden" style="border:1px solid white"></td>
                <td><input readonly="readonly" type="hidden" style="border:1px solid white"></td>
                
            </tr>
            </table> 
               
       
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
    
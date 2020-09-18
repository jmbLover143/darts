
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
 $id = $_POST['id'];


if(empty($name)){
 
       
}else{
           
     $query = "UPDATE player SET player='$name',date='$date' WHERE id='$id'";
     $result = mysqli_query($conn,$query);
  
     if(!$result){
         echo "WRONG.!!";
     }else{
         header("Location:home.php");
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
            <div class=" " style="float: right; padding: 0; margin-right: 90px;">
                 
            </div>
            <p></p>
        </nav>
        <!-- /.Navbar -->
    </header>
                        
    <div class="side">
        <img src="lib/image/images (1).jpg"/>
        <br/>
        
            <ul>
                 <a href="home.php"><li>HOME</li></a>
                <a href="team.php"><li>TEAM PLAYER</li></a>
                <a href="discipline.php"><li>START GAME</li></a>
                 <a href="records.php"><li>RECORDS</li></a>
         </ul>                     
            </div>
        <div class="container">
          <a href="records.php"><button>BACK</button></a>
        <div  class="update">
            
         <b><p class="dated" style="float:right"><b>DATE TODAY <?php echo date('m / d / Y')?></b></p></b>
         <br/>
          </br>
          </br>
            <center style="border: 1px solid whitesmoke;width:800px;height:500px;margin:0 auto;border-radius: 5px;">
                        
          
     </br>
     <img style="height:50px;margin-top: -10px" src="lib/image/records.png">
         <h4>Select desired records</h4>
         <div style="height:400px;width: 780px;border: 1px solid whitesmoke;overflow: scroll">
             
                               
             <input type="hidden" name="date" value="<?php echo date('m / d / Y')?>"/>
             <table style="overflow:scroll">
                  <tr>
                       
                      <td><button style="width:300px;margin-left: 200px" type="" name="" class="btn btn-success" >SINGLE PLAYER</button></a></td>                  
                  </tr>               
                   <tr style=" text-align: center;background-color: whitesmoke;border:1px solid lightgray;width:300px">
                             <td style="width:100px;background-color: whitesmoke;text-align: center "><b>DATE REGISTERED</b></td>
                              <td style="width:100px;background-color: whitesmoke;text-align: center;height:35px">METHOD</td>  
                                <td style="width:100px;background-color: whitesmoke;text-align: center;height:35px">METHOD</td>  
 
                        </tr>  
                  
                  <?php
                include ("connection.php");                
                $query = "Select Distinct date From player";
                $result = mysqli_query($conn, $query);         
                $count =0;
                if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                        $count = $count + 1;
                        echo"<tr style='border:1px solid lightgray'>                    
                         <td style='width:100px;background-color: white;text-align: center '><p style='text-transform:uppercase'>" . $row['date'] . "</p></td>
                          <td><a href='single-view-all.php?date=$row[date]'><button style='width:100px' name='id' type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-primary'>VIEW</button></td></a>
                          <td><a href='single-view-delete.php?date=$row[date]'><button style='width:110px'  name='id' type='button' data-toggle='modal' data-target='#exampleModalCenter' class='btn btn-danger'>DELETE</button></td></a>

</tr>";
    }                
}else{
    echo "<h3 style='color:red'>No record found</h3>";
}             
                ?>  
         </table>
        </div>        
         </center>
            </div>
    </div>
    
        <br/>
        <br/>
    </div>                            
  
                   
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
    
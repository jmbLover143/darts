  <?php
 session_start();
 include("connection.php");
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
        <link rel="stylesheet" href="lib/css/darts.css">
    <script defer src="lib/js/material.min.js"></script>
    <link rel="stylesheet" href="lib/semantic/semantic.min.css">
    <!-- Bootstrap core CSS -->
    <link href="lib/css/compiled.min.css" rel="stylesheet">
    <script src="lib/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="lib/sweetalert2/sweetalert2.min.css">
    <script src="lib/js/jquery-3.2.1.js"></script>
    <script src="path/to/jquery.js"></script>
    <script src="lib/js/login.js"></script>
<script src="path/to/popper.js"></script>
<script src="path/to/bootstrap.js"></script>
<script src="path/to/bootstrap-confirmation.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    
 
    <body style="background-color: #f7f7f7">
        <div class="cover">  
            <img class="logo" src="lib/image/img6.png">    
                <div class="left">
                    <p class="title">SUMMER</p>
                    <p class="title">TOURNAMENT 2020</p>
                    <hr>
                        <br/>
                        <form action="check.php" method="POST" onsubmit="return validate()">
                            
                        
                    <table class="login-table">
                        
                          <tr>
                            <td>
                                <p class="user">Enter password</p>
                            </td>
                            
                        </tr>
                        <tr></tr>
                        <tr>
                             
                            <td><input style="width:290px;height: 40px;" name="password" id="password" type="password" class="login" placeholder="password"></td>
                        </tr>
                        <tr>
                            <td><p class="error">Invalid password. Try again.</p></td>
                        </tr>
                        <tr>
                            <td><button name="submit" type="submit" class="btn btn-primary">SIGN IN</button></td>
                        </tr>
                    </table>
                    </form>
                    </div>
         </div>
    </body>    
 
</html>
 
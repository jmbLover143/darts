  
   
<?php
session_start();
include ('connection.php');

  header("Content-type: application/pdf");
        header("Content-Disposition: attachment; filename= SinglePlayerScore" . $c . ".doc");
        header("Pragma: no-cache");
        header("Expires: 0");
 
 
?>
<html>
        <head>
            <meta charset="UTF-8">
            <title>Summer Tournament 2020</title>
                    <link rel="stylesheet" href="lib/css/cover.css">
 <link rel="shortcut icon" href="lib/img/logo.jpg" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="lib/css/material.indigo-blue.min.css">
        <link rel="stylesheet" href="lib/css/darts.css">
    <script defer src="lib/js/material.min.js"></script>
    <script src="lib/js/print.js"></script>
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
    
         </head>
         <style>
             
         </style>
        <body>
            <?php
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $sc1 = $_POST['sc1'];
            $sc2 = $_POST['sc2'];
            $w1 = $_POST['w1'];




               //--------------

                 $n3 = $_POST['n3'];
            $n4 = $_POST['n4'];
            $sc3 = $_POST['sc3'];
            $sc4 = $_POST['sc4'];
            $w2 = $_POST['w2'];


               //--------------------           
                $n5 = $_POST['n5'];
            $n6 = $_POST['n6'];
            $sc5 = $_POST['sc5'];
            $sc6 = $_POST['sc6'];
            $w3 = $_POST['w3'];


                 //--------------------           
                $n7 = $_POST['n7'];
            $n8 = $_POST['n8'];
            $sc7 = $_POST['sc7'];
            $sc8 = $_POST['sc8'];
            $w4 = $_POST['w4'];

            //===========================
             //--------------------           
                $n9 = $_POST['n9'];
            $n10 = $_POST['n10'];
            $sc9 = $_POST['sc9'];
            $sc10 = $_POST['sc10'];
            $w5 = $_POST['w5'];


            //--------------------           
                $n11 = $_POST['n11'];
            $n12 = $_POST['n12'];
            $sc11 = $_POST['sc11'];
            $sc12 = $_POST['sc12'];
            $w6 = $_POST['w6'];


                   //--------------------           
                $n13 = $_POST['n13'];
            $n14 = $_POST['n14'];
            $sc13 = $_POST['sc13'];
            $sc14 = $_POST['sc14'];
            $w7 = $_POST['w7'];



             //--------------------           
                $n15 = $_POST['n15'];
            $n16 = $_POST['n16'];
            $sc15 = $_POST['sc15'];
            $sc16 = $_POST['sc16'];
            $w8= $_POST['w8'];


            //--------------------           
                $n17 = $_POST['n17'];
            $n18 = $_POST['n18'];
            $sc17= $_POST['sc17'];
            $sc18 = $_POST['sc18'];
            $w9= $_POST['w9'];


           //------------  
            $n19 = $_POST['n19'];
            $n20 = $_POST['n20'];
            $sc19= $_POST['sc19'];
            $sc20 = $_POST['sc20'];
            $w10= $_POST['w10'];


           //------------  

            $n21 = $_POST['n21'];
            $n22 = $_POST['n22'];
            $sc21= $_POST['sc21'];
            $sc22 = $_POST['sc22'];
            $w11= $_POST['w11'];


           //------------

                $n23 = $_POST['n23'];
            $n24 = $_POST['n24'];
            $sc23= $_POST['sc23'];
            $sc24 = $_POST['sc24'];
            $w12= $_POST['w12'];


            //------------

                $n25 = $_POST['n25'];
            $n26 = $_POST['n26'];
            $sc25= $_POST['sc25'];
            $sc26 = $_POST['sc26'];
            $w13= $_POST['w13'];


             //------------

                $n27 = $_POST['n27'];
            $n28 = $_POST['n28'];
            $sc27= $_POST['sc27'];
            $sc28 = $_POST['sc28'];
            $w14= $_POST['w14'];


           ?>
              <div class="pri">

                <div id="slip">
        <center>
            
            <h1>Summer Tournament 2020</h1>
            <hr style="width:400px">
             <b>SINGLE PLAYER SCORES</b>
            <br/>
            <br/>
            <strong><b>ROUND 1 Bracket</b></strong>
            <table style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;">
                <br/>
                <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;">NAME</td>
                    <td> </td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;">NAME</td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;">SCORE</td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;">WINNER</td>
                </tr>
                <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n1" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n2" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc1 - $sc2" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w1" ?></td>
                </tr>
                 <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n3" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n4" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc3 - $sc4" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w2" ?></td>
                </tr>
                 <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;" ><?php echo"$n5" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n6" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc5 - $sc6" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w3" ?></td>
                </tr>
                 <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n7" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n8" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc7 - $sc8" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w4" ?></td>
                </tr>
            </table>
            <br/>
            <strong><b>ROUND 2 Bracket</b></strong>
            <table style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;">
                <br/>
                 
                <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n9" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n10" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc9 - $sc10" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w5" ?></td>
                </tr>
                 <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n11" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n12" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc11 - $sc12" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w6" ?></td>
                </tr>
                 <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n13" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n14" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc13 - $sc14" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w7" ?></td>
                </tr>
                 <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n15" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n16" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc15 - $sc16" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w8" ?></td>
                </tr>
            </table>
             <br/>
            <strong><b>ROUND 3 Bracket</b></strong>
            <table style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;">
                <br/>
                
                <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n17" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n18" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc17 - $sc18" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w9" ?></td>
                </tr>
                 <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n19" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n20" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc19 - $sc20" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w10" ?></td>
                </tr>
                 <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n21" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n22" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc21 - $sc22" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w11" ?></td>
                </tr>
                 
            </table>
            <br/>
            <strong><b>ROUND 4 Bracket</b></strong>
            <table style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;">
                <br/>
                
                <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n23" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n24" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc23 - $sc24" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w12" ?></td>
                </tr>
                 <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n25" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n26" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc25 - $sc26" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w13" ?></td>
                </tr>
                  
                 
            </table>
            <br/>
            <strong><h3 style="font-family:tahoma">Championship Round</h3></strong>
            <table style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;">
                 
                <tr>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n27" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"VS" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$n28" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$sc27 - $sc28" ?></td>
                    <td style="margin: 0 auto;border:1px solid black;text-align: center;text-transform: uppercase;"><?php echo"$w14" ?></td>
                </tr>            
            </table>
            <br/>
            <br/>
            <p>Committee Signature: __________________________________</p>
            <br/>
            <br/>
            <p>Committee Signature: __________________________________</p>
            
            </form>
                
        </center>
               </div> 
            </div>
             
        </body>
    </html>

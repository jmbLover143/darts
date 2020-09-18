<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include("connection.php");

$date = $_POST['date'];

$play1 = $_POST['play1'];
$play2 = $_POST['play2'];
$play3 = $_POST['play3'];
$play4 = $_POST['play4'];
$play5 = $_POST['play5'];
$play6 = $_POST['play6'];
$play7 = $_POST['play7'];
$play8 = $_POST['play8'];
//-------------------------------
$win1 = $_POST['win1'];
$win2 = $_POST['win2'];
$win3 = $_POST['win3'];
$win4 = $_POST['win4'];
//----------------------------
$semi1 = $_POST['semi1'];
$semi2 = $_POST['semi2'];
//----------------------------
$final1 = $_POST['final1'];
$final2 = $_POST['final2'];
//------------------------------
$champ = $_POST['champ'];
//----------------------------
$lose1 = $_POST['lose1'];
$lose2 = $_POST['lose2'];
$lose3 = $_POST['lose3'];
$lose4 = $_POST['lose4'];

 
//--------------------------------
$lowin1 = $_POST['lowin1'];
$lowin2 = $_POST['lowin2'];
//-----------------------
 $loser1 = $_POST['loser1'];
$loser2 = $_POST['loser2'];
//-----------------------
 $losemi1 = $_POST['losemi1'];
$losemi2 = $_POST['losemi2'];
//---------------------------
 $losefinal1 = $_POST['losefinal1'];
$losefinal2 = $_POST['losefinal2'];

 
 
$sql = "UPDATE score_double SET date='$date',play1='$play1',play2='$play2',play3='$play3',play4='$play4',play5='$play5',play6='$play6',play7='$play7',play8='$play8',win1='$win1',win2='$win2',win3='$win3',win4='$win4',semi1='$semi1',semi2='$semi2',final1='$final1',final2='$final2',champ='$champ',lose1='$lose1',lose2='$lose2',lose3='$lose3',lose4='$lose4',lowin1='$lowin1',lowin2='$lowin2',loser1='$loser1',loser2='$loser2',losemi1='$losemi1',losemi2='$losemi2',losefinal1='$losefinal1',losefinal2='$losefinal2'";
$result = mysqli_query($conn, $sql);

if(!$result){
    echo "INVALID UPDATESSS>!!! ERROR...";
}else{
    header("Location:drawboards-team.php");
}


?>
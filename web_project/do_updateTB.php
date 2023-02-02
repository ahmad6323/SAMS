<?php
require_once('Database.php');
$db = new Database();
$Tbat_id = $_POST['Tbat_id'];
$bat_type = $_POST['text_3'];
$bat_co = $_POST['text_4'];

$res = $db->UpdateTbat($bat_type, $bat_co,$Tbat_id);
if($res === true){
    header('location:RecordofProduct.php?rid=3');
}

$hardball_id = $_POST['hardball_id'];
$ball_type = $_POST['text_5'];
$ball_co = $_POST['text_6'];

$res = $db->UpdateHardBall($ball_type, $ball_co,$hardball_id);
if($res === true){
    header('location:RecordofProduct.php?rid=3');
}

$ball_id = $_POST['ball_id'];
$ball_type = $_POST['text_7'];
$ball_co = $_POST['text_8'];

$res = $db->UpdateTennisBall($ball_type, $ball_co,$ball_id);
if($res === true){
    header('location:RecordofProduct.php?rid=3');
}

$fb_id = $_POST['fb_id'];
$football_type = $_POST['text_9'];
$football_co = $_POST['text_10'];

$res = $db->UpdateFootBall($football_type, $football_co,$fb_id);
if($res === true){
    header('location:RecordofProduct.php?rid=3');
}

$rac_id = $_POST['rac_id'];
$racket_type = $_POST['text_11'];
$rac_com = $_POST['text_12'];

$res = $db->UpdateRacket($racket_type, $rac_com,$rac_id);
if($res === true){
    header('location:RecordofProduct.php?rid=3');
}

$sh_id = $_POST['sh_id'];
$shuttle_type = $_POST['text_13'];
$shuttle_com = $_POST['text_14'];

$res = $db->UpdateShuttle($shuttle_type, $shuttle_com,$sh_id);
if($res === true){
    header('location:RecordofProduct.php?rid=3');
}
?>

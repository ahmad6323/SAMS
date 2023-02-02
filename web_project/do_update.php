<?php
require_once('Database.php');
$db = new Database();

     $hid = $_POST['hid'];
    $h_type = $_POST['text_1'];
    $bat_c = $_POST['text_2'];
    $res = $db->UpdateHbat($h_type, $bat_c,$hid);

if($res === true){
    header('location:RecordofProduct.php?rid=3');
}

?>
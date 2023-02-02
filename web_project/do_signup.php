<?php
require_once('Database.php');

$db = new Database();

$un = $_POST['text'];
$pass = $_POST['number'];

$res = $db->signup($un, $pass);

if($res === true){
    header('location:userhome.php?rid=3');
}
else{
    header('location:signup.php?rid=4');
}
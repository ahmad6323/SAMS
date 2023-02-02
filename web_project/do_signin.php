<?php
require_once('Database.php');

$db = new Database();

$un = $_POST['text'];
$pass = $_POST['number'];

$res = $db->signin($un , $pass);

if($res === true){
    setcookie('loggedIn', true);
    header('location:userhome.php?rid=1');
}
else{
    header('location:signin.php?rid=2');
}

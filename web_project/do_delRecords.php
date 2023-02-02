<?php
//hardball bat record deletion

$hid = $_GET['hid'];

require_once('Database.php');

$db = new Database();

$db->deleteHardBallBat($hid);

header('location:RecordofProduct.php');
// tennis ball bat record delete
$Tbat_id = $_GET['Tbat_id'];

require_once('Database.php');

$db = new Database();
$db->deleteTennisBat($Tbat_id);

header('location:RecordofProduct.php');
//hardball record deletion
$hardball_id = $_GET['hardball_id'];

require_once('Database.php');

$db = new Database();
$db->deleteHardball($hardball_id);

header('location:RecordofProduct.php');
//tennis ball record deletion 
$ball_id = $_GET['ball_id'];

require_once('Database.php');

$db = new Database();
$db->deleteTennisball($ball_id);

header('location:RecordofProduct.php');
//football record deletion
$fb_id = $_GET['fb_id'];

require_once('Database.php');

$db = new Database();
$db->deleteFootball($fb_id);

header('location:RecordofProduct.php');
//racket record deletion 
$rac_id = $_GET['rac_id'];

require_once('Database.php');

$db = new Database();
$db->deleteRacket($rac_id);

header('location:RecordofProduct.php');
// shuttle record deletion
$sh_id = $_GET['sh_id'];

require_once('Database.php');

$db = new Database();
$db->deleteShuttle($sh_id);

header('location:RecordofProduct.php');

?>

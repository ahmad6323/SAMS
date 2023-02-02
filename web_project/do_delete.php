<?php
//user record deletion
$id = $_GET['id'];

require_once('Database.php');

$db = new Database();

$db->deleteUser($id);

header('location:showAllUsers.php');

?>


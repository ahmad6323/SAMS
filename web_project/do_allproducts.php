<?php
require_once('Database.php');

$db = new Database();
//hard ball bats record insertion
if(isset($_POST['text_1']) || isset($_POST['text_2'])){
    $h_type = $_POST['text_1'];
    $bat_c = $_POST['text_2'];
    
    $res = $db->HardBallBat($h_type, $bat_c);
}
if($res === true){
    header('location:allProducts.php?rid=3');
}
else{
    header('location:do_allproducts.php?rid=4');
}

// tennis ball bats insertion
if(isset($_POST['text3']) || isset($_POST['text4'])){
    $bat_type = $_POST['text3'];
    $bat_co = $_POST['text4'];
    
    $res = $db->TennisBallBat($bat_type, $bat_co);
}
if($res === true){
    header('location:allProducts.php?rid=3');
}
else{
    header('location:do_allproducts.php?rid=4');
}

?>

<?php
// hardball record insertion
require_once('Database.php');

$db = new Database();

if(isset($_POST['text5']) || isset($_POST['text6'])){
    $ball_type = $_POST['text5'];
    $ball_co = $_POST['text6'];
    
    $res = $db->Hardball($ball_type, $ball_co);
}
if($res === true){
    header('location:allProducts.php?rid=3');
}
else{
    header('location:do_allproducts.php?rid=4');
}
 

// tennis ball record insertion
?>


<?php
require_once('Database.php');

$db = new Database();

if(isset($_POST['text7']) || isset($_POST['text8'])){
    $ball_type = $_POST['text7'];
    $ball_co = $_POST['text8'];
    
    $res = $db->Tennisball($ball_type, $ball_co);
}
if($res === true){
    header('location:allProducts.php?rid=3');
}
else{
    header('location:do_allproducts.php?rid=4');
}
 // football record insertion
?>


<?php
require_once('Database.php');

$db = new Database();

if(isset($_POST['text9']) || isset($_POST['text10'])){
    $football_type = $_POST['text9'];
    $football_co = $_POST['text10'];
    
    $res = $db->Football($football_type, $football_co);
}
if($res === true){
    header('location:allProducts.php?rid=3');
}
else{
    header('location:do_allproducts.php?rid=4');
}
// racket record insertion
?>

<?php
require_once('Database.php');

$db = new Database();

if(isset($_POST['text11']) || isset($_POST['text12'])){
    $racket_type = $_POST['text11'];
    $rac_com = $_POST['text12'];
    
    $res = $db->Racket($racket_type, $rac_com);
}
if($res === true){
    header('location:allProducts.php?rid=3');
}
else{
    header('location:do_allproducts.php?rid=4');
}
// shuttle record insertion 
?>

<?php
require_once('Database.php');

$db = new Database();

if(isset($_POST['text13']) || isset($_POST['text14'])){
    $shuttle_type = $_POST['text13'];
    $shuttle_com = $_POST['text14'];
    
    $res = $db->Shuttle($shuttle_type, $shuttle_com);
}
if($res === true){
    header('location:allProducts.php?rid=3');
}
else{
    header('location:do_allproducts.php?rid=4');
}

?>



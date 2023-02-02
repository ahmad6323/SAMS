<?php
require_once('Database.php');
$db = new Database();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>records of all products</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SAMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="userhome.php?rid=60">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="allproducts.php?rid=61">Adding a products</a>
      <a class="nav-item nav-link" href="about.php?rid=62">About</a>
      <a class="nav-item nav-link " href="Recordofproduct.php?rid=63">Show All Records</a>
    </div>
  </div>
</nav>
    <div class="container mt-3">
        <h2 style="text-align:center;">All Record of HardBall Bat</h2>
        <table class="table table-bordered">
            <tr>
                <th>H_ID</th>
                <th>BAT_TYPE</th>
                <th>BAT_COMPANY</th>
                <!-- <th>Action</th> -->
            </tr>
            <?php
            $st = $db->allRecordOfHBat();
            foreach ($st as $row) {
                print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>");
                print("<a href=\"update.php?hid=$row[0]\"class=\"btn btn-warning\">Edit/Update</a>");
                print("<a href=\"do_delRecords.php?hid=$row[0]\"class=\"btn btn-danger\">Delete</a>");
                print('</tr>');
            }
            ?>
        </table>

    </div>

    <div class="container mt-3">
        <h2 style="text-align:center;">All Record of TennisBall Bat</h2>
        <table class="table table-bordered">
            <tr>
                <th>H_ID</th>
                <th>BAT_TYPE</th>
                <th>BAT_COMPANY</th>
                <!-- <th>Action</th> -->
            </tr>
            <?php
            $st = $db->allRecordOfTennisBat();
            foreach ($st as $row) {
                print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>");
                print("<a href=\"updateTB.php?Tbat_id=$row[0]\"class=\"btn btn-warning\">Edit/Update</a>");
                print("<a href=\"do_delRecords.php?Tbat_id=$row[0]\"class=\"btn btn-danger\">Delete</a>");
                print('</tr>');
            }
            ?>
        </table>

    </div>
    <div class="container mt-3">
        <h2 style="text-align:center;">All Record of HardBall</h2>
        <table class="table table-bordered">
            <tr>
                <th>H_ID</th>
                <th>BALL_TYPE</th>
                <th>BALL_COMPANY</th>
                <!-- <th>Action</th> -->
            </tr>
            <?php
            $st = $db->RecordOfHardball();
            foreach ($st as $row) {
                print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>");
                print("<a href=\"updateHB.php?hardball_id=$row[0]\"class=\"btn btn-warning\">Edit/Update</a>");
                print("<a href=\"do_delRecords.php?hardball_id=$row[0]\"class=\"btn btn-danger\">Delete</a>");
                print('</tr>');
            }
            ?>
        </table>

    </div>
    <div class="container mt-3">
        <h2 style="text-align:center;">All Record of Tennis Ball</h2>
        <table class="table table-bordered">
            <tr>
                <th>H_ID</th>
                <th>BALL_TYPE</th>
                <th>BALL_COMPANY</th>
                <!-- <th>Action</th> -->
            </tr>
            <?php
            $st = $db->RecordOfTennisball();
            foreach ($st as $row) {
                print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>");
                print("<a href=\"updateTBall.php?ball_id=$row[0]\"class=\"btn btn-warning\">Edit/Update</a>");
                print("<a href=\"do_delRecords.php?ball_id=$row[0]\"class=\"btn btn-danger\">Delete</a>");
                print('</tr>');
            }
            ?>
        </table>

    </div>
    <div class="container mt-3">
        <h2 style="text-align:center;">All Record of FootBall</h2>
        <table class="table table-bordered">
            <tr>
                <th>football_ID</th>
                <th>FootBALL_TYPE</th>
                <th>FootBALL_COMPANY</th>
                <!-- <th>Action</th> -->
            </tr>
            <?php
            $st = $db->RecordOffootball();
            foreach ($st as $row) {
                print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>");
                print("<a href=\"updateFBall.php?fb_id=$row[0]\"class=\"btn btn-warning\">Edit/Update</a>");
                print("<a href=\"do_delRecords.php?fb_id=$row[0]\"class=\"btn btn-danger\">Delete</a>");
                print('</tr>');
            }
            ?>
        </table>

    </div>
    <div class="container mt-3">
        <h2 style="text-align:center;">All Record of Rackets</h2>
        <table class="table table-bordered">
            <tr>
                <th>Racket_ID</th>
                <th>Racket_TYPE</th>
                <th>Racket_COMPANY</th>
                <!-- <th>Action</th> -->
            </tr>
            <?php
            $st = $db->RecordOfRackets();
            foreach ($st as $row) {
                print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>");
                print("<a href=\"updateRac.php?rac_id=$row[0]\"class=\"btn btn-warning\">Edit/Update</a>");
                print("<a href=\"do_delRecords.php?rac_id=$row[0]\"class=\"btn btn-danger\">Delete</a>");
                print('</tr>');
            }
            ?>
        </table>

    </div>
    </div>
    <div class="container mt-3">
        <h2 style="text-align:center;">All Record of Shuttles</h2>
        <table class="table table-bordered">
            <tr>
                <th>shuttle_ID</th>
                <th>shuttle_TYPE</th>
                <th>shuttle_COMPANY</th>
                <!-- <th>Action</th> -->
            </tr>
            <?php
            $st = $db->RecordOfShuttle();
            foreach ($st as $row) {
                print("<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>");
                print("<a href=\"updateSh.php?sh_id=$row[0]\"class=\"btn btn-warning\">Edit/Update</a>");
                print("<a href=\"do_delRecords.php?sh_id=$row[0]\"class=\"btn btn-danger\">Delete</a>");
                print('</tr>');
            }
            ?>
        </table>
</body>

</html>
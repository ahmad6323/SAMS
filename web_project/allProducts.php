<?php
if (isset($_GET['rid'])) {
  $id = $_GET['rid'];
}

?>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>products</title>
</head>

<body>
  <div>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>record! </strong>


      <?php
      
      if ($_GET['rid'] == 3) {
        print('added successfull');
      } elseif ($_GET['rid'] == 4) {
        print('inertion failed!!!');
      }
      ?>
    </div>
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
      <a class="nav-item nav-link" href="Recordofproduct.php?rid=63">Show All Records</a>
    </div>
  </div>
</nav>

    <form action="do_allproducts.php" method="post">
      <div class="form-group">
        <h2 style="text-align:center;">Adding a new Bat</h2>
        <label for="exampleInputEmail1">BAT Type</label>
        <input type="text" class="form-control" id="text_1" name="text_1" aria-describedby="emailHelp"
          placeholder="please enter a hardball Bat">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Bats Company name</label>
        <input type="text" class="form-control" id="text_2" name="text_2"
          placeholder="please enter hardball bat company name">
      </div>

      <button type="submit" class="btn btn-primary">ADD BAT</button>
    </form>
    <form action="do_allproducts.php" method="post">
      <div class="form-group">
        <h2 style="text-align:center;">Adding a new Tennis Ball Bat</h2>
        <label for="exampleInputEmail1">BAT Type</label>
        <input type="text" class="form-control" id="text3" name="text3" aria-describedby="emailHelp"
          placeholder="please enter a tennis ball bat">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Bats Company name</label>
        <input type="text" class="form-control" id="text4" name="text4">
      </div>

      <button type="submit" class="btn btn-primary">ADD BAT</button>
    </form>
    <form action="do_allproducts.php" method="post">
      <div class="form-group">
        <h2 style="text-align:center;">Adding a new hardball</h2>
        <label for="exampleInputEmail1">Ball Type</label>
        <input type="text" class="form-control" id="text5" name="text5" aria-describedby="emailHelp"
          placeholder="please enter hardball">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Balls Company name</label>
        <input type="text" class="form-control" id="text6" name="text6">
      </div>

      <button type="submit" class="btn btn-primary">ADD HardBall</button>
    </form>
    <form action="do_allproducts.php" method="post">
      <div class="form-group">
        <h2 style="text-align:center;">Adding a new Tennis Ball</h2>
        <label for="exampleInputEmail1">BAT Type</label>
        <input type="text" class="form-control" id="text7" name="text7" aria-describedby="emailHelp"
          placeholder="please enter tennis ball">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Balls Company name</label>
        <input type="text" class="form-control" id="text8" name="text8">
      </div>

      <button type="submit" class="btn btn-primary">ADD Tennis ball</button>
    </form>
    <form action="do_allproducts.php" method="post">
      <div class="form-group">
        <h2 style="text-align:center;">Adding a new FootBall</h2>
        <label for="exampleInputEmail1">FootBall Type</label>
        <input type="text" class="form-control" id="text9" name="text9" aria-describedby="emailHelp"
          placeholder="please enter a FootBall">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">FootBall Company name</label>
        <input type="text" class="form-control" id="text10" name="text10">
      </div>

      <button type="submit" class="btn btn-primary">ADD FootBall</button>
    </form>
    <form action="do_allproducts.php" method="post">
      <div class="form-group">
        <h2 style="text-align:center;">Adding a new Racket</h2>
        <label for="exampleInputEmail1">Racket Type</label>
        <input type="text" class="form-control" id="text11" name="text11" aria-describedby="emailHelp">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Racket Company name</label>
        <input type="text" class="form-control" id="text12" name="text12">
      </div>

      <button type="submit" class="btn btn-primary">ADD Racket</button>
    </form>
    <form action="do_allproducts.php" method="post">
      <div class="form-group">
        <h2 style="text-align:center;">Adding a new Shuttle</h2>
        <label for="exampleInputEmail1">Shuttle Type</label>
        <input type="text" class="form-control" id="text13" name="text13" aria-describedby="emailHelp">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Shuttle Company name</label>
        <input type="text" class="form-control" id="text14" name="text14">
      </div>

      <button type="submit" class="btn btn-primary">ADD Shuttle</button>
    </form>
</body>

</html>
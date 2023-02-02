<?php
    require_once('Database.php');
    $db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>All users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>All users</h2>
    <table class="table table-bordered">
        <tr>
            <th>UID</th>
            <th>Username</th>
        </tr>
       <?php
    $st = $db->fetchAllUsers();
    foreach($st as $row){
        print("<tr><td>$row[0]</td><td>$row[1]</td><td>");
        print("<a href=\"do_delete.php?id=$row[0]\"class=\"btn btn-danger\">Delete</a>");
        print('</tr>');
    }
    ?>
    </table>

</div>

</body>
</html>

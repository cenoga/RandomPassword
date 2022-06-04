<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Generate Random Password in PHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Generate Random Password in PHP</h1>
      </div>
          <div class="card-body">
            <form method="post">
              <input type="submit" name="submit" class="btn btn-primary" value="Generate">
            </form><br>
            <?php
            if(isset($_POST['submit'])){
              $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
              $pass = array();
              $comblen = strlen($comb) - 1;
              for($i=0; $i<8; $i++){
                $n = rand(0,$comblen);
                $pass[] = $comb[$n];
              }
              echo "<h4>Random Password: ";
              print(implode($pass));
            }
            ?>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
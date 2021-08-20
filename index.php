<!doctype html>
<html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="style/index.css">
    </head>
      <title>Login | LLDIKTI Perencanaan dan Penganggaran</title>
    </head>
  <body>
    
    <div class="container-sm">
      <h2 class="text-center" style="font-size: 20px;">Silahkan Login</h2>
      <hr>
      <form method="POST" action="Proses/login.php">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user mx-auto" style="font-size:24px"></i></div>
            </div>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
          </div>
        </div>
        <br>
         <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-unlock-alt" style="font-size: 25px;"></i></div>
            </div>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
          </div>
        </div>

        <br>
         <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="Rubah()">
          <label class="form-check-label" for="flexSwitchCheckDefault">Show Password</label>
        </div>
        <br>
        <button type="submit" class="btn btn-success" name="submit" style="width: 100%;">Log In</button>
        </form>
        <a href="Autopilot/forget.php" type="button" class="btn btn-danger" style="width: 100%; margin-top: 1px;">Lupa Password</a>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="style/js/show.js"></script>
  </body>
</html>
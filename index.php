<?php include ("conn/koneksi.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Salon Asih</title>
    <link rel="stylesheet" href="data.css">
  </head>
  <body>
    <!-- Form-->
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Login Salon Asih</h1>
            </div>
            <div class="form-content">
                <form action="login.php" method="POST">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" id="username" name="username" required="required" />
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" id="password" name="password" required="required" />
                    </div>
                    <div class="form-group">
                      <button type="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-panel two">
            <div class="form-header">
            </div>
            <div class="form-content">
            </div>
        </div>
    </div>
 </body>
</html>

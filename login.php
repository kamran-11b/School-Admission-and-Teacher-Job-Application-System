  <?php
        include("database/connectdb.php");

        session_start();
        $invalid = NULL;
        if (isset($_POST["login"])) {
            
            $admin_email = $_POST["admin_email"];
            $password = $_POST["password"];
            
            $remember = isset($_POST["remember"]) == TRUE ? 1 : 0;

            $loginQuery = "SELECT * FROM admin where admin_email='$admin_email' AND password='$password'";
            
            $result = $connect->query($loginQuery);
            
            if (!$result) {
                $_SESSION["admin_email"] = $admin_email;
                if ($remember == 1) {
                    setcookie('admin_email', $admin_email, time() + 3600 * 24 * 14, '/');
                }
            } else {

                $invalid = "* Incorrect Email/Password!<br> &nbsp; Please type correct";
            
            }
              
        }

        if (isset($_SESSION["admin_email"]) || isset($_COOKIE['admin_email'])) {
            
            if (!$result) {
                header("Location:admin.php");
            }
        }
    ?>


  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="UTF-8">
      <title>Log in </title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>

      <style>
          html,
          body {
              background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
              background-size: cover;
              background-repeat: no-repeat;
              height: 100%;
              font-family: 'Numans', sans-serif;
          }

          .container {
              height: 100%;
              align-content: center;
          }

          .card {
              height: 300px;
              margin-top: auto;
              margin-bottom: auto;
              width: 400px;
              background-color: rgba(0, 0, 0, 0.5) !important;
          }

          .social_icon span {
              font-size: 60px;
              margin-left: 10px;
              color: #FFC312;
          }

          .social_icon span:hover {
              color: white;
              cursor: pointer;
          }

          .card-header h3 {
              color: white;
          }

          .social_icon {
              position: absolute;
              right: 20px;
              top: -45px;
          }

          .input-group-prepend span {
              width: 50px;
              background-color: #FFC312;
              color: black;
              border: 0 !important;
          }

          input:focus {
              outline: 0 0 0 0 !important;
              box-shadow: 0 0 0 0 !important;

          }

          .remember {
              color: white;
          }

          .remember input {
              width: 20px;
              height: 20px;
              margin-left: 15px;
              margin-right: 5px;
          }

          .login_btn {
              color: black;
              background-color: #FFC312;
              width: 100px;
          }

          .login_btn:hover {
              color: black;
              background-color: white;
          }

          .links {
              color: white;
          }

          .links a {
              margin-left: 4px;
          }

      </style>
  </head>

  <body>
      <div class="container">
          <div class="d-flex justify-content-center h-100">
              <div class="card">
                  <div class="card-header">
                      <h3>Sign In</h3>
                  </div>
                  <div class="card-body">
                      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <div class="input-group form-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                              </div>
                              <input type="email" class="form-control" name="admin_email" placeholder="E-Mail" autofocus required>

                          </div>
                          <div class="input-group form-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                              </div>
                              <input type="password" class="form-control" name="password" placeholder="password" autofocus required>
                          </div>
                          <div class="row align-items-center remember">
                              <input type="checkbox">Remember Me
                          </div>
                          <div class="form-group">
                              <input type="submit" name="login" value="LOGIN" class="btn float-right login_btn">
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  </html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PepusApp - Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../assets/all.min.css">
  <link rel="stylesheet" href="../assets/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../assets/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-cyan">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Perpus</b>App</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login to start your session</p>

      <form action="" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="col-8">
              <p>
                Don't have an acc? <a href="/register">Register</a>
              </p>
          </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-info btn-block">Login</button>
          </div>
        </div>
      </form>
     
    </div>
  </div>
</div>

<script src="../assets/jquery.min.js"></script>
<script src="../assets/bootstrap.bundle.min.js"></script>
<script src="../assets/adminlte.min.js"></script>
</body>
</html>

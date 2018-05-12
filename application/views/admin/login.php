<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="/webapplication/assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/webapplication/assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="/webapplication/assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="/webapplication/assets/admin/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form role="form" action="/webapplication/index.php/Admin/checkLogin" method="post">
          
          <div class="form-group">
            <label for="admin-username" for="form-admin-username">Username</label>
            <input class="form-control" id="admin_username" type="text" name="admin_username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="admin-password" for="form-admin-password">Password</label>
            <input class="form-control" id="admin_password" type="password" name="admin_password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <a type="submit" class="btn btn-primary btn-block" href="/webapplication/index.php/Admin/checkLogin">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/webapplication/index.php/Admin/register">Register an Account</a>
          <a class="d-block small" href="/webapplication/index.php/Admin/forgetPassword">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="/webapplication/assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="/webapplication/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="/webapplication/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

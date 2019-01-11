<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Iniciar Sesión</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../css/style-login.css">
 
</head>
<body>
<div class="login-box">
  <div class="login-logo">
    <img src="assets/img/logo-cehrl2.png" class="img-logo">
    <a href="#" class="text-title"><b>SISCE-</b>HRL</a>
  </div>
  <div class="text-center">
    <h4 class="text-subtitle"><b>DIVISIÓN DE TECNOLOGÍAS DE LA INFORMACIÓN</b></h4>
    <h5 class="text-subtitle"><b>&copy; Unidad de Desarrollo de Sistemas</b></h5>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg"><b>Iniciar Sesión</b></p>
    <form action="index.php?page=login&action=login" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="txtuser" placeholder="Usuario o DNI">
        <span class="form-control-feedback"> <i class="fa fa-user" aria-hidden="true"></i></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtpass" placeholder="Contraseña">
        <span class="form-control-feedback"> <i class="fa fa-lock" aria-hidden="true"></i></span>
      </div>
      <div class="form-group has-feedback">
        <select id="perfil" name="cbzona" class="select-zona" >
            <option class="text-danger" value='2'>Zona Roja</option>
            <option class="text-primary" value='3'>Zona Azul</option>
            <option class="text-success" value='4'>Zona Verde</option>
            <option class="text-warning" value='1'>Administrador</option>
        </select>        
      </div>
      <div class="row">   
        <div class="col-xs-8"></div>     
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>        
      </div>
    </form>
    <a href="#">Olvidé mi contraseña</a><br>
  </div>
  
</div>

<!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->

</body>
</html>

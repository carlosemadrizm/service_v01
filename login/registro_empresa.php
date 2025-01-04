
<!doctype html>
<html lang="en">

<head>
  <title>SERVI - Registro empresa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
  <!-- Required meta tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- font awesome  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <style type="text/css">
      .login_oueter {
          width: 360px;
          max-width: 80%;
       }
      .logo_outer{
            text-align: center;
      }
      .logo_outer img{
           width:120px;
          margin-bottom: 40px;
      }
</style>

</head>

<?php

require_once 'config.php';

?>

<body>

<section class="h-100 gradient-form" style="background-color: #ggg;">
  <div class="container py-8 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-12">
        <div class="card rounded-3 text-white" style="background-color: #5d5956;">
          <div class="row g-0">
            <div class="col-lg-8">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="http://3.22.51.36/SERVI-main/assets/img/logos/ServiBlanco.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1 text-white">Registrá tu empresa en SERVI</h4>
                </div>

                <form class="was-validated">
                <h6 class="mt-1 mb-5 pb-1 text-white">Ingresá los datos de su empresa</h6>
                <!-- Nombre empresa -->
                  <div data-mdb-input-init class="form-outline mb-4">
                      <label for="usr">Nombre de la empresa</label>
                      <input type="text" class="form-control" id="name_empresa" maxlength="100" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this f  </div>
                  </div>
                <!-- Condicion fiscal -->
                  <div data-mdb-input-init class="form-outline mb-4">
                      <label for="usr">Condición fiscal</label>
                      <select class="form-control" id="condfiscal_empresa" required>
                          <option></option>
                          <option value="1">Exento</option>
                          <option value="2">Monotributo</option>
                          <option value="3">Responsable inscrito</option>
                        </select>
                  </div>
                  <!-- Documento -->
                  <div data-mdb-input-init class="form-outline mb-4">
                      <label for="usr">Documento</label>
                      <input type="text" class="form-control" id="doc_empresa" maxlength="50" required>
                  </div>
                  <!-- Calle -->
                  <div data-mdb-input-init class="form-outline mb-4">
                      <label for="usr">Calle</label>
                      <input type="text" class="form-control" id="calle_empresa" maxlength="30" required>
                  </div>
                <!-- Número -->
                  <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-4 ">
                        <div data-mdb-input-init class="form-outline mb-4">
                        <label for="usr">Número</label><span class="text-danger"> *</span>
                        <input type="text" class="form-control" id="numdir_empresa" maxlength="10" required>
                       </div>
                      </div>
                  <!-- Cod Postal -->
                      <div class="form-group col-sm-4 flex-column d-flex">
                        <div data-mdb-input-init class="form-outline mb-4">
                        <label for="usr">Código Postal</label><span class="text-danger"> *</span>
                        <input type="text" class="form-control" id="codpostal_empresa" maxlength="10" required>
                      </div>
                    </div>
                  </div>

                  <!-- SECCION DATOS DEL USUARIO -->
                  <hr>
                  <p>Completá la información de tu usuario</p>

                  <div data-mdb-input-init class="form-outline mb-4">
                      <label for="usr">Nombre(s)</label>
                      <input type="text" class="form-control" id="nomb_usuario" maxlength="50" required>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                      <label for="usr">Apellido(s)</label>
                      <input type="text" class="form-control" id="apel_usuario" maxlength="50" required>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="email" maxlength="30" required>

                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Contraseña</label>
                    <input type="password" id="contraseña" class="form-control" maxlength="80" required>
                   </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Repetir contraseña</label>
                    <input type="password" id="contraseña2" class="form-control" maxlength="80" required>
                   </div>

                   <label class="form-label" for="form2Example22">Password</label>
                  <div class="input-group mb-4">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                      </div>
                      <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                      <span class="input-group-text" onclick="password_show_hide();">
                        <i class="fas fa-eye" id="show_eye"></i>
                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                      </span>
                  </div>

                  <!-- SECCION CHECKBOXES-->
                  <div class="checkbox">
                        <label><input type="checkbox" value=""> Acepto los Términos y Condiciones, Política de Privacidad, Condiciones de contratación, Política de Gestión de Calidad.</label>
                  </div>
                  <div class="checkbox">
                        <label><input type="checkbox" value=""> Quiero recibir newsletters con novedades, promociones y actualizaciones.</label>
                  </div>
                  <div class="checkbox disabled">
                        <label><input type="checkbox" value=""> Quiero participar en encuestas y pruebas piloto para ayudar a mejorar la plataforma.</label>
                  </div>
                  <!-- SECCION BOTONES-->
                  <br>
                  <div class="text-center pt-1 mb-5 pb-1">
                    <!--<button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Crear cuenta empresa</button>-->
                    <button class="btn bsb-btn-xl btn-primary" type="submit">Crear cuenta empresa</button>

                  </div>
                   <hr>
                  <div class="text-center pt-1 mb-5 pb-1">
                    ¿Ya tenés cuenta?</P>
                     <a  class="btn btn-outline-light" href="login_cuenta.php" role="button">Ingresá con tu cuenta empresa</a>
                  </div>
                </form>

              </div>
            </div>
               <!-- SECCION PANEL DERECHO-->
            <div class="col-lg-4 d-flex align-items-center gradient-custom-2">
            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4 text-white">Te ayudamos a solucionar tus busquedas</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</html>

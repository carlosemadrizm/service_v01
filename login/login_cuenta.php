
<!doctype html>
<html lang="en">

<head>
  <title>SERVI - login</title>
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
//Gestiona autenticación go google
require_once 'config.php';

if (!empty($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    $userdata = [];
    $userdata['google_id'] = $google_account_info->id;
    $userdata['email'] = $google_account_info->email;
    $userdata['name'] = $google_account_info->name;
    $userdata['picture'] = $google_account_info->picture;
    $userdata['locale'] = $google_account_info->locale;
    $userdata['gender'] = $google_account_info->gender;
    $userdata['oauth_provider'] = 'google';
    $_SESSION['userData'] = $userdata;
    $_SESSION['token'] = $token['access_token'];

    header("Location: index.php");
}

$authUrl = $client->createAuthUrl();
$output = '<a href="' . filter_var($authUrl, FILTER_SANITIZE_URL) . '"><img src="images/google-sign-in-btn.png" alt=""/>Sign in with google</a>';
?>

<body>

<div class="container">
 <?php
// $output = '';
if (!empty($_SESSION['userData'])) {
    $userdata = $_SESSION['userData'];
    $output .= '<div class="ac-data">';
    $output .= '<img src="' . $userdata['picture'] . '">';
    $output .= '<p><b>Google ID:</b> ' . $userdata['google_id'] . '</p>';
    $output .= '<p><b>Name:</b> ' . $userdata['name'] . '</p>';
    $output .= '<p><b>Email:</b> ' . $userdata['email'] . '</p>';
    $output .= '<p><b>Gender:</b> ' . $userdata['gender'] . '</p>';
    $output .= '<p><b>Locale:</b> ' . $userdata['locale'] . '</p>';
    $output .= '<p><b>Logged in with:</b> ' . $userdata['oauth_provider'] . '</p>';
    $output .= '<p>Logout from <a href="logout.php">Logout</a></p>';
    $output .= '</div>';
}?>

  <!--  <?php echo $output; ?> -->
</div>
<!-- Login 3 - Bootstrap Brain Component -->

<section class="h-100 gradient-form" style="background-color: #ggg;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-white" style="background-color: #5d5956;">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="http://3.22.51.36/SERVI-main/assets/img/logos/ServiBlanco.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1 text-white">Estamos a tus servicios</h4>
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                  type="submit"> <i class="fa fa-google" aria-hidden="true" style='font-size:24px'></i>&nbsp;&nbsp;Ingresar con  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                  </svg> google</button>
                  <?php echo $output; ?>
                </div>

                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                <br>

                <form>
                  <p>O indique sus datos para ingresar</p>
                  <!-- usuario y clave -->
                  <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form2Example11">Usuario</label>
                      <input type="email" id="form2Example11" class="form-control" placeholder="email" />
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
                  <!-- boton login -->
                  <div class="text-center pt-1 mb-5 pb-1">
                   <!-- <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log in</button>
-->
                    <button class="btn bsb-btn-xl btn-primary" type="submit">Log in</button>
                    <br> <br><br>
                    <!-- boton olvide password -->
                    <a  class="btn btn-outline-light" href="#!" role="button">Olvidé mi password </a>
                  </div>
                  <!-- boton crear cuenta -->
                  <div class="text-center pt-1 mb-5 pb-1">
                     No tenés una cuenta?</p>
                      <a  class="btn btn-outline-light" href="registro_empresa.php" role="button">Creá tu cuenta empresa</a>
                  </div>
                </form>

              </div>
            </div>

            <!-- Sección derecha del panel-->
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">


            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4 text-white">Te ayudamos a solucionar tus busquedas</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
function password_show_hide() {

  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>

</body>
</html>

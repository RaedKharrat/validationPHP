<?php

session_start();

//controle
if (isset($_POST['login'])) {

  $login=trim($_POST['login']);
  $mdp=$_POST['mdp'];

  if ($login=="admin" && $mdp=="admin") {
    $_SESSION['signOn']=$login;
    header('location: ./');
  }else {
    $msg="Error";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Obladi Coffee | Auth</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">

  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">

  <link rel="stylesheet" href="assets/css/aos.css">

  <link rel="stylesheet" href="assets/css/ionicons.min.css">

  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="assets/css/jquery.timepicker.css">


  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/icomoon.css">
  <link rel="stylesheet" href="assets/css/style.css">


  <link rel="stylesheet" href="assets/css/login.css">

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="./"><img src="assets/images/logoobladi.png" style="width: 55px;"></small></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
    </div>
  </nav>
  <!-- END nav -->

  <form method="POST" class="user">
    <div class="user_options-container">
      <div class="user_options-text">

        <div class="user_options-registered">
          <h2 class="user_registered-title">Welcome to dashboard</h2>
          <button class="user_registered-login" type="button" name="login" id="login-button">Home</button>
        </div>
      </div>

      <div class="user_options-forms" id="user_options-forms" style="height: 500px;">
        <div class="user_forms-login" style="height: 500px;">
          <h2 class="forms_title">Login</h2>

          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Email" name="login" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" name="mdp" class="forms_field-input" required />
            </div>
          </fieldset>
          <?php if(isset($msg)){ ?>
            <small id="emailHelp" class="form-text text-muted">
              <?php echo $msg ?>
            </small>
          <?php } ?>
          <div class="forms_buttons">
            <button type="button"  class="forms_buttons-forgot">Forgot password?</button>
            <input type="submit" value="Log In" class="forms_buttons-action">
          </div>
        </form>
      </div>


    </div>
  </div>
</form>

<script src="assets/js/jquery.min.js"></script>


<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.stellar.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.animateNumber.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script src="assets/js/scrollax.min.js"></script>


<script>
document.forms[0].addEventListener("submit", function(evenement) {
  if (document.getElementById("email").value == "") {
    evenement.preventDefault();
    alert("Tapez un email valable pour avoir une réponse.");
    document.getElementById("email").focus();
  }
  else
  if (document.getElementById("nom").value == "") {
    evenement.preventDefault();
    alert("Pensez à taper un message !");
    document.getElementById("nom").focus();
  }
});

$('#login-button').click(function(){
  window.location.href = '../../FO/views/';
});
</script>
</body>
</html>

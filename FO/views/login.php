<?php
require_once '../../config.php';
include_once 'includes/header.inc.php';
include_once 'includes/navbar.inc.php';
?>

    <link rel="stylesheet" href="assets/css/login.css">


    <form method="POST" action="connectToPlatform.php" class="user">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">Don't have an account?</h2>
                    <button class="user_unregistered-signup" id="signup-button">Sign up</button>
                </div>

                <div class="user_options-registered">
                    <h2 class="user_registered-title">Have an account?</h2>
                    <button class="user_registered-login" name="login" id="login-button">Login</button>
                </div>
            </div>

            <div class="user_options-forms" id="user_options-forms" style="height: 500px;">
                <div class="user_forms-login" style="height: 500px;">
                    <h2 class="forms_title">Login</h2>

                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input type="email" placeholder="Email" name="email" class="forms_field-input" required
                                   autofocus/>
                        </div>
                        <div class="forms_field">
                            <input type="password" placeholder="Password" name="mdp" class="forms_field-input"
                                   required/>
                        </div>
                    </fieldset>
                    <div class="forms_buttons">
                        <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                        <input type="submit" value="Log In" class="forms_buttons-action">
                    </div>
    </form>
    </div>
    <div class="user_forms-signup">
        <h2 class="forms_title">Sign Up</h2>
        <TABLE class="forms_form">
            <form method="POST" action="creeCompte.php" name="MyForm">
                <fieldset class="forms_fieldset">
                    <div class="forms_field" style="display: inline-flex;">
                        <input type="text" placeholder=" Name" name="nom" id="nom" class="forms_field-input" required/>
                        <span class="tooltip">Un nom ne peut pas faire moins de 4 caractères</span>
                        <input type="text" placeholder=" prenom " name="prenom" id="penom" class="forms_field-input"
                               required/>
                        <span class="tooltip">Un nom ne peut pas faire moins de 4 caractères</span>


                    </div>
                    <div class="forms_field" style="display: inline-flex;">
                        <input type="date" placeholder="Birthday" name="dateNaissance" class="forms_field-input"
                               required/>
                        <input type="number" placeholder="num tel" name="numTel" class="forms_field-input" required/>

                    </div>
                    <div class="forms_field">
                        <input type="email" placeholder="Email" name="email" class="forms_field-input" required/>
                    </div>
                    <div class="forms_field">
                        <input type="password" placeholder="Password" name="mdp" class="forms_field-input" required/>
                        <span class="tooltip">Le mot de passe ne doit pas faire moins de 6 caractères</span>

                    </div>
                    <div class="forms_field" style="display: inline-flex;">
                        <select name="region" class="forms_field-input">
                            <option value="none">Sélectionnez votre region</option>
                            <option value="La petite ariana">La petite ariana</option>
                            <option value="Cité el ghazela">Cité el ghazela</option>
                            <option value="Raoued">Raoued</option>
                            <option value="Menzah">Menzah</option>
                        </select>
                        <span class="tooltip">Vous devez sélectionner  </span>
                        <select name="prof" class="forms_field-input">
                            <option value="none">Sélectionnez votre Profession</option>
                            <option value="etudiant">etudiant</option>
                            <option value="Employé">Employé</option>
                        </select>
                        <span class="tooltip">Vous devez sélectionner  </span></div>
                </fieldset>
                <div class="forms_buttons">
                    <input type="submit" value="Sign up" class="forms_buttons-action">
                    <input type="reset" value="reset" class="forms_buttons-action">

                </div>
        </TABLE>
    </div>

    </div>
    </div>
    </form>

    <script src="assets/js/login.js"></script>
    <script src="java.js"></script>


    <script>
        document.forms[0].addEventListener("submit", function (evenement) {
            if (document.getElementById("email").value == "") {
                evenement.preventDefault();
                alert("Tapez un email valable pour avoir une réponse.");
                document.getElementById("email").focus();
            } else if (document.getElementById("nom").value == "") {
                evenement.preventDefault();
                alert("Pensez à taper un message !");
                document.getElementById("nom").focus();
            }
        });
    </script>

<?php
include_once 'includes/footer.inc.php';
?>

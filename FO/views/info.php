<?php
require_once '../../config.php';
require_once "../entities/utilisateur.php";
require_once "../core/utilisateurC.php";

include_once 'includes/header.inc.php';
include_once 'includes/navbar.inc.php';


?>

    <div style="margin-top: 231px;margin-left: 195px;display: table;">

        <form method="POST" class="billing-form ftco-bg-dark p-3 p-md-5" style="background-color: #4b9d4d99">
            <h3 class="mb-4 billing-heading">Modifier </h3>
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nom">nom</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['nom']; ?>" name="nom">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="prenom">Last Name</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['prenom']; ?>"
                               name="prenom">
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="towncity">date </label>
                        <input type="date" class="form-control" name="dateNaissance"
                               value="<?php echo $_SESSION['dateNaissance']; ?>">
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                    <div class="w-100"></div>

                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="towncity">profession </label>
                            <input type="text" class="form-control" name="prof"
                                   value="<?php echo $_SESSION['prof']; ?>">
                        </div>
                    </div>
                    <div class="w-100"></div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="region" class="forms_field-input" value="<?php echo $_SESSION['region']; ?>">
                                <option value="none">Sélectionnez votre region</option>
                                <option value="La petite ariana">La petite ariana</option>
                                <option value="Cité el ghazela">Cité el ghazela</option>
                                <option value="Raoued">Raoued</option>
                                <option value="Menzah">Menzah</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Numero Tel </label>
                            <input type="number" class="form-control" name="numTel"
                                   value="<?php echo $_SESSION['numTel']; ?>">
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="form-group mt-4">
                            <div class="radio">
                                <button type="submit" class="btn btn-white py-3 px-4" name="modifier">Modifier</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form><!-- END -->

        <a href=”fb-messenger://share/?link=
           https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fsharing%2Freference%2Fsend-dialog&app_id=123456789”>Send In
            Messenger</a>


        </form>
        <?php


        if (isset($_POST['modifier'])) {
            $utilisateur = new utilisateur($_POST['nom'], $_POST['prenom'], $_SESSION['email'], $_POST['dateNaissance'], $_SESSION['mdp'], $_POST['numTel'], $_POST['region'], $_POST['prof'], true, $_SESSION['nbrCnx']);

            modifierUtilisateur($utilisateur);
            echo $_POST['nom'];
            unset($_SESSION["nom"]);
            unset($_SESSION["prenom"]);
            unset($_SESSION["dateNaissance"]);
            unset($_SESSION["numTel"]);
            unset($_SESSION["region"]);
            unset($_SESSION["prof"]);
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['prenom'] = $_POST['prenom'];

            $_SESSION['dateNaissance'] = $_POST['dateNaissance'];

            $_SESSION['numTel'] = $_POST['numTel'];
            $_SESSION['region'] = $_POST['region'];
            $_SESSION['prof'] = $_POST['prof'];
            header("Refresh:0");

        }

        ?>

    </div>


<?php
include_once 'includes/footer.inc.php';
?>
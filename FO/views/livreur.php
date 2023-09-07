<?PHP
include "../core/livraisonC.php";
$listelivraisons = afficherlivraisons();
if (isset($_SESSION["role"])) {
    if ($_SESSION["role"] != "user")
        header('Location: ../../BO/views/a.php');
} else {
    header('Location: login.php');
}

include_once 'includes/header.inc.php';
$livreurActive = "active";
include_once 'includes/navbar.inc.php';

$titreBS = $soustitreBS = "Livreur";
include 'includes/beforeServiceOther.inc.php';
?>

<section class="ftco-section ">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>cin</th>
            <th>nom</th>
            <th>prenom</th>
            <th>ville</th>
            <th>mail</th>
            <th>postal</th>
            <th>refuser</th>
            <th>accepter</th>
        </tr>
        </thead>
        </thead>
        <tbody>
        <?PHP
        foreach ($listelivraisons as $row) {
            ?>
            <tr>
                <td><?PHP echo $row['cin']; ?></td>
                <td><?PHP echo $row['nom']; ?></td>
                <td><?PHP echo $row['prenom']; ?></td>
                <td><?PHP echo $row['ville']; ?></td>
                <td><?PHP echo $row['mail']; ?></td>
                <td><?PHP echo $row['postal']; ?></td>
                <td>
                    <form method="POST" action="supprimerlivraison.php">
                        <input type="submit" name="supprimer" value="refuser">
                        <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
                    </form>
                </td>
                <td>
                    <a href="accepterlivraison.php?cin=<?PHP echo $row['cin']; ?>">
                        accepter</a>
                </td>
            </tr>
            <?PHP
        }
        ?>
        </tfoot>
    </table>

    <?php
    echo "<p id='imprimer'><a href='' onclick='window.print();return false;'>imprimer";
    ?>
</section>

<?php
include_once 'includes/bookATable.inc.php';
include_once 'includes/footer.inc.php'; ?>

<?php 
 session_start();
 include "../../core/articleC.php";
 $articleC=new articleC();
if (isset($_POST['valider'])){
	
$a=$articleC->ajouterCommentaire($_GET['id'],$_POST['contenue'],$_SESSION['id']);


header('Location: blog-single.php?id='.$_GET['id']);

}
                ?>
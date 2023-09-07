<?PHP

require_once "../../../../config.php";
require_once "../../../entities/article.php";
require_once "../../../core/articleC.php";
if (isset($_POST["id"])) {
    archiverArticle($_POST["id"]);
    header('Location: listeArticles.php');
}

?>
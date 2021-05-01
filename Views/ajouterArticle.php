<?php
if ( empty(session_id()) ) session_start();
include "../Controller/ArticleC.php";
include "../Model/Article.php";
$article1c=new ArticleC();
$article=new Article($_POST['titre'],$_POST['description'],$_SESSION['idclient']);
$article1c->ajouterArticle($article);

?>
<script>
    document.location.replace("MesArticles.php") ;
</script>
<?php

?>

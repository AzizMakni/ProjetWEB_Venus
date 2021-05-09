<?PHP
include "../Controller/AchatC.php";


$achatC=new AchatC();
if (isset($_GET["id"])){
	$achatC->supprimerAchat($_GET["id"]);
	header('Location: MesAchats.php');
}

?>
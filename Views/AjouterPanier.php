<?php
session_start();


include  "../Controller/PanierC.php";
include  "../Model/Panier.php";

$panierC= new PanierC();

if (isset($_GET['id'])){
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
  //whether ip is from proxy
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
      $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
  //whether ip is from remote address
  else
    {
      $ip_address = $_SERVER['REMOTE_ADDR'];
    }

  $IPADD=crypt ($ip_address, "ee");

    $pan=new Panier($IPADD,$_GET['id'],1,$_GET['prix'],$_GET['type']);
    $panierC->ajouterPanier($pan);  
    header('Location: Panier.php');

    
}

?>
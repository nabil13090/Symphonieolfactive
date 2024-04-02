<?php
$domain  = '/';
$indexPage = $domain;
$contactPage = $domain .  'contact.php';
$detailPage = $domain .  'detail.php';
$enfantsPage = $domain  .  'enfants.php' ;
$femmesPage =  $domain   .  'femmes.php';
$hommesPage = $domain .  "hommes.php";
$monespacePage =  $domain ."mon-espace.php";
$politiquePage = $domain."politiquededonnées.php" ;


$indexName = "BIENVENUE";
$contactName = "NOTRE BOUTIQUE";
$detailName = "DÉTAIL DE PRODUIT";
$enfantsName = "FRAGRANCES  ENFANTS";
$femmesName = "FRAGRANCES FEMMES";
$hommeName = "FRAGRANCES HOMMES";
$monEspaceName ="MON ESPACE";
$politiqueName="POLITIQUE DES  DONNÉES";

$currentUrl = $_SERVER['SCRIPT_NAME'];

function activeNavlink ($page, $url)  {
    if (strpos($page, $url)!== FALSE){
      echo 'active';
    } 
    }
    if (strpos($indexPage, $current_url) !== FALSE || strpos ($indexPage . 'index.php' , $current_url) !== FALSE):
      $title = $indexName;
    elseif (strpos($contactPage, $current_url) !== FALSE):
      $title = $contactName;
    elseif (strpos($detailPage, $current_url) !== FALSE):
      $title = $detailName;
    elseif (strpos($enfantsPage, $current_url) !== FALSE):
        $title = $enfantsName;
    elseif (strpos($femmesPage, $current_url) !== FALSE):
            $title = $femmesName;
    elseif (strpos($monEspaceName, $current_url) !== FALSE):
            $title = $monEspaceName;
    elseif (strpos($politiqueName, $current_url) !== FALSE):
            $title = $politiqueName;
    endif;





<?php
$nombreServeurs = 6;
$coutMensuelUnitaire = 24.90;
$nombreMois = 12;
$coutotal = ($nombreServeurs * $coutMensuelUnitaire)*$nombreMois;
echo "Nombre de serveurs: ".$nombreServeurs."<br/>";
echo "Coût mensuel du parc: ".$nombreServeurs * $coutMensuelUnitaire."<br/>";
echo "Coût annuel du parc : ".$coutotal."<br/>";
echo "Coût moyen par serveur : ".$coutMensuelUnitaire."<br/>";
<?php
include 'conection.php';

class Contact {
    public $id;
    public $Nom;
    public $Prenom;
    public $RaisonSociale;
    public $matriculeLong;
}
class twoContact {
    public $idCars;
    public $matriculeLong;
    public $matriculeLettre;
    public $matriculeCourt;
    public $DEC_ID;
}
// Fetch contacts (in descending order)

$contacts = $pdo->query("SELECT id,Nom,Prenom,RaisonSociale FROM declarant")->fetchAll(PDO::FETCH_CLASS, 'Contact');
/*
$contacts = $pdo->query("SELECT DISTINCT declarant.id, declarant.Nom, declarant.Prenom, declarant.RaisonSociale, cars.matriculeLong
FROM declarant , cars
;")->fetchAll(PDO::FETCH_CLASS, 'Contact');
*/
$twocontacts = $pdo->query("SELECT idCars,matriculeLong, matriculeLettre, matriculeCourt, DEC_ID
FROM cars ORDER BY matriculeLong ;")->fetchAll(PDO::FETCH_CLASS, 'twoContact');

// Get contact by id
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Get contact by id
  $stmt = $pdo->prepare("SELECT id,Nom,Prenom,Fonction,GSM,email,RaisonSociale,Adresse,Ville,CodePostal,VilleAR FROM declarant WHERE id = ?");
  $stmt->execute([$id]);
  $arr = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if (!$arr) {
      printf($arr);
      exit($arr);
  }
  else {
      //foreach($arr as $row)
      //{
          $Nom =           $arr['Nom'];
          $Prenom =        $arr['Prenom'];
          $Fonction =      $arr['Fonction'];
          $GSM =           $arr['GSM'];
          $email =         $arr['email'];
          $RaisonSociale = $arr['RaisonSociale'];
          $Adresse =       $arr['Adresse'];
          $Ville =         $arr['Ville'];
          $CodePostal =    $arr['CodePostal'];
          $VilleAR =       $arr['VilleAR'];
          $matriculeLong =     '';
          $matriculeLettre =     '';
          $matriculeCourt =    '';
      //}
      echo '<script>console.log("value ok");</script>';
  }
}else {
    $Nom =           '';
    $Prenom =        '';
    $Fonction =      '';
    $GSM =           '';
    $email =         '';
    $RaisonSociale = '';
    $Adresse =       '';
    $Ville =         '';
    $CodePostal =    '';
    $VilleAR =       '';
    $matriculeLong =     '';
    $matriculeLettre =     '';
    $matriculeCourt =    '';
    echo '<script>console.log("id Undefined");</script>';
}
// Get twocontact by id
if(isset($_GET['idCars'])){
    $idCars = $_GET['idCars'];

    // Get twocontact by id
    class ContactCars {
        public $Nom;
        public $Prenom;
        public $Fonction;
        public $GSM;
        public $email;
        public $RaisonSociale;
        public $Adresse;
        public $Ville;
        public $CodePostal;
        public $VilleAR;
        public $matriculeLong;
        public $matriculeLettre;
        public $matriculeCourt;
    }

  $stmt = $pdo->prepare("SELECT declarant.Nom, declarant.Prenom, declarant.Fonction, declarant.GSM, declarant.email, declarant.RaisonSociale, declarant.Adresse, declarant.Ville, declarant.CodePostal, declarant.VilleAR, 
  cars.idCars, cars.Marque, cars.matriculeLong, cars.matriculeLettre, cars.matriculeCourt, cars.DEC_ID
  FROM cars
  INNER JOIN declarant ON cars.DEC_ID=declarant.id AND idCars = ?");
  $stmt->execute([$idCars]);
  $arrt = $stmt->fetchAll(PDO::FETCH_CLASS, 'ContactCars');
  
  if (!$arrt) {
      printf($arrt);
      exit($arrt);
  }
  else {
      foreach($arrt as $arrts)
     {
          $Nom =               $arrts->Nom;
          $Prenom =            $arrts->Prenom;
          $Fonction =            $arrts->Fonction;
          $GSM =            $arrts->GSM;
          $email =            $arrts->email;
          $RaisonSociale =            $arrts->RaisonSociale;
          $Adresse =            $arrts->Adresse;
          $Ville =            $arrts->Ville;
          $CodePostal =            $arrts->CodePostal;
          $VilleAR =            $arrts->VilleAR;
          $matriculeLong =     $arrts->matriculeLong;
          $matriculeLettre =     $arrts->matriculeLettre;
          $matriculeCourt =    $arrts->matriculeCourt;
     }
      echo '<script>console.log("cars value ok");</script>';
  }
}

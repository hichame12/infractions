<?php
try {
    if(isset($_POST['submit'])){
        $succes = 'conection successfully';
        $succes = '';
        $Nom =           $_POST['Nom'];
        $Prenom =        $_POST['Prenom'];
        $Fonction =      $_POST['Fonction'];
        $GSM =           $_POST['GSM'];
        $email =         $_POST['email'];
        $RaisonSociale = $_POST['RaisonSociale'];
        $Adresse =       $_POST['Adresse'];
        $Ville =         $_POST['Ville'];
        $CodePostal =    $_POST['CodePostal'];
        $VilleAR =       $_POST['VilleAR'];
        $sql = "INSERT INTO declarant (Nom,Prenom,Fonction,GSM,email,RaisonSociale,Adresse,Ville,CodePostal,VilleAR)
        VALUES ('$Nom', '$Prenom', '$Fonction', '$GSM', '$email', '$RaisonSociale', '$Adresse', '$Ville', '$CodePostal', '$VilleAR')";
        // use exec() because no results are returned
        $pdo->exec($sql);
        echo '<script>alert("New record created successfully")</script>';
    //    header("Location: ../parts/acconte.php");
    }
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $sql = null;
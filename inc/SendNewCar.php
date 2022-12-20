<?php
try {
    if(isset($_POST['Add_Cars'])){
        $Marque =            $_POST['Marque'];
        $matriculeLong =     $_POST['matriculeLong'];
        $matriculeLettre =   $_POST['matriculeLettre'];
        $matriculeCourt =    $_POST['matriculeCourt'];
        $DEC_ID	 =           $_POST['DEC_ID'];
        $sql = "INSERT INTO cars (Marque,matriculeLong,matriculeLettre,matriculeCourt,DEC_ID)
        VALUES ('$Marque', '$matriculeLong', '$matriculeLettre', '$matriculeCourt', '$DEC_ID')";
        // use exec() because no results are returned
        $pdo->exec($sql);
        echo '<script>alert("New Car created successfully")</script>';
    //    header("Location: ../parts/acconte.php");
    }
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $sql = null;
<?php
// Include database connection file
include '../inc/conection.php';

try {
    if(isset($_POST['update'])){
        $succes = 'conection successfully';
        $succes = '';
        $id =            $_POST['id'];
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
        		// Execute UPDATE 
		$stmt = $pdo->prepare("UPDATE declarant SET Nom = ?, Prenom = ?, Fonction = ?, GSM = ?, email = ?, RaisonSociale = ?, Adresse = ?, Ville = ?, CodePostal = ?, VilleAR = ? WHERE id = ?");
		$stmt->execute([$Nom, $Prenom, $Fonction, $GSM, $email, $RaisonSociale, $Adresse, $Ville, $CodePostal, $VilleAR, $id]);

        // use exec() because no results are returned
        echo '<script>alert("New record edit successfully")</script>';
        header("Location: acconte.php");
    //    header("Location: acconte.php");
    }
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;

  // Retrieve id value from querystring parameter
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
	//}
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylepage.css">
    <link rel="stylesheet" href="../css/stylenav.css">
    <link rel="stylesheet" href="../css/stylesAccont.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/jquery/jquery-3.6.1.min.js"></script>

    <style>
        input[type=text]{
            margin: auto 5px;
        }
        .form-update-button {
        margin-bottom: 30px;
        background: #E2FDBB;
        color: #fff;
        border: 1px solid #eee;
        border-radius: 20px;
        box-shadow: 5px 5px 5px #eee;
        text-shadow: none;
        width: 300px;
        height: 70px;
        font-size: 40px;
        }
        .form-update-button:hover {
        background: #92BA56;
        color: #fff;
        border: 1px solid #eee;
        border-radius: 20px;
        box-shadow: 5px 5px 5px #eee;
        text-shadow: none;
        cursor: pointer;
        }
        #Content_Add{
            display: block;
        }
    </style>

    <title>UpDate Acconte</title>
</head>
<body>
<div id="container">
        <nav>
          <div id="logo">
            <a href="../index.php">Loulidi Car</a>
          </div>
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="./acconte.php">Acconte</a></li>
          </ul>
        </nav>
      </div>
      <header class="container">
            <div class="flex-container">
                <div class="col-12">
                    <h2 id="Second_Titre">UpDate Info Declarant</h2>
                </div>
            </div>
    </header>
    <div id="Content_Add" class="container">
    <form name="form1" method="post" action="UpDate.php?id=<?php echo $id ?>">
            <table id="add_Decl">
                <tr>
                    <td>Nom</td>
                    <td colspan="2" class="txtC"><input type="text" name="Nom" id="NomF" placeholder="Nom" value="<?php echo $Nom;?>" required></td>
                    <td class="txtR">الإسم العائلي</td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td colspan="2" class="txtC"><input type="text" name="Prenom" id="NomP" placeholder="Prénom" value="<?php echo $Prenom;?>" required></td>
                    <td class="txtR">الإسم الشخصي</td>
                </tr>
                <tr>
                    <td>Fonction</td>
                    <td colspan="2" class="txtC"><input type="text" name="Fonction" id="Fonc" placeholder="Fonction" value="<?php echo $Fonction;?>"></td>
                    <td class="txtR">المهنة</td>
                </tr>
                <tr>
                    <td>N° de GSM</td>
                    <td colspan="2" class="txtC"><input type="text" name="GSM" id="GSM" placeholder="N° de GSM" value="<?php echo $GSM;?>"></td>
                    <td class="txtR">رقم الهاتف النقال</td>
                </tr>
                <tr>
                    <td>Adresse mail</td>
                    <td colspan="2" class="txtC"><input type="email" name="email" id="mail" placeholder="Adresse mail" value="<?php echo $email;?>"></td>
                    <td class="txtR">عنوان البريد اإللكتروني</td>
                </tr>
                <tr>
                    <td>Raison sociale</td>
                    <td colspan="2" class="txtC"><input type="text" name="RaisonSociale" id="RC" placeholder="Raison sociale" value="<?php echo $RaisonSociale;?>"></td>
                    <td class="txtR">اسم الشركة أو اإلدارة</td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td colspan="2" class="txtC"><input type="text" name="Adresse" id="Adres" placeholder="Adresse" value="<?php echo $Adresse;?>"></td>
                    <td class="txtR">العنوان</td>
                </tr>
                <tr>
                    <td>Ville <input type="text" name="Ville" id="Ville1" placeholder="Ville" value="<?php echo $Ville;?>"></td>
                    <td colspan="2" class="txtC">Code postal<br>
                        <input type="text" name="CodePostal" id="CodePostal" maxlength="5" placeholder="Code postal" value="<?php echo $CodePostal;?>"><br>
                        الرمز البريدي
                    </td>
                    <td class="txtR"><input onkeyup="arabicValue(Ville2)" dir="rtl" type="text"  name="VilleAR" id="Ville2" placeholder="المدينة" value="<?php echo $VilleAR;?>"> المدينة</td>
                </tr>
            </table>
            <input class="form-update-button" type="submit" name="update" value="Update">
			<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            
        </form>
    </div>

</body>
</html>
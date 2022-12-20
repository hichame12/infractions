<?php
// Include database connection file
include '../inc/conection.php';

try {
    if(isset($_POST['update'])){
        $idCars =             $_POST['idCars'];
        $Marque =             $_POST['Marque'];
        $matriculeLong =      $_POST['matriculeLong'];
        $matriculeLettre =    $_POST['matriculeLettre'];
        $matriculeCourt =     $_POST['matriculeCourt'];
        $DEC_ID =             $_POST['DEC_ID'];
        		// Execute UPDATE 
		$stmt = $pdo->prepare("UPDATE cars SET Marque = ?, matriculeLong = ?, matriculeLettre = ?, matriculeCourt = ?, DEC_ID = ? WHERE idCars = ?");
		$stmt->execute([$Marque, $matriculeLong, $matriculeLettre, $matriculeCourt, $DEC_ID, $idCars]);

        // use exec() because no results are returned
        echo '<script>alert("New Car edit successfully")</script>';
        header("Location: MyCars.php");
    }
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;

  // Retrieve id value from querystring parameter
  $idCars = $_GET['idCars'];

  // Get contact by id
$stmt = $pdo->prepare("SELECT idCars,Marque,matriculeLong,matriculeLettre,matriculeCourt,DEC_ID FROM cars WHERE idCars = ?");
$stmt->execute([$idCars]);
$arr = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$arr) {
    printf($arr);
    exit($arr);
}
else {
	//foreach($arr as $row)
	//{
		$Marque =               $arr['Marque'];
		$matriculeLong =        $arr['matriculeLong'];
		$matriculeLettre =      $arr['matriculeLettre'];
		$matriculeCourt =       $arr['matriculeCourt'];
		$DEC_ID =               $arr['DEC_ID'];
	//}
}

            class Contacte {
                public $id;
                public $Nom;
                public $Prenom;
                public $RaisonSociale;
            }
            // Fetch contactss (in descending order)
            $contacts = $pdo->query("SELECT id,Nom,Prenom,RaisonSociale FROM declarant")->fetchAll(PDO::FETCH_CLASS, 'Contacte');
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

    <title>UpDate Car</title>
</head>
<body>
<div id="container">
        <nav>
          <div id="logo">
            <a href="../index.php">Loulidi Car</a>
          </div>
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="acconte.php" id="MyInfo">My Info</a></li>
            <li><a href="MyCars.php" id="MyCars">My Cars</a></li>
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
    <form name="formcar" method="post" action="UpDateCar.php?id=<?php echo $idCars ?>">
    <table id="Add_Cars_table">
        <tr>
            <td>Marque véhicule</td>
            <td><input type="text" name="Marque" id="MarqueCars" placeholder="Marque Voiture" value="<?php echo $Marque;?>" required></td>
            <td class="txtR">نوع المركبة</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="txtC">N° d'ordre</td>
            <td class="txtC">Série d'immatriculation</td>
            <td class="txtC">N° de la préfecture</td>
        </tr>
        <tr>
            <td class="txtC"><input type="text" name="matriculeLong" id="MattriculeLong" placeholder="allant de 1 a 99999" value="<?php echo $matriculeLong;?>" required></td>
            <td class="txtC">
                <select name="matriculeLettre" id="SelectMatricule"  required>
                        <option value="">..</option>
                        <option value="أ">أ</option>
                        <option value="ب">ب</option>
                        <option value="د">د</option>
                        <option value="و">و</option>
                        <option value="ط">ط</option>
                        <option value="هـ">هـ</option>
                </select>
            </td>
            <td class="txtC"><input type="text" name="matriculeCourt" id="MattriculeCourt" placeholder="allant de 1 a 99" value="<?php echo $matriculeCourt;?>" required></td>
        </tr>
        <tr>
            <td class="txtC">رقم الطلب</td>
            <td class="txtC">سلسلة التسجيل</td>
            <td class="txtC">رقم المحافظة</td>
        </tr>
        <tr>
            <td class="txtC">Declarant</td>
            <td class="txtC">
            <select name="DEC_ID" id="DEC_ID" required>
                        <?php 
                        echo '<option value="">..</option>';
                        foreach($contacts as $contact) {
                            echo '<option value="';
                            echo $contact->id;
                            echo '">';
                            if (empty($contact->RaisonSociale)) {
                                echo "$contact->Nom $contact->Prenom";
                             }else {
                                echo "$contact->RaisonSociale";
                             }
                            echo '</option>';
                           }
                        ?>
                </select>
            </td>
            <td class="txtC">المصرح</td>
        </tr>
    </table>
            <input class="form-update-button" type="submit" name="update" value="Update">
			<input type="hidden" name="idCars" value=<?php echo $_GET['idCars'];?>>

        </form>
    </div>
    <script>
        document.addEventListener("load", selectLettre('SelectMatricule', '<?php echo $matriculeLettre;?>'));
        function selectLettre(id,ValueToSelect) {
            let selct = document.getElementById(id);
            selct.value = ValueToSelect;
}
        document.addEventListener("load", selectDEC('DEC_ID', '<?php echo $DEC_ID;?>'));
        function selectDEC(id,ValueToSelect) {
            let selct = document.getElementById(id);
            selct.value = ValueToSelect;
}
    </script>
</body>
</html>
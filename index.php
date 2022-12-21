<?php
include 'inc/conection.php';
include 'inc/SelectValue.php';

?>
<!--test-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/lumen/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylepage.css">
    <link rel="stylesheet" href="css/valuepage.css">
    <link rel="stylesheet" href="css/stylenav.css">

    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/jquery/jquery-3.6.1.min.js"></script>
    <style>
          #nav_Home{
            border-bottom: 2px solid white;
            background-color: #0088ff;
        }
    </style>
    <title>Document FR</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./index.php">Loulidi Car</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link " href="./parts/acconte.php">My Info <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="./parts/MyCars.php">My Cars <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Declarant
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <?php 
                    foreach($contacts as $contact) { 		
                     echo "<li class='dropdown-submenu'>";
                     echo "<a class='dropdown-item dropdown-toggle' href=\"index.php?id=$contact->id\">";
                     if (empty($contact->RaisonSociale)) {
                        echo "$contact->Nom $contact->Prenom";
                     }else {
                        echo "$contact->RaisonSociale";
                     }
                     echo "</a><ul class='dropdown-menu'>";
                     echo "<li><a class='dropdown-item choixDecl' href=\"index.php?id=$contact->id\">";
                     if (empty($contact->RaisonSociale)) {
                        echo "$contact->Nom $contact->Prenom";
                     }else {
                        echo "$contact->RaisonSociale";
                     }
                     echo "</a></li>";

                        foreach($twocontacts as $twocontact) { 		
                           if ($contact->id == $twocontact->DEC_ID) {
                            echo "<li><a class='dropdown-item' href=\"index.php?idCars=$twocontact->idCars\">";
                            echo "$twocontact->matriculeCourt / $twocontact->matriculeLettre / $twocontact->matriculeLong";
                            echo "</a></li>";
                           }
                        }
                     echo "</ul>";
                    }
                     ?>
                </ul>
            </li>
            </ul>
        </div>
    </nav>
<form action="index.php" method="POST">
    <h2>التصريح بمرتكب المخالفة<br>Déclaration de l’auteur de l’infraction</h2>
        <table id="prici" class="table-bordered">
            <tr>
                <td>N° de l’avis de contravention<br>&nbsp;</td>
                <td colspan="2" class="txtC">
                    <input type="text" name="" id="contraventionL" maxlength="10">
                    <b>RF</b>
                    <input type="text" name="" id="contraventionS" maxlength="4">
                    <br>&nbsp;</td>
                <td class="txtR">رقم اإلشعار بالمخالفة<br>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">Je soussigné(e):
                    <table>
                        <tr>
                            <td><input type="radio" name="soussigne" id="RadioCross1"></td>
                            <td><label for="RadioCross1">Personne physique</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="soussigne" id="RadioCross2"></td>
                            <td><label for="RadioCross2">Représentant légal de la personne morale ou de l’agence de location 
                                de voitures sans chauffeur en particulier</label></td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="soussigne" id="RadioCross3"></td>
                            <td><label for="RadioCross3">Personne habilitée en cas des administrations publiques, aux 
                                établissements et entreprise publics et aux collectivités locales</label></td>
                        </tr>
                    </table>
                </td>
                <td colspan="2" class="txtR">أنا الممضي )ة( أسفله
                    <table>
                        <tr>
                            <td class="txtR"><label  for="RadioCross1AR">شخص ذاتي</label></td>
                            <td><input type="radio" name="soussigne2" id="RadioCross1AR"></td>
                        </tr>
                        <tr>
                            <td class="txtR"><label for="RadioCross2AR">الممثل القانوني في حالة األشخاص المعنويين عامة أو وكاالت كراء السيارات 
                                بدون سائق على وجه الخصوص</label></td>
                            <td><input type="radio" name="soussigne2" id="RadioCross2AR"></td>
                        </tr>
                        <tr>
                            <td class="txtR"><label for="RadioCross3AR">شخص له الصالحية القانونية إذا تعلق األمر باإلدارات العمومية٬ بالمؤسسات و الشركات العمومية و الجماعات المحلية </label></td>
                            <td><input type="radio" name="soussigne2" id="RadioCross3AR"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>Nom</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="NomF" placeholder="Nom" value="<?php echo $Nom;?>"></td>
                <td class="txtR">الإسم العائلي</td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="NomP" placeholder="Prénom" value="<?php echo $Prenom;?>"></td>
                <td class="txtR">الإسم الشخصي</td>
            </tr>
            <tr>
                <td>Fonction</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="Fonc" placeholder="Fonction" value="<?php echo $Fonction;?>"></td>
                <td class="txtR">المهنة</td>
            </tr>
            <tr>
                <td>N° de GSM</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="GSM" placeholder="N° de GSM" value="<?php echo $GSM;?>"></td>
                <td class="txtR">رقم الهاتف النقال</td>
            </tr>
            <tr>
                <td>Adresse mail</td>
                <td colspan="2" class="txtC"><input type="email" name="" id="mail" placeholder="Adresse mail" value="<?php echo $email;?>"></td>
                <td class="txtR">عنوان البريد اإللكتروني</td>
            </tr>
            <tr>
                <td>Raison sociale</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="RC" placeholder="Raison sociale" value="<?php echo $RaisonSociale;?>"></td>
                <td class="txtR">اسم الشركة أو اإلدارة</td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="Adres" placeholder="Adresse" value="<?php echo $Adresse;?>"></td>
                <td class="txtR">العنوان</td>
            </tr>
            <tr>
                <td>Ville <input type="text" name="" id="Ville1" placeholder="Ville" value="<?php echo $Ville;?>"></td>
                <td colspan="2" class="txtC">Code postal<br>
                    <input type="text" name="" id="CodePostal" maxlength="5" placeholder="Code postal" value="<?php echo $CodePostal;?>"><br>
                    الرمز البريدي
                </td>
                <td class="txtR"><input onkeyup="arabicValue(Ville2)" dir="rtl" type="text"  name="" id="Ville2" placeholder="المدينة" value="<?php echo $VilleAR;?>"> المدينة</td>
            </tr>
            <tr>
                <td>
                    Déclare que le véhicule, immatriculé sous le numéro
                    <br>objet de l’avis de contravention sus indiqué : 
                    <br>était conduit, au moment de la constatation de l’infraction par :
                </td>
                <td colspan="2" class="txtC">
                    <input type="text" name="" id="matriculeL" maxlength="5" placeholder="99 999" value="<?php echo $matriculeLong;?>">&nbsp;
                    <select name="MattriculeLettre" id="SelectMatricule" style="">
                        <option value="">..</option>
                        <option value="أ">أ</option>
                        <option value="ب">ب</option>
                        <option value="د">د</option>
                        <option value="و">و</option>
                        <option value="ط">ط</option>
                        <option value="هـ">هـ</option>
                </select>&nbsp;
                    <input type="text" name="" id="matriculeS" maxlength="2" placeholder="15" value="<?php echo $matriculeCourt;?>">
                    <br>
                    <input type="text" name="" id="AvisContravention">
                    <br>
                    <input type="text" name="" id="InfractionPar">
                    
                </td>
                <td class="txtR">
                    أصرح أن المركبة المسجلة نحت رقم-
                    <br>موضوع الإشعار بالمخالفة المشار إليها-
                    <br>أعلاه, كانت مسافة وقت معاينة المخالفة من طرف
                </td>
            </tr>
            <tr id="ColorBl">
                <td colspan="2">Personne physique</td>
                <td colspan="2" class="txtR">شخص ذاتي</td>
            </tr>
            <tr>
                <td>Nom</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="NomFP" placeholder="Nom"></td>
                <td class="txtR">الإسم العائلي</td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="NomPP" placeholder="Prénom"></td>
                <td class="txtR"> الإسم الشخصي</td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="AdressFP" placeholder="Adresse"></td>
                <td class="txtR">العنوان</td>
            </tr>
            <tr>
                <td>Ville <input type="text" name="" id="VilleFP" placeholder="Ville"></td>
                <td colspan="2" class="txtC">Code postal<br>
                    <input type="text" name="" id="CodePostalFP" maxlength="5" placeholder="Code postal"><br>
                    الرمز البريدي
                </td>
                <td class="txtR"><input type="text" name="" id="VilleFPAR" onkeyup="arabicValue(VilleFPAR)" dir="rtl" placeholder="المدينة"> المدينة</td>
            </tr>
            <tr>
                <td>N° de la C.N.I.E ou de la carte</td>
                <td colspan="2" class="txtC">
                    <input type="text" name="" id="cinSFP" maxlength="2" placeholder="C">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="" id="cinLFP" maxlength="6" placeholder="000 000">
                </td>
                <td class="txtR">رقم البطاقة الوطنية للتعريف اإللكترونية أو بطاقة
                    الإقامة</td>
            </tr>
            <tr>
                <td>N° de permis de conduire</td>
                <td colspan="2" class="txtC">
                    <input type="text" name="" id="permiSFP" maxlength="2" placeholder="03">&nbsp; <b>/</b> &nbsp;
                    <input type="text" name="" id="permiLFP" maxlength="6" placeholder="000 000">
                </td>
                <td class="txtR">رقم رخصة السياقة</td>
            </tr>
            <tr id="ColorBl">
                <td colspan="2">Personne morale <br> &nbsp;</td>
                <td colspan="2" class="txtR">شخص معنوي <br> &nbsp;</td>
            </tr>
            <tr>
                <td>Raison sociale</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="RaisonSociale_FM" placeholder="Raison sociale"></td>
                <td class="txtR"> االسم الشركة</td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td colspan="2" class="txtC"><input type="text" name="" id="Adresse_FM" placeholder="Adresse"></td>
                <td class="txtR">العنوان</td>
            </tr>
            <tr>
                <td>Ville <input type="text" name="" id="Ville_FM" placeholder="Ville"></td>
                <td colspan="2" class="txtC">Code postal<br>
                    <input type="text" name="" id="CodePostal_FM" maxlength="5" placeholder="Code postal"><br>
                    الرمز البريدي
                </td>
                <td class="txtR"><input type="text" name="" id="Ville_FM_AR" onkeyup="arabicValue(Ville_FM_AR)" dir="rtl" placeholder="المدينة"> المدينة</td>
            </tr>
            <tr>
                <td>Fait a : <input type="text" name="" id="Fait_a"></td>
                <td colspan="2" class="txtC">Le :
                    <input type="date" name="" id="LeDate" min="2020-01-01" max="2030-01-31">
                    : في
                </td>
                <td class="txtR"><input type="text" name="" id="Fait_a_AR" onkeyup="arabicValue(Fait_a_AR)" dir="rtl"> : حرر ب</td>
            </tr>

        </table>

<br>
<div class="btn1">
    <input class="form-vider-button" type="submit" value="vider" name="reset">
    <input class="form-submit-button" type="button" value="Submit">
</div>
</form>
<br><br><br>
<div class="book">
    <div class="page">
      <div class="subpage">
        <div id="image">
            <img src="image/Formulaire_Declaration_RF-1.jpg" alt="">
            <div id="Content">
                <span id="RF1_p"></span>
                <span id="RF2_p"></span>
    
                <span id="cross1"><img src="image/cross.png" alt=""></span>
                <span id="cross2"><img src="image/cross.png" alt=""></span>
                <span id="cross3"><img src="image/cross.png" alt=""></span>
                <span id="cross11"><img src="image/cross.png" alt=""></span>
                <span id="cross22"><img src="image/cross.png" alt=""></span>
                <span id="cross33"><img src="image/cross.png" alt=""></span>
    
                <div id="societe">
                    <p id="nom"></p>
                    <p id="prenom"></p>
                    <p id="fonct"></p>
                    <p id="gsm"></p>
                    <p id="email"></p>
                    <p id="raison"></p>
                    <div id="Adress">
                        <p id="2Adress"></p>
                    </div>
                </div>
    
                <span id="VilleSociete"></span>
                <span id="PostalSociete"></span>
                <span id="VilleSocieteAR"></span>
    
                <span id="PmatriculeG"></span>
                <span id="PmatriculeL"></span>
                <span id="PmatriculeS"></span>
    
                <div id="indique">
                  <p id="indiqueC"></p>
                </div>
                <div id="par">
                  <p id="parC"></p>
                </div>
    
                <!-------------------------PERSONNE PHYSIQUE-------------------->
                <div id="physique">
                  <p id="p_nom"></p>
                  <p id="p_prenom"></p>
                  <p id="p_Adress"></p>
              </div>
    
              <span id="p_VilleSociete"></span>
              <span id="p_PostalSociete"></span>
              <span id="p_VilleSocieteAR"></span>
    
              <span id="cinS"></span>
              <span id="cinL"></span>
    
              <div id="permi">
                <span id="permiS"></span>
                <span>/</span>
                <span id="permiL"></span>
              </div>
                <!-------------------------PERSONNE MORALE---------------------->
                <div id="moral">
                  <p id="M_raison"></p>
                  <p id="M_Adress"></p>
              </div>
    
              <span id="M_VilleSociete"></span>
              <span id="M_PostalSociete"></span>
              <span id="M_VilleSocieteAR"></span>
                <!-------------------------FAIT LE---------------------->
                <span id="fait"></span>
                <span id="le"></span>
                <span id="faitAR"></span>
            </div>
        </div>
      </div>
    </div>
  </div>
<br><br>
    <script src="js/JavaScript.js"></script>
    <script src="js/input-filter.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/navbar.js"></script>
    <script>
            document.addEventListener("load", selectLettre('SelectMatricule', '<?php echo $matriculeLettre;?>'));
            function selectLettre(id,ValueToSelect) {
                let selct = document.getElementById(id);
                selct.value = ValueToSelect;
}
    </script>
</body>
</html>
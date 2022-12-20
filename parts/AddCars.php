<?php
            class Contacte {
                public $id;
                public $Nom;
                public $Prenom;
                public $RaisonSociale;
            }
            // Fetch contactss (in descending order)
            $contacts = $pdo->query("SELECT id,Nom,Prenom,RaisonSociale FROM declarant")->fetchAll(PDO::FETCH_CLASS, 'Contacte');
            ?>

<form action="" method="POST">
    <table id="Add_Cars_table">
        <tr>
            <td>Marque véhicule</td>
            <td><input type="text" name="Marque" id="MarqueCars" placeholder="Marque Voiture" required></td>
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
            <td class="txtC"><input type="text" name="matriculeLong" id="MattriculeLong" placeholder="allant de 1 a 99999" required></td>
            <td class="txtC">
                <select name="matriculeLettre" id="SelectMatricule" required>
                        <option value="">..</option>
                        <option value="أ">أ</option>
                        <option value="ب">ب</option>
                        <option value="د">د</option>
                        <option value="و">و</option>
                        <option value="ط">ط</option>
                        <option value="هـ">هـ</option>
                </select>
            </td>
            <td class="txtC"><input type="text" name="matriculeCourt" id="MattriculeCourt" placeholder="allant de 1 a 99" required></td>
        </tr>
        <tr>
            <td class="txtC">رقم الطلب</td>
            <td class="txtC">سلسلة التسجيل</td>
            <td class="txtC">رقم المحافظة</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
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
            <input class="form-submit-button" type="submit" name="Add_Cars" value="Add Cars">
        </form>
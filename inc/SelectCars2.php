            <?php 
            // Include the database connection file
            include_once("../inc/conection.php");
            class Voitures {
                public $id;
                public $Marque;
                public $matriculeLong;
                public $matriculeLettre;
                public $matriculeCourt;
                public $DEC_ID;
                public $Nom;
                public $Prenom;
                public $RaisonSociale;
            }
            // Fetch contacts (in descending order)
           // $Voitures = $pdo->query("SELECT idCars,Marque,matriculeLong,matriculeLettre,matriculeCourt,DEC_ID FROM cars")->fetchAll(PDO::FETCH_CLASS, 'Voitures');
            $Voitures = $pdo->query("SELECT declarant.Nom, declarant.Prenom, declarant.RaisonSociale, cars.idCars, cars.Marque, cars.matriculeLong, cars.matriculeLettre, cars.matriculeCourt, cars.DEC_ID
            FROM cars
            INNER JOIN declarant ON cars.DEC_ID=declarant.id
            ORDER BY cars.DEC_ID, cars.Marque ;")->fetchAll(PDO::FETCH_CLASS, 'Voitures');
            ?>
            <table id="tableInfo">
                <tr>
                    <td>Declarant</td>
                    <td>Declarant</td>
                    <td>Marque</td>
                    <td>N° d'ordre</td>
                    <td>Série</td>
                    <td>préfecture</td>
                    <td>
                        <input id='AddButtonCar' class="button" type="button" value="Add New Cars">
                    </td>
                </tr>
                <?php
                // Print contacts 
                foreach($Voitures as $Voiture) { 		
			    echo "<tr>";
                if (empty($Voiture->RaisonSociale)) {
                    echo "<td>".$Voiture->Nom.' '.$Voiture->Prenom."</td>";
                 }else {
                    echo "<td>".$Voiture->RaisonSociale."</td>";
                 }
			    echo "<td>".$Voiture->DEC_ID."</td>";
			    echo "<td>".$Voiture->Marque."</td>";
			    echo "<td>".$Voiture->matriculeLong."</td>";
			    echo "<td>".$Voiture->matriculeLettre."</td>";	
			    echo "<td>".$Voiture->matriculeCourt."</td>";	
			    echo "<td><a href=\"UpDateCar.php?idCars=$Voiture->idCars\" class='ClassEdit'>Edit</a> | <a href=\"deletecar.php?idCars=$Voiture->idCars\" onClick=\"return confirm('Are you sure you want to delete this contact?')\">Delete</a></td>";
            }
                ?>
            </table>

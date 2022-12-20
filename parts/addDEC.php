<form action="" method="POST">
            <!--<table>
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
            </table> -->
            <table id="add_Decl">
                <tr>
                    <td>Nom</td>
                    <td colspan="2" class="txtC"><input type="text" name="Nom" id="NomF" placeholder="Nom" required></td>
                    <td class="txtR">الإسم العائلي</td>
                </tr>
                <tr>
                    <td>Prénom</td>
                    <td colspan="2" class="txtC"><input type="text" name="Prenom" id="NomP" placeholder="Prénom" required></td>
                    <td class="txtR">الإسم الشخصي</td>
                </tr>
                <tr>
                    <td>Fonction</td>
                    <td colspan="2" class="txtC"><input type="text" name="Fonction" id="Fonc" placeholder="Fonction"></td>
                    <td class="txtR">المهنة</td>
                </tr>
                <tr>
                    <td>N° de GSM</td>
                    <td colspan="2" class="txtC"><input type="text" name="GSM" id="GSM" placeholder="N° de GSM"></td>
                    <td class="txtR">رقم الهاتف النقال</td>
                </tr>
                <tr>
                    <td>Adresse mail</td>
                    <td colspan="2" class="txtC"><input type="email" name="email" id="mail" placeholder="Adresse mail"></td>
                    <td class="txtR">عنوان البريد اإللكتروني</td>
                </tr>
                <tr>
                    <td>Raison sociale</td>
                    <td colspan="2" class="txtC"><input type="text" name="RaisonSociale" id="RC" placeholder="Raison sociale"></td>
                    <td class="txtR">اسم الشركة أو اإلدارة</td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td colspan="2" class="txtC"><input type="text" name="Adresse" id="Adres" placeholder="Adresse"></td>
                    <td class="txtR">العنوان</td>
                </tr>
                <tr>
                    <td>Ville <input type="text" name="Ville" id="Ville1" placeholder="Ville"></td>
                    <td colspan="2" class="txtC">Code postal<br>
                        <input type="text" name="CodePostal" id="CodePostal" maxlength="5" placeholder="Code postal"><br>
                        الرمز البريدي
                    </td>
                    <td class="txtR"><input onkeyup="arabicValue(Ville2)" dir="rtl" type="text"  name="VilleAR" id="Ville2" placeholder="المدينة"> المدينة</td>
                </tr>
            </table>
            <input class="form-submit-button" type="submit" name="submit" value="Enregistrer">
        </form>
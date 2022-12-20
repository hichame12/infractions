//******************VAR INPUT******************** */
var contraventionL = document.getElementById('contraventionL');
var contraventionS = document.getElementById('contraventionS');

var RadioCross1 = document.getElementById('RadioCross1');
var RadioCross2 = document.getElementById('RadioCross2');
var RadioCross3 = document.getElementById('RadioCross3');

var RadioCross1AR = document.getElementById('RadioCross1AR');
var RadioCross2AR = document.getElementById('RadioCross2AR');
var RadioCross3AR = document.getElementById('RadioCross3AR');

var NomF = document.getElementById('NomF');
var NomP = document.getElementById('NomP');
var Fonc = document.getElementById('Fonc');
var GSM = document.getElementById('GSM');
var mail = document.getElementById('mail');
var RC = document.getElementById('RC');
var Adres = document.getElementById('Adres');

var Ville1 = document.getElementById('Ville1');
var CodePostal = document.getElementById('CodePostal');
var Ville2 = document.getElementById('Ville2');

var matriculeL = document.getElementById('matriculeL');
var SelectMatricule = document.getElementById('SelectMatricule');
var matriculeS = document.getElementById('matriculeS');
var AvisContravention = document.getElementById('AvisContravention');
var InfractionPar = document.getElementById('InfractionPar');
//*****VAR physique**** */
var NomFP = document.getElementById('NomFP');
var NomPP = document.getElementById('NomPP');
var AdressFP = document.getElementById('AdressFP');

var VilleFP = document.getElementById('VilleFP');
var CodePostalFP = document.getElementById('CodePostalFP');
var VilleFPAR = document.getElementById('VilleFPAR');

var cinSFP = document.getElementById('cinSFP');
var cinLFP = document.getElementById('cinLFP');
var permiSFP = document.getElementById('permiSFP');
var permiLFP = document.getElementById('permiLFP');
//*****VAR morale**** */
var RaisonSociale_FM = document.getElementById('RaisonSociale_FM');
var Adresse_FM = document.getElementById('Adresse_FM');

var Ville_FM = document.getElementById('Ville_FM');
var CodePostal_FM = document.getElementById('CodePostal_FM');
var Ville_FM_AR = document.getElementById('Ville_FM_AR');

var Fait_a = document.getElementById('Fait_a');
var LeDate = document.getElementById('LeDate');
var Fait_a_AR = document.getElementById('Fait_a_AR');
//******************VAR VALUE******************** */
var RF1_p = document.getElementById('RF1_p');
var RF2_p = document.getElementById('RF2_p');

var cross1 = document.getElementById('cross1');
var cross2 = document.getElementById('cross2');
var cross3 = document.getElementById('cross3');

var cross11 = document.getElementById('cross11');
var cross22 = document.getElementById('cross22');
var cross33 = document.getElementById('cross33');

var nom = document.getElementById('nom');
var prenom = document.getElementById('prenom');
var fonct = document.getElementById('fonct');
var gsm = document.getElementById('gsm');
var email = document.getElementById('email');
var raison = document.getElementById('raison');
var Adress = document.getElementById('2Adress');

var VilleSociete = document.getElementById('VilleSociete');
var PostalSociete = document.getElementById('PostalSociete');
var VilleSocieteAR = document.getElementById('VilleSocieteAR');

var PmatriculeG = document.getElementById('PmatriculeG');
var PmatriculeL = document.getElementById('PmatriculeL');
var PmatriculeS = document.getElementById('PmatriculeS');
var indiqueC = document.getElementById('indiqueC');
var parC = document.getElementById('parC');
//*****VAR Value physique*****/
var p_nom = document.getElementById('p_nom');
var p_prenom = document.getElementById('p_prenom');
var p_Adress = document.getElementById('p_Adress');

var p_VilleSociete = document.getElementById('p_VilleSociete');
var p_PostalSociete = document.getElementById('p_PostalSociete');
var p_VilleSocieteAR = document.getElementById('p_VilleSocieteAR');

var cinS = document.getElementById('cinS');
var cinL = document.getElementById('cinL');
var permiS = document.getElementById('permiS');
var permiL = document.getElementById('permiL');
//*****VAR Value moral**** */
var M_raison = document.getElementById('M_raison');
var M_Adress = document.getElementById('M_Adress');

var M_VilleSociete = document.getElementById('M_VilleSociete');
var M_PostalSociete = document.getElementById('M_PostalSociete');
var M_VilleSocieteAR = document.getElementById('M_VilleSocieteAR');

var fait = document.getElementById('fait');
var le = document.getElementById('le');
var faitAR = document.getElementById('faitAR');
//******************FUNCTION******************** */
contraventionL.addEventListener("keyup", function(){
    RF1_p.innerHTML = contraventionL.value;});
contraventionS.addEventListener("keyup", function(){
    RF2_p.innerHTML = contraventionS.value;});
//******************CROSS******************** */
    RadioCross1.addEventListener("keyup", CheckedCross);
    RadioCross1.addEventListener("change", CheckedCross);
    RadioCross2.addEventListener("keyup", CheckedCross);
    RadioCross2.addEventListener("change", CheckedCross);
    RadioCross3.addEventListener("keyup", CheckedCross);
    RadioCross3.addEventListener("change", CheckedCross);
    RadioCross1AR.addEventListener("keyup", CheckedCrossAR);
    RadioCross1AR.addEventListener("change", CheckedCrossAR);
    RadioCross2AR.addEventListener("keyup", CheckedCrossAR);
    RadioCross2AR.addEventListener("change", CheckedCrossAR);
    RadioCross3AR.addEventListener("keyup", CheckedCrossAR);
    RadioCross3AR.addEventListener("change", CheckedCrossAR);
function CheckedCross(){
    if (RadioCross1.checked) {
        RadioCross1AR.checked = true;
        cross1.style.visibility = "visible";
        cross2.style.visibility = "hidden";
        cross3.style.visibility = "hidden";
        cross11.style.visibility = "visible";
        cross22.style.visibility = "hidden";
        cross33.style.visibility = "hidden";
    }else if (RadioCross2.checked) {
        RadioCross2AR.checked = true;
        cross1.style.visibility = "hidden";
        cross2.style.visibility = "visible";
        cross3.style.visibility = "hidden";
        cross11.style.visibility = "hidden";
        cross22.style.visibility = "visible";
        cross33.style.visibility = "hidden";
    }else if (RadioCross3.checked) {
        RadioCross3AR.checked = true;
        cross1.style.visibility = "hidden";
        cross2.style.visibility = "hidden";
        cross3.style.visibility = "visible";
        cross11.style.visibility = "hidden";
        cross22.style.visibility = "hidden";
        cross33.style.visibility = "visible";
    }else{
        RadioCross3AR.checked = true;
        cross1.style.visibility = "hidden";
        cross2.style.visibility = "hidden";
        cross3.style.visibility = "hidden";
        cross11.style.visibility = "hidden";
        cross22.style.visibility = "hidden";
        cross33.style.visibility = "hidden";
    }
}
function CheckedCrossAR(){
    if (RadioCross1AR.checked) {
        RadioCross1.checked = true;
        cross1.style.visibility = "visible";
        cross2.style.visibility = "hidden";
        cross3.style.visibility = "hidden";
        cross11.style.visibility = "visible";
        cross22.style.visibility = "hidden";
        cross33.style.visibility = "hidden";
    }else if (RadioCross2AR.checked) {
        RadioCross2.checked = true;
        cross1.style.visibility = "hidden";
        cross2.style.visibility = "visible";
        cross3.style.visibility = "hidden";
        cross11.style.visibility = "hidden";
        cross22.style.visibility = "visible";
        cross33.style.visibility = "hidden";
    }else if (RadioCross3AR.checked) {
        RadioCross3.checked = true;
        cross1.style.visibility = "hidden";
        cross2.style.visibility = "hidden";
        cross3.style.visibility = "visible";
        cross11.style.visibility = "hidden";
        cross22.style.visibility = "hidden";
        cross33.style.visibility = "visible";
    }else{
        RadioCross3AR.checked = true;
        cross1.style.visibility = "hidden";
        cross2.style.visibility = "hidden";
        cross3.style.visibility = "hidden";
        cross11.style.visibility = "hidden";
        cross22.style.visibility = "hidden";
        cross33.style.visibility = "hidden";
    }
}
//************************************** */
NomF.addEventListener("keyup", FunctionSociete);
NomP.addEventListener("keyup", FunctionSociete);
Fonc.addEventListener("keyup", FunctionSociete);
GSM.addEventListener("keyup", GSMRegex);
function GSMRegex() {
    GSMValu = GSM.value;
    const re = /(\b06|\b07|\b05)([ \-_/]*)(\d[ \-_/]*){8}$/g;
    const re1 = /(\b212)([ \-_/]*)(\d[ \-_/]*){9}$/g;
    const re2 = /(\b00)([ \-_/]*)(\d[ \-_/]*){12}$/g;
    // check if the phone number is valid
    let result = GSMValu.match(re);
    let result1 = GSMValu.match(re1);
    let result2 = GSMValu.match(re2);
    if (result) {
        console.log('The number is valid.');
        var NumPhone = [GSMValu.slice(0, 2), " ", GSMValu.slice(2, 4), " ", GSMValu.slice(4, 6), " ", GSMValu.slice(6, 8), " ", GSMValu.slice(8, 10)].join('');
        console.log(NumPhone);
        gsm.innerHTML = NumPhone;
    }
    else if (result1) {
        console.log('The number is valid2.');
        var NumPhone = ["+",GSMValu.slice(0, 3), " ", GSMValu.slice(3, 4), " ", GSMValu.slice(4, 6), " ", GSMValu.slice(6, 8), " ", GSMValu.slice(8, 10), " ", GSMValu.slice(10, 12)].join('');
        console.log(NumPhone);
        gsm.innerHTML = NumPhone;
    }
    else if (result2) {
        console.log('The number is valid3.');
        var NumPhone = [GSMValu.slice(0, 2), " ", GSMValu.slice(2, 5), " ", GSMValu.slice(5, 6), " ", GSMValu.slice(6, 8), " ", GSMValu.slice(8, 10), " ", GSMValu.slice(10, 12), " ", GSMValu.slice(12, 14)].join('');
        console.log(NumPhone);
        gsm.innerHTML = NumPhone;
    }
    else {
        gsm.innerHTML = GSMValu;
        console.log('NON valid.');
    }
}
mail.addEventListener("keyup", FunctionSociete);
RC.addEventListener("keyup", FunctionSociete);
Adres.addEventListener("keyup", FunctionSociete);

Ville1.addEventListener("keyup", FunctionSociete);
CodePostal.addEventListener("keyup", FunctionSociete);
Ville2.addEventListener("keyup", FunctionSociete);

matriculeL.addEventListener("keyup", FunctionSociete);
    
SelectMatricule.addEventListener("click", FunctionSociete);
SelectMatricule.addEventListener("change", FunctionSociete);

matriculeS.addEventListener("keyup", FunctionSociete);
matriculeS.addEventListener("change", FunctionSociete);

AvisContravention.addEventListener("keyup", FunctionSociete);
InfractionPar.addEventListener("keyup", FunctionSociete);

    function FunctionSociete() {
        nom.innerHTML = NomF.value;
        prenom.innerHTML = NomP.value;
        fonct.innerHTML = Fonc.value;

        email.innerHTML = mail.value;
        raison.innerHTML = RC.value;
        Adress.innerHTML = Adres.value;

        VilleSociete.innerHTML = Ville1.value;
        PostalSociete.innerHTML = CodePostal.value;
        VilleSocieteAR.innerHTML = Ville2.value;

        PmatriculeG.innerHTML = matriculeL.value;
        PmatriculeL.innerHTML = SelectMatricule.value;
        PmatriculeS.innerHTML = matriculeS.value;
        indiqueC.innerHTML = AvisContravention.value;
        parC.innerHTML = InfractionPar.value;
    }
//*****Function physique**** */
NomFP.addEventListener("keyup", FunctionPhysique);
NomPP.addEventListener("keyup", FunctionPhysique);
AdressFP.addEventListener("keyup", FunctionPhysique);

VilleFP.addEventListener("keyup", FunctionPhysique);
CodePostalFP.addEventListener("keyup", FunctionPhysique);
VilleFPAR.addEventListener("keyup", FunctionPhysique);

cinSFP.addEventListener("keyup", FunctionPhysique);
cinLFP.addEventListener("keyup", FunctionPhysique);
permiSFP.addEventListener("keyup", FunctionPhysique);
permiLFP.addEventListener("keyup", FunctionPhysique);

    function FunctionPhysique() {
        p_nom.innerHTML = NomFP.value;
        p_prenom.innerHTML = NomPP.value;
        p_Adress.innerHTML = AdressFP.value;

        p_VilleSociete.innerHTML = VilleFP.value;
        p_PostalSociete.innerHTML = CodePostalFP.value;
        p_VilleSocieteAR.innerHTML = VilleFPAR.value;

        cinSFP.value=cinSFP.value.toUpperCase()
        cinS.innerHTML = cinSFP.value;
        cinL.innerHTML = cinLFP.value;
        permiS.innerHTML = permiSFP.value;
        permiL.innerHTML = permiLFP.value;
    }
//*****Function morale**** */
RaisonSociale_FM.addEventListener("keyup", FunctionMorale);
Adresse_FM.addEventListener("keyup", FunctionMorale);

Ville_FM.addEventListener("keyup", FunctionMorale);
CodePostal_FM.addEventListener("keyup", FunctionMorale);
Ville_FM_AR.addEventListener("keyup", FunctionMorale);

Fait_a.addEventListener("keyup", FunctionMorale);
LeDate.addEventListener("keyup", FunctionMorale);
LeDate.addEventListener("change", FunctionMorale);
Fait_a_AR.addEventListener("keyup", FunctionMorale);

    function FunctionMorale() {
        M_raison.innerHTML = RaisonSociale_FM.value;
        M_Adress.innerHTML = Adresse_FM.value;

        M_VilleSociete.innerHTML = Ville_FM.value;
        M_PostalSociete.innerHTML = CodePostal_FM.value;
        M_VilleSocieteAR.innerHTML = Ville_FM_AR.value;

        fait.innerHTML = Fait_a.value;
        le.innerHTML = LeDate.value;
        faitAR.innerHTML = Fait_a_AR.value;
    }
//******************vider******************** */
var ViderBT = document.getElementsByClassName("form-vider-button")[0];

ViderBT.addEventListener("click", ViderContent);

function ViderContent() {
    RF1_p.innerHTML = '';
    RF2_p.innerHTML = '';

    cross1.style.visibility = "hidden";
    cross2.style.visibility = "hidden";
    cross3.style.visibility = "hidden";
    cross11.style.visibility = "hidden";
    cross22.style.visibility = "hidden";
    cross33.style.visibility = "hidden";
    /***societe***/
    nom.innerHTML = '';
    prenom.innerHTML = '';
    fonct.innerHTML = '';
    gsm.innerHTML = '';
    email.innerHTML = '';
    raison.innerHTML = '';
    Adress.innerHTML = '';

    VilleSociete.innerHTML = '';
    PostalSociete.innerHTML = '';
    VilleSocieteAR.innerHTML = '';
    PmatriculeG.innerHTML = '';
    PmatriculeL.innerHTML = '';
    PmatriculeS.innerHTML = '';
    indiqueC.innerHTML = '';
    parC.innerHTML = '';
    /***P physique***/
    p_nom.innerHTML = '';
    p_prenom.innerHTML = '';
    p_Adress.innerHTML = '';
    p_VilleSociete.innerHTML = '';
    p_PostalSociete.innerHTML = '';
    p_VilleSocieteAR.innerHTML = '';
    cinS.innerHTML = '';
    cinL.innerHTML = '';
    permiS.innerHTML = '';
    permiL.innerHTML = '';
        /***P moral***/
    M_raison.innerHTML = '';
    M_Adress.innerHTML = '';
    M_VilleSociete.innerHTML = '';
    M_PostalSociete.innerHTML = '';
    M_VilleSocieteAR.innerHTML = '';
        /***fait***/
    fait.innerHTML = '';
    le.innerHTML = '';
    faitAR.innerHTML = '';
    console.log("Vidage correct js")
}

//******************PRINT******************** */
var submitBT = document.getElementsByClassName("form-submit-button")[0];

submitBT.addEventListener("click", PrintElem);

function PrintElem(Content)
{
    var mywindow = window.open('', 'PRINT', 'height=800,width=900');

    mywindow.document.write('<html><head><title>test</title>');
    mywindow.document.write('<link rel="stylesheet" href="css/stylepage.css">');
    mywindow.document.write('<link rel="stylesheet" href="css/valuepage.css">');
    mywindow.document.write('<style>  .subpage {outline: 0cm}</style>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<div class="book"> <div class="page"> <div class="subpage"> <div id="image">');
    mywindow.document.write('<img src="image/Formulaire_Declaration_RF-1.jpg" alt="">');
    mywindow.document.write(document.getElementById('Content').innerHTML);
    mywindow.document.write('</div> </div> </div> </div>');
    mywindow.document.write('<script>window.print();window.close();</script>');
    mywindow.document.write('</body></html>');

    return true;
}

//******************INPUT Societe******************** */


    function ContentLoulidi(){
            RadioCross2.checked = true;
            RadioCross2AR.checked = true;
            /***societe***/
            NomF.value = 'SANYA';
            NomP.value = 'NOUZHA';
            Fonc.value = 'GERANT';
            GSM.value = '0669692362';
            mail.value = 'loulidicar@gmail.com';
            RC.value = 'LOULIDI CAR';
            Adres.value = 'MAG N°8 N°6 RUE 44 BLED SKALIA DOUAR RIAFA, FES';
        
            Ville1.value = 'FES';
            CodePostal.value = '30100';
            Ville2.value = 'فاس';

            SelectMatricule.value = 'B';
            matriculeS.value = '15';
            CheckedCross()
            CheckedCrossAR()
            GSMRegex()
            FunctionSociete()
        }

        window.addEventListener("load", wilod);
        function wilod() {
            console.log("id body2");
            GSMRegex()
            FunctionSociete()
        }


        
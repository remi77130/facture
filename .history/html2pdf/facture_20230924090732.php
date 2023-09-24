

<!DOCTYPE html>
<html>
<head>
    <title>Création de Contrat de Travail</title>
</head>
<body>
  
    <form id="contratForm">


 <h2>Contrat de travail à durée 
 <select id="contrat_type" required>
        <option value="determine">détérminé</option>
        <option value="indetermine">indétérminé</option>
</select>
           à temps
<select id="temps_contrat" required>
        <option value="plien">plien</option>
        <option value="partiel">partiel</option>
           
</select><br>

    </h2>
       <p>
        
       L'entreprise <input type="text" id="Nom_entreprise" 
       placeholder="Nom de l'entreprise" required>

       dont le siége sociual est situé à <input type="text" id="adresse_entreprise" 
        placeholder="Adresse entreprise" required>, représentée par 

        <select id="civilite" required>
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option> 
            <option value="Mlle">Mlle</option>
        </select>

        <input type="text" id="nom_employeur" placeholder="Nom et prénom employeur">

     
           agissant en qualité d'employeur <br> <br>

           (ci-après désignée "l'Entreprise") D'une part, et 
        
           <select id="civilite_salarie" required>
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option> 
            <option value="Mlle">Mlle</option>
        </select> 
        
        <input type="text" id="nom_salarie" placeholder="Nom du salarié" require >, né le 

        <select id="nmb_age" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
           
        </select> 

        <select id="mois_naissance_salarie" require>

        <option value="janvier">janvier</option>
        <option value="fevrier">fevrier</option>
        <option value="mars">mars</option>
        <option value="avril">avril</option>
        <option value="mai">mai</option>
        <option value="juin">juin</option>
        <option value="juillet">juillet</option>
        <option value="aout">aout</option>
        <option value="septembre">septembre</option>
        <option value="octobre">octobre</option>
        <option value="novembre">novembre</option>
        <option value="decembre">decembre</option>


        </select>




        <!-- Autres informations du contrat -->
</p>
        <button type="button" onclick="genererContrat()">Générer le contrat</button>
    </form>









    <script>





        function genererContrat() {
            // Récupérer les informations entreprise 
            var contrat_type = document.getElementById("contrat_type").value;
            var temps_contrat = document.getElementById("temps_contrat").value
            var Nom_entreprise = document.getElementById("Nom_entreprise").value;
            var adresse_entreprise = document.getElementById("adresse_entreprise").value;
            var civilite = document.getElementById("civilite").value;
            var nom_employeur = document.getElementById("nom_employeur").value;
            var civilite_salarie = document.getElementById("civilite_salarie").value;
            var nom_salarie = document.getElementById("nom_salarie").value;
            var nmb_age = document.getElementById("nmb_age").value;

            
            


            // Autres informations du contrat
            var contratHTML = `
                <h2>Contrat de travail à durée ${contrat_type} à temps ${temps_contrat}</h2>
                <p>Entre les soussignés : </p>
                <p>L'entreprise ${Nom_entreprise} dont le siège social est situé à 
                ${adresse_entreprise}, représentée par ${civilite} ${nom_employeur}
                
                agissant en qualité d'employeur. <br> <br>

                (ci-après désignée "l'Entreprise") <br> <br> 
                
                D'une part et ${civilite_salarie} ${nom_salarie} né le ${nmb_age}




                <!-- Autres parties du contrat -->
            `;

            // Stocker le contrat HTML dans le stockage local (LocalStorage)
            localStorage.setItem("contratHTML", contratHTML);


            // Rediriger vers la page d'affichage
           window.location.href = "affichage.php";
        }
    </script>
</body>
</html>

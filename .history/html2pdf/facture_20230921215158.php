<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'informations clients</title>
    <link rel="stylesheet" href="facture.css">
</head>
<body>
<h1>Saisissez votre texte</h1>
    <p>L'entreprise <input type="text" id="phraseInput" placeholder="Écrivez votre texte ici..."> </p>


    <p>
<select class="select_lettre civilite_salarie" onchange="verifier_select_lettre(event, this, &quot;civilite_salarie&quot;, &quot;civilite_salarie&quot;);"><option>Mr</option><option>Mme</option><option>Mlle</option></select> <span class="container_contenteditable nom_prenom_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;nom_prenom_salarie&quot;, &quot;nom_prenom_salarie&quot;, &quot;Nom et Prénom du salarié&quot;);" title="Nom et Prénom du salarié" style="color: rgb(255, 0, 0);">Nom et Prénom du salarié</span>, né<span class="e_feminin"></span><br> le
<select class="select_lettre jour_naissance_salarie" onchange="verifier_select_lettre(event, this, &quot;jour_naissance_salarie&quot;, &quot;jour_naissance_salarie&quot;);"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select> <br>
<select class="select_lettre mois_naissance_salarie" onchange="verifier_select_lettre(event, this, &quot;mois_naissance_salarie&quot;, &quot;mois_naissance_salarie&quot;);"><option>janvier</option><option>février</option><option>mars</option><option>avril</option><option>mai</option><option>juin</option><option>juillet</option><option>août</option><option>septembre</option><option>octobre</option><option>novembre</option><option>décembre</option></select> <br> <br>
<select class="select_lettre annee_naissance_salarie" onchange="verifier_select_lettre(event, this, &quot;annee_naissance_salarie&quot;, &quot;annee_naissance_salarie&quot;);"><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option><option>1960</option><option>1959</option><option>1958</option><option>1957</option><option>1956</option><option>1955</option><option>1954</option><option>1953</option><option>1952</option><option>1951</option><option>1950</option><option>1949</option><option>1948</option><option>1947</option><option>1946</option><option>1945</option><option>1944</option><option>1943</option></select> <br>
à <span class="container_contenteditable ville_naissance_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;ville_naissance_salarie&quot;, &quot;ville_naissance_salarie&quot;, &quot;Ville de naissance du salarié&quot;);" title="Ville de naissance du salarié" style="color: rgb(255, 0, 0);">Ville de naissance du salarié</span> <br>
, N° Sécurité Sociale : <span class="container_contenteditable numero_securite_sociale_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;numero_securite_sociale_salarie&quot;, &quot;numero_securite_sociale_salarie&quot;, &quot;Numéro de sécurité sociale du salarié&quot;);" title="Numéro de sécurité sociale du salarié" style="color: rgb(255, 0, 0);">Numéro de sécurité sociale du salarié</span>, demeurant à <span class="container_contenteditable adresse_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;adresse_salarie&quot;, &quot;adresse_salarie&quot;, &quot;Adresse complète du salarié&quot;);" title="Adresse complète du salarié" style="color: rgb(255, 0, 0);">Adresse complète du salarié</span> <br>
<br>
<br>(ci-après désigné<span class="e_feminin"></span> "<span class="container_le_salarie">le salarié</span>")
</p>


    <button onclick="enregistrerTexte()">Enregistrer</button>


    <script>
        function enregistrerTexte() {
            // Récupérer le texte saisi par l'utilisateur
            var texteUtilisateur = document.getElementById("phraseInput").value;
            
            // Stocker le texte dans le stockage local (LocalStorage)
            localStorage.setItem("texteUtilisateur", texteUtilisateur);

            // Rediriger vers la page d'affichage
            window.location.href = "affichage.html";
        }
    </script>

</body>
</html>

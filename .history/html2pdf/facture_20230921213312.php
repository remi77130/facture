<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'informations clients</title>
    <link rel="stylesheet" href="facture.css">
</head>
<body>
<div id="page_dc">
<div id="header_dc">
<div id="infos_entreprise">
</div>
<div style="clear:both;"></div>
</div>
<div id="body_dc">
<div class="container_mobile" style="width:170px;float:left;">
<div id="container_logo"></div>
Logo : <span id="container_input_logo"><input type="file" name="logo" id="logo" onchange="upload_logo(event);"></span><span id="container_supprimer_logo"></span>
<canvas id="canvas_logo" style="display:none;"></canvas>
<input type="hidden" name="todataurl_logo" id="todataurl_logo">
</div>
<h2 class="container_mobile" style="width:600px;border:solid #000000 1px;padding:10px 10px 10px 10px;margin:40px 0px 20px 0px;font-size:15px;font-weight:bold;color:#000000;text-transform:uppercase;text-align:center;float:left;">CONTRAT DE TRAVAIL À DURÉE INDÉTERMINÉE (CDI) À TEMPS <select class="select_lettre temps" onchange="verifier_select_lettre(event, this, 'temps', 'temps');"><option>plein</option><option>partiel</option></select></h2>
<div style="clear:left;"></div>
<p>Entre les soussignés :</p>
<p>
L'entreprise <span class="container_contenteditable nom_entreprise" contenteditable="" onkeydown="verifier_contenteditable(event, this, 'nom_entreprise', 'nom_entreprise', 'Nom de l\'entreprise');" title="Nom de l'entreprise" style="color: rgb(255, 0, 0);">Nom de l'entreprise</span> dont le siège social est situé à <span class="container_contenteditable adresse_entreprise" contenteditable="" onkeydown="verifier_contenteditable(event, this, 'adresse_entreprise', 'adresse_entreprise', 'Adresse complète de l\'entreprise');" title="Adresse complète de l'entreprise" style="color: rgb(255, 0, 0);">Adresse complète de l'entreprise</span>, représentée par <select class="select_lettre civilite_employeur" onchange="verifier_select_lettre(event, this, 'civilite_employeur', 'civilite_employeur');"><option>Mr</option><option>Mme</option><option>Mlle</option></select> <span class="container_contenteditable nom_prenom_employeur" contenteditable="" onkeydown="verifier_contenteditable(event, this, 'nom_prenom_employeur', 'nom_prenom_employeur', 'Nom et Prénom de l\'employeur');" title="Nom et Prénom de l'employeur" style="color: rgb(255, 0, 0);">Nom et Prénom de l'employeur</span>, agissant en qualité d'employeur
<br>
<br>(ci-après désignée "l'Entreprise")
</p>
D'une part,
<br>
<br>ET
<br>
<br>
<p>
<select class="select_lettre civilite_salarie" onchange="verifier_select_lettre(event, this, &quot;civilite_salarie&quot;, &quot;civilite_salarie&quot;);"><option>Mr</option><option>Mme</option><option>Mlle</option></select> <span class="container_contenteditable nom_prenom_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;nom_prenom_salarie&quot;, &quot;nom_prenom_salarie&quot;, &quot;Nom et Prénom du salarié&quot;);" title="Nom et Prénom du salarié" style="color: rgb(255, 0, 0);">Nom et Prénom du salarié</span>, né<span class="e_feminin"></span> le
<select class="select_lettre jour_naissance_salarie" onchange="verifier_select_lettre(event, this, &quot;jour_naissance_salarie&quot;, &quot;jour_naissance_salarie&quot;);"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select>
<select class="select_lettre mois_naissance_salarie" onchange="verifier_select_lettre(event, this, &quot;mois_naissance_salarie&quot;, &quot;mois_naissance_salarie&quot;);"><option>janvier</option><option>février</option><option>mars</option><option>avril</option><option>mai</option><option>juin</option><option>juillet</option><option>août</option><option>septembre</option><option>octobre</option><option>novembre</option><option>décembre</option></select>
<select class="select_lettre annee_naissance_salarie" onchange="verifier_select_lettre(event, this, &quot;annee_naissance_salarie&quot;, &quot;annee_naissance_salarie&quot;);"><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option><option>1960</option><option>1959</option><option>1958</option><option>1957</option><option>1956</option><option>1955</option><option>1954</option><option>1953</option><option>1952</option><option>1951</option><option>1950</option><option>1949</option><option>1948</option><option>1947</option><option>1946</option><option>1945</option><option>1944</option><option>1943</option></select>
à <span class="container_contenteditable ville_naissance_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;ville_naissance_salarie&quot;, &quot;ville_naissance_salarie&quot;, &quot;Ville de naissance du salarié&quot;);" title="Ville de naissance du salarié" style="color: rgb(255, 0, 0);">Ville de naissance du salarié</span>
, N° Sécurité Sociale : <span class="container_contenteditable numero_securite_sociale_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;numero_securite_sociale_salarie&quot;, &quot;numero_securite_sociale_salarie&quot;, &quot;Numéro de sécurité sociale du salarié&quot;);" title="Numéro de sécurité sociale du salarié" style="color: rgb(255, 0, 0);">Numéro de sécurité sociale du salarié</span>, demeurant à <span class="container_contenteditable adresse_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;adresse_salarie&quot;, &quot;adresse_salarie&quot;, &quot;Adresse complète du salarié&quot;);" title="Adresse complète du salarié" style="color: rgb(255, 0, 0);">Adresse complète du salarié</span>
<br>
<br>(ci-après désigné<span class="e_feminin"></span> "<span class="container_le_salarie">le salarié</span>")
</p>
D'autre part,
<br>
<br>
<p>Il a été convenu et arrêté ce qui suit :</p>
<h3 class="h3_dc">Article 1 – Engagement</h3>
<p>À compter du
<select class="select_lettre jour_engagement_salarie" onchange="verifier_select_lettre(event, this, &quot;jour_engagement_salarie&quot;, &quot;jour_engagement_salarie&quot;);"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select>
<select class="select_lettre mois_engagement_salarie" onchange="verifier_select_lettre(event, this, &quot;mois_engagement_salarie&quot;, &quot;mois_engagement_salarie&quot;);"><option>janvier</option><option>février</option><option>mars</option><option>avril</option><option>mai</option><option>juin</option><option>juillet</option><option>août</option><option>septembre</option><option>octobre</option><option>novembre</option><option>décembre</option></select>
<select class="select_lettre annee_engagement_salarie" onchange="verifier_select_lettre(event, this, &quot;annee_engagement_salarie&quot;, &quot;annee_engagement_salarie&quot;);"><option>2023</option><option>2024</option></select>
, l'Entreprise engage
<select class="select_lettre civilite_salarie" onchange="verifier_select_lettre(event, this, &quot;civilite_salarie&quot;, &quot;civilite_salarie&quot;);"><option>Mr</option><option>Mme</option><option>Mlle</option></select> <span class="container_contenteditable nom_prenom_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;nom_prenom_salarie&quot;, &quot;nom_prenom_salarie&quot;, &quot;Nom et Prénom du salarié&quot;);" title="Nom et Prénom du salarié" style="color: rgb(255, 0, 0);">Nom et Prénom du salarié</span> à temps <select class="select_lettre temps" onchange="verifier_select_lettre(event, this, 'temps', 'temps');"><option>plein</option><option>partiel</option></select> et pour une durée indéterminée. Pour ce faire, il se déclare libre de tout engagement.
Le présent contrat ne deviendra définitif qu'après la visite médicale d'embauche décidant de l'aptitude physique à l'emploi de <span class="container_contenteditable poste_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;poste_salarie&quot;, &quot;poste_salarie&quot;, &quot;Poste du salarié&quot;);" title="Poste du salarié" style="color: rgb(255, 0, 0);">Poste du salarié</span>.
La déclaration préalable d'embauche a été faite auprès de l'URSSAF. <span class="il_elle majuscule_il_elle">Il</span> pourra être exercé auprès de cet organisme un droit d'accès et de rectification que confère la loi n° 78-17 du 06 janvier 1978 aux salariés.
</p>
<h3 class="h3_dc">Article 2 – Période d'essai et Préavis</h3>
<p>En accord avec la convention collective applicable, le présent contrat ne deviendra définitif qu'à l'issue d'une période d'essai de <span class="container_contenteditable nombre_mois" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;nombre_mois&quot;, &quot;nombre_mois&quot;, &quot;Nombre de mois&quot;);" title="Nombre de mois" style="color: rgb(255, 0, 0);">Nombre de mois</span> mois. Cette période d'essai est renouvelable une fois.
Durant cette période d'essai, chacune des parties pourra rompre à tout moment le contrat, sans préavis ni indemnité, sous respect du délai de prévenance prévu aux articles L. 1221-25 et L. 1221-26 du Code du travail.
Toute suspension qui se produirait pendant la période d'essai (maladie, congés,…) prolongerait d'autant la durée de cette période, qui doit correspondre à un travail effectif.
Au terme de la période d'essai, si cette dernière s'est avérée satisfaisante, le présent contrat deviendra définitif et se poursuivra pour une période indéterminée.
</p>
<h3 class="h3_dc">Article 3 – Durée du contrat</h3>
<p>Sous condition de validation de la période d'essai, le présent contrat est à durée indéterminée. Il pourra prendre fin à tout moment, à l'initiative <span class="de_salarie">du salarié</span> ou de l'Entreprise, sous respect des dispositions légales et conventionnelles en vigueur et hormis cas de faute grave ou lourde ou cas de force majeure.
Le délai de préavis dû par l'Entreprise en cas de rupture du contrat de travail est fixé par les articles L 122-5 et L 122-6 du Code du travail, ainsi que par la convention collective applicable dans l'Entreprise, en fonction de l'ancienneté que <span class="container_le_salarie">le salarié</span> aura acquise au moment de son départ.
</p>
<h3 class="h3_dc">Article 4 – Emploi et Qualification</h3>
<p>
<span class="container_le_salarie majuscule_salarie">Le salarié</span> est engagé<span class="e_feminin"></span> en qualité de <span class="container_contenteditable poste_salarie" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;poste_salarie&quot;, &quot;poste_salarie&quot;, &quot;Poste du salarié&quot;);" title="Poste du salarié" style="color: rgb(255, 0, 0);">Poste du salarié</span>, au coefficient hiérarchique <span class="container_contenteditable coefficient_hierarchique" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;coefficient_hierarchique&quot;, &quot;coefficient_hierarchique&quot;, &quot;Coefficient hiérarchique&quot;);" title="Coefficient hiérarchique" style="color: rgb(255, 0, 0);">Coefficient hiérarchique</span>, statut <select class="select_lettre statut" onchange="verifier_select_lettre(event, this, &quot;statut&quot;, &quot;statut&quot;);"><option>non cadre</option><option>cadre</option></select>.
Ses fonctions consisteront notamment à <span class="container_contenteditable liste_fonctions" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;liste_fonctions&quot;, &quot;liste_fonctions&quot;, &quot;Liste des fonctions&quot;);" title="Liste des fonctions" style="color: rgb(255, 0, 0);">Liste des fonctions</span> pour le compte de l'Entreprise.
Ces fonctions sont néanmoins données à titre indicatif et sont ni exhaustives ni définitives.
</p>
<h3 class="h3_dc">Article 5 – Lieu de travail</h3>
<p>
<span class="container_le_salarie majuscule_salarie">Le salarié</span> exercera ses fonctions à <span class="container_contenteditable lieu_travail" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;lieu_travail&quot;, &quot;lieu_travail&quot;, &quot;Lieu de travail&quot;);" title="Lieu de travail" style="color: rgb(255, 0, 0);">Lieu de travail</span>.
<span class="il_elle majuscule_il_elle">Il</span> pourra être amené<span class="e_feminin"></span> à se déplacer partout où les nécessités de ses fonctions l'exigeront, dans le même secteur géographique.
</p>
<h3 class="h3_dc">Article 6 – Clause de mobilité</h3>
<p>
Le lieu de travail, défini à l'article 5 du présent contrat, pourra être modifié par l'Entreprise, temporairement ou de manière permanente, pour des impératifs liés à l'activité, à l'organisation et/ou au bon fonctionnement de l'Entreprise.
<span class="il_elle majuscule_il_elle">Il</span> pourra donc être amené<span class="e_feminin"></span> à exercer ses fonctions en tout lieu du territoire national.
</p>
<h3 class="h3_dc">Article 7 – Rémunération</h3>
<p>
En contrepartie de son travail, <span class="il_elle">il</span> percevra une rémunération mensuelle brute de <span class="container_contenteditable salaire_mensuel_brut" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;salaire_mensuel_brut&quot;, &quot;salaire_mensuel_brut&quot;, &quot;Salaire mensuel brut&quot;);" title="Salaire mensuel brut" style="color: rgb(255, 0, 0);">Salaire mensuel brut</span> €, pour <span class="container_contenteditable nombre_heures_mensuel" contenteditable="" onkeydown="verifier_contenteditable(event, this, 'nombre_heures_mensuel', 'nombre_heures_mensuel', 'Nombre d\'heures mensuel');" title="Nombre d'heures mensuel" style="color: rgb(255, 0, 0);">Nombre d'heures mensuel</span> heures de travail&nbsp;par mois. Ce qui équivaut à un taux horaire de <span class="container_contenteditable taux_horaire_brut" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;taux_horaire_brut&quot;, &quot;taux_horaire_brut&quot;, &quot;Taux horaire brut&quot;);" title="Taux horaire brut" style="color: rgb(255, 0, 0);">Taux horaire brut</span> €.
</p>
<h3 class="h3_dc">Article 8 – Horaires de travail</h3>
<p>
<span class="container_le_salarie majuscule_salarie">Le salarié</span> est engagé<span class="e_feminin"></span> pour un horaire hebdomadaire de <span class="container_contenteditable nombre_heures_semaine" contenteditable="" onkeydown="verifier_contenteditable(event, this, 'nombre_heures_semaine', 'nombre_heures_semaine', 'Nombre d\'heures hebdomadaire');" title="Nombre d'heures hebdomadaire" style="color: rgb(255, 0, 0);">Nombre d'heures hebdomadaire</span> heures.
Ces horaires pourront être modifiés selon les nécessités de l'activité de l'Entreprise, sans que cela ne constitue une modification du contrat de travail.
Conformément à la législation en vigueur, il est également convenu que <span class="container_le_salarie">le salarié</span> pourra effectuer des heures supplémentaires, en fonction des besoins et impératifs de l'Entreprise.
<span class="il_elle majuscule_il_elle">Il</span> s'engage expressément à accepter les heures supplémentaires demandées par l'employeur pour la bonne marche de l'Entreprise. Ces heures sont réglementées dans la limite du contingent autorisé et selon les conditions légales et conventionnelles en vigueur.
</p>
<h3 class="h3_dc">Article 9 – Congés payés</h3>
<p>
<span class="container_le_salarie majuscule_salarie">Le salarié</span> bénéficiera des congés payés institués par les dispositions légales et conventionnelles, soit actuellement 2,5 jours ouvrables de congés payés par mois de travail effectif, soit 30 jours ouvrables pour une période de travail calculée du 1er juin de l'année précédente au 31 mai de l'année en cours.
Les dates de congés seront déterminées par accord entre la direction et <span class="container_le_salarie">le salarié</span>, selon les nécessités de l'activité et les impératifs d'organisation de l'Entreprise.
</p>
<h3 class="h3_dc">Article 10 – Heures d'absences</h3>
<p>
Les heures d'absences ou d'aménagement d'horaires pour convenance personnelle, devront obligatoirement recevoir l'accord du chef d'Entreprise, faute de quoi ces absences seront considérées comme injustifiées.
En cas d'absence pour maladie, <span class="container_le_salarie">le salarié</span> devra prévenir de son absence dans les plus brefs délais. <span class="il_elle majuscule_il_elle">Il</span> devra ensuite justifier son absence dans les 48 heures, par la production d'un certificat médical, faute de quoi cette absence sera considérée comme injustifiée et constituera une faute grave.
</p>
<h3 class="h3_dc">Article 11 – Retraite et Prévoyance</h3>
<p>
Dès son entrée dans l'Entreprise, <span class="container_le_salarie">le salarié</span> sera affilié<span class="e_feminin"></span> à la caisse de retraite de l'Entreprise, à savoir <span class="container_contenteditable caisse_retraite" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;caisse_retraite&quot;, &quot;caisse_retraite&quot;, &quot;Nom et adresse de la caisse de retraite&quot;);" title="Nom et adresse de la caisse de retraite" style="color: rgb(255, 0, 0);">Nom et adresse de la caisse de retraite</span>.
</p>
<h3 class="h3_dc">Article 12 – Confidentialité</h3>
<p>
<span class="container_le_salarie majuscule_salarie">Le salarié</span> s'engage à conserver une discrétion totale sur toutes les informations auxquelles <span class="il_elle">il</span> aurait pu avoir accès au cours de l'exercice de ses fonctions, que ces informations concernent l'Entreprise ou les clients de l'Entreprise.
<span class="il_elle majuscule_il_elle">Il</span> s'engage à ne communiquer à des tiers aucune information touchant aux travaux, aux inventions, aux procédés, aux méthodes, à l'organisation de l'Entreprise.
Cette obligation se prolongera après la cessation du contrat de travail, qu'elle qu'en soit la cause.
</p>
<h3 class="h3_dc">Article 13 – Conditions d'exécution du présent contrat</h3>
<p>
<span class="container_le_salarie majuscule_salarie">Le salarié</span> s'engage à observer toutes les instructions et consignes particulières de travail qui lui seront données.
<span class="il_elle majuscule_il_elle">Il</span> s'engage à faire connaître à l'Entreprise sans délai toutes modifications de son état civil, sa situation de famille, son adresse, etc., pouvant intervenir après son engagement.
<span class="il_elle majuscule_il_elle">Il</span> reconnaît avoir pris connaissance du présent contrat, en accepte les modalités et s'engage expressément à les respecter.
Le présent contrat est établi en deux exemplaires originaux dont l'un devra être retourné signé à l'Entreprise dans les plus brefs délais.
</p>
<p>Fait à <span class="container_contenteditable ville_contrat" contenteditable="" onkeydown="verifier_contenteditable(event, this, &quot;ville_contrat&quot;, &quot;ville_contrat&quot;, &quot;Ville&quot;);" title="Ville" style="color: rgb(255, 0, 0);">Ville</span>, le 21 septembre 2023.</p>
<p>Les signatures seront précédées de la mention manuscrite «&nbsp;Lu et approuvé&nbsp;».</p>
<p>
Chacune des pages autres que la dernière doit être paraphée par chacune des parties.
</p>
<div style="width:500px;float:left;"><span class="container_le_salarie majuscule_salarie">Le salarié</span></div><div style="float:left;">L'employeur</div>
<div style="clear:left;"></div>
<br>
<br>
<br>
<br>
</div>
</div>

<input type="button" action="./generate_pdf.php" value="Créer au format PDF *" id="submit_document_activite_pdf" 
class="container_mobile submit_dc"style="width:350px;">


</body>
</html>

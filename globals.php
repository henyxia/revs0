<?php
echo "<pre>";

//require_once("project_tools.php");
/*
class Status
{
	public $name;
	public $state;
	public $redaction;
	public $redactionRevision;
	public $creators = array();
	public $keywords = array();
}

class Project
{
	public $status;
	public $content;

	public function __construct()
	{
		$this->status = new Status(); 
	}
}
//searchForProject("fpga_adc");
/*
$project = new Project();

$project->status->name = "Building a low cost ADC for a FPGA";
$project->status->state = "Finished";
$project->status->redaction = "In Progress";
$project->status->redactionRevision = 1;
$project->status->creators[0] = "Jean Wasilewski";
$project->status->creators[1] = "Pierre Letousey";
$project->status->keywords[0] = "FPGA";
$project->status->keywords[1] = "Analog / Digital Converter";
$project->content = "Machine a cafe=
==Presentation du projet==
===Cahier des charges===
SA
* Broyage des grains deja torrefies
** Regulation d’un moteur en vitesse avec charge variable
** Reutilisation des elements d’une cafetiere existante (carte electronique hors d’usage)
*** etalonnage du debitmetre
*** Analyse du chauffe-eau
*** Calibration de la pompe a eau
** Propulsion de l’eau chauffee
*** Regulation d’une pompe a eau en pression et en debit
*** Regulation du chauffe-eau en temperature
** Modelisation des elements du systeme
SC
* Creation d’une interface homme-machine
** Installation d’un RaspberryPi avec un ecran tactile
*** Gestion des stocks de cafe, d’eau et de gobelets
*** Gestion des differents elements (pompe, compresseur, chauffe eau, …)
** Realisation d’une interface graphique permettant de :
* Moudre le cafe
* Selectionner la quantite d’eau a distribuer (cafe court ou long)
* Selectionner un cafe parmi une preselection de cafe
** Creation d’une application Web et Smartphone
*** Possibilite de noter son cafe
*** Possibilite de retenir un choix de cafe particulier
* Creation de profils crees a partir de la carte etudiante
** Lecture d’information en NFC sur la carte etudiante
** Creation d’une base de donnees basee sur ces profils
*** Proposition des cafes a partir de ceux les plus commandes et/ou mieux notes
*** Possibilite de retenir certains choix et de les recommander
	

Commun
* Creation d’une carte permettant la commande des differents elements de la machine a cafe (pompe, chauffe-eau, et d’autres sorties)
* Creation d’une carte permettant de faire l’acquisition des differents capteurs (comme le debitmetre)

===Liste des tâches===
*Caracteriser le debitmetre
*Caracteriser le chauffe-eau
*Caracteriser la pompe
*Determination du schema de fonctionnement et eventuels correctifs de regulation
*Realisation de la carte electronique de commande
*Programmation de l'Arduino pour commander la carte
*Programmation du RaspberryPi pour l'interface tactile et la lecture NFC
**Estimation temps de reponse (temps de transfert a l'Arduino negligeable ?)
*Gestion automatique du cafe
**Dimensionnement capsule et du dispositif de broyage
**Creation d'un systeme dispenseur de gobelets
***Design d'engrenages pour les gobelets
*Plus de fonctionnalites si temps restant
**Recharge par le Net
**Poison pour diabetique
**Interface beaucoup travaillee
**Packaging pratique

===Materiel disponible===

*Machine a cafe Nespresso defectueuse en morceaux [<span style=\"color: green;\">fournie en 2014</span>]
**Un debitmetre
**Une pompe a eau
**Un chauffe-eau
**Tubes
**Carte electronique (tres sûrement defectueuse)
**Mecanisme d'infusion de capsules de cafe
**Reservoir d'eau avec valve anti-retour

*Materiel electro-informatique
**Arduino Uno [<span style=\"color: green;\">fourni le 26/1/2015</span>][<span style=\"color: green;\">Recupere le 18/05/2015</span>]
**Arduino Leonardo [<span style=\"color: green;\">fourni le 5/2/2015</span>][<span style=\"color: green;\">Recupere le 18/05/2015</span>]
**RaspberryPi [http://www.adafruit.com/products/998] [<span style=\"color: green;\">fourni le 28/1/2015</span>][<span style=\"color: green;\">Recupere le 18/05/2015</span>]
**Carte SD 16G [<span style=\"color: green;\">fournie le 29/1/2015</span>][<span style=\"color: green;\">Recupere le 18/05/2015</span>]
**Capteur de temperature [http://fr.rs-online.com/web/p/capteurs-de-temperature-et-humidite/0264147/] [<span style=\"color: green;\">fourni le 4/2/2015</span>]
**Thermocouple [http://fr.rs-online.com/web/p/thermocouples/6212287/] [<span style=\"color: green;\">fourni le 4/2/2015</span>]
**Lecteur NFC [http://www.adafruit.com/product/364] [<span style=\"color: green;\">fourni le 4/2/2015</span>][<span style=\"color: green;\">Recupere le 18/05/2015</span>]
**Ecran tactile [http://www.gotronic.fr/art-afficheur-tactile-usb-2-8-dfr0275-21547.htm] [fourni le 18/03/2015][<span style=\"color: green;\">Recupere le 18/05/2015</span>]

*Materiel electronique de puissance
**Contacteurs de puissance (max 32A, 400V) (x2)
**Coffrets d'isolation electrique (x2) (achetes le 09/02/2015)
**Cables electriques (section 2,5 mm2) (achetes le 09/02/2015)
**Boitier interrupteur (achetes le 09/02/2015)

===Materiel manquant===

*Broyeur de cafe [http://www.maxicoffee.com/moulin-cafe-inoxnoir-gvx2-krups-p-9323-3_68.html?osCsid=e4t6v05n7lctvtod3ehggr0g05]

===Repartition du travail===
 {| class=\"wikitable alternance centre\"
 |+ Titre
 |-
 |
 ! scope=\"col\" | Lundi 14-16h
 ! scope=\"col\" | Mercredi 14-18h
 ! scope=\"col\" | Jeudi 10-12h
 |-
 ! scope=\"row\" | Semaine 5
 | 26/01 - Organisation et repartition du projet
 | 28/01 - Caracteriser le debitmetre et gerer les pieces manquantes
 | 29/01 - Caracteriser le chauffe eau et la pompe
 |-
 ! scope=\"row\" | Semaine 6
 | 02/02 - Determination du schema de fonctionnement et du plan de regulation
 | 04/02 - Realisation de la carte electronique
 | 05/02 - Realisation de la carte electronique
 |-
 ! scope=\"row\" | Semaine 7
 | 09/02 - Realisation de la carte electronique
 | 11/02 - Realisation de la carte electronique
 | 12/02 - Realisation de la carte electronique
 |-
 ! scope=\"row\" | Semaine 8
 | 16/02 - Gestion automatique du cafe
 | 18/02 - Gestion automatique du cafe
 | 19/02 - Gestion automatique du cafe
 |-
 ! scope=\"row\" | Semaine 9
 | 23/02 - Gestion automatique du cafe
 | 25/02 - Gestion automatique du cafe
 | 26/02 - Gestion automatique du cafe
 |-
 ! scope=\"row\" | Semaine 11
 | 09/03 - Gestion automatique du cafe
 | 11/03 - Gestion automatique du cafe
 | 12/03 - Gestion automatique du cafe
 |-
 ! scope=\"row\" | Semaine 12
 | 16/03 - Gestion automatique du cafe
 | 18/03 - Gestion automatique du cafe
 | 19/03 - Gestion automatique du cafe
 |-
 ! scope=\"row\" | Semaine 13
 | 23/03 - Gestion automatique du cafe
 | 25/03 - Gestion automatique du cafe
 | 26/03 - Gestion automatique du cafe
 |-
 ! scope=\"row\" | Semaine 14
 | 30/03 - Gestion automatique du cafe
 | 01/04 - Gestion automatique du cafe
 | 02/04 - Gestion automatique du cafe
 |-
 ! scope=\"row\" | Semaine 15
 | Ferie
 | 08/04 - Gestion automatique du cafe
 | 09/04 - Gestion automatique du cafe
 |-
 ! scope=\"row\" | Semaine 16
 | 13/04 - Gestion automatique du cafe
 | 15/04 - Gestion automatique du cafe
 | 16/04 - Gestion automatique du cafe
 |-
 ! scope=\"row\" | Semaine 17
 | 20/04 - Gestion automatique du cafe
 | 22/04 - Gestion automatique du cafe
 | 23/04 - Gestion automatique du cafe
 |}

En somme, les previsions pour les differentes parties sont de:
*8 H pour la prise en main du materiel actuel
*14 H pour la realisation de la carte electronique de commande
*70 H pour la gestion automatique du cafe

==Etude prealable==
===Caracterisation du debitmetre===
Lors de la premiere seance \"pratique\", nous avons etudie le comportement du debitmetre.

Apres recherches, nous avons appris qu'il en existe deux types. Le premier type est assimilable a une resistance variable dont la valeur depend du debit. Le deuxieme type se comporte comme un type tout ou rien qui effectue un contact entre deux des pins lorsque l'ailette interne fait un tour. Le debit est donc deduit par la frequence des impulsions que delivre le debitmetre.

Notre debitmetre est un composant cree par Digmesa, dont la fiche constructeur est disponible [http://www.pollin.de/shop/downloads/D180051D.PDF ici]. Il s'agit d'un debitmetre a turbine, du deuxieme type.

Le montage a droite permet de recuperer les impulsions du debitmetre sous forme TTL.

[[Fichier:Schema_Montage_Debitmetre.JPG|250px|thumb|right|Schema du montage permettant de recuperer les impulsions du debitmetre]]

Le volume d'eau mesure s'exprime alors sous cette forme : <math>V = n * \frac{1}{Kdeb}</math> avec n le nombre d'impulsions, V le volume en L et Kdeb la constante fournie dans la doc constructeur Kdeb = 1925 impulsions/L.

Le debit n'est pas une grandeur mesuree directement avec notre debitmetre, mais elle est deduite en choisissant un temps <math>\Delta t</math> suffisamment court pour considerer le debit \"instantane\".
L'expression du debit \"pseudo-instantane\" est alors la suivante :  <math>\frac{\Delta V}{\Delta t} = \frac{1}{Kdeb} * \frac{\Delta n}{\Delta t} </math> avec <math>\Delta n</math> la variation du nombre d'impulsion pendant le <math>\Delta t</math>.


Obtenir le debit est ici utile car, d'apres les informations collectees, le temps d'extraction du cafe doit être contrôle (entre 20s a 25s) et le cafe doit être de 5cl pour un ristretto et de 12cl pour un lungo.

Il est important de noter aussi que ce capteur a une influence sur la pression : en effet, il peut induire une perte de pression (au maximum) de 0,43 bar.

===Realisation interface commande - puissance===
Afin de pouvoir separer circuit de commande et alimentation de puissance, nous utiliserons un optocoupleur et des contacteurs pour l'alimentation de la pompe et du chauffe-eau (tout deux alimentes en 230V alternatif 50 Hz). L'optocoupleur est utilise afin de beneficier d'une isolation galvanique entre les deux parties, pour plus de securite.

La commande d'alimentation est envoyee par l'Arduino a l'optocoupleur. L'optocoupleur commande alors le contacteur (relais de puissance), ce qui alimente l'element choisi.

L'optocoupleur utilise est sous forme de circuit \"prêt a utiliser\" (ET-OPTO AC-OUT 4 dont la fiche constructeur est disponible [http://www.tellab.it/open2b/var/catalog/product/files/57.pdf ici]) qui dispose de quatre optocoupleurs isoles. Nous en utiliserons un pour commander la pompe (OCT0) et un deuxieme pour commander le chauffe-eau (OCT1). L'objectif d'une des seances a ete d'etablir ce dispositif d'alimentation, de comprendre le fonctionnement de l'optocoupleur dont nous disposons et de mapper les optocoupleurs aux sorties de l'Arduino.

Par la suite, nous avons ete contraint de changer de type de commande. En effet, la carte d'octocoupleurs permettait la commande mais n'etait pas capable de couper le contacteur. Cela est du au principe même du fonctionnement du contacteur. En effet,le contacteur est compose d'une bobine (entre A1 et A2) qui vient attirer un bloc aimante de façon a creer un contact entre les six broches de puissance (connecteurs 1 a 6). Le probleme etait que cette bobine demandait un courant trop important que l'octocoupleur gerait mal en rendant impossible la coupure de la bobine.

Pour palier a ce probleme, nous avons choisi d'utiliser une carte de commande d'octocoupleurs commandant des relais (ET-OPTO RELAY4, dont la fiche constructeur est disponible [http://www.micro4you.com/files/ETT/ET-OPTO-RELAY4.pdf ici]). Apres verification a l'aide de la documentation technique des relais, nous avons constate que ceux-ci sont bien capable de couper la commande des contacteurs.

===Fabrication d'un Shield Arduino===
Nous avons donc ete amene a creer un shield Arduino avec une carte de prototypage rapide qui realise les fonctions suivantes :

* integrer un connecteur 10 broches compatible pour :
** relier la sortie digitale IO 2 a l'optocoupleur OCT0 qui commandera l'alimentation de la Pompe
** relier la sortie digitale IO 3 a l'optocoupleur OCT1 qui commandera l'alimentation du Chauffe eau
* integrer le circuit de recuperation des impulsions du debitmetre TTL et echantillonner ce signal sur l'entree digitale IO8
* disposer d'une fonction \"Boutons Arrêt d'urgence/Commande manuelle\" pour la pompe et le chauffe eau.

===Caracterisation de la pompe===
La pompe recuperee est un composant fabrique par Invensys, dont la fiche constructeur est disponible a [http://www.toolbox.robertshaw.com/appliance/linkedElements/WaterPumps.pdf cette adresse].
Il s'agit d'une pompe a piston qui permet de delivrer une pression allant jusqu'a 19 bar au maximum. Cette pression est fonction du debit en sortie de la pompe, selon la caracteristique a droite.
[[Fichier:Caracteristique_Pompe_Invensys_CP4.JPG?|250px|thumb|right|Caracteristique Pression/Debit de la pompe]]

Elle se commande en \"tout ou rien\" et est alimentee en 230 V alternatif 50Hz.
Le parametre permettant de fixer le point de fonctionnement sur le graphique precedent est la section du tuyau en sortie. Nous n'avons pas la main sur ce parametre etant donne que nous possedons deja le systeme de tuyaux avec les embouts adaptes de section S = 3 mm². En revanche, nous la commanderons en decidant du temps d'allumage.
Il s'agit maintenant de determiner a quels moments et combien de temps il faut alimenter la pompe, sachant qu'il faut que l'extraction dure entre 20s et 25s et que le chauffe eau induit un retard a determiner.

'''Seance pratique :'''

Lors d'une seance de manipulation de la pompe, nous l'avons commande au moyen de l'Arduino pendant plusieurs durees pre-etablies (2s, 5s et 10s) afin de determiner si elle possede un regime transitoire negligeable. Nous avons ensuite releve le volume d'eau qu'elle avait delivre grâce a une eprouvette graduee. Plusieurs series de mesures ont ete effectuees a chaque fois.
Lors de cette manip, le tuyau de sortie n'etait pas connecte au chauffe-eau afin que la mesure ne soit pas influencee, il donnait directement dans l'eprouvette. Cette manipulation nous a egalement permis de tester notre debitmetre et notre maniere d'echantillonner le signal qu'il nous fournit, en comparant le volume deduit par celui ci et le volume reel releve avec l'eprouvette.

Ainsi, nous avons determine que quelque soit le temps d'allumage (pour une duree superieure a 2s), la pompe fournit un debit constant de 5,2 mL/s = 0,312 cc/min.

===etalonnage du capteur de temperature du chauffe-eau===
Afin de reguler le chauffe eau en temperature, nous avons besoin de connaître le fonctionnement du capteur de temperature integre sur celui ci.
Il s'agit en fait d'une thermistance (resistance variable dont la valeur de la resistance depend de la temperature), ici a coefficient de temperature negatif (CTN). 

Il n'y a visiblement pas de reference constructeur dessus. Nous avons donc decide d'effectuer un etalonnage de celle ci. Il existe un dispositif en salle electronique comportant des capteurs de temperatures deja etalonnes disposes sur une plaque qui peut être chauffee par un chauffage electrique. Nous avons \"colle\" avec de la pâte thermique notre thermistance sur cette plaque et effectue un releve de la resistance en fonction de la temperature indiquee par les capteurs deja presents. Le probleme est que le chauffage ne pouvait pas être regule, il continue de chauffer tant qu'on l'alimente. N'ayant donc pas de valeur de temperature stabilisee, a cause de l'inertie thermique, les valeurs de resistances relevees sont completement non significatives.
Cette manipulation aura tout de même souleve un point a prendre en compte : le capteur de temperature etant en metal, il faudra determiner l'inertie qu'il induit dans la mesure et si celle ci est negligeable, sinon, comment faire avec.

Le soucis pour une approximation lineaire est que la plage de temperature est trop importante. En effet, la temperature de l'eau pour le cafe doit être entre 88°C et 90°C, mais on doit aussi pouvoir utiliser le capteur a une temperature de 65°C pour prevoir un mode \"economie d'energie\", lorsque la machine n'est pas utilisee pendant 10min par exemple.
Apres recherches, la loi d'evolution de la resistance en fonction de la temperature est de la forme : <math>{1 \over {T}} = A + B \ln(R_{Th}) + C (\ln(R_{Th}))^3 \,</math>

Autre idee : simplement l'etalonner la thermistance au moyen d'un bain d'eau que l'on peut chauffer et d'une sonde de temperature precise.

Apres releve de l'evolution de la resistance en fonction de la temperature au moyen du bain marie, nous avons constate et verifie que notre sonde de temperature se comporte comme une sonde standardisee PT100. Nous avons trouve une fiche constructeur de ces sondes standardisees qui verifie les caracteristiques de notre capteur ([http://search.murata.co.jp/Ceramy/CatalogAction.do?sHinnm=?&nbsp&sNHinnm=NCP15WF104D03RC&sNhin_key=NCP15WF104D03RC&sLang=en&sParam=series+U0120L0770S0416A1161 lien]). Sur la plage de temperature que nous avons besoin d'utiliser (25°C - 105°C), nous pouvons negliger le terme en ln^3, ainsi l'equation regissant la resistance en fonction de la temperature peut s'exprimer ainsi :
<math>{R_{Th}}={R_0} \times\exp\left(\beta\times\left({1 \over {T}} - {1 \over {T_0}}\right)\right) \,</math> avec <math>{R_0}</math> = 100 kOhm la resistance de reference a <math>T_0</math>= 25°C, <math>\beta</math> = 4334 Kelvin le coefficient fourni par le constructeur pour l'approximation sur la plage 25°C-100°C.

Ainsi, la representation des donnees pour recuperer la temperature est la suivante : au moyen d'un pont diviseur, nous recuperons une tension sur l'Arduino image de la resistance et donc de la temperature avec la relation ci-dessus.
Nous ne pouvons pas inclure dans le code directement un calcul avec la fonction exponentielle, cela prendrait , entre autres, trop de temps de calcul et ne serait pas optimise etant donne que l'on connait la resolution du CAN de l'Arduino. Pour cela, nous passons par un tableau de conversion sur 256 valeurs calcule au moyen de cette [https://docs.google.com/spreadsheets/d/185WP8sv1Ryd4hWDlqnpToG-fiC0yVxaIgjR2ey1FG68/edit?usp=sharing feuille de calcul]. Voici un schema de principe :

 Cote Arduino : Tension aux bornes de Rth(V) ---CAN---> Valeur sur 10 bits ---TableauDeConversion---> Valeur sur 8 bits


La Raspberry (ou le PC) recupere ensuite cette valeur sur 8 bits et en deduit la temperature avec la connaissance du \"pas\" entre 2 temperatures : <math>Pas = {(105-25)\over 255}</math>

 Cote Raspberry : Valeur sur 8 bits --->  25 + (Valeur * Pas)  ---> Temperature en °C

Cette methode permet d'alleger le temps de traitement sur l'Arduino et surtout de ne pas perdre en precision et resolution a cause de la transmission de l'information \"temperature\", qui s'effectue sur 8 bits.

===Caracterisation du chauffe eau===
Le chauffe eau que nous avons recupere est de type thermoblock. Il s'agit en fait d'une resistance chauffante autour de laquelle se situe un serpentin dans lequel l'eau circule, le tout etant isole dans un châssis en metal.
Les principaux avantages de ce systeme thermoblock est qu'il conserve tres bien la chaleur et qu'il permet de ne chauffer que la quantite d'eau necessaire, la petite quantite qui passe a l'interieur. On peut alors considerer l'echange thermique entre le chauffage et l'eau quasi instantane et uniforme. L'inconvenient majeur est en revanche, comme pour tout systeme thermique, l'inertie thermique importante qu'il possede, notamment due a son corps en metal.

Nous n'avons pas trouve de donnees constructeur sur ce chauffe eau. La seule information inscrite est la puissance electrique qu'il absorbe : 1200 W.
Il sera alimente, comme pour la pompe, en 230V alternatif 50Hz, en tout ou rien. Il s'agit maintenant d'estimer ses caracteristiques (inertie, temps caracteristiques, gains en temperature en fonction de l'entree) afin de mettre en place un plan de regulation adapte. Ne possedant aucune information sur ce systeme, nous ne procederons pas a une etude theorique thermique qui serait trop approximative compte tenu de la geometrie du systeme et trop fastidieuse a mettre en place. Nous avons choisi de proceder par identification, en relevant les courbes d'evolution de la temperature, pour differents temps de commande.


'''Resultats :'''

A chaque fois, la reponse peut s'exprimer de la façon suivante : on constate un temps de retard pur au demarrage dû a l'inertie, puis une evolution s’apparentant a celle d'une reponse a systeme du 1er ordre. On peut ecrire la fonction de transfert du systeme sous cette forme : <math>H(P) = \frac{K}{1+\tau P}   e^{- T_{r}  P}</math> (modele de Broïda)


[[Fichier:Commande_2s.png|350px|vignette|right|upright=1.25|Reponse en temperature pour 2s d'alimentation]]

[[Fichier:Commande_5s.png|350px|vignette|left|upright=1.25|Reponse en temperature pour 5s d'alimentation]]

[[Fichier:Commande_10s+pompe.png|350px|vignette|centre|upright=1.25|Reponse en temperature pour 10s d'alimentation, puis arrivee d'eau a t=75s]]


Remarque : On peut observer sur le 2eme graph l'influence du passage de l'eau dans le thermoblock sur la temperature. Celui ci se traduit comme une perturbation avec un comportement type 1er ordre sur le thermoblock. Avec ces parametres (temps, gain), on pourra par la suite estimer la compensation a ajouter afin de maintenir la temperature du thermoblock constante malgre la chauffe de l'eau.

Ainsi, on peut recapituler ceci dans le tableau suivant :

{| class=\"wikitable\"
|-
! Temps de commande
! Gain en temperature K
! Temps de retard Tr
! Temps de reponse a 5%
|-
| 2 s
| 4,3 °C
| 5,2 s
| 14 s
|-
| 5 s
| 12 °C
| 5,2 s
| 25 s
|-
| 10 s
| 24 °C
| 5,2 s
| 37 s
|-
|}

On remarque un gain en temperature en fonction du temps d'allumage quasi constant dans ces intervalles d'environ 2,4°C par seconde, ainsi que le temps de retard est bien constant.

===Determination du plan de regulation===
Rappelons le cahier des charges de la regulation :

* chauffer l'eau a 90°C, avec comme erreur acceptable +/- 2°C (conformement aux informations recueillies)
* pas de depassement de la consigne : en effet, le systeme conservant tres bien la chaleur, attendre qu'il se refroidisse serait trop long et surtout, si il y a depassement apres 100°C, on cree un generateur de vapeur... ce qui est bien sûr tres dangereux pour le systeme et pour la securite de l'utilisateur
* avoir un temps de reponse acceptable pour l'utilisateur (actuellement, a titre d'exemple, pour la cafetiere Nespresso, l'etape de chauffe n'excede en general pas 60s)
* mode economie d'energie : la machine est destinee a être utilisee publiquement, par des utilisations ponctuelles et pas uniformement reparties dans le temps, il est donc important que la machine ne gaspille pas de l'energie lorsqu'elle n'est pas utilisee. Ainsi, le bon compromis serait que la temperature soit maintenue a environ 50°C apres 10min d'inutilisation.


'''Choix de la regulation :'''

[[Fichier:Grafcet_AutoHeat.JPG?|400px|thumb|right|Grafcet illustrant le principe de l'algorithme de regulation de la temperature]]
Ici ne possedant pas de commande reglable, nous ne pouvons pas choisir une regulation continue de type PID ou predicteur de Smith, car on commande le thermoblock via un relais. Une commande MLI n'est pas envisageable dans notre cas, a cause du faible \"pouvoir de commutation\" des contacteurs de puissance que nous avons recupere. Une simple regulation Tout ou Rien type thermostat ne serait pas suffisante, car ceci engendrerait des depassements et des oscillations fortes autour de la temperature de consigne compte tenu du rapport Temps caracteristique sur Temps de retard du systeme <math>\frac{\tau}{T_{r}} \approx 1,66</math>. Nous nous situons donc dans le cas \"Regulation par Boucles multiples\" d'apres la methode de Broïda.

Dans notre cas d'utilisation, un algorithme par boucles multiples, base sur des commandes Tout ou Rien, est possible et peut satisfaire au cahier des charges. En effet, la consigne ne change pas d'ordre de grandeur : il faudra toujours chauffer l'eau dans un intervalle compris entre 88°C et 92°C. On propose alors l'algorithme suivant :

Principe : 
* 1) Chauffe Initiale : Au debut de la phase de chauffe, on realise une chauffe importante (15 s), l'objectif etant d'approcher grossierement la temperature aupres de la temperature de consigne et qu'elle se soit stabilisee (attente de 12s) avant de passer a l'etape de chauffe par palier.
* 2) Chauffe par palier : Il s'agit ici d'effectuer ensuite une succession de \"petites\" chauffes jusqu'a être dans la plage de temperature acceptable, tout en tenant compte de l'inertie thermique. Ces successions de chauffe sont definies ici par 2s de chauffe, puis 6s d'attente de l'etablissement de la temperature avant de determiner si on reste dans la phase Chauffe par palier ou si on entre dans la phase Maintien au chaud. La temperature de seuil a ete determinee a 82°C, pour prendre en compte le phenomene d'inertie.
* 3) Maintien au chaud : On se situe alors proche ou dans la plage de temperature. Il s'agit alors d'effectuer des petites chauffes ponctuelles permettant de maintenir la temperature dans l'intervalle (refroidissement par le milieu ambiant). Cette etape prend egalement en compte le maintien au chaud lorsque de l'eau passe a travers le chauffe eau et fait donc chuter sa temperature (compensation plus forte : cycle de 3s de chauffe puis 3s d'attente). On peut, a partir de cette etape, commander la pompe pour elaborer un cafe si un cafe a ete demande.

Un avantage de la chauffe palier par palier permet d'attendre que la chaleur s'etablisse uniformement dans le thermoblock. Ceci permet de limiter les problemes d'inerties thermiques, y compris celui de notre capteur (sans mettre ces paliers d'attente, ce que l'on observerait en temperature ne serait pas necessairement la temperature au coeur du thermoblock).

[[Fichier:Mode_Auto.png|400px|vignette|right|upright=1|Evolution de la temperature du chauffe eau avec la regulation]]

'''Resultats de la regulation'''

On constate sur le graphique a droite les 3 etapes de chauffe : les etapes 1 et 2 s'effectuant ici entre 0s et environ 80s puis l'etape de maintien apres cette date. La temperature evolue ainsi de façon presque lineaire pendant les etapes 1 et 2, puis reste dans la plage 88°C-92°C.
A t=140s, la pompe est commandee dans cette exemple afin de pouvoir visualiser le maintien en temperature lorsque l'eau circule.

On remarque donc que cette regulation valide les 2 premiers criteres du cahier des charges (chauffer l'eau dans la plage et pas de depassement de cette plage). Cependant, le temps de reponse avant de pouvoir elaborer un cafe est un peu plus long (environ 80s).



==Deroulement du projet==
===Avancement des differents objectifs===
Les differents objectifs et leur avancement sont resumes dans le tableau suivant
{| class=\"wikitable\"
|-
! Objectif
! Etat
! Commentaire
|-
! etalonnage du debitmetre
| Fini
| La documentation est fournie dans le Wiki, et le shield Arduino permet son utilisation
|-
! Analyse du chauffe-eau
| Fini
| Le chauffe-eau est maintenant caracterise. Le retard dans la commande ainsi que la commande tout ou rien complexifie grandement son utilisation mais une solution a ete trouvee et fonctionne parfaitement, comme indique dans le wiki.
|-
! Calibration de la pompe a eau
| Fini
| La documentation est aussi fournie dans le wiki, et le shield Arduino permet son utilisation en temps reel.
|-
! Regulation du chauffe-eau en temperature
| Fini
| Le modele equivalent a ete determine, comme indique dans le wiki, et les tests semblent confirmer le bon fonctionnement. Les derniers tests complementaires ont prouves que la regulation s'effectue correctement même lors d'un pompage.
|-
! Regulation d’une pompe a eau en pression et en debit
| Fini
| Le comportement de la pompe a ete caracterise et l'utilisation des nouvelles pieces creees au Fabricarium n'engendre pas de perturbations trop importantes.
|-
! Creation d’une carte permettant la commande des differents elements de la machine a cafe (pompe, chauffe-eau, et d’autres sorties)
| Fini
| L'utilisation d'une carte de puissance couplee avec deux contacteurs et un shield arduino realise par nos soins rempli parfaitement cet objectif
|-
! Creation d’une carte permettant de faire l’acquisition des differents capteurs (comme le debitmetre)
| Fini
| Le shield Arduino que nous avons realise permet aussi de lire les differents capteurs
|-
! Programmation de l'Arduino pour commander la carte
| Fini
| Pour finir il est necessaire d'utiliser deux Arduinos mais tout les deux sont programmes
|-
! Programmation du RaspberryPi pour l'interface tactile et la lecture NFC
| Fini
| La partie NFC est realisee par un des deux Arduinos, l'interface tactile est encore en cours de realisation. Bonne nouvelle ! Les tests ont montres que le temps de reponse entre les Arduinos et le RaspberryPi sont negligeables devant le temps d’echantillonnage. L'ecran fonctionne parfaitement et permet de selectionner la quantite de cafe desiree.
|-
! Dimensionnement capsule et du dispositif de broyage
| Fini a 80 %
| Les capsules et la chambre de la capsule ont ete completement etudies. Un systeme complet a ete cree pour ne plus être contraint a l'utilisation du systeme proprietaire. Trois pieces ont ete cree a l'aide du logiciel de CAO Catia. La creation de ces pieces en metal est pour le moment impossible (Notre contact aux Arts&Metiers est indisponible, peut-être le responsable des machines-outils de la section mecanique peut nous aider a realiser certaines pieces). Nous nous sommes rabattus sur la creation des pieces en PLA a l'aide de l'imprimante 3D WitBox du fabricarium. Les trois pieces principales sont terminees, ce qui pourrait permettre d'en faire un demonstration. La piece de liaison est fonctionnelle, ce qui nous permet d'adapter notre tuyau de pompe aux trois pieces precedentes. Par manque de temps, il ne sera pas possible de montrer le fonctionnement automatique des pieces.
|-
! Creation d'un systeme dispenseur de gobelets
| Fini a 0%
| Le systeme ne sera pas cree par manque de temps.
|}

===La programmation des differents elements===
Pour la partie programmation, le defi residait dans le fait de faire communiquer tout les elements a l'aide d'un seul programme. Pour cela, nous avons subdivise les fonctions principales dans differents modules. Ceci nous permettait entre autre de minimiser le nombre d'elements relies a la partie \"puissance\" du projet (detaille plus loin)

Le code source du projet est disponible sur [http://www.github.com GitHub] et sur [https://archives.plil.fr/ le GitLab de PolytechLille], et les liens vers les differents programmes sont les suivants
{| class=\"wikitable\"
|-
!
! GitHub
! GitLab
|-
! Shield Arduino NFC
| [https://github.com/henyxia/tweekd_nfc]
| [https://archives.plil.fr/henyxia/tweekd_nfc]
|-
! Shield Arduino de puissance
| [https://github.com/henyxia/tweekd_hvc]
| [https://archives.plil.fr/henyxia/tweekd_hvc]
|-
! Interface graphique intermediaire
| [https://github.com/henyxia/tweekd_gui]
| [https://archives.plil.fr/henyxia/tweekd_gui]
|-
! Interface finale
| [https://github.com/henyxia/tweekd]
| [https://archives.plil.fr/henyxia/tweekd]
|-
! Utilitaire de conversion BMP vers RGB565
| [https://github.com/henyxia/bmp2rgb565]
| [https://archives.plil.fr/henyxia/bmp2rgb565]
|-
! Utilitaire de conversion BMP vers MAP
| [https://github.com/henyxia/bmp2map]
| [https://archives.plil.fr/henyxia/bmp2map]
|}
====Le Shield Arduino NFC====
L'objectif de l'utilisation du Shield NFC est de permettre a un utilisateur de payer un cafe, et donc de s'identifier sur la machine, a l'aide de carte Lille 1. Pour cela, nous nous sommes premierement orientes sur l'utilisation de l'IDE Arduino et de la librairie dediee au [https://github.com/Seeed-Studio/PN532 PN532]. Puis, nous avons decide de passer a un langage C pour avoir une meilleure visibilite sur les registres. Par consequent, nous avons utilise le compilateur avr-g++ pour compiler le projet. Il nous a donc etait necessaire de transposer une partie des fichiers C et C++ pour les rendre utilisables avec notre programme C.

La communication se fait par systeme de questions-reponses. Le serveur sur la Raspberry envoie une demande de donnees, et l'Arduino repond en consequence. La seule difficulte a reside dans la problematique des donnees a envoyer pour l'identification. Les cartes de Lille 1 sont des cartes NFC Mifare Classic 1K. Elles sont composees de 16 secteurs de 4 fois 16 bytes. Le secteur qui nous interesse est le douzieme secteur, qui est encode en utilisant les cles NFC publiques (donc accessible par tout le monde). Les cles publiques en question sont :

{| class=\"wikitable\"
|-
!
! Cle
|-
! A
| A0A1A2A3A4A5
|-
! B
| B0B1B2B3B4B5
|}

Ce douzieme secteur contient, pour les carte etudiantes, l'INE, suivi du numero etudiant (sur 8 chiffres), suivi du prenom, suivi d'un point puis du nom. Nous avons d'abord envisage d'utiliser le nom et le prenom, cependant cela posait le probleme des personnes avec le même patronymes. De plus, il arrivait que le nom de l'etudiant soit tronque pour rester dans l'espace alloue au secteur 12. Par consequent, nous utilisons le numero d'etudiant, qui est toujours au même endroit sur le secteur. Le logiciel compare alors ce numero a une liste d'etudiant.

Par soucis de securite, nous n'avons pas de liste donnant une correspondance directe entre un numero d'etudiant et son nom. En effet, la liste utilisee est un enchaînement de nom et de numero etudiant encode avec l'algorithme MD5. Pour recuperer le nom, il nous suffit alors de comparer le numero etudiant que nous recuperons (que nous encodons en MD5) avec la liste. Ceci nous assure une confidentialite relative, dependante directement de la robustesse de la non reversibilite du MD5.

Une fois la reconnaissance des cartes etudiantes terminees, nous avons essaye d'inclure les cartes Lille 1 dediees au personnel. La premiere question que nous nous sommes pose est comment pouvons nous faire la difference, au niveau du lecteur, entre une carte etudiante et une carte du personnel. Nous avons remarque que les cartes du personnel comporte, sur leur douzieme secteur, deux fois le numero de personnel (sur 6 chiffres). La repetition du numero de personnel se situe a l'endroit où se situe le nom de l'etudiant sur la carte de l'etudiant. Le test est donc assez facile a realiser. L'autre probleme est : comment lie un numero de personnel a un nom ? Nous n'avons pas encore resolu ce probleme car cette table de liaison n'est pas accessible a PolytechLille. eventuellement, si nous arrivons a accomplir tous les objectifs du projet, nous envisagerons de contacter les responsables de Lille 1 pour obtenir cette table de correspondance.

====L'interface en ligne de commande utilisateur====
Durant les phases de test, nous avons cree une interface en ligne de commande. Celle-ci permettait d'envoyer directement des commandes au HVC, comme l'allumage du chauffe-eau pendant un certain nombre de secondes; ou encore le pompage. Cette interface est restee en utilisation jusqu'a deux semaines avant la fin du projet, car elle nous permettait d'effectuer un suivi tres simple de l'etat des capteurs. Par la suite, a partir du commit [https://github.com/henyxia/tweekd/commit/ac55328a023270dc55e5e5a99c2bc9a3a1873885 ac55328], nous nous sommes oriente vers l'utilisation de l'ecran fournis.

Durant la periode où nous utilisions l'interface en ligne de commande, nous nous servions de celle-ci car elle nous fournissait des informations comme le PID. Cette information nous permettait de tuer le programme principal ainsi que tous ces fils lorsque celui ci plantait. Il affichait aussi le volume pompe, la derniere temperature relevee, l'identifiant lu par le lecteur NFC et la date a laquelle cette lecture s'etait produite. Elle affichait aussi les dernieres entrees du journal, avec des couleurs indiquant leur niveau d'importance (Debug, Info, Warning ou Error).

====L'interface utilisateur finale====
Pour l'interface utilisateur finale, nous nous reposons sur un module d'affichage [http://www.robopeak.com/docs/doku.php?id=product-rpusbdisp RPUSBDisp] de la societe RoboPeak. Avant de se lancer dans la phase de programmation de l'interface, il nous a d'abord fallut rendre utilisable l'ecran par le RaspberryPi. Pour cela, il a fallut creer un module chargeable par le noyau Linux. Une fois ce module cree, nous nous sommes rendu compte le noyau Linux que nous utilisions (celui fournis avec Raspbian) ne contenait pas les symboles necessaires au chargement du module. Nous avons alors recompile le noyau Linux avec les symboles manquants. La compilation s'est averee assez complique car pour eviter de faire de la cross compilation (ce qui aurait surement augmenter le taux d'echec de compilation) nous avons compile le noyau directement a partir de la RaspberryPi ce qui, malgre son overclooking, etait tres long (une compilation prenait approximativement une nuit complete). Apres quatre tentatives, nous avons reussi a obtenir un noyau fonctionnel.

[[Fichier:RPUSBDisp1.jpg|200px|thumb|right|Premier BMP affiche avec succes sur l'ecran]] Une fois l'ecran utilisable, nous nous sommes lances dans le developpement de l'interface. Nous avons choisi, dans une optique de performance, de n'utiliser que la librairie X11. Le premier objectif etait de reussir a afficher une image sur l'ecran. Le format d'image utilise etait le BMP car il n'est pas compresse et peut être lu sans autres calculs. Apres de petits cafouillages (lies au fait que le BMP represente une couleur de 0 a 255 et X11 de 0 a 65535) nous avons reussi a faire afficher notre premiere image. Cependant, le point negatif est que l'image est affichee en une trentaine de secondes. Nous sommes donc en train de travailler sur un moyen de faire afficher des images plus rapidement.

Apres de longues recherches, nous nous sommes rendus compte qu'il n'etait pas possible de realiser une interface temps reel avec cet ecran si l'on utilisait la librairie X11. En effet, celle ne communique pas assez rapidement avec l'ecran (les recordes d'ecriture etant de ~17 secondes par images avec X11). Le constructeur preconise en fait une utilisation a travers une interface USB. Cette interface, decrite dans ce [http://www.robopeak.com/data/doc/rpusbdisp/RPUD03-rpusbdisp_interface_protocol-enUS.1.0.pdf manuel] nous oblige a reecrire notre interface homme machine.

[[Fichier:RGB565.gif|320px|thumb|left|Representation des donnees en RGB565]] Le [https://github.com/henyxia/tweekd_gui/blob/master/main.c lien suivant] est une demonstration de la premiere commande que nous avons reussi a envoyer a travers la librairie USB. Nous avons ensuite essaye d'afficher une image sur l'ecran. Pour cela, il a ete necessaire de creer un type de fichier intermediaire car l'ecran n'est pas capable de lire la plupart des formats d'images classiques. Pour rendre la conversion plus simple, nous avons choisi le type BMP comme fichier image source. Le type BMP organise la description des images de façon simple. Le fichier commence par un en-tête qui comporte des informations comme l'adresse de debut de l'image, le nombre de bits par pixel et d'autres informations qui ne nous servent pas. Une fois ces deux informations recuperes (nous n'utilisons que des images a 24 bits par pixel, soit 8 bits pour le rouge, 8 bits pour le vert et 8 bits pour le bleu) nous convertissons notre image dans le format lisible par l'ecran, qui est le RGB565. Ce format compresse (avec pertes) la precision des couleurs pour que celle-ci soit ordonnee avec 5 bits pour le rouge, 6 bits pour le vert et 5 bits pour le bleu. Nous rendre plus pratique cette conversion, nous avons cree un [https://github.com/henyxia/bmp2rgb565 programme] permettant l'automatisation de ce processus. Une fois ce programme utilise (a travers le Makefile du projet principal), l'image est envoye a l'ecran. Apres chronometrage, nous arrivons a un temps moyen de 1,2 secondes pour afficher une image integralement. Ce temps est bien inferieur aux 17 secondes de la librairie X11, mais est aussi legerement eloigne des 25 images par secondes promises par le vendeur (Ce taux de rafraîchissement n'etant atteignable que si nous ne generons des carres de couleurs). Cependant ce temps de reponse est largement suffisant pour l'utilisation que nous souhaitons en faire.

Nous nous sommes donc penche sur l'utilisation de l'interface tactile de l'ecran. C'est une lecture USB par interruption qui nous donne si l'ecran est actuellement presse, et si oui où la pression est effectuee. Donc, pour permettre au programme de comprendre quelle fonction appeler lors d'un appui sur l'ecran, nous avons cree un autre format de fichier. Celui ci, aussi issu du BMP, est une liste de pixel en nuance de gris. Donc, chaque pixel est represente par une valeur comprise entre 0 et 255. En fonction de la valeur, le programme principal appelle la fonction en consequence. De façon analogue a la conversion de BMP et RGB565, nous avons cree un programme permettant de convertir les BMP en suite de bytes correspondant aux pixels. Ce programme ce trouve a [https://github.com/henyxia/bmp2map l'adresse suivante].

==Fin du projet==
===Video de presentation===
Nous pensons enregistrer la video pendant les vacances a l'aide d'une camera professionnelle.

La video du projet est disponible a [https://www.youtube.com/watch?v=GXPjxfLEy3o cette adresse].

===Rapport===
Le rapport est disponible ici : [[Fichier:RapportTweek.pdf]]

===Conclusion===
Au terme des creneaux alloues sur le semestre pour le projet, nous n’avons pas reussi a atteindre l’integralite des objectifs. Cependant, on peut considerer que le projet est un succes car nous avons reussi a produire un cafe, reguler les differents elements de la machine a cafe (pompe, chauffe-eau et debitmetre). Nous sommes aussi parvenu a realiser une interface homme machine tactile permettant la selection de la quantite de cafe a produire. Bien que cela ne soit pas detaille dans notre rapport (puisque cette partie ne concerne pas l’IMA), nous avons reussi a creer des pieces en PLA, prouvant la faisabilite d’une machine affranchie des capsules proprietaire Nespresso. 

Ce projet a etait une occasion pour mixer les connaissances des deux sections de l’IMA: celle des Systemes Autonomes et celles des Systemes Communiquants puisque que notre projet comporte une partie importante de regulation code en C sur une RaspberryPi embarquee.";*/
//$project = unserialize(file_get_contents('store'));
//file_put_contents("store", serialize($project));
//var_dump($project);
//echo "</pre>";
$var = "* lel
** moarlel
** lelmut
*** delel
*** lelception
** somelel
* lelland";
echo $var;
preg_match_all("/^\* ([\w]*([\r\n]{1,2}\*{2}\ \w*)*)/m", $var, $matches);
var_dump($matches);
?>

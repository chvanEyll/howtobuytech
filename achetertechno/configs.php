<?php include("includes/head.php"); ?>
<head>
	<title>Configurations | AcheterTechno.com</title>
	<meta name="description" content="Configurations n�cessaires � l'achat d'un ordinateur ou autre appareil.">
	<meta name="keywords" content="configurer ordinateur, configuration ordinateur, optimiser ordinateur, configurer routeur">
	<meta name="author" content="Charles et Gabriel">
</head>
<?php include("includes/header.php"); ?>
<?php include("includes/subbanner.php"); ?>

<body>
<h1>Configurations</h1>

<!--aller �--><div id="earlycentertoleft">

	<span class="subsubb">
		Aller �:
	</span>

	<a class="subsubb" href="#sauvewindows">Effectuer une sauvegarde Windows</a>

	<a class="subsubb" href="#optiordi">Optimiser un ordinateur</a>

	<a class="subsubb" href="#configtablette">Configurer une tablette</a>
<br id = "showOnWide"><br id = "showOnWide">
	<a class="subsubb" href="#configrouteur">Configurer un routeur</a>
	
	<a class="subsubb" href="#ssd">Avantages et installation d'un disque dur SSD</a>
	
	
</div><br>

<!--content-->
<a name="sauvewindows"></a>
	<h2>Effectuer une sauvegarde Windows</h2>
		<p>
			<b>Point de restauration</b> <br>
			Le point de restauration permet de cr�er une image de l'�tat de votre syst�me d'exploitation 
			sur l'ordinateur, manuellement ou automatiquement, afin de restaurer le syst�me � un �tat ant�rieur 
			dans l'�ventualit� o� vous contractez un virus ou supprimez malencontreusement des fichiers. 
			Toutefois, le point de restauration s'av�re inutile si votre disque dur devient inutilisable.
		</p>
		<p>
			La proc�dure pour atteindre le menu de restauration est la suivante:
			<ul>
				<li>Clic sur le menu d�marrer</li>
				<li>Clic sur � Panneau de configuration �</li>
				<li>Clic sur � R�cup�ration �</li>
				<li>Clic sur � Configurer la restauration �</li>
			</ul>
		</p>
		<p>
			Une fois dans le menu de restauration, trois options s'offrent � vous:
				<ul>
					<li>� Restauration du syst�me �: permet de restaurer une sauvegarde existante</li>
					<li>� Configurer �: permet d'activer/d�sactiver la cr�ation automatique de point de restauration</li>
					<li>� Cr�er �: permet de cr�er un point de restauration imm�diatement</li>
				</ul>
		</p>
		<p>
			<b>Image syst�me</b> <br>
			L'image syst�me, contrairement au point de restauration, se sauvegarde sur plusieurs DVD ou encore sur une 
			cl� USB (Windows 8 ne permet de sauvegarder que sur une cl� USB). Il est recommand� d'effectuer cette sauvegarde � l'achat de l'ordinateur au cas o� votre disque dur 
			deviendrait inop�rable.
		</p>
		<p>
			La proc�dure pour sauvegarder une image syst�me est la suivante:
			<ul>
				<li>Clic sur le menu d�marrer</li>
				<li>Clic sur � Panneau de configuration �</li>
				<li>Clic sur � R�cup�ration �</li>
				<li>Clic sur � Configurer la restauration �</li>
				<li>S�lectionner � Cr�er une image syst�me � (� Cr�er un lecteur de r�cup�ration � sur Windows 8) </li>
				<li>S�lectionner les partitions � sauvegarder</li>
				<li>Clic sur � D�marrer la sauvegarde �</li>
				<li>Accepter la cr�ation du disque de r�paration (recommand�)</li>
			</ul>
		</p>
		
<a name="optiordi"></a>
	<h2>Optimiser un ordinateur</h2>
		
		<p>
			<b>Vous prot�ger des logiciels malveillants:</b> <br>
			La premi�re �tape pour la s�curisation de son ordinateur r�side dans l'acquisition d'un antivirus, 
			soit gratuit(Avast, Microsoft Security Essentials) ou payant (Norton Internet Security, Kaspersky Internet Security).
			<br><br>
			Il importe aussi de se procurer un anti-malware tel que Malwarebytes (balayage manuel pour la version gratuite, 
			balayage automatique pour la version payante).
			<br><br>
			Les plugins et barres de recherche de votre navigateur web devraient aussi subir une inspection. Tout ce qui 
			semble louche m�rite d'�tre d�sactiv�, et toute barre de recherche autre que Google devrait �tre remplac�e. 
			<br><br>
			Puis, dans Panneau de configuration > Programmes et fonctionnalit�s, v�rifiez que vous n'avez pas de logiciels 
			factices se faisant par exemple passer pour des antivirus. Une recherche du nom du logiciel dans Google permet 
			g�n�ralement de v�rifier sa l�gitimit�.
			<br><br>
			Finalement, les fichiers temporaires doivent �tre vid�s de temps en temps. Pour ce faire, ouvrez l'ex�cuteur Windows 
			(touche windows + R) et entrez � %temp% � pour ouvrir le dossier contenant les fichiers temporaires, puis supprimez-les.
		</p>
		
		<p>
			<b>D�sactiver les logiciels inutiles au d�marrage:</b> <br>
			Afin de d�sactiver les logiciels inutiles qui s'activent au d�marrage et qui peuvent affecter les performances de 
			votre ordinateur, il sufit d'ouvrir l'ex�cuteur Windows (bouton windows + R) puis de taper � msconfig � dans le 
			champ. Ensuite, cliquez sur l'onglet � d�marrage � et d�cochez ce qui vous semble louche ou inutile. Une recherche 
			du nom du logiciel permet g�n�ralement de v�rifier sa l�gitimit�.
		</p>
		<p>
			<b>D�fragmenter le disque dur (sauf SSD)</b> <br>
			Apr�s avoir v�rifi� qu'il reste de l'espace disponible sur votre disque dur, il peut s'av�rer pertinent de d�fragmenter 
			votre disque dur. La proc�dure est la suivante:
				<ul>
					<li>Clic sur le menu d�marrer</li>
					<li>Taper � d�fragmenter � dans la barre de recherche</li>
					<li>Lancer la d�fragmentation</li>
				</ul>
		</p>
		<p>
			Finalement, il est possible que votre ordinateur ne r�ponde tout simplement plus � votre besoin. Vous pouvez v�rifier 
			cette �ventualit� en ouvrant le gestionnaire des t�ches (ctrl + alt + suppr) et en regardant quels logiciels sollicitent 
			la majorit� de vos performances syst�me.
		</p>
<a name="configtablette"></a>
	<h2>Configurer une tablette</h2>
		<p>
			La configuration de tablette, telle qu'elle est propos�e dans les magasins d'informatique, consiste en r�alit� � s�lectionner 
			votre r�seau sans-fil et cr�er un compte pour votre tablette. La proc�dure est la suivante:
			<ul>
				<li>Cr�er un compte courriel (Gmail pour Android et email pour Windows)</li>
				<li>Suivre la proc�dure pr��tablie pour configurer la connexion sans-fil</li>
				<li>S�lectionner quelques pr�f�rences telles votre langue ou votre r�gion</li>
			</ul>
			<p>
			Il est � noter que la configuration d'un iPad sans ordinateur requiert un acc�s au WiFi.
			</p>
			</p>
		
		
<a name="configrouteur"></a>
	<h2>Configurer un routeur</h2>
		<p>
			La premi�re �tape de l'installation d'un routeur consiste � brancher un c�ble r�seau dans un des ports 1 � 4 du routeur puis 
			� votre ordinateur.
		</p>
		<p>
			<b>Configuration par disque:</b> <br>
			La configuration par disque est extr�mement simple; il suffit de suivre les instructions pr�sent�es � l'�cran qui vous 
			am�neront � choisir un nom et un mot de passe pour votre r�seau sans-fil.
		</p>
		<p>
			<b>Configuration manuelle:</b> <br>
			Si jamais vous avez perdu votre CD-Rom ou bien si vous d�sirez configurer manuellement votre routeur, voici la proc�dure � suivre:
			<ul>
				<li>Entrer votre adresse IP dans la barre de navigation web (normalement 192.168.0.1, 192.168.1.1 ou 192.168.2.1).</li>
				<li>Entrer votre nom d'utilisateur/mot de passe (habituellement admin/Admin, administrateur/Administrateur ou administrator/Administrator).</li>
				<li>S�lectionner � configuration manuelle �.</li>
				<li>Dans � SSID �, entrer le nom d�sir� pour votre routeur.</li>
				<li>S�lectionner WPA2 comme type de s�curit� d�sir�e.</li>
				<li>L'option � visibilit� � (parfois � diffusion de l'SSID �) permet de rendre votre r�seau invisible, requ�rant de conna�tre le nom exact du r�seau pour s'y connecter.</li>
				<li>Changer le mot de passe du routeur (et non celui du WiFi) est recommand�.</li>
			</ul>
		<p>
			Si jamais votre mot de passe ne fonctionne pas, il a peut-�tre d�j� �t� modifi�. Dans ce cas, il suffit de maintenir le bouton Reset derri�re 
			le routeur durant une minute afin de r�initialiser les pr�f�rences.
		
<a name="ssd"></a>
	<h2>Avantages et installation d'un SSD</h2>
		
		<p>
			<b>Avantages:</b> <br>
			<ul>
				<li>Temps d'acc�s et d'�criture beaucoup plus rapide qu'un disque dur (d�marrage plus rapide de l'ordinateur, chargement des jeux et logiciels plus rapide)</li>
				<li>Consomme moins d'�lectricit� qu'un disque dur</li>
				<li>Discr�tion et fiabilit�</li>
			</ul>
			<p>
			Le seul d�savantage d'un SSD r�side dans le ratio prix/stockage. On conseille donc aux utilisateurs d'ordinateurs de bureau de 
			se procurer un SSD sur lequel ils installeront leur syst�me d'exploitation ainsi que leurs logiciels principaux. Par ailleurs, 
			les utilisateurs d'ordinateurs portables auront avantage � opter pour un SSD avec suffisamment de stockage pour le syst�me 
			d'exploitation, tous leurs logiciels ainsi que leurs documents.
			</p>
			</p>
		<p>
			La proc�dure pour l'installation d'un SSD dans un ordinateur de bureau est la suivante:
			<ul>
				<li>S'assurer que l'ordinateur est v�ritablement �teint</li>
				<li>D�brancher l'ordinateur de toute source �lectrique</li>
				<li>D�visser les vis qui servent � retenir le couvercle de l'ordinateur</li>
				<li>Si vous d�sirez retirer le disque dur, d�branchez son c�ble SATA et son c�ble Power SATA, d�vissez les 4 vis qui retiennent le disque et retirez-le.</li>
				<li>Ins�rer le SSD dans l'emplacement pr�vu � cet effet. S'il s'agit d'un SSD 2.5'', un adapteur sp�cifique sera n�cessaire.</li>
				<li>Brancher le c�ble SATA de la carte-m�re vers le SSD (s'assurer de se connecter aux ports SATA 3 de la carte m�re; information disponible sur le guide de votre carte-m�re, disponible sur le site du fabriquant)</li>
				<li>Red�marrer l'ordinateur</li>
				<li>Installer Windows � partir de votre disque d'installation ou de votre <a href="#sauvewindows">sauvegarde</a></li>
			</ul>
		</p>
		<p>
			La proc�dure pour l'installation d'un SSD dans un ordinateur portable est la suivante:
			<ul>
				<li>S'assurer que le portable est v�ritablement �teint</li>
				<li>D�brancher le portable de toute source �lectrique et retirer la batterie</li>
				<li>Poser le portable � l'envers sur son couvercle</li>
				<li>D�visser les vis du couvercle du disque dur, arborant habituellement un petit logo sp�cifique (3 petits disques l'un sur l'autre)</li>
				<li>D�visser les vis de la petite cage contenant le disque dur</li>
				<li>Remplacer le disque dur par le SSD en prenant soin de rebrancher les prises SATA et Power SATA</li>
				<li>Remettre la batterie, red�marrer le portable</li>
				<li>Installer Windows � partir du disque d'installation ou de votre <a href ="#sauvewindows">sauvegarde</a></li>
			</ul>
		
		</p>
<br>

</body>

<?php include("includes/footer.php"); ?>
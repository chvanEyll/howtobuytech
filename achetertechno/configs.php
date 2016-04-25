<?php include("includes/head.php"); ?>
<head>
	<title>Configurations | AcheterTechno.com</title>
	<meta name="description" content="Configurations nécessaires à l'achat d'un ordinateur ou autre appareil.">
	<meta name="keywords" content="configurer ordinateur, configuration ordinateur, optimiser ordinateur, configurer routeur">
	<meta name="author" content="Charles et Gabriel">
</head>
<?php include("includes/header.php"); ?>
<?php include("includes/subbanner.php"); ?>

<body>
<h1>Configurations</h1>

<!--aller à--><div id="earlycentertoleft">

	<span class="subsubb">
		Aller à:
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
			Le point de restauration permet de créer une image de l'état de votre système d'exploitation 
			sur l'ordinateur, manuellement ou automatiquement, afin de restaurer le système à un état antérieur 
			dans l'éventualité où vous contractez un virus ou supprimez malencontreusement des fichiers. 
			Toutefois, le point de restauration s'avère inutile si votre disque dur devient inutilisable.
		</p>
		<p>
			La procédure pour atteindre le menu de restauration est la suivante:
			<ul>
				<li>Clic sur le menu démarrer</li>
				<li>Clic sur « Panneau de configuration »</li>
				<li>Clic sur « Récupération »</li>
				<li>Clic sur « Configurer la restauration »</li>
			</ul>
		</p>
		<p>
			Une fois dans le menu de restauration, trois options s'offrent à vous:
				<ul>
					<li>« Restauration du système »: permet de restaurer une sauvegarde existante</li>
					<li>« Configurer »: permet d'activer/désactiver la création automatique de point de restauration</li>
					<li>« Créer »: permet de créer un point de restauration immédiatement</li>
				</ul>
		</p>
		<p>
			<b>Image système</b> <br>
			L'image système, contrairement au point de restauration, se sauvegarde sur plusieurs DVD ou encore sur une 
			clé USB (Windows 8 ne permet de sauvegarder que sur une clé USB). Il est recommandé d'effectuer cette sauvegarde à l'achat de l'ordinateur au cas où votre disque dur 
			deviendrait inopérable.
		</p>
		<p>
			La procédure pour sauvegarder une image système est la suivante:
			<ul>
				<li>Clic sur le menu démarrer</li>
				<li>Clic sur « Panneau de configuration »</li>
				<li>Clic sur « Récupération »</li>
				<li>Clic sur « Configurer la restauration »</li>
				<li>Sélectionner « Créer une image système » (« Créer un lecteur de récupération » sur Windows 8) </li>
				<li>Sélectionner les partitions à sauvegarder</li>
				<li>Clic sur « Démarrer la sauvegarde »</li>
				<li>Accepter la création du disque de réparation (recommandé)</li>
			</ul>
		</p>
		
<a name="optiordi"></a>
	<h2>Optimiser un ordinateur</h2>
		
		<p>
			<b>Vous protéger des logiciels malveillants:</b> <br>
			La première étape pour la sécurisation de son ordinateur réside dans l'acquisition d'un antivirus, 
			soit gratuit(Avast, Microsoft Security Essentials) ou payant (Norton Internet Security, Kaspersky Internet Security).
			<br><br>
			Il importe aussi de se procurer un anti-malware tel que Malwarebytes (balayage manuel pour la version gratuite, 
			balayage automatique pour la version payante).
			<br><br>
			Les plugins et barres de recherche de votre navigateur web devraient aussi subir une inspection. Tout ce qui 
			semble louche mérite d'être désactivé, et toute barre de recherche autre que Google devrait être remplacée. 
			<br><br>
			Puis, dans Panneau de configuration > Programmes et fonctionnalités, vérifiez que vous n'avez pas de logiciels 
			factices se faisant par exemple passer pour des antivirus. Une recherche du nom du logiciel dans Google permet 
			généralement de vérifier sa légitimité.
			<br><br>
			Finalement, les fichiers temporaires doivent être vidés de temps en temps. Pour ce faire, ouvrez l'exécuteur Windows 
			(touche windows + R) et entrez « %temp% » pour ouvrir le dossier contenant les fichiers temporaires, puis supprimez-les.
		</p>
		
		<p>
			<b>Désactiver les logiciels inutiles au démarrage:</b> <br>
			Afin de désactiver les logiciels inutiles qui s'activent au démarrage et qui peuvent affecter les performances de 
			votre ordinateur, il sufit d'ouvrir l'exécuteur Windows (bouton windows + R) puis de taper « msconfig » dans le 
			champ. Ensuite, cliquez sur l'onglet « démarrage » et décochez ce qui vous semble louche ou inutile. Une recherche 
			du nom du logiciel permet généralement de vérifier sa légitimité.
		</p>
		<p>
			<b>Défragmenter le disque dur (sauf SSD)</b> <br>
			Après avoir vérifié qu'il reste de l'espace disponible sur votre disque dur, il peut s'avérer pertinent de défragmenter 
			votre disque dur. La procédure est la suivante:
				<ul>
					<li>Clic sur le menu démarrer</li>
					<li>Taper « défragmenter » dans la barre de recherche</li>
					<li>Lancer la défragmentation</li>
				</ul>
		</p>
		<p>
			Finalement, il est possible que votre ordinateur ne réponde tout simplement plus à votre besoin. Vous pouvez vérifier 
			cette éventualité en ouvrant le gestionnaire des tâches (ctrl + alt + suppr) et en regardant quels logiciels sollicitent 
			la majorité de vos performances système.
		</p>
<a name="configtablette"></a>
	<h2>Configurer une tablette</h2>
		<p>
			La configuration de tablette, telle qu'elle est proposée dans les magasins d'informatique, consiste en réalité à sélectionner 
			votre réseau sans-fil et créer un compte pour votre tablette. La procédure est la suivante:
			<ul>
				<li>Créer un compte courriel (Gmail pour Android et email pour Windows)</li>
				<li>Suivre la procédure préétablie pour configurer la connexion sans-fil</li>
				<li>Sélectionner quelques préférences telles votre langue ou votre région</li>
			</ul>
			<p>
			Il est à noter que la configuration d'un iPad sans ordinateur requiert un accès au WiFi.
			</p>
			</p>
		
		
<a name="configrouteur"></a>
	<h2>Configurer un routeur</h2>
		<p>
			La première étape de l'installation d'un routeur consiste à brancher un câble réseau dans un des ports 1 à 4 du routeur puis 
			à votre ordinateur.
		</p>
		<p>
			<b>Configuration par disque:</b> <br>
			La configuration par disque est extrêmement simple; il suffit de suivre les instructions présentées à l'écran qui vous 
			amèneront à choisir un nom et un mot de passe pour votre réseau sans-fil.
		</p>
		<p>
			<b>Configuration manuelle:</b> <br>
			Si jamais vous avez perdu votre CD-Rom ou bien si vous désirez configurer manuellement votre routeur, voici la procédure à suivre:
			<ul>
				<li>Entrer votre adresse IP dans la barre de navigation web (normalement 192.168.0.1, 192.168.1.1 ou 192.168.2.1).</li>
				<li>Entrer votre nom d'utilisateur/mot de passe (habituellement admin/Admin, administrateur/Administrateur ou administrator/Administrator).</li>
				<li>Sélectionner « configuration manuelle ».</li>
				<li>Dans « SSID », entrer le nom désiré pour votre routeur.</li>
				<li>Sélectionner WPA2 comme type de sécurité désirée.</li>
				<li>L'option « visibilité » (parfois « diffusion de l'SSID ») permet de rendre votre réseau invisible, requérant de connaître le nom exact du réseau pour s'y connecter.</li>
				<li>Changer le mot de passe du routeur (et non celui du WiFi) est recommandé.</li>
			</ul>
		<p>
			Si jamais votre mot de passe ne fonctionne pas, il a peut-être déjà été modifié. Dans ce cas, il suffit de maintenir le bouton Reset derrière 
			le routeur durant une minute afin de réinitialiser les préférences.
		
<a name="ssd"></a>
	<h2>Avantages et installation d'un SSD</h2>
		
		<p>
			<b>Avantages:</b> <br>
			<ul>
				<li>Temps d'accès et d'écriture beaucoup plus rapide qu'un disque dur (démarrage plus rapide de l'ordinateur, chargement des jeux et logiciels plus rapide)</li>
				<li>Consomme moins d'électricité qu'un disque dur</li>
				<li>Discrétion et fiabilité</li>
			</ul>
			<p>
			Le seul désavantage d'un SSD réside dans le ratio prix/stockage. On conseille donc aux utilisateurs d'ordinateurs de bureau de 
			se procurer un SSD sur lequel ils installeront leur système d'exploitation ainsi que leurs logiciels principaux. Par ailleurs, 
			les utilisateurs d'ordinateurs portables auront avantage à opter pour un SSD avec suffisamment de stockage pour le système 
			d'exploitation, tous leurs logiciels ainsi que leurs documents.
			</p>
			</p>
		<p>
			La procédure pour l'installation d'un SSD dans un ordinateur de bureau est la suivante:
			<ul>
				<li>S'assurer que l'ordinateur est véritablement éteint</li>
				<li>Débrancher l'ordinateur de toute source électrique</li>
				<li>Dévisser les vis qui servent à retenir le couvercle de l'ordinateur</li>
				<li>Si vous désirez retirer le disque dur, débranchez son câble SATA et son câble Power SATA, dévissez les 4 vis qui retiennent le disque et retirez-le.</li>
				<li>Insérer le SSD dans l'emplacement prévu à cet effet. S'il s'agit d'un SSD 2.5'', un adapteur spécifique sera nécessaire.</li>
				<li>Brancher le câble SATA de la carte-mère vers le SSD (s'assurer de se connecter aux ports SATA 3 de la carte mère; information disponible sur le guide de votre carte-mère, disponible sur le site du fabriquant)</li>
				<li>Redémarrer l'ordinateur</li>
				<li>Installer Windows à partir de votre disque d'installation ou de votre <a href="#sauvewindows">sauvegarde</a></li>
			</ul>
		</p>
		<p>
			La procédure pour l'installation d'un SSD dans un ordinateur portable est la suivante:
			<ul>
				<li>S'assurer que le portable est véritablement éteint</li>
				<li>Débrancher le portable de toute source électrique et retirer la batterie</li>
				<li>Poser le portable à l'envers sur son couvercle</li>
				<li>Dévisser les vis du couvercle du disque dur, arborant habituellement un petit logo spécifique (3 petits disques l'un sur l'autre)</li>
				<li>Dévisser les vis de la petite cage contenant le disque dur</li>
				<li>Remplacer le disque dur par le SSD en prenant soin de rebrancher les prises SATA et Power SATA</li>
				<li>Remettre la batterie, redémarrer le portable</li>
				<li>Installer Windows à partir du disque d'installation ou de votre <a href ="#sauvewindows">sauvegarde</a></li>
			</ul>
		
		</p>
<br>

</body>

<?php include("includes/footer.php"); ?>
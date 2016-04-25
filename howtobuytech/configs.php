<?php include("includes/head.php"); ?>
<head>
	<title>Configurations | AcheterTechno.com</title>
	<meta name="description" content="Required configurations after purhcasing a computer, tablet or more.">
	<meta name="keywords" content="configure computer, install computer, optimize computer, configure router, secure router">
	<meta name="author" content="Charles et Gabriel">
</head>
<?php include("includes/header.php"); ?>
<?php include("includes/subbanner.php"); ?>

<body>
<h1>Configurations</h1>

<!--aller à--><div id="earlycentertoleft">

	<span class="subsubb">
		Go to:
	</span>

	<a class="subsubb" href="#sauvewindows">Create a Windows backup</a>

	<a class="subsubb" href="#optiordi">Optimize a computer</a>

	<a class="subsubb" href="#configtablette">Configure a tablet</a>
<br id = "showOnWide"><br id = "showOnWide">
	<a class="subsubb" href="#configrouteur">Configure a router</a>
	
	<a class="subsubb" href="#ssd">Benefits and installation of an SSD</a>
	
	
</div><br>

<!--content-->
<a name="sauvewindows"></a>
	<h2>Create a Windows backup</h2>
		<p>
			<b>File backup</b> <br>
			File backup allows you to create a copy of the current state of your operating system on your computer, either 
			manually or automatically, in order to restore the system to an anterior state if you ever delete a file unintentionnally. 
			However, the file backup is useless if your hard drive becomes unusable.
		</p>
		<p>
			The following steps will lead you to the backup menu:
			<ul>
				<li>Click on the start menu</li>
				<li>Click on "Control panel"</li>
				<li>Click on "Recovery"</li>
				<li>Click on "Configure system restore"</li>
			</ul>
		</p>
		<p>
			Once in the system restore menu, you have 3 options:
			Une fois dans le menu de restauration, trois options s'offrent à vous:
				<ul>
					<li>« System restore »: allows you to restore an existing backup</li>
					<li>« Configure »: allows you to activate/deactivate automatic restore point creation</li>
					<li>« Create »: allows you to create a restore point directly</li>
				</ul>
		</p>
		<p>
			<b>System image</b> <br>
			The system image, contrary to the file backup, is stored on multiple DVDs or on a USB Drive (only on USB for 
			Windows 8). It is recommended to make this save right after you purchased your computer in case the hard drive 
			becomes unusable.
		</p>
		<p>
			The following steps will enable you to save a system image:
			<ul>
				<li>Click on the start menu</li>
				<li>Click on "Control panel"</li>
				<li>Click on "Recovery"</li>
				<li>Click on "Configure system restore"</li>
				<li>Click on "Create a system image" ("Create a recovery drive" on Windows 8)</li>
				<li>Select the partition to backup</li>
				<li>Start backup</li>
				<li>Accept creation of the repair disk (recommended)</li>
			</ul>
		</p>
		
<a name="optiordi"></a>
	<h2>Optimize a computer</h2>
		
		<p>
			<b>Protect yourself form malicious software:</b> <br>
			The first step in order to secure your computer is to get an antivirus, either free (Avast, Miscrosoft Security Essentials) 
			or to buy one (Norton Internet Security, Kaspersky Internet Security).
			<br><br>
			It is also important to get an anti-malware such as Malwarebytes (Manual scan for the free version, automatic scan for the 
			regular version).
			<br><br>
			Plugins and toolbars on your web browser should also be investigated. Everything that seems fishy should be removed, and 
			any other searchbar than Google should be replaced.
			<br><br>
			Then, in Control panel > Programs and featueres, make sure that you do not have fake software which imitates an antivirus 
			for instance. A simple search of the software's name in Google is usually enough to verify its legitimacy.
			<br><br>
			In conclusion, temporary files should be deleted from time to time. In order to do that, open the Windows run command 
			(Windows key + R) and enter "%temp%" to open the folder containing those files, then delete them.
		</p>
		
		<p>
			<b>Deactivate useless startup programs:</b> <br>
			In order to deactivate useless software which run automatically on startup (and will therefore alter your computer's 
			performance), simply open the Windows run command (Windows key + R) and enter "msconfig". Then, click on the "startup" 
			tab and uncheck every software which seems useless on startup or even fishy. A simple search of the software's name in 
			Google is usually enough to verify its legitimacy.
		</p>
		<p>
			<b>Defragment the hard drive (except SSD)</b> <br>
			After you made sure there is space left on your hard drive, it is advised to defragment it. The procedure is as follows:
				<ul>
					<li>Click on the start menu</li>
					<li>Type "defragment" in the search bar</li>
					<li>Start the defragmentation</li>
				</ul>
		</p>
		<p>
			In conclusion, it is possible that your computer simply does not meet your needs anymore. You may verify this by opening 
			the task manager (ctrl + alt + del) and by looking at which software takes up most of your CPU.
		</p>
<a name="configtablette"></a>
	<h2>Configure a tablet</h2>
		<p>
			The tablet configuration, such as it is often offered in stores, simply consists in selecting your wireless network as well as 
			to create an account for the tablet. Here is how to proceed:
			<ul>
				<li>Set up an email account (Gmail for Android and email for Windows)</li>
				<li>Follow the guided procedure to configure your wireless connection</li>
				<li>Select a few preferences such as your language and region</li>
			</ul>
			<p>
			It is important to note that in order to configure an iPad without connecting it to a computer, you will need a WiFi connection.
			</p>
		</p>
		
		
<a name="configrouteur"></a>
	<h2>Configure a router</h2>
		<p>
			The first step in order to install your router is to plug a network cable in one of the 4 ports of the router then into your computer.
		</p>
		<p>
			<b>Configuration with CD:</b> <br>
			The CD configuration is extremely simple and only requires that you follow the instructions on the screen in order to 
			choose a network name and password.
		</p>
		<p>
			<b>Manual configuration:</b> <br>
			If you lost your CD or if you want to configure your router manually, the procedure is as follows:
			<ul>
				<li>Enter your IP adress in the navigation bar of your web browser (usually 192.168.0.1, 192.168.1.1 or 192.168.2.1).</li>
				<li>Enter your Username/password (default is usually admin/Admin or administrator/Administrator)</li>
				<li>Select "Manual Configuration"</li>
				<li>In "SSID", enter the name you want for your network.</li>
				<li>Select WPA2 as the security norm.</li>
				<li>The "visibility" option enables you to hide your network, requiring anyone who wants to connect to it to know its exact name.</li>
				<li>Changing the router password (no the WiFi password) is recommended.</li>
			</ul>
		<p>
			If your password does not work, it may have been modified already. In this case, simply press the reset button behind your router for about a minute 
			in order to reset its settings.
		
<a name="ssd"></a>
	<h2>Advantages and installation of an SSD</h2>
		
		<p>
			<b>Advantages:</b> <br>
			<ul>
				<li>Much better writing and reading time than a hard disk drive (faster startup, faster loading of games and programs).
				<li>Consumes less electricity than a hard disk drive</li>
				<li>Quiet and reliable</li>
			</ul>
			<p>
			The only disadvantage of an SSD is its price/storage ratio. Hence, desktop computer users may benefit from having two drives; 
			one SSD on which they have their operating system and main software, and one hard disk drive on which they will have their movies, 
			music and other heavy data. Moreover, laptop users will need an SSD with enough storage for their operating system and all their software and data.
		</p>
		</p>
		<p>
			The procedure to install an SSD in a desktop computer is as follows:
			<ul>
				<li>Make sure the computer is completely turned off</li>
				<li>Unplug the computer from any power source</li>
				<li>Remove the computer side panel</li>
				<li>If you wish to remove the hard disk drive, unplug its SATA cable as well as its Power SATA cable, remove the screws holding the 
				disk in place then remove it.
				<li>Insert the SSD into a disk slot. If it is a 2.5'' SSD, an adapter may be necessary.</li>
				<li>Plug in the SATA cable from the motherboard to the SSD (make sure to connect it to the SATA 3 port; info available in your 
				motherboard card on the maker's website).</li>
				<li>Reboot the computer</li>
				<li>Install Windows from your installation disk or from your <a href="#sauvewindows">backup save</a>.</li>
			</ul>
		</p>
		<p>
			The procedure to install an SSD in a laptop is as follows:
			<ul>
				<li>Make sure the laptop is completely turned off</li>
				<li>Unplug the laptop from any power source and remove the battery</li>
				<li>Turn the laptop upside-down</li>
				<li>Unscrew the hard drive panel (usually indicated by a logo (3 smal disks on top of each other))</li>
				<li>Unscrew the small cage containing the hard disk</li>
				<li>Replace the hard disk with the SSD while making sure to plug in the SATA and Power SATA cables</li>
				<li>Put the battery back in, reboot the laptop</li>
				<li>Install Windows from your installation disk or from your <a href="#sauvewindows">backup save</a>.</li>
			</ul>
		
		</p>
<br>

</body>

<?php include("includes/footer.php"); ?>
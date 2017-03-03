<?php

	// Defines the folder where the application files (system folder, wmm folder, and config.php file) are located.
	// This is useful if you want to put the application files outside the webroot.
	//
	// Example:
	// 		webroot: /var/www/domain/public.html => must contain index.php, folder.php, css folder and import folder
	// 		app files: /var/www/domain => define('APP_FOLDER' , '/var/www/domain') and place the system folder, the wmm folder, and the config.php file in this folder
	//
	// Leave blank ('') to use the default folder (the same as index.php)
	
	define('APP_FOLDER' , '');
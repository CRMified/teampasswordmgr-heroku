<?php

// Set these database parameters before installing Team Password Manager on heroku

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

// MySQL Database server
define('CONFIG_HOSTNAME', $server);	

// User that accesses the database server, that should have all privileges on the database CONFIG_DATABASE
define('CONFIG_USERNAME', $username);		 

// User password
define('CONFIG_PASSWORD', $password);

// Database for Team Password Manager. You must manually create it before installing Team Password Manager
define('CONFIG_DATABASE', $db);

// Default language of the installation.
// The user can change this language.
// Defaults to "en" if not used.
//define('TPM_DEFAULT_LANG', 'en');

// Uploads folder. You can set it in two ways:
// 1. With an absolute path. Example: /var/www/domain/uploads/
// 2. With a relative path (relative to index.php). Example: ./uploads/
// Must be accessible and writable by the web server
// Define with or without trailing slash
// Defaults to ./uploads/, uncomment the following line to change this default value:
//define('UPLOADS_FOLDER' , './uploads/');

// For other parameters read: http://teampasswordmanager.com/docs/all-parameters-config-php/
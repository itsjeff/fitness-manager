<?php
// Connect to database
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = '5x5';

$db = new mysqli($host, $user, $pass, $db);

$view_path = 'application/views/';

//  Bring in the spl_loader
require_once('core/Loader.php');

// Timezone
$timezone = 'Australia/Sydney';

date_default_timezone_set($timezone);

// Start session to allow login and such
session_start();

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Muuda ainult neid andmeid, kui sinu XAMPP seadistus on teine.
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'autorent');
define('DB_USER', 'root');
define('DB_PASS', '');
define('SITE_NAME', 'Autorent');

<?php
// Define File paths constants
require 'define.php';

// App Initialization
require 'app.php';

// Database Initialization
require 'database.php';


// Load Container
require 'dependencies.php';

// Monolog
require 'logger.php';

// Call Highway Patrol Group
require '../routes/web.php';

// Call Air Force Group
require '../routes/api.php';

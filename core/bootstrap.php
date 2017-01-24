<?php
// Initiate constants
require 'define.php';

// App Initialization
require 'app.php';

// Load Container
require 'container.php';

// Database connection
require 'database.php';

// Monolog
require 'logger.php';

// Call Highway Patrol Group
require '../routes/web.php';

// Call Air Force Group
require '../routes/api.php';
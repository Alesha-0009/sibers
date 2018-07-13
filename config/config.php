<?php

//Configuration database connection
define('DB_HOST', 'localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sibers');

//Controller path
define('CNT_PATH', 'classes/controllers/');
//Views path
define('VIEW','classes/views/');

//domains
define('DOMAINS',$_SERVER['HTTP_HOST'] . '/');
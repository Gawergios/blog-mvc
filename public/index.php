<?php



define( "DS" , DIRECTORY_SEPARATOR );  // to put slash or backslash
define( "ROOT", dirname(__DIR__) .DS) ;
define( "APP" , ROOT . "app" . DS );
define( "CONFIG" , APP . "config" . DS );
define( "CONTROLLER" , APP . "controllers" . DS );
define( "CORE" , APP . "core" . DS );
define( "MODEL", APP . "models" . DS );
define("VIEW", APP . "views" . DS);

define( "DOMAIN","http://mymvc.test");
define("PATH",DOMAIN."/");


require_once("../vendor/autoload.php");

$app = new App\core\app();



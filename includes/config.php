<?php
/**
 * Created by PhpStorm.
 * User: sulman.baig
 * Date: 1/16/2015
 * Time: 12:04 PM
 */

// these two constants are used to create root-relative web addresses
// and absolute server paths throughout all the code

define("BASE_URL","/");
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/");

define("DB_HOST","localhost");
define("DB_NAME","shirts4mike");
define("DB_PORT","3306"); // default: 3306
define("DB_USER","root");
define("DB_PASS","");
?>
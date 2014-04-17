<?php 
/**
* Defines constants to be used for the base url and root path.
* this makes it easier when files are migrated to a live server from local development
* as you will only have to update the information in one spot. 
**/
define("BASE_URL",""); 
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . ""); 

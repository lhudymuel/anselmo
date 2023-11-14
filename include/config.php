<?php
defined('server') ? null : define("server", "localhost");
defined('user') ? null : define ("user", "u801089727_aasmnhs") ;
defined('pass') ? null : define("pass","m+Fak2P>n");
defined('database_name') ? null : define("database_name", "u801089727_aasmnhs") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>
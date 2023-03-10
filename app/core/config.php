<?php 


/****
* app info
*/
define('APP_NAME', 'NFDI4Chem');
define('APP_DESC', 'Free and paid tutorials');

/****
* database config
*/
if($_SERVER['SERVER_NAME'] == 'localhost')
{
	//database config for local server
	define('DBHOST', 'localhost');
	define('DBNAME', 'crud');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');

	//root path e.g localhost/
	define('ROOT', 'http://localhost/fuseki/public');
	define('DASHBOARD', ROOT.'/dashboard/assets');
	define('YASGUI', ROOT.'http:/localhost/fuseki/node_modules');

}else
{
	//database config for live server
	define('DBHOST', 'localhost');
	define('DBNAME', 'udemy');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');

	//root path e.g https://www.yourwebsite.com
	define('ROOT', 'http://');
}


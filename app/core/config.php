<?php 


/****
* app info
*/
define('APP_NAME', 'MyProject');
define('APP_DESC', '');

/****
* database config
*/
if($_SERVER['SERVER_NAME'] == 'localhost')
{
	//database config for local server
	define('DBHOST', 'localhost');
	define('DBNAME', '#');
	define('DBUSER', '#');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');

	//root path e.g localhost/
	define('ROOT', 'Enter your Root here');
	define('DASHBOARD', ROOT.'/dashboard/assets');

}else
{
	//database config for live server
	define('DBHOST', 'localhost');
	define('DBNAME', '#');
	define('DBUSER', '#');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');

	//root path e.g https://www.yourwebsite.com
	define('ROOT', 'http://');
}


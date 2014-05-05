<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
|				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A website table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By website there is only one group (the 'website' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'website';
$active_record = TRUE;
/**
 * DataBase CMS
 */
$db['website']['hostname'] = 'localhost';
$db['website']['username'] = '';
$db['website']['password'] = '';
$db['website']['database'] = '';
$db['website']['dbdriver'] = 'mysql';
$db['website']['dbprefix'] = '';
$db['website']['pconnect'] = TRUE;
$db['website']['db_debug'] = TRUE;
$db['website']['cache_on'] = FALSE;
$db['website']['cachedir'] = '';
$db['website']['char_set'] = 'utf8';
$db['website']['dbcollat'] = 'utf8_general_ci';
$db['website']['swap_pre'] = '';
$db['website']['autoinit'] = TRUE;
$db['website']['stricton'] = FALSE;

/**
 * DataBase Auth
 */
$db['auth']['hostname'] = 'localhost';
$db['auth']['username'] = '';
$db['auth']['password'] = '';
$db['auth']['database'] = '';
$db['auth']['dbdriver'] = 'mysql';
$db['auth']['dbprefix'] = '';
$db['auth']['pconnect'] = TRUE;
$db['auth']['db_debug'] = TRUE;
$db['auth']['cache_on'] = FALSE;
$db['auth']['cachedir'] = '';
$db['auth']['char_set'] = 'utf8';
$db['auth']['dbcollat'] = 'utf8_general_ci';
$db['auth']['swap_pre'] = '';
$db['auth']['autoinit'] = TRUE;
$db['auth']['stricton'] = FALSE;

/**
 * DataBase Characters
 */
$db['characters']['hostname'] = 'localhost';
$db['characters']['username'] = '';
$db['characters']['password'] = '';
$db['characters']['database'] = '';
$db['characters']['dbdriver'] = 'mysql';
$db['characters']['dbprefix'] = '';
$db['characters']['pconnect'] = TRUE;
$db['characters']['db_debug'] = TRUE;
$db['characters']['cache_on'] = FALSE;
$db['characters']['cachedir'] = '';
$db['characters']['char_set'] = 'utf8';
$db['characters']['dbcollat'] = 'utf8_general_ci';
$db['characters']['swap_pre'] = '';
$db['characters']['autoinit'] = TRUE;
$db['characters']['stricton'] = FALSE;

/**
 * DataBase Word
 */
$db['world']['hostname'] = 'localhost';
$db['world']['username'] = '';
$db['world']['password'] = '';
$db['world']['database'] = '';
$db['world']['dbdriver'] = 'mysql';
$db['world']['dbprefix'] = '';
$db['world']['pconnect'] = TRUE;
$db['world']['db_debug'] = TRUE;
$db['world']['cache_on'] = FALSE;
$db['world']['cachedir'] = '';
$db['world']['char_set'] = 'utf8';
$db['world']['dbcollat'] = 'utf8_general_ci';
$db['world']['swap_pre'] = '';
$db['world']['autoinit'] = TRUE;
$db['world']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */
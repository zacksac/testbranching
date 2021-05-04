<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'jamieflagshiplmsstaging';
$CFG->dbuser    = 'jamieflagshiplms_jamie';
$CFG->dbpass    = 'ab3ga6EO1i]i';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://staging.flagshiplms.com';
$CFG->dataroot  = '/home/jamie/apps/jamie-staging/moodledata';
$CFG->admin     = 'admin';
$CFG->disableupdatenotifications = true;
$CFG->directorypermissions = 0777;
require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

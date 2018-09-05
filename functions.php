<?php
############################
#                           #
#        Database           #
#                           #
############################

//Connection initialisation
try {
    $bdd = new PDO('mysql:host=' . db_host . ';dbname=' . db_name . ';charset=utf8', db_user, db_pass);
} catch (Exception $e) {
    echo _ErrDBOffline_;
    die();
}

############################
#                           #
#        Class Loaders      #
#                           #
############################

//Autoload classes
spl_autoload_register(function ($class) {
    require 'class/' . $class . '.class.php';
});

//Initialize managers
$DMXChartManager = new DMXChartManager($bdd);
$Cache = new Cache();

############################
#                           #
#        Functions          #
#                           #
############################

function CleanVar($var) {
    return strtolower(trim($var));
}
function FixtureURL($Manufacturer, $Fixture) {
    return _FixtureFolder_ . '/' . urlencode($Manufacturer) . '/' . urlencode($Fixture);
}
function CacheFile($url) {
    return _CacheFolder_ . preg_replace('/[\/\.]/', '', $url);
}

<?php
const APP_STATUS='development';
const DB_HOST='localhost';
const DB_USER='root';
const DB_PASS='';
const DB_NAME='alku_mvc';
const  SITE_NAME='Alku MVC';
const SITE_URL='http://localhost/alku_mvc/';
if (APP_STATUS=='development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
   define("BASE_URL", "http://localhost/AlKUMVCFramework/");
}
else {
    error_reporting(0);
    ini_set('display_errors', 0);
    define("BASE_URL", "http://alkumvcframework.com/");
}
try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

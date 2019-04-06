<?php

require_once '../dispatcher.php';
require_once '../routing.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$action_url = $_GET['action'];
dispatch($routing, $action_url);
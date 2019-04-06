<?php

const REDIRECT_PREFIX = 'redirect:';

function dispatch($routing, $action_url)
{
    $model = [];
    $test = substr($action_url, 0, 4);
    if ($test == "/api") {
        $api = true;
        $action_url = substr($action_url, 4);
    } else $api = false;
    $controller_name = $routing[$action_url];


    require_once 'controllers/' . $controller_name . '.php';

    $view_name = $controller_name($model, $api);

    buildResponse($view_name, $model);
}

function buildResponse($view, $model)
{
    if (strpos($view, REDIRECT_PREFIX) === 0) {
        $url = substr($view, strlen(REDIRECT_PREFIX));
        header("Location: " . $url);
        exit;

    } else {
        render($view, $model);
    }
}

function render($view_name, $model)
{
    global $routing;
    extract($model);
    include 'views/' . $view_name . '.php';
}
<?php

$klein = new \Klein\Klein();

(new \PTTB\Helpers\RouterH())->defineRoutes($klein);

$base  = dirname($_SERVER['PHP_SELF']);

// Workaround for Klein: update request when we are
// running the system from a subdirectory
if (ltrim($base, '/')){
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

$klein->dispatch();
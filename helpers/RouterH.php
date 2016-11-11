<?php

namespace PTTB\Helpers;

class RouterH {
    public function defineRoutes(\Klein\Klein $klein) {
        $klein->respond('GET', '/hello-world', function () {
            return 'Hello World';
        });
    }
}
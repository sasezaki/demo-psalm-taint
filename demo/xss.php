<?php

function getName() : string {
    return $_GET['name'] ?? 'unknown';
}

function sayHello() : string {
    return 'Hello ' . getName();
}
?>
<!-- wrap call in htmlentities() to fix -->
<h1><?= sayHello() ?></h1>
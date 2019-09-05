<?php
require '../basic/basic.php';
inc([
    'controller',
    'segment',
    'view'
]);
$segmentoPrincipal=segment(1);
controller($segmentoPrincipal.'/home');

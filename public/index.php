<?php
require '../basic/basic.php';
inc([
    'controller',
    'error',
    'segment'
]);
error(true);
$segmentoPrincipal=segment(1);
controller($segmentoPrincipal.'/home');

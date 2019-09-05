<?php
inc([
  'view'
]);
$data=[
  'msg'=>'call hi ok!';
];
view('hi/home',$data);
?>

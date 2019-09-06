<?php
inc([
  'e',
  'env',
  'view'
]);
$data['msg']='hi ok';
view('hi/home',$data);

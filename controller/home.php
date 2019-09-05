<?php
inc([
  'e',
  'view'
]);
$data['msg']='hi ok';
view('hi/home',$data);

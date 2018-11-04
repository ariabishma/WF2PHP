<?php
  Routes::get('/','Home@test');
  Routes::get('/blog/{id}/edit/{name}','BlogControllers@index');
  Routes::get('/about','AboutControllers@index');
?>

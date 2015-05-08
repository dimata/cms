<?php
/*
 * Setup File:
 */
$dbc = mysqli_connect('localhost','admin','admin','cms') or
die('Could not connect because: '.mysqli_connect_error());
$site_title = 'CMS 1.0';
$page_title ='Home Page';
?>
<?php
/*
 * Setup File:
 */
//database connection
$dbc = mysqli_connect('localhost','admin','admin','cms') or
die('Could not connect because: '.mysqli_connect_error());
//Constants
DEFINE('D_TEMPLATE','template');
//functions:
include('functions/data.php');
$site_title = 'CMS 1.0';
$page_title ='Home Page';
if(isset($_GET['page'])){
    $pageId = $_GET['page']; //set $pageid to equal the value given in the url
}
else{
    $pageId = 1; //$pageid equal to home page
}

//page setup
$page = data_page($dbc,$pageId);


?>
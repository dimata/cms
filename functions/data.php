<?php
function data_page($dbc, $pageId){

    $q = "SELECT * FROM pages WHERE id = $pageId";
    $r = mysqli_query($dbc, $q);
    $data = mysqli_fetch_assoc($r);

    return $data;
}


?>
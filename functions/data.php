<?php
function data_page($dbc, $pageId){

    $q = "SELECT * FROM pages WHERE id = $pageId";
    $r = mysqli_query($dbc, $q);
    $data = mysqli_fetch_assoc($r);

    $data['body_nohtml']= strip_tags($data['body']);

    if($data['body']==$data['body_nohtml']){
        $data['body_formatted'] = '<p>'.$data['body'].'</p>';
    }
    else {
        $data['body_formatted']= $data['body'];
    }

    return $data;
}

?>
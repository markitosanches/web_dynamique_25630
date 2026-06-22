<?php

function client_controller_index(){
    require_once(MODEL_DIR."/client.php");
    $data = client_select();
    render("client/index.php", $data);
}



function client_controller_create(){
    render("client/create.php");
}

function client_controller_show($request){
    // print_r($request);
    $id = $request['id'];
    // echo $id;
    require_once(MODEL_DIR."/client.php");
    $data = client_select_id($id);
    // print_r($data);
    render("client/show.php", $data);
}

?>
<?php

function client_controller_index(){
    require_once(MODEL_DIR."/client.php");
    $data = client_select();
    render("client/index.php", $data);
}

function client_controller_create(){
    require_once(MODEL_DIR."/city.php");
    $data = city_select();
    // print_r($data);
    // die();
    render("client/create.php", $data);
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

function client_controller_edit($request){
    $id = $request['id'];
    require_once(MODEL_DIR."/client.php");
    $client = client_select_id($id);
    // print_r($client);
    
    // echo "<br>";
    require_once(MODEL_DIR."/city.php");
    $cities = city_select();
    // print_r($cities);

    $client = array('client' => $client);
    //  print_r($client);
    // echo "<br>";
     $cities = array('cities' => $cities);
    //  print_r($cities);
    $data = array_merge($client, $cities);
    // print_r($data);

    render("client/edit.php", $data);
}

function client_controller_store($request){
    // print_r($request);
    require_once(MODEL_DIR."/client.php");
    $data = client_insert($request);
    //echo $data;
    header('location:?controller=client&function=show&id='.$data);
}

function client_controller_delete($request){
    // print_r($request);
    require_once(MODEL_DIR."/client.php");
    $data = client_delete($request);
    if($data){
        header('location:?controller=client');
        exit();
    }else{
        echo "error";
    }

}

function client_controller_update($request){
    // print_r($request);
    require_once(MODEL_DIR."/client.php");
    $data = client_update($request);
    if($data){
        header('location:?controller=client');
        exit();
    }else{
        echo "error";
    }

}

?>
<?php
     require_once 'Api.php'; 
     $api = new api();
     $message = array();
    switch($_GET["action"])
    {
        case 'get':
        $params = array();
        $params['id'] = isset($_GET["id"]) ? $_GET["id"] : ''; 
        if (is_array($data = $api->get($params))) { 
            $message["data"] = $data;
        } else {
            $message["message"] = "Error on get method"; }
            break;
        default:
            $message["message"] = "Unknown method " . $_GET["action"];
        break;
    }
    header('Content-type: application/json; charset=utf-8');
    header('access-control-allow-origin: *');
    echo json_encode($message);
?>
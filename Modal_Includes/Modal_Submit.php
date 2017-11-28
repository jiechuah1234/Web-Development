<?php

require ('Config.php');

if(isset($_POST))
{
    $name = $_POST['item_name'];
    $desc = $_POST['item_desc'];
    
    $target = Config::$Save_to;
    $names = basename($_FILES['item_file']['name']);
    $tg_file = $target . $names;
    
    move_uploaded_file($_FILES['item_file']['tmp_name'], $tg_file);
    
    $conn = new mysqli(Config::$db_host, Config::$db_id, Config::$db_pw, Config::$db_name);
    
    $query = "insert into ".Config::$tb_name."(".Config::$col_name[0].",".Config::$col_name[1].","
            .Config::$col_name[2].") values (?,?,?);";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $name,$desc,$names);
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
    
    header('Location: '.Config::$Return_to);
    exit();
}
<?php

$fileName = $_GET["file_name"];
$content = file_get_contents("products/" . $fileName);
$obj = json_decode($content);
print_r($obj);

if(unlink($obj->product_img)){
    if(unlink("products/".$fileName)){
        header("Location:products.php");
    }
}
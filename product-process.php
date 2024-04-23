<?php 
echo "<pre>";
print_r($_POST);
print_r($_FILES);

$photoFolder = "product-photos";
$productFolder = "products";

if(!dir($productFolder)){
      mkdir($productFolder,0777);
}

if(!dir($photoFolder)){
      mkdir($photoFolder,0777);
}
$productImg = $_FILES['product_img']['name'];
$ext = pathinfo($productImg)["extension"];
$saveFileName = $photoFolder . "/" . uniqid() . "." . $ext;

if(move_uploaded_file($_FILES["product_img"]["tmp_name"],$saveFileName)){
      $_POST['product_img'] = $saveFileName;
}

$json = json_encode($_POST);

$productFileName = $productFolder . "/" .uniqid() . '_' . $_POST['product_name']. ".json";

touch($productFileName);

$fileStream = fopen($productFileName,'w');

fwrite($fileStream,$json);

fclose($fileStream);

header("Location:products.php");
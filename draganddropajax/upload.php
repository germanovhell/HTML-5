<?php

$nombreArchivo = $_POST["user_file"]["name"];
$tipoArchiv = $_POST["user_file"]["type"];
$tempArchivo = $_POST["user_file"]["tmp_name"];
if(move_uploaded_file($tempArchivo,"uploads/".$nombreArchivo)){
    echo "uploads/".$nombreArchivo;
}else{
    print_r($_FILES);
}
?>
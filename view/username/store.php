<?php
// C://xampp/htdocs/Php/crud-mvc-2023/controller/usernameController.php
require_once("../../controller/usernameController.php");

if(isset($_POST['store'])){
    
    $obj = new usernameController();
    $obj->guardar($_POST['nombre']);  

}elseif(isset($_POST['update'])){
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];

    $obj = new usernameController();
    $obj->update($id, $nombre);
}elseif(isset($_POST['delete'])){
    $obj = new usernameController();
    $obj->delete($_POST["id"]);
}else{
    echo "No se recibio nada";
}
?>

<?php
// tất cả các class đều nằm trên file index.php

// khai báo class Database
require './Core/Database.php';
// khai báo class BaseController
require './Controllers/Admin/BaseController.php';
// khai báo class BaseModel
require './Models/BaseModel.php';


// dùng để lấy url đến từng page cần
$controllerName=ucfirst(strtolower($_GET['controller'])).'Controller';
$actionName=ucfirst(strtolower($_GET['action']));


require "./Controllers/Admin/$controllerName.php";
// ở đây chúng ta tạo class nên khi muốn dùng thì cần phải "khởi tạo" đối tượng
$controllerObject= new $controllerName;
echo $controllerObject->$actionName();

















?>

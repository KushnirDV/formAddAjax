﻿<?php
include './include/baseModel.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'&&$_POST['set']='go'){
    $insert = new BaseModel();
    $sendMail = $insert->setTableLand();

        
    if($sendMail != 0){
        $sendMail = $insert->setAjax();
    }  else {
        print("<h3>Помилка у відправленні данних. Перевірьте правильність заповнення форми!</h3>");
    }
}
               
$insert = new BaseModel();
$row = $insert->setData();


?>




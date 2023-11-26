<?php

$con = new mysqli('localhost','root','','cruds');
if($con){
    echo "Connection Successfully";
}
else{
    echo "Connection Not Successfully";
}
?>
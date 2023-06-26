<?php
require "../private/Initializer.php";
$result = CRUD::Select("company", [
    "CompanyName"
],["CompanyEmail" => "gic@gmail.com"]);
print_r($result[0]['CompanyName']);
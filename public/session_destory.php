<?php
session_start();
    unset($_SESSION['company_name']);
    unset($_SESSION['company_email']);
    unset($_SESSION['company_postal_code']);
    unset($_SESSION['company_address']);
    if(isset($_GET['type']) && $_GET['type'] == 'employer'){
        unset($_SESSION['EmployerID']);
        unset($_SESSION['EmployerName']);
    }
?>
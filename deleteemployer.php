<?php

    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: view_employerrecords.php");
    }else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deleteEmployer($id);
        //Redirect to list
        if($result)
        {
            header("Location: view_employerrecords.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }

?>
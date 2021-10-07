<?php

    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewvacancy.php");
    }else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deleteVacancy($id);
        //Redirect to list
        if($result)
        {
            header("Location: viewvacancy.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }

?>
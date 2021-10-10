<?php 

    require_once 'db/conn.php';
    //Get values from post operation
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $employer = $_POST['employer'];
        $vacant_pos = $_POST['vacant_position'];
        $enddate = $_POST['end_date'];
        $require = $_POST['requirements'];
        $ema = $_POST['email'];
        $contact = $_POST['phone'];
     

        //Call Crud function
        $result = $crud->editVacancy($id,$employer,$vacant_pos,$enddate,$require,$ema,$contact);
     
        // Redirect to index.php
        if($result){
            header("Location: viewvacancy.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
    else{
        include 'includes/errormessage.php';
    }

    

?>
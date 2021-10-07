<?php 
    require_once 'db/conn.php';
    //Get values from post operation
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gen = $_POST['gender'];
        $pos = $_POST['position'];
        $comp = $_POST['company'];
     

        //Call Crud function
        $result = $crud->editEmployer($id, $fname, $lname, $gen, $pos,$comp);
        // Redirect to index.php
        if($result){
            header("Location: view_employerrecords.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
    else{
        include 'includes/errormessage.php';
    }

    

?>
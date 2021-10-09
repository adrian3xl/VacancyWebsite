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
        $ema = $_POST['email'];
        $eid = $_POST['employer_ident_number'];

        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $file_path = "$target_dir$eid.$ext";
        move_uploaded_file($orig_file,$file_path);

        //Call Crud function
        $result = $crud->editEmployer($id, $fname, $lname, $gen, $pos,$comp,$ema,$eid,$file_path);
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
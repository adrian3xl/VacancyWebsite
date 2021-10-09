<?php
    $title = 'vacancysuccess'; 
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';


    if(isset($_POST['submit'])){
      
        $employer = $_POST['employer_id'];
        $vacant_pos = $_POST['vacant_position'];
        $enddate = $_POST['end_date'];
        $require = $_POST['requirements'];
        $ema = $_POST['email'];
        $contact = $_POST['phone'];


    
 
        $isSuccess = $crud->insertVacancy($employer, $vacant_pos, $enddate, $require, $ema, $contact);
        $employerName = $crud->getEmployerById($employer);
        
        if($isSuccess){
       
            include 'includes/successmessage.php';
        }
        else{
            include 'includes/errormessage.php';
        }

    }
?>
    
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
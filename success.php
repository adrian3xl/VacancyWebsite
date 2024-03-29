<?php
    $title = 'Success'; 
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
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

        

        //Call function to insert and track if success or not
        $isSuccess = $crud->insertEmployer($fname, $lname, $gen,$pos,$comp,$ema,$file_path,$eid);
       
        
        if($isSuccess){
          
            SendEmail::SendMail($ema, 'Welcome Vacancy web we are happy to welcome you to our services', 'You have successfully registerted your company in system, please send vacancy request through this email reply. Format for vacancy should include vacancy,position,end date and requirements, Best regards');
            include 'includes/successmessage.php';

        }
        else{
            
            include 'includes/errormessage.php';
        }

    }
?>
    

    <!-- This prints out values that were passed to the action page using method="post" -->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
      
            <p class="card-title">
            <img src="<?php echo $file_path; ?>" class="rounded-circle" style="width: 60%; height: 60%" />
            <br>
            <br>
            Company Representative: <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];  ?>
           </p>
           <p class="card-text">
                Title: <?php echo $_POST['position'];  ?>
            </p>
            <p class="card-text">
                Company: <?php echo $_POST['company'];  ?>
            </p>
            <p class="card-text">
                Company email: <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                EIN: <?php echo $_POST['employer_ident_number'];  ?>
            </p>

          

        </div>

        

    </div>
    
    
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
<?php
    $title = 'Success'; 
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';


    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $gen = $_POST['gender'];
        $pos = $_POST['position'];
        $comp = $_POST['company'];
 
      
     

        

        //Call function to insert and track if success or not
        $isSuccess = $crud->insertEmployer($fname, $lname, $gen,$pos,$comp);
       
        
        if($isSuccess){
          
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
            Company Representative: <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];  ?>
           </p>
           <p class="card-text">
                Title: <?php echo $_POST['position'];  ?>
            </p>
            <p class="card-text">
                Company: <?php echo $_POST['company'];  ?>
            </p>
    
        </div>
    </div>
    

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
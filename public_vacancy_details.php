<?php
    $title = 'View vacancy detail'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    // Get employer by id
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        
    } else{
        $id = $_GET['id'];
       $result = $crud->getVacancyDetails($id);
    
    
?>


<div class="card" style="width: 18rem;">
    <div class="card-body">

    <p class="card-text">
            Company: <?php echo $result['company'];  ?>
        </p>
        <p class="card-title">
        Company Representative: <?php echo $result['firstname'] . ' ' . $result['lastname'];  ?>
    </p>
    <p class="card-title">
       Requirements : <?php echo $result['requirements'];  ?>
    </p>
    <p class="card-title">
       Email : <?php echo $result['email'];  ?>
    </p>
    <p class="card-title">
       End Date : <?php echo $result['end_date'];  ?>
    </p>
    </div>
</div>

<br>
        <a href="public_vacancy.php" class="btn btn-info">Back to List</a>
      
    <?php 

} ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
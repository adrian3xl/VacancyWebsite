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
        Company Representative: <?php echo $result['firstname'];  ?>
    </p>
     

    </div>
</div>

<br>
        <a href="viewvacancy.php" class="btn btn-info">Back to List</a>
        <a href="editvacancy.php?id=<?php echo $result['vacancy_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="deletevacancy.php?id=<?php echo $result['vacancy_id'] ?>" class="btn btn-danger">Delete</a>

    <?php 

} ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
<?php
    $title = 'View Employer detail'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    // Get employer by id
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        
    } else{
        $id = $_GET['id'];
       $result = $crud->getEmployerDetails($id);
    
    
?>


<div class="card" style="width: 18rem;">
    <div class="card-body">

    <p class="card-text">
            Company: <?php echo $result['company'];  ?>
        </p>
        <p class="card-title">
        Position: <?php echo $result['position'];  ?>
    </p>
     
        <p class="card-title">
        Company Representative: <?php echo $result['firstname'] . ' ' . $result['lastname'];  ?>
    </p>
    <p class="card-title">
        Gender: <?php echo $result['gender'];  ?>
    </p>
   
    <img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path'] ; ?>" class="rounded-circle" style="width: 20%; height: 20%" />
    
    </div>
</div>

<br>
        <a href="view_employerrecords.php" class="btn btn-info">Back to List</a>
        <a href="editemployer.php?id=<?php echo $result['employer_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="deleteemployer.php?id=<?php echo $result['employer_id'] ?>" class="btn btn-danger">Delete</a>

    <?php 

} ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
<?php
    $title = 'Edit Record'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    if(!isset($_GET['id']))
    {
      
        include 'includes/errormessage.php';
        header("Location: view_employerrecords.php");
    }
    else{
        $id = $_GET['id'];
        $employer = $crud->getEmployerDetails($id);
    

    
?>

    <h1 class="text-center">Edit Record </h1>

    <form method="post" action="editpost_employer.php">
        <input type="hidden" name="id" value="<?php echo $employer['employer_id'] ?>" />
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" value="<?php echo $employer['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $employer['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" value="<?php echo $employer['gender'] ?>" id="gender" name="gender">
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" value="<?php echo $employer['position'] ?>" id="position" name="position">
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" value="<?php echo $employer['company'] ?>" id="company" name="company">
        </div>
        
        <a href="viewrecords.php" class="btn btn-default">Back To List</a>
        <button type="submit" name="submit" class="btn btn-outline-dark btn-block">Submit</button>
    </form>

<?php } ?>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
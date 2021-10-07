<?php
    $title = 'Edit Record'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    $results = $crud->getEmployer();

    if(!isset($_GET['id']))
    {
      
        include 'includes/errormessage.php';
        header("Location: viewvacancy.php");
    }
    else{
        $id = $_GET['id'];
        $vacancy = $crud->getVacancyDetails($id);
    

    
?>

    <h1 class="text-center">Edit vacancy </h1>

    <form method="post" action="editpostvacancy.php">
        <input type="hidden" name="id" value="<?php echo $vacancy['vacancy_id'] ?>" />
      
        <div class="form-group">
            <label for="vacant_position ">Vacant Position</label>
            <input type="text" class="form-control" value="<?php echo $vacancy['vacant_position'] ?>" id="vacant_position " name="vacant_position ">
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="text" class="form-control" value="<?php echo $vacancy['end_date'] ?>" id="end_date" name="end_date">
        </div>
        <div class="form-group">
            <label for="requirements">Requirements</label>
            <input type="text" class="form-control" value="<?php echo $vacancy['requirements'] ?>" id="requirements" name="requirements">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" value="<?php echo $vacancy['email'] ?>" id="email " name="email ">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" value="<?php echo $vacancy['phone'] ?>" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="employer">Company</label>
            <select class="form-control" id="employer" name="employer">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['employer_id'] ?>" <?php if($r['employer_id']
                    == $vacancy['employer_id']) echo 'selected' ?>>
                        <?php echo $r['company']; ?>
                   </option>
                   <?php }?>
            </select>
        </div>
   
        <button type="submit" name="submit" class="btn btn-outline-dark btn-block">Submit</button>

    </form>

    <?php }?>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
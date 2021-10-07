<?php
    $title = 'Registration for Company'; 

    require_once 'includes/header.php'; 
   require_once 'db/conn.php'; 
   $results = $crud->getEmployer();
  
?>
   
   
  

    <form method="post" action="vacancysuccess.php" enctype="multipart/form-data">
    <div class="card card-dark bg-dark text-white"  style="width: 48rem;">
    <br>

    <h4 class="text-center"> Create Vacancy </h4>
    <div class="card-body">
    <div class="form-group">
            <label for="employer_id">Employers in System</label>
            <select class="form-control" id="employer_id" name="employer_id">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['employer_id'] ?>"><?php echo $r['company']; ?></option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label for="vacant_position">Vacancy Position</label>
            <input required type="text" class="form-control" id="vacant_position" name="vacant_position">
        </div>
        <div class="form-group">
            <label for="end_date">End Date(yyyy-mm-dd)</label>
            <input type="text" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="form-group">
            <label for="requirements">Requirements</label>
            <input type="text" class="form-control" id="requirements" name="requirements">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-groupform-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
     
       
        <button type="submit" name="submit" class="btn btn-primary text-white btn-block" style="width: 45rem;">Submit</button>
    </div>
</div>
 </form>



<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
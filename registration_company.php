<?php
    $title = 'Registration for Company'; 

    require_once 'includes/header.php'; 
   require_once 'db/conn.php'; 

?>
   
   
  

    <form method="post" action="success.php" enctype="multipart/form-data">
    <div class="card card-dark bg-dark text-white"  style="width: 48rem;">
    <br>

    <h4 class="text-center"> Company Registration </h4>
    <div class="card-body">
    <div class="form-group" >
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender">
            <option >Male</option>
            <option >Female</option>
  
            </select>
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company">
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position">
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
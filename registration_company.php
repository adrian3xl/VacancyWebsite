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
     
        <div class="form-group">
            <label for="email">Company email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="employer_ident_number">Contact Number</label>
            <input type="text" class="form-control" id="employer_ident_number" name="employer_ident_number" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        <br/>
        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-info">File Upload is Optional</small>

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
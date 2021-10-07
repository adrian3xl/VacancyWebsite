<?php
    $title = 'Index'; 

    require_once 'includes/header.php'; 
   require_once 'db/conn.php'; 
?>
   
 
  

    <form method="post" action="success.php" enctype="multipart/form-data">
    <div class="card card-dark bg-dark text-white"  style="width: 60rem;">
    <br>

    <h1 class="text-center"> Vacancy Find System</h1>
    <br>
    <h5 class="text-center"> Create| Publish| View : Vacancy Publishing Are US </h5>
    <div class="card-body">
    <?php 

//php tag to facilitate using php functions

echo '<h3>Welcome Page<h3>';

echo '<h5> Welcome to the Vacancy website, our aim is to allow employers to advertise and post their various vacancies.The site allows for vacancy management and  interested persons to view vacancies </h5>';



?>

<img src="img/employment.jpeg" alt="employment">


    </div>
</div>
 </form>




<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
<?php
    $title = 'Index'; 

    require_once 'includes/header.php'; 
   require_once 'db/conn.php'; 
?>
   
 
  

    <form method="post" action="success.php" enctype="multipart/form-data">
    <div class="card card-dark bg-dark text-white"  style="width: 70rem;">
    <br>

    <h1 class="text-center"> Vacancy Find System</h1>
    <br>
    <h5 class="text-center"> Create| Publish| View : Vacancy Publishing Are US </h5>
    <div class="card-body">
    <?php 

//php tag to facilitate using php functions

echo '<h3>Welcome Page<h3>';

echo '<h5> Welcome to the Vacancy website, our aim is to allow employers to advertise their various vacancies.
 We take on the duty of populating the site with your vacancies.The site allows for vacancy management and  interested
  persons to view vacancies </h5>';

  echo '<h5> Please visit our contact us page tab if you require more details more detail on how to get started </h5>';


?>

<img src="img/employment.jpeg" alt="employment">

<br>
<br>
<br>
<br>

    </div>
</div>


<br>
<br>

</form>

 <form method="post" action="success.php" enctype="multipart/form-data">
    <div class="card card-dark bg-primary text-black"  style="width: 20rem;">
    <br>
    <h3 class="text-center"> How to get Started </h3>
    <br>

<ol class="list-group list-group-numbered">
  <li class="list-group-item"> <h5>Register company in our database</h5></li>
  <li class="list-group-item"><h5>create vacancy post</h5></li>
  <li class="list-group-item"><h5>we will then manage and monitor your vacancy information this include (edit and removals)</h5></li>
  <li class="list-group-item"><h5>Real time communication, through our contact us page</h5></li>
</ol>
    </div>
</div>

 </form>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
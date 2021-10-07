<?php
    $title = 'Contact Us'; 

    require_once 'includes/header.php'; 
   require_once 'db/conn.php'; 
?>
   
 
  

    <form method="post" action="success.php" enctype="multipart/form-data">
    <div class="card card-dark bg-dark text-white"  style="width: 70rem;">
    <br>

    <h1 class="text-center"> Contact Us Here</h1>
    <br>
    <h5 class="text-center"> Create| Publish| View : Vacancy Publishing Are US </h5>
    <div class="card-body">
    <?php 

//php tag to facilitate using php functions

echo '<h3>Do You need help? Please share your concerns with us<h3>';

echo '<h5> Our email is adrian.hakeem@gmail.com </h5>';

  echo '<h5> our contact number is 1(283) 2342-2334 </h5>';

  echo '<h5> Wish you a productive and good day </h5>';


?>
<br>
<br>
<img src="img/customerserface.png" alt="employment">

<br>
<br>
<br>
<br>

    </div>
</div>

<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
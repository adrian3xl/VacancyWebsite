<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="css/site.css" />
    
    <title>Vacancy Find System - <?php echo $title ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Vacancy Find System </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="registration_company.php">Company Register</a>
          <a class="nav-item nav-link" href="public_vacancy.php">Vacancies</a>
           <a class="nav-item nav-link" href="publiccompany_view.php">Company Listing</a>
           <a class="nav-item nav-link" href="contactus.php">Contact Us</a>
        </div>
        <div class="navbar-nav ml-auto">
          <?php 
              if(!isset($_SESSION['userid'])){
          ?>
            <a class="nav-item nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span> Welcome <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
         
  <div class="dropdown ">
  <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">Admin Features
  <span class="sr-only"></span></button>
  <ul class="dropdown-menu bg-dark ">
    <li>  <a class="nav-item nav-link " href="createvacancy.php">Create vacancy(Admin)<span class="sr-only">(current)</span></a></li>
    <li><a class="nav-item nav-link" href="viewvacancy.php">Vacancies(Admin)<span class="sr-only">(current)</span></a></li>
    <li> <a class="nav-item nav-link" href="view_employerrecords.php">Employer(Admin)<span class="sr-only">(current)</span></a></li>
  </ul>
</div>


          <?php } ?>
        </div>
      </div>
    </nav>
    <div class="container1" style="background-image: url(img/pic2.jpg); background-attachment: fixed;background-position: 45% 100%;background-size: 96%; background-repeat: no-repeat">
    <div class="container">
    
    <br/>
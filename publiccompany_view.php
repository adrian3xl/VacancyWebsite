<?php
    $title = 'View Records'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    // Get all employers
    $results = $crud->getEmployer();

?>


    <table class="table bg-dark text-white">
        <tr>
            <th>#</th>
            <th>Company</th>
           
           <th>Actions</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
           <td><?php echo $r['employer_id'] ?></td>
                <td><?php echo $r['company'] ?></td>
              

               
           </tr> 
        <?php 
    
    }?>
    </table>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
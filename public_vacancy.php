<?php
    $title = 'Vacacy Records'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    // Get all employers
    $results = $crud->getVacancy();


?>


    <table class="table bg-dark text-white">
        <tr>
           
            <th>Vacancy</th>
           
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
         

                <td><?php echo $r['vacant_position'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['phone'] ?></td>

                <td>
                    <a href="public_vacancy_details.php?id=<?php echo $r['vacancy_id'] ?>" class="btn btn-primary">View</a>
                   
                </td>
           </tr> 
        <?php 
    
    }?>
    </table>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
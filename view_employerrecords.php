<?php
    $title = 'View Records'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    // Get all employers
    $results = $crud->getEmployer();

?>


    <table class="table">
        <tr>
            <th>#</th>
            <th>Company</th>
           
           <th>Actions</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
           <td><?php echo $r['employer_id'] ?></td>
                <td><?php echo $r['company'] ?></td>
              

                <td>
                    <a href="viewemployerdetails.php?id=<?php echo $r['employer_id'] ?>" class="btn btn-primary">View</a>
                    <a href="editemployer.php?id=<?php echo $r['employer_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="deleteemployer.php?id=<?php echo $r['employer_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
           </tr> 
        <?php 
    
    }?>
    </table>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
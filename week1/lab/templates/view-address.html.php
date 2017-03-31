<?php if ( is_array($addresses) && count($addresses) > 0 ) : ?>
<h1>Address List</h1>


<table class="table table-striped table-hover ">
     <tr class="table-responsive">
        <th>Full Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Birthday</th>
    </tr>
<?php foreach( $addresses as $row ) : ?>

   
    <tr>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['addressline1']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['state']; ?></td>
        <td><?php echo $row['zip']; ?></td>
        <td><?php echo date("F j, Y", strtotime($row['birthday'])); ?></td>

    </tr>
    
<?php endforeach; ?>
</table>
<?php endif; ?>
 
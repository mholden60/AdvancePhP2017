

        <link rel="stylesheet" href="../lab/css/css/bootstrap.css"> 
        <div class="col-md-6">
<div class="form-group">
    <h1>Add Address</h1>
    
    <form action="#" method="post" class="form-horizontal">
        Full name: <input name="fullname" value="<?php echo $fullname; ?>" class="form-control" /> <br>
        Email: <input name="email" value="<?php echo $email; ?>" class="form-control"/> <br>
        Address: <input name="addressline1" value="<?php echo $addressline1; ?>"class="form-control" /> <br>
        city: <input name="city" value="<?php echo $city; ?>" class="form-control"/> <br>
        State:
        <select name="state" class="form-control">
            <?php foreach ($states as $key => $value): ?>
            <option value="<?php echo $key; ?>" <?php if($state == $key): ?> selected="selected" <?php endif; ?> ><?php echo $value; ?> </option>
            <?php endforeach; ?>
        </select>
        <br/>
         Zip: <input name="zip" value="<?php echo $zip; ?>" class="form-control"/> <br>
         Birthday: <input name="birthday" type="date" value="<?php echo $birthday;?>"class="form-control" /><br/>
         <input type="submit" value="submit" class="btn btn-primary" />
          
         </form> 
</div>
            </div>
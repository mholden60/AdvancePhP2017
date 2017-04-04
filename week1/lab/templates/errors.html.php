<?php if ( isset($errors) && is_array($errors) ) : ?>
<ul>
    <?php foreach ($errors as $error): ?>
        <li class="alert alert-danger"><?php echo $error; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../Lab4/css/css/bootstrap.css" />
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li >  <a href="upload-form.php">Upload File</a></li>
            <li><a href="fileView.php">View Files</a></li>
            <a href=""></a>
        </ul></div></div>
</nav>
<div class="jumbotron" style="text-align: center"><h2>View Files</h2></div>
</head>
<body>
    <?php
    // http://php.net/manual/en/class.directoryiterator.php
    //DIRECTORY_SEPARATOR 

    $folder = './uploads';
    if (!is_dir($folder)) {
        die('Folder <strong>' . $folder . '</strong> does not exist');
    }
    $directory = new DirectoryIterator($folder);
    ?>

    <?php $i = 0; ?>
    <?php foreach ($directory as $fileInfo) : ?> 


        <?php if ($fileInfo->isFile()) : ?>

            <h3> File Number: <?php $i++;
            echo $i; ?></h3>

            <h2><?php echo $fileInfo->getFilename(); ?></h2>
            <p>This file was uploaded on <?php echo date("T l F j, Y, g:i a", $fileInfo->getMTime()); ?></p>
            <p>This file is <?php echo $fileInfo->getSize(); ?> byte's</p>
            <img src="<?php echo $fileInfo->getPathname(); ?>" />
        <?php endif; ?>
    <?php endforeach; ?>
    <a href="upload-form.php">Upload File</a>


</body>
</html>
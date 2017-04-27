
<link rel="stylesheet" href="../Lab4/css/css/bootstrap.css" />
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li >  <a href="upload-form.php">Upload File</a></li>
            <li><a href="DirectoryIterator.php">View Files</a></li>
            <a href=""></a>
    </ul></div></div>
            </nav>
    <div class="jumbotron" style="text-align: center"><h2>FILE UPLOADS</h2></div>
    
    <?php

$finame = $_GET['name'];
$filename = '.'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.$finame;
  /* SplFileObject extends from SplFileInfo so you can use the same functions 
   * from SplFileInfo with SplFileObject 
   */         
$file = new SplFileObject($filename, "r");
$contents = $file->fread($file->getSize());

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $finfo->file($filename);

//header('Content-Type: '.$mimeType);
//header('Content-Length: ' . $file->getSize());
//echo $contents;

 /* Alternative without the above headers */


?>
<!DOCTYPE html>
        <?php
         if ( $file->isFile() ) {
            echo 'File Name: '; echo $file->getFilename(); echo '<br />';
            echo 'Date Uploaded: '; echo (date("l F j, Y, g:i a", $file->getMTime())); echo '<br />';
            echo 'Size: '; echo $file->getSize(); echo ' bytes <br />';
            echo 'Path: '; echo $file->getPathname(); echo '<br />';           
        }
        $b64 = base64_encode($contents);
        echo '<img src="data:'.$mimeType.';base64,'.$b64.'"/>';
        ?>
            
        </div>
        
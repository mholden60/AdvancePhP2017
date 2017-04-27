<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li >  <a href="upload-form.php">Upload File</a></li>
            <li><a href="DirectoryIterator.php">View Files</a></li>
            <a href=""></a>
    </ul></div></div>
            </nav>
                <div class="jumbotron" style="text-align: center"><h2>FILE</h2></div>
        <link rel="stylesheet" href="../Lab4/css/css/bootstrap.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    </head>
    <body>
        <?php
        class Filehandler {

            function upLoad($keyName) {

                if (!isset($_FILES[$keyName]['error']) || is_array($_FILES[$keyName]['error'])) {
                    throw new RuntimeException('Invalid parameters.');
                }

                // Check $_FILES['upfile']['error'] value.
                switch ($_FILES[$keyName]['error']) {
                    case UPLOAD_ERR_OK:
                        break;
                    case UPLOAD_ERR_NO_FILE:
                        throw new RuntimeException('<div class="alert alert-dismissible alert-danger"style="text-align: center" ><h2>
No file sent!</h2></div>');
                    case UPLOAD_ERR_INI_SIZE:
                    case UPLOAD_ERR_FORM_SIZE:
                        throw new RuntimeException('<div class="alert alert-dismissible alert-danger"style="text-align: center" ><h2>Exceeded filesize limit!</h2></div>');
                    default:
                        throw new RuntimeException('<div class="alert alert-dismissible alert-danger"style="text-align: center" ><h2>Unknown errors!</h2></div>');
                }

                if ($_FILES[$keyName]['size'] > 1000000) {
                    throw new RuntimeException('<div class="alert alert-dismissible alert-danger"style="text-align: center" ><h2>Exceeded filesize limit!</h2></div>');
                }

                // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
                // Check MIME Type by yourself.
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                $validExts = array(
                    'jpg' => 'image/jpeg',
                    'png' => 'image/png',
                    'gif' => 'image/gif',
                    'doc'=>'application/mseord',
                     'docx'=> 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'txt'=>'text/plain',
                    'xls'=>'application/vnf.md-excel',
                    'xlsx'=>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    'html'=>'text/html',
                    'pdf'=>'application/pdf'
                );
                $ext = array_search($finfo->file($_FILES[$keyName]['tmp_name']), $validExts, true);


                if (false === $ext) {
                    throw new RuntimeException('Invalid file format.');
                }

                // You should name it uniquely.
                // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
                // On this example, obtain safe unique name from its binary data.

                $salt = uniqid(mt_rand(), true);
                $fileName = 'img_' . sha1($salt . sha1_file($_FILES[$keyName]['tmp_name']));
                $location = sprintf('./uploads/%s.%s', $fileName, $ext);

                if (!is_dir('./uploads')) {
                    mkdir('./uploads');
                }


                if (!move_uploaded_file($_FILES[$keyName]['tmp_name'], $location)) {
                    throw new RuntimeException('Failed to move uploaded file.');
                }

                return $fileName . '.' . $ext;
            }

        }

        $filehandler = new Filehandler();

        try {
            $fileName = $filehandler->upLoad('upfile');
        } catch (RuntimeException $e) {
            $error = $e->getMessage();
        }
        ?>

        <?php if ( isset($fileName) ) : ?>
        <div class="alert alert-dismissible alert-success" style="text-align: center"><h3><?php echo $fileName; ?> is uploaded successfully.</h3></div>
        <?php else: ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
           

    </body>
</html>
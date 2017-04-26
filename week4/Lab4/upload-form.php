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
    <div class="jumbotron" style="text-align: center"><h2>FILE UPLOADS</h2></div>
    </head>
    <body>
        <div style="text-align: center">
            <!-- The data encoding type, enctype, MUST be specified as below -->
            <form enctype="multipart/form-data" action="upload.php" method="POST">
                <div><label for="upload">Select file to upload:
                        <input type="file" id="upload" name="upfile">
            </label></div>
        <div style="text-align: center">
                       
                            <input type="submit" value="Submit">
                            </div>  </div>  </div>

        </form>

</body>
</html>
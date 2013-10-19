<?php
$ds          = DIRECTORY_SEPARATOR;
$storeFolder = 'uploads';
if (!empty($_FILES) && ($_FILES['file']['type'] == "image/jpg" || $_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/png")) {
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = dirname( __FILE__ ).$ds.$storeFolder.$ds;
    $targetFile =  $targetPath. $_FILES['file']['name'];
    move_uploaded_file($tempFile,$targetFile);     
}
?> 

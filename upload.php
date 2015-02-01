<?php
$ds          = DIRECTORY_SEPARATOR;
$storeFolder = 'uploads';
if (!empty($_FILES) && ($_FILES['file']['type'] == "image/jpg" || $_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/png")) {
    $tempFile = $_FILES['file']['tmp_name'];
    $targetPath = dirname( __FILE__ ).$ds.$storeFolder.$ds;
    $file_name = $_FILES['file']['name'];
    $file_name = preg_replace('/\s+/', '_', $file_name);
    $targetFile =  $targetPath.$file_name;
    move_uploaded_file($tempFile,$targetFile);
}
?>

<?php

require '../vendor/autoload.php';
use App\Cookie;
use App\FileUpload;

$redirectURL = 'index.php';
Cookie::set('PC1', isset($_POST['username']) ? $_POST['username'] : '');
FileUpload::upload('file', 'filesUpload');
header('Location:'.$redirectURL);
exit;

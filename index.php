<?php
$targetFile = 'invoice-maker/php/home.php';

if (file_exists($targetFile)) {
    header("Location: $targetFile");
    exit;
} else {
   header("Location: invoice-maker/error-files/no-page-found.html");
}
?>
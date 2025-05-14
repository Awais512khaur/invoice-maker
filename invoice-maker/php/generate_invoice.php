<?php
require '../../vendor/autoload.php';
use Dompdf\Dompdf;
// Upload logo to ../../images/
include './upload-logo-path.php';
// Convert logo path to base64 so Dompdf can use it
include './conver-logo-to-base64.php';
// Get other POST values
include './get-postdata.php';
// HTML for PDF
include './pdf-html.php';
// Generate PDF
include './generate-pdf.php';
?>
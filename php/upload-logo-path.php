<?php
$uploaded_logo_path = '../../images/df.png'; // fallback default
if (isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
    $upload_dir = '../../images/';
    $ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
    $filename = 'logo_' . time() . '.' . $ext;
    $destination = $upload_dir . $filename;

    if (move_uploaded_file($_FILES['logo']['tmp_name'], $destination)) {
        $uploaded_logo_path = $destination;
    }
}
?>
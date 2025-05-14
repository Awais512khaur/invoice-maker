<?php
$logo_data = base64_encode(file_get_contents($uploaded_logo_path));
$logo_src = 'data:image/' . pathinfo($uploaded_logo_path, PATHINFO_EXTENSION) . ';base64,' . $logo_data;
?>
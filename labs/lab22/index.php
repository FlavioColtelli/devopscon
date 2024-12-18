<?php
if (file_exists("/fail")){
    http_response_code(500);
    echo "UH OH\n\n";
    exit;
} 
?>
<p>Date: <?= date('c') ?></p>
<p>Host: <?= gethostname() ?></p>
<p>id: <?= uniqid() ?></p>

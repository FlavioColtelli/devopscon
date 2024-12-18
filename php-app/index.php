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
<p>Environment: <?= getenv('APP_ENV') ?> </p>
<p>File: ("/config/config.ini") <?= @file_get_contents("/config/config.ini") ?> </p>

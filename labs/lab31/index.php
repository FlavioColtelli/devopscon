<?php
if (file_exists("/fail")){
    http_response_code(500);
    echo "OH WEH\n\n";
    exit;
} 
?>
<h1>Welcome to: v2</h1>
<p>Date: <?= date('c') ?></p>
<p>Host: <?= gethostname() ?></p>
<p>id: <?= uniqid() ?></p>

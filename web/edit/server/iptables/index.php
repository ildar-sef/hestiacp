<?php
$TAB = "SERVER";

// Main include
include $_SERVER["DOCUMENT_ROOT"] . "/inc/main.php";

// Check user
// When port 8083 is closed and used through the (sub)domain, redirects occur to the (sub)domain:8083. Then, due to the closed port, the request is blocked. To solve the problem, you need to put a "/" sign at the end of the relative link.
header("Location: /list/firewall/");
exit();

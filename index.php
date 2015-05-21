<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    
    
    require_once(__DIR__ . "/index.html");
    
    if (authenticateUser()) {
        // want navigation only to appear if user is logged in
        require_once(__DIR__ . "/view/navigation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    
    require_once(__DIR__ . "/controller/read-posts.php");
?>

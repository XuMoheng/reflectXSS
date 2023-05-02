<?php
    $xss=$_GET['x'];
    echo $xss;
?>
<!-- http://127.0.0.1/xss_echo.php?x=%3Cscript%3Ealert(1)%3C/script%3E -->
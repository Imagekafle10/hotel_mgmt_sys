<?php
    session_start();
     session_destroy();
    echo 'Log out Sucessfull';
    echo"<script> window.location.href = 'http://localhost/imagephp/clientlogin/login.html'</script>"
?>
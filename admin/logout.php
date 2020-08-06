<?php
    session_start();
    $_SESSION['sun']="";
    $_SESSION['spwd']="";
    session_destroy();
    echo "<script type='text/javascript'>document.location='index.php'</script>;
?>
<?php
    //start and delete all session data on log out
    session_start();
    session_destroy();
    echo "<script type='text/javascript'> location = '/track.php'; </script>"; 
?>
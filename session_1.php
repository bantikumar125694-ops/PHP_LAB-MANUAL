<?php

// Starting the session
session_start();
?>

<html>
    <body>
        <!--After Login Process -->
        <?php
            $_SESSION['Username'] = "Krishna";
            //it generate a cookie
            echo "session created";
        ?>

</body>

</html>
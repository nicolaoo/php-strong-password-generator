
<?php
    $get_password=$_GET['password'];
    $rand_password= random_bytes($get_password);

    $rand=openssl_random_pseudo_bytes($get_password);
    $pass=bin2hex($rand);
?>
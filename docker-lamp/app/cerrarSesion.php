<?php

session_start();
unset($_SESSION['izena']);
session_destroy();
echo "<script>alert('Saioa itxi egin da'); window.location.href='index.php'</script>"; 

?>


 
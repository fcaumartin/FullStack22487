
<?php
if (!isset($_SESSION["auth"]) || $_SESSION["auth"]!="ok") {
    
    header("Location: login.php");
    exit;
}
?>
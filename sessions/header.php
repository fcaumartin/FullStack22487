<?php
session_start();
?>

<div>
<a href="index.php">index</a>
<a href="affiche.php">affiche</a>
<a href="prive.php">prive</a>
<a href="login.php">login</a>
<a href="logout.php">logout</a>

<?php
    if (isset($_SESSION["auth"]) && $_SESSION["auth"]=="ok") {
        echo "Bonjour toi";
    }
    else {
        echo "Non connecté";
    }

?>
</div>
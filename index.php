<?php 
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
}else {
    header('Location: pages/index.php');
}
?>
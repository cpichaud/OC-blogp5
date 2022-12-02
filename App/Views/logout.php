<?php
session_start();
unset($_SESSION['connecte']);
header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=login')
?>
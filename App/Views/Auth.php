<?php

function isLogin(): bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
        $_SESSION['id'];
    }
    return !empty($_SESSION['connecte']);
}

function userLogin(){
    if (!isLogin()) {
        header('Location: /blog-oc-p5/OC-blogp5/public/index.php?page=login');
        exit();
    }
}
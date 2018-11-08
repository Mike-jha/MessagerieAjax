<?php
// Cette fonction toujours avant d'afficher de l'html
session_start();

require_once('src/utils.php');

$pdo = dbConnect();
$errorRegistration = "";
$errorLogin = "";
$template = 'login';
$jsScript = 'login';
$token = generateToken();

if(isset($_POST['login'])) {   
    $result = login($pdo, $_POST);
    if (!$result['status']) {
        $errorLogin = $result['message'];
    }

} elseif (isset($_POST['register'])) {
    $result = register($pdo, $_POST, $_FILES);
    if (!$result['status']) {
        $errorRegistration = $result['message'];
    }   
}

if ($user = getUser()) {
    $template = 'messenger';
    $jsScript = 'messenger';
}

// Vue
include('vue/header.tmp.php');
include('vue/' . $template . '.tmp.php');
include('vue/footer.tmp.php');
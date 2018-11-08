<?php
session_start();
require_once('utils.php');

$pdo = dbConnect();

header('Content-Type: application/json');
echo json_encode(checkUser($pdo, $_GET));
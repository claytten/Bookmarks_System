<?php
session_start();
if(!empty($_SESSION["user_id"])) {
    require_once './pages/dashboard.php';
} else {
    require_once './pages/login.php';
}
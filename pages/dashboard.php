<?php
session_start();
if ($_SESSION['roles'] == "users") {
    header('location: pages/users/');
}
elseif ($_SESSION['roles'] == "admin") {
    header('location: pages/admin/');
}
else {
    header('location: ../');
}
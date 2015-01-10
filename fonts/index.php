<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("location: ../");
} else {
    header("location: ../nexus-admin/index.php");
}
?>
<?php
session_start();
if (!isset($_SESSION['test'])) {
    $_SESSION['test'] = 0;
}
$_SESSION['test']++;
echo "Test session value: " . $_SESSION['test'];
?>

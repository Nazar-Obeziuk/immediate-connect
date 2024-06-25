<?php
$uri = strtolower($_SERVER['REQUEST_URI']);
if ($_SERVER['REQUEST_URI'] != $uri) {
    header("Location: " . $uri);
    exit();
}
?>

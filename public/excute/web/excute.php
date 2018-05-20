<?php
session_start();
$output = shell_exec('php ./render/' . $_SESSION['token'] . '/render.php');
if ($output) {
    echo $output;
} else {
    echo "Error! Something went wrong";
}

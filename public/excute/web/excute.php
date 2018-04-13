<?php
$output = shell_exec('php render.php');
if ($output) {
    echo $output;
} else {
    echo "Error! Something went wrong";
}

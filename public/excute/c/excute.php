<?php
session_start();
$output = shell_exec("cd render/" . $_SESSION['token'] . " && g++ -o ./output render.c 2>&1");
if (!$output) {
    $output = shell_exec("./render/" . $_SESSION['token'] . "/output");
}
echo "<pre>$output</pre>";

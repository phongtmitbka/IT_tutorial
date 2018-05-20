<?php
session_start();
shell_exec("cd render/" . $_SESSION['token'] . "&& gcj --main=Main Main.java");
$output = shell_exec("./render/" . $_SESSION['token'] ."/a.out");

echo "<pre>$output</pre>";

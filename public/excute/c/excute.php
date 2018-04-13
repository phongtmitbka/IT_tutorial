<?php
$output = shell_exec("g++ -o output render.c 2>&1");
if (!$output) {
    $output = shell_exec("./output");
}
echo "<pre>$output</pre>";

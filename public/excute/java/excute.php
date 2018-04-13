<?php
shell_exec("gcj --main=Main Main.java");
$output = shell_exec("./a.out");

echo "<pre>$output</pre>";

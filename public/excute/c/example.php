<?php
$content = trim($_POST['content']);
file_put_contents("./render.c", $content);
header("Location: /excute/c");

exit();
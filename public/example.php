<?php
$content = trim($_POST['content']);
file_put_contents("./render.php", $content);
header("Location: /excute");

exit();
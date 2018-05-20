<?php
$content = trim($_POST['content']);
$token = trim($_POST['_token']);
$_SESSION["token"] = $token;
shell_exec("mkdir -p render/$token && touch render/$token/render.php");
file_put_contents("./render/$token/render.php", $content);
header("Location: /excute/web");

exit();
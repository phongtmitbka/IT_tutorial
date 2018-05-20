<?php
session_start();
$content = trim($_POST['content']);
$token = trim($_POST['_token']);
$_SESSION["token"] = $token;
shell_exec("mkdir -p render/$token && touch render/$token/render.c");
file_put_contents("./render/$token/render.c", $content);
header("Location: /excute/c");

exit();
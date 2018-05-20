<?php
session_start();
$content = trim($_POST['content']);
$token = trim($_POST['_token']);
$_SESSION["token"] = $token;
shell_exec("mkdir -p render/$token && touch $token/Main.java");
file_put_contents("./render/$token/Main.java", $content);
header("Location: /excute/java");

exit();
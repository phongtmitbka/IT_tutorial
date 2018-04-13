<?php
$content = trim($_POST['content']);
file_put_contents("./Main.java", $content);
header("Location: /excute/java");

exit();
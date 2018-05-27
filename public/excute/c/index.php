<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <style type="text/css">
        .content-file {
            width: 50%;
            float: left;
            padding: 15px 30px;
            border: 1px solid;
            background: #fdf0f0;
        }
        .btn-run-area {
            height: 40px;
            text-align: right;
        }
        .btn-run {
            background: #474777;
            color: #ffffff;
            border-radius: 3px;
            padding: 8px 30px;
            border: 0;
        }
        .line {
            width: 5%;
            float: left;
            background: #e3e3ef;
            height: 1000px;
            border: 1px solid #5d5d65;
        }
        textarea {
            width: 94%;
            height: 1000px;
            float: right;
        }
        iframe {
            width: 46%;
            height: 1075px;
        }
        .display body {
            background: #f3f3f3;
        }
    </style>
</head>
<body>
<div class="content-file">
    <form action="/excute/c/example.php" method="post">
        <input type="hidden" name="_token" value="<?php echo $_SESSION['token'] ?>">
        <div class="btn-run-area">
            <button type="submit" class="btn btn-run">Run</button>
        </div>
        <div>
            <?php
                $contents = file_get_contents("./render/". $_SESSION['token'] ."/render.c");
                $contentArray = explode("\n", $contents);
            ?>
            <div class="line">
                <?php
                    print("<br>");
                    for ($i = 1; $i <= count($contentArray); $i++) {
                        print($i);
                        print("<br>");
                    }
                ?>
            </div>
            <textarea name="content" class="ace_editor">
                <?php
                    print("\n");
                    print($contents);
                ?>
            </textarea>
        </div>
    </form>
</div>
<div class="display">
    <iframe src="/excute/c/excute.php"></iframe>
</div>
</body>
</html>

<!DOCTYPE HTML>
<html>
<head>
    <style type="text/css">
        .content-file {
            margin: 20px;
            width: 44%;
            float: left;
            border: 1px solid black;
        }
        textarea {
            width: 80%;
            height: 770px;
            padding: 15px;
            border: 1px solid;
            float: left;
            margin-right: 20px;
            margin-bottom: 15px;
            font-size: 18px;
        }
        form {
            padding-top: 20px;
            padding-left: 30px;
        }
        .display {
            margin: 20px;
            width: 50%;
            height: 840px;
            float: right;
            border: 1px solid;
        }
        .btn {
            border: 0;
            padding: 10px 20px;
            border-radius: 3px;
        }
        .btn-run {
            background: #55558a;
            color: #ffffff;
        }
        iframe {
            border: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="content-file">
    <form action="/excute/web/example.php" method="post">
    <textarea name="content" class="ace_editor">
        <?php
            echo file_get_contents("./render.php");
        ?>
    </textarea>
    <button type="submit" class="btn btn-run">Run</button>
    </form>
</div>
<div class="display">
    <iframe src="/excute/web/excute.php"></iframe>
</div>
</body>
</html>

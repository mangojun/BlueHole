<!DOCTYPE html>

<html>
<head>
    <title>BlueHole</title>
    <link rel="shortcut icon" href="./images/icon.ico">
    <link rel="stylesheet" href="./index.css">
    <meta charset="utf-8" />
    <style>
        form {
            margin-left: 10px;
        }

        h1 {
            color: #192b41;
        }

        input {
            background-color: #bedafb;
            border: 0px;
            border-radius: 5px;
            padding: 6px;
            width: 50%;
        }

        textarea {
            background-color: #bedafb;
            border: 0px;
            border-radius: 5px;
            padding: 10px;
            width: 50%;
        }

        #submit {
            width: fit-content;
            background-color: #394b61;
            color: white;
            font-size: medium;
            padding: 6px;
            margin: 10px 0px 0px 5px;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <a href="./index.html"><img src="./images/logo.png" alt="logo" width="300"></a>
        </div>
    </header>
    <nav>
        <a href="./gallery.php" class=item>갤러리</a>
        <a href="./user.html" class="item">사용자</a>
        <a href="./community.html" class="item">커뮤니티</a>
    </nav>
    <main>
        <form action="./process/update.php" method="post">
            <?PHP echo "<input type='hidden' name='old_title' value='".$_GET["id"]."' />"; ?>
            <h1>제목</h1>
            <input type="text" name="title" placeholder="여기에 제목을 입력하세요." value="<?PHP if(isset($_GET["id"])) {echo $_GET["id"];} else {echo "알 수 없는 문서입니다.";} ?>" /><br />
            <h1>본문</h1>
            <textarea id="description" name="description" placeholder="여기에 본문을 입력하세요."><?PHP if(isset($_GET["id"])) {echo file_get_contents("data/".$_GET["id"]);} ?></textarea><br />
            <input type="hidden" role="uploadcare-uploader" data-public-key="81402b0924e09db17275" data-tabs="file camera url facebook gdrive gphotos" data-effects="crop, rotate, flip, blur, enhance, grayscale" />
            <input type="submit" id="submit" value="수정" /><br />
        </form>
    </main>
    <script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js"></script>
    <script src="https://ucarecdn.com/libs/widget-tab-effects/1.x/uploadcare.tab-effects.min.js"></script>
    <script>uploadcare.registerTab('preview', uploadcareTabEffects), UPLOADCARE_LOCALE = "ko"</script>
    <script src="./scripts/upload.js"></script>
</body>
</html>
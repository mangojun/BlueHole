<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/icon.ico">
    <link rel="stylesheet" href="./index.css">
    <title>BlueHole</title>
    <style>
        .uploadcare--widget__button.uploadcare--widget__button_type_open {
            border: 1px solid #ccc;
            background-color: #fff;
            color: black;
        }

        form {
            width: 100%;
            display: grid;
            grid-template-columns: 100px 1fr;
            grid-template-rows: repeat(3, maxmin(35px, auto));
            gap: 10px;
            margin: 10px;
        }

            span {
                font-size: 23px;
                text-align: center;
                padding-top: 6%;
            }

            form input {
                border: #ddd solid 1px;
                border-radius: 5px;
                height: 36px;
            }

            textarea {
                grid-column: 1 / 3;
                border: #ddd solid 1px;
                border-radius: 5px;
                font-family: Arial, Helvetica, sans-serif;
            }

            input[type="submit"] {
                background-color: #fff;
                border: 1px solid #ccc;
                color: black;
                font-size: medium;
                border-radius: 5px;
                width: 100px;
            }
    </style>
</head>
<body>
    <div id="screen">BlueHole은 데스크톱 컴퓨터에 최적화된 사이트입니다. 382px보다 작은 모니터를 이용할 경우 사용할 수 없습니다.</div>
    <header>
        <div id="logo"><a href="./index.html"><img src="./images/logo.png" alt="bluehole" width="110"></a></div>
        <div><a href="./gallery.php">갤러리</a></div>
        <div><a href="./change.html">변경점</a></div>
        <div><a href="./community.html">커뮤니티</a></div>
        <div id="active"><a href="./upload.html">업로드</a></div>
        <input id="search" type="text" placeholder="여기에 검색하세요..." onkeyup="search()" />
    </header>
    <main>
        <form action="./process/create.php" method="post">
            <?PHP echo "<input type='hidden' name='old_title' value='".$_GET["id"]."' />"; ?>
            <span>제목</span>
            <input type="text" name="title" placeholder="여기에 제목을 입력하세요." onkeyup="this.value = this.value.replace(' ', '_')" required value='<?PHP if(isset($_GET["id"])) {echo $_GET["id"];} else {echo "알 수 없는 문서입니다.";} ?>' />
            <input type="hidden" role="uploadcare-uploader" data-public-key="81402b0924e09db17275" data-tabs="file camera url facebook gdrive gphotos" data-effects="crop, rotate, flip, blur, enhance, grayscale" />
            <input type="submit" value="수정" />
            <textarea name="description" placeholder="여기에 본문을 입력하세요." rows="10"><?PHP if(isset($_GET["id"])) {echo file_get_contents("data/".$_GET["id"]);} ?></textarea>
        </form>
    </main>
    <script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js"></script>
    <script src="https://ucarecdn.com/libs/widget-tab-effects/1.x/uploadcare.tab-effects.min.js"></script>
    <script>uploadcare.registerTab('preview', uploadcareTabEffects), UPLOADCARE_LOCALE = "ko"</script>
    <script src="./scripts/upload.js"></script>
</body>
</html>
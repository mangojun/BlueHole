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
        h1 {
            margin: 0;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: normal;
        }

        nav a, nav input {
            position: relative;
            float: right;
            background-color: #fff;
            border: 1px solid #eee;
            text-decoration: none;
            color: #000;
            font-size: medium;
            padding: 5px;
            border-radius: 5px;
            margin-left: 5px;
            top: -20px;
        }

        article {
            margin-top: 34px;
            padding-left: 15px;
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
        <h1>
            <?PHP
		        if(isset($_GET["id"])) {
			        echo basename($_GET["id"]);
		        } else {
			        echo "알 수 없는 문서입니다.";
		        }
	        ?>
        </h1>
        <nav>
            <a href="#">수정</a>
            <form action="./process/delete.php" method="post">
                <input type="hidden" name="id" value="<?PHP echo $_GET["id"]; ?>" />
                <input type="submit" value="삭제" id="docBtn">
            </form>
        </nav>
        <article>
            <hr>
            <?PHP
		        if(isset($_GET["id"])) {
                    $text = nl2br(file_get_contents("data/".basename($_GET["id"])));
			        echo strip_tags($text, "<br><img>");
		        }
	        ?>
        </article>
    </main>
</body>
</html>
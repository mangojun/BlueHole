<!DOCTYPE html>

<html>
<head>
    <title>
        <?PHP
		    if(isset($_GET["id"])) {
			    echo $_GET["id"];
		    } else {
			    echo "알 수 없는 문서입니다.";
		    }
	    ?>
    </title>
    <link rel="shortcut icon" href="./images/icon.ico">
    <link rel="stylesheet" href="./index.css">
    <meta charset="utf-8" />
    <style>  
        #docBtn {
            float: left;
            background-color: navy;
            border-radius: 5px;
            border: 0px;
            padding: 5px 10px 5px 10px;
            font-size: medium;
            color: white;
        }

        button {
            margin-left: 0px;
        }

        input {
            margin-left: 10px;
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
        <h1>
	        <?PHP
		        if(isset($_GET["id"])) {
			        echo basename($_GET["id"]);
		        } else {
			        echo "알 수 없는 문서입니다.";
		        }
	        ?>
        </h1>
        <h3>
            <?PHP
		        if(isset($_GET["id"])) {
                    $text = nl2br(file_get_contents("data/".basename($_GET["id"])));
			        echo strip_tags($text, "<br><img>");
		        }
	        ?>
        </h3>
        <?PHP
            echo "<button id='docBtn' onclick='location.href=`./update.php?id=".$_GET["id"]."`'>수정<button>";
        ?>
        <form action="./process/delete.php" method="post">
            <input type="hidden" name="id" value="<?PHP echo $_GET["id"]; ?>" />
            <input type="submit" value="삭제" id="docBtn">
        </form>
    </main>
</body>
</html>
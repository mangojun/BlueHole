<!DOCTYPE html>

<html>
<head>
    <title>BlueHole</title>
    <link rel="shortcut icon" href="./images/icon.ico">
    <link rel="stylesheet" href="./index.css">
    <meta charset="utf-8" />
    <style>
        #texts {
            width: 100%;
            height: 100%;
            margin-top: 10px
        }

            #texts button {
                margin: 0px 10px 0px 0px;
                background-color: navy;
                border-radius: 5px;
                border: 0px;
                padding: 5px 10px 5px 10px;
                font-size: medium;
                color: white;
            }

        #searchbar {
            width: calc(100% - 132px);
            height: 35px;
            border: 0px;
            border-radius: 5px;
            background-color: #bedafb;
            float: left;
            padding: 0px 0px 0px 5px;
            outline: none;
        }

        button {
            margin: 0px 5px 0px 10px;
            height: 35px;
            border: 0px;
            border-radius: 5px;
            background-color: #394b61;
            color: white;
            font-size: medium;
        }

        #upload {
            margin: 0;
            background-color: #007fff;
        }
    </style>
</head>
    <body>
        <header>
            <div>
                <a href="./index.html"><img src="./images/logo.png" alt="BluHole" width="300"></a>
            </div>
        </header>
        <nav>
            <a href="./gallery.html" class="active">갤러리</a>
            <a href="./change.html" class="item">변경점</a>
            <a href="./community.html" class="item">커뮤니티</a>
        </nav>
        <main>
            <div>
                <input type="text" name="q" id="searchbar" placeholder="여기에 검색하세요...">
                <button class="button" onclick="search()">검색</button>
                <button class="button" id="upload" onclick=location.href='./upload.html'>업로드</button>
                <div id="texts">
                    <?PHP
                        $list = scandir("./data");
                        
		                $i = 0;
		                while($i < count($list)) {
			                if($list[$i] != ".") {
				                if($list[$i] != "..") {
                                    echo "<button class='document' onclick=location.href='./document.php?id=".$list[$i]."'>".$list[$i]."</button>";
                                    echo "<button class='document' onclick='location.href=`./document.php?id=".$list[$i]."`'>".$list[$i]."</button>";
				                }
			                }
			                $i = $i + 1;
		                }
                    ?>

                </div>
            </div>
        </main>
        <script src="./scripts/gallery.js"></script>
    </body>
</html>
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
        main {
            width: width: calc(100% - 20px);
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, auto));
            grid-auto-rows: 40px;
            gap: 5px;
            margin: 10px 10px 10px 10px;
        }

            main a {
                color: #000;
                text-decoration: none;
                border: #ddd solid 1px;
                border-radius: 5px;
                text-align: center;
                padding: 7px;
            }
    </style>
</head>
<body>
    <div id="screen">BlueHole은 데스크톱 컴퓨터에 최적화된 사이트입니다. 382px보다 작은 모니터를 이용할 경우 사용할 수 없습니다.</div>
    <header>
        <div id="logo"><a href="./index.html"><img src="./images/logo.png" alt="bluehole" width="110"></a></div>
        <div id="active"><a href="./gallery.php">갤러리</a></div>
        <div><a href="./change.html">변경점</a></div>
        <div><a href="./community.html">커뮤니티</a></div>
        <div><a href="./upload.html">업로드</a></div>
        <input id="search" type="text" placeholder="여기에 검색하세요..." onkeyup="search()" />
    </header>
    <main>
        <?PHP
            $list = scandir("./data");
            
            $i = 0;
            while($i < count($list)) {
                if($list[$i] != ".") {
                    if($list[$i] != "..") {
                        echo "<a class='document' href='./document.php?id=".$list[$i]."'>".$list[$i]."</a>";
                    }
                }
                $i = $i + 1;
            }
        ?>
    </main>
    <script src="./scripts/gallery.js"></script>
</body>
</html>
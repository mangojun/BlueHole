<?PHP
	file_put_contents("../data/ ".$_POST["title"], $_POST["description"]);
	header("Location: /document.php?id=".$_POST["title"]);
?>
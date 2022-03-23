<?PHP
	unlink("../data/".basename($_POST["id"]));
	header("Location: /gallery.php");
?>
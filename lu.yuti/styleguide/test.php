<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php 
		$root = $_SERVER["DOCUMENT_ROOT"] ."/aau/wnm608/lu.yuti/parts/meta.php";
   	?>
	<?php include $root?>
</head>
<body>
	<?php include "../parts/navbar.php"; ?>

<form method="post">
	<select name="testSelect" id="">
		<option value="1">1</option>
		<option value="2">2</option>
	</select>
	<button type="submit" name="sub">ok</button>
</form>

<?php
if(isset($_POST["sub"]))
	if(isset($_POST["testSelect"])){
		include "./product_action.php";
		
	}
?>

   <?php include "../parts/footer.php"; ?>
</body>
</html>
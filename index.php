<?php
	try{
	$conn = new PDO(
	'mysql:host=localhost;dbname=katis_shop','root', '');
	
	$conn->setAttribute(
		PDO::ATTR_ERRMODE,
		PDO::ERRMODE_EXCEPTION);
	
	
	} catch(PDOException $e) {
	 echo 'ERROR: ' . $e->getMessage();
	 }
?>
<html>
	<head>
		<title>Katis - samokat shop</title>
	</head>
	<body>
		<header>
			<title>samokat</title>
		</header>
		<ul>
			<li><a href="?action=add">мнбши яюлнйюр</a></li>
			<li><a href="?action=list">яохянй яюлнйюрнб</a></li>
		</ul>
		<?php 
			$action = isset($_GET['action']) ? $_GET['action'] : 'list';
			if ($action == 'add')
				{
				require 'add.php';
				}
			elseif ($action == 'edit')
				{
				require 'edit.php';
				}
			elseif ($action == 'delete') {
				require 'delete.php';
				}
			else require 'list.php';
		?>
		
		 
		
		<footer>
			
		</footer>
	</body>
</html>
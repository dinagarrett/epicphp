<html>

</html>

<?php
if (!empty($_POST['title'])) {
	$statement = $conn->prepare('
		UPDATE products SET
			title =:title,
			sku =:sku,
			price =:price
		WHERE id =:id
	');
	$statement->execute(array(
		':title' => isset($_POST['title']) $_POST['title'] : '',
		':sku' => isset($_POST['sku']) $_POST['sku'] : '',
		':price' => isset($_POST['price']) $_POST['price'] : '',
		'





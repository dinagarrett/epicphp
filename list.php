<?php
$statement =  $conn->prepare("SELECT * FROM `products`");
$statement->execute();
$products = $statement->fetchAll();
echo '<table>';
foreach ($products as $product) {
		echo '<tr>
				<td>' . $product['id'] . '</td>
				<td>' . $product['sku'] . '</td>
				<td>' . $product['title'] . '</td>
				<td>' . $product['price'] . '</td>
			</tr>';
}
echo '</table>';
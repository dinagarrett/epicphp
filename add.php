<h1>Добавить самокат</h1>
<form action="?action=add" method="post">
	<div>
		<label>Title</label>
		<input type="text" name="title" value=""/>
	</div>
	<div>
		<label>SKU</label>
		<input type="text" name="sku" value=""/>
	</div>
	<div>
		<label>Price</label>
		<input type="text" name="price" value=""/>
	</div>
	<div>
		<input type="submit" name="submit" value="Submit"/>
	</div>
</form>
<?php
	if (!empty($_POST['title'])) {
		$statement
	
	
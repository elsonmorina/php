<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <style>
		
		/* General body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Container for the table */
table {
    width: 80%;
    max-width: 1000px;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Table Header Styling */
thead {
    background-color: #4CAF50;
    color: white;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    font-size: 18px;
}

td {
    font-size: 16px;
    border-bottom: 1px solid #ddd;
}

/* Hover effect for rows */
tr:hover {
    background-color: #f1f1f1;
}

/* Styling for links (Edit/Delete) */
a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Styling for "Add User" link */
a[href="addproduct.php"] {
    display: inline-block;
    margin-top: 20px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
}

a[href="addproduct.php"]:hover {
    background-color: #45a049;
}
a[href="logout.php"] {
    display: inline-block;
    margin-top: 20px;
    background-color: #FF3131;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
}

a[href="logout.php"]:hover {
    background-color: #FF0000;
}


	</style>
</head>
<body>
		<?php
		include_once('config.php');
		$getusers = $conn->prepare("SELECT * FROM products");
		$getusers ->execute();
		$users = $getusers->fetchall();
		?>
	 <table>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>title</th>
				<th>description</th>
				<th>quantity</th>
				<th>price</th>
				
			</tr>
	</thead>

	<?php
		foreach($users as $product){
			?>
	<tr>
		<td><?=$product['id']?></td>
		<td><?=$product['title']?></td>
		<td><?=$product['description']?></td>
		<td><?=$product['quantity']?></td>
		<td><?=$product['price']?></td>
		<td> <?= "<a href='delete.php?id=$product[id]'>Delete</a> | <a href='edit.php?id=$product[id]'>Edit</a>"?></td>
	</tr>
	<?php	
	}
	?>
	 </table>

	 <a href="addproduct.php">Add Product</a>
	 <a href="logout.php">Log out</a>
	
</body>
</html>
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
a[href="index.php"] {
    display: inline-block;
    margin-top: 20px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
}

a[href="index.php"]:hover {
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
		$getusers = $conn->prepare("SELECT * FROM users");
		$getusers ->execute();
		$users = $getusers->fetchall();
		?>
	 <table>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Update</th>
			</tr>
	</thead>

	<?php
		foreach($users as $user){
			?>
	<tr>
		<td><?=$user['id']?></td>
		<td><?=$user['username']?></td>
		<td><?=$user['name']?></td>
		<td><?=$user['surname']?></td>
		<td><?=$user['email']?></td>
		<td> <?= "<a href='delete.php?id=$user[id]'>Delete</a> | <a href='edit.php?id=$user[id]'>Edit</a>"?></td>
	</tr>
	<?php	
	}
	?>
	 </table>

	 <a href="index.php">Add User</a>
	 <a href="logout.php">Log out</a>
	
</body>
</html>
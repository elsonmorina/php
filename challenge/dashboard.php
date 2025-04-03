<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

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
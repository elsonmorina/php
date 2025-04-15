<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f2f4f8;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    table {
      width: 90%;
      margin: 30px auto;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      border-radius: 10px;
      overflow: hidden;
    }

    thead {
      background-color: #3f51b5;
      color: #fff;
    }

    th, td {
      padding: 15px 20px;
      text-align: left;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    a {
      text-decoration: none;
      color: #3f51b5;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }

    .actions {
      margin: 20px auto;
      text-align: center;
    }

    .actions a {
      margin: 0 15px;
      padding: 10px 20px;
      background-color: #3f51b5;
      color: #fff;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .actions a:hover {
      background-color: #303f9f;
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
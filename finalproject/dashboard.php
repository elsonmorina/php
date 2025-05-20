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
      padding: 0;
    }

    h1 {
      text-align: center;
      
    }
    
    header {
      background: #3f51b5;
      padding: 20px;
      text-align: center;
      color: white;
    }

    header h1 {
      font-size: 2.5rem;
    }

    nav {
      background: #303f9f;
      padding: 10px 0;
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      font-size: 1rem;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffeb3b;
    }

    nav a.logout {
      background: #ff5252;
      padding: 8px 16px;
      border-radius: 5px;
      color: white;
    }

    nav a.logout:hover {
      background: #e53935;
      color: white;
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
		$getusers = $conn->prepare("SELECT * FROM users1");
		$getusers ->execute();
		$users = $getusers->fetchall();
		?>
	 <table>
    <header>
    <h1>FitnessWeb</h1>
    <p>Your Personal Fitness Companion</p>
  </header>

  <nav>
    <a href="home.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    
    <a href="logout.php" class="logout">Logout</a>
  </nav>
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
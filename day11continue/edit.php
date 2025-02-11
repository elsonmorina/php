<?php

    include_once('config.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id=:id";

    $prep = $conn->prepare($sql);
    $prep->bindParam(':id',$id);

    $prep->execute();
    $data = $prep->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            margin: 0;
            padding: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            transition: transform 0.3s;
        }
        form:hover {
            transform: scale(1.02);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #6a11cb;
            outline: none;
            box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
        }
        input[type="submit"] {
            background-color: #6a11cb;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #2575fc;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']?>"><br>
        <input type="text" name="username" value="<?php echo $data['username']?>"><br>
        <input type="text" name="name" value="<?php echo $data['name']?>"><br>
        <input type="text" name="surname" value="<?php echo $data['surname']?>"><br>
        <input type="email" name="email" value="<?php echo $data['email']?>"><br>

        <button type="submit" name="update">UPDATE</button>
    </form>
</body>
</html>
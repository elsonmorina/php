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

/* Form container */
form {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

/* Form input fields */
input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

/* Focus effect for inputs */
input[type="text"]:focus,
input[type="email"]:focus {
    border-color: #4CAF50;
    outline: none;
}

/* Submit button */
button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    width: 100%;
    cursor: pointer;
}

/* Button hover effect */
button[type="submit"]:hover {
    background-color: #45a049;
}

/* Label styling for inputs */
label {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    color: #333;
}

/* Styling for hidden inputs (ID) */
input[type="hidden"] {
    display: none;
}

    </style>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="text" name="id" value="<?php echo $data['id']?>" readonly><br>
        <input type="text" name="username" value="<?php echo $data['username']?>"><br>
        <input type="text" name="name" value="<?php echo $data['name']?>"><br>
        <input type="text" name="surname" value="<?php echo $data['surname']?>"><br>
        <input type="email" name="email" value="<?php echo $data['email']?>"><br>

        <button type="submit" name="update">UPDATE</button>
    </form>
</body>
</html>
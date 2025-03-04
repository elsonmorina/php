<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* General Body Styling */
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

/* Form Container */
form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

/* Input Fields Styling */
input[type="text"], input[type="number"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}

/* Focused Input Styling */
input[type="text"]:focus, input[type="number"]:focus {
    border-color: #4CAF50;
    outline: none;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
}

/* Button Styling */
button[type="submit"] {
    width: 100%;
    padding: 14px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Button Hover Effect */
button[type="submit"]:hover {
    background-color: #45a049;
}

/* Placeholder Styling */
input::placeholder {
    color: #bbb;
    font-style: italic;
}

/* Form Title or Heading */
h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

    </style>
</head>
<body>

        <form action="products.php" method="POST">
            <input type="text"  placeholder="title" name="title" required autofocus>
            <input type="text" placeholder="description" name="description" required autofocus>
            <input type="text" placeholder="quantity" name="quantity" required autofocus>
            <input type="text" placeholder="price" name="price" required autofocus>
            <button type="submit" name="submit"> Add</button>
        </form>
    
</body>
</html>
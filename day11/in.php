
<!DOCTYPE html>

<head>
    <style>
        /* General body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

/* Link styles */
a {
    text-decoration: none;
    color: #007BFF;
    font-weight: bold;
    margin-bottom: 20px;
    display: inline-block;
}

a:hover {
    text-decoration: underline;
}

/* Form styles */
form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 0 auto; /* Center the form */
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box; /* Include padding and border in element's total width and height */
}

input[type="text"]:focus,
input[type="email"]:focus {
    border-color: #007BFF;
    outline: none; /* Remove default outline */
}

button {
    background-color: #007BFF;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3; /* Darker shade on hover */
}

/* Responsive styles */
@media (max-width: 600px) {
    form {
        padding: 15px;
    }

    button {
        font-size: 14px;
    }
}
    </style>
</head>
<body>
<a href="dashboard.php">dashboard</a>
    <form action="add.php" method="POST">
        
    <input type="text" name="username" placeholder="username"><br>
        <input type="text" name="name" placeholder="name"><br>
        <input type="text"  name="surname" placeholder="surname"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="email"  name="email" placeholder="email"><br>
        <button type="submit" name="submit">ADD</button><br>
        
    </form>


</body>
</html>
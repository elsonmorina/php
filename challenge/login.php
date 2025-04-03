<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        /* Reset some default styling */
        body, h1, form {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Center the form in the page */
        body {
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container for the form */
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        /* Styling the form fields */
        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .form-container input:focus {
            border-color: #007BFF;
            outline: none;
        }

        /* Button styles */
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        /* Styling the form footer */
        .form-container .footer {
            text-align: center;
            margin-top: 10px;
        }

        .form-container .footer a {
            text-decoration: none;
            color: #007BFF;
        }

        .form-container .footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<div class="form-container">
    <h1>Login</h1>
    <form action="loginLogic.php" method="POST">
        <!-- Username field -->
        <input type="text" id="username" name="username" placeholder="Username" required>

        
        <!-- Password field -->
        <input type="password" id="password" name="password" placeholder="Password" required>

        <!-- Submit Button -->
        <button type="submit">Login</button>
    </form>

    <div class="footer">
        <p>Don't have an account? <a href="#">Sign up here</a></p>
    </div>
</div>

</body>
</html>

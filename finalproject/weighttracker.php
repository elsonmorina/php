<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weight Tracker</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f2f5;
    }
    h1 {
      color: #333;
    }
    form {
      margin-top: 20px;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    input[type="date"], input[type="number"] {
      padding: 10px;
      width: 100%;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .submit-btn {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
    .submit-btn:hover {
      background-color: #0056b3;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }
    th {
      background-color: #e9ecef;
    }
  </style>
</head>
<body>

  <h1>Weight Tracker</h1>

  <form>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="weight">Weight (kg):</label>
    <input type="number" id="weight" name="weight" step="0.1" required>

    <button type="submit" class="submit-btn">Add Entry</button>
  </form>

 

</body>
</html>

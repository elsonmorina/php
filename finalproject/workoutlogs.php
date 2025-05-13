<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Workout Logs</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f8f9fa;
    }
    h1 {
      color: #333;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    table, th, td {
      border: 1px solid #ccc;
    }
    th, td {
      padding: 12px;
      text-align: left;
    }
    th {
      background-color: #e9ecef;
    }
    .add-log {
      margin-top: 20px;
    }
    input[type="text"], input[type="date"], input[type="number"] {
      padding: 8px;
      width: 100%;
      margin-bottom: 10px;
    }
    .submit-btn {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }
    .submit-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <h1>Workout Logs</h1>

  <form class="add-log">
    <h2>Add New Log</h2>
    <label>Date:</label>
    <input type="date" name="date" required><br>
    
    <label>Workout Type:</label>
    <input type="text" name="type" placeholder="e.g. Cardio, Strength" required><br>
    
    <label>Duration (minutes):</label>
    <input type="number" name="duration" required><br>
    
    <label>Notes:</label>
    <input type="text" name="notes" placeholder="Any notes or progress updates"><br>
    
    <button type="submit" class="submit-btn">Add Log</button>
  </form>

  

</body>
</html>

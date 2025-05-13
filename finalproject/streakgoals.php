<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Streak Goals</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f7fa;
      padding: 30px;
    }
    h1 {
      color: #333;
    }
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      margin-top: 20px;
    }
    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0 20px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .submit-btn {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
    .submit-btn:hover {
      background-color: #218838;
    }
    .goal-list {
      margin-top: 30px;
    }
    .goal {
      background-color: #ffffff;
      border-left: 5px solid #28a745;
      margin-bottom: 20px;
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    .goal h3 {
      margin: 0 0 10px 0;
    }
    .progress-bar {
      background-color: #e9ecef;
      border-radius: 4px;
      overflow: hidden;
    }
    .progress-bar-fill {
      height: 20px;
      background-color: #28a745;
      width: 60%; /* Example width */
      transition: width 0.3s;
    }
  </style>
</head>
<body>

  <h1>Streak Goals</h1>

  <form>
    <label for="goal">Goal Description:</label>
    <input type="text" id="goal" name="goal" placeholder="e.g. 7-day yoga streak" required>

    <label for="days">Goal Length (days):</label>
    <input type="number" id="days" name="days" required>

    <button type="submit" class="submit-btn">Add Goal</button>
  </form>

  

</body>
</html>

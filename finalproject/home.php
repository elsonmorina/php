<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FitnessWeb | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f2f4f8;
      color: #333;
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

    .hero {
      text-align: center;
      padding: 60px 20px;
      background: url('https://images.unsplash.com/photo-1571019613914-85f342c35f3b?fit=crop&w=1600&q=80') no-repeat center center/cover;
      color: white;
    }

    .hero h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto;
    }

    .content {
      padding: 40px 20px;
      max-width: 1000px;
      margin: auto;
      text-align: center;
    }

    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 30px;
    }

    .card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      padding: 20px;
      width: 250px;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      margin-bottom: 10px;
      color: #3f51b5;
    }

    .card p {
      font-size: 0.95rem;
    }

    footer {
      background: #3f51b5;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }

    a {
      text-decoration: none;
    }

    @media (max-width: 600px) {
      nav {
        flex-direction: column;
        gap: 10px;
      }

      .features {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>FitnessWeb</h1>
    <p>Your Personal Fitness Companion</p>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="dashboard.php">Dashboard</a>
    
    <a href="logout.php" class="logout">Logout</a>
  </nav>

  <section class="hero">
    <h2>Track. Improve. Succeed.</h2>
    <p>Welcome to FitnessWeb — your all-in-one fitness progress tracker. Log your workouts, monitor your weight, and crush your goals.</p>
  </section>

  <section class="content">
    <h2>Features</h2>
    <div class="features">
      <a href="workoutlogs.php">
        <div class="card">
          <h3>Workout Logs</h3>
          <p>Record your daily workouts and view progress over time.</p>
        </div>
      </a>
      <a href="weighttracker.php">
        <div class="card">
          <h3>Weight Tracker</h3>
          <p>Keep tabs on your weight and health goals with progress charts.</p>
        </div>
      </a>
      <a href="streakgoals.php">
        <div class="card">
          <h3>Streak Goals</h3>
          <p>Build streaks and stay motivated with personal goal tracking.</p>
        </div>
      </a>
    </div>
  </section>

  <footer id="contact">
    <p>&copy; 2025 FitnessWeb. Built with 💪 for your journey.</p>
  </footer>

</body>
</html>


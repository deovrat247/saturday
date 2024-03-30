<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centered Links</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .links {
      text-align: center;
    }
    .links a {
      display: inline-block;
      text-decoration: none;
      color: #333;
      padding: 10px 20px;
      margin: 10px;
      border: 2px solid #333;
      border-radius: 5px;
      transition: all 0.3s ease;
    }
    .links a:hover {
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="links">
      <a href="saturday-schedule.php">Saturday Schedule</a>
      <a href="holidays.php">Holidays</a>
    </div>
  </div>

</body>
</html>

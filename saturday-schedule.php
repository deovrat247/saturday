<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Team Schedule</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Team Schedule</h1>
    <p>List of people going to work on the coming Saturday:</p>
    <ul id="scheduleList" class="list-group">
      <?php
        // Function to determine who works on the upcoming Saturday
        function getSchedule() {
          $today = new DateTime();
          $nextSaturday = new DateTime();
          $nextSaturday->modify('next saturday');
          $dayOfMonth = (int)$nextSaturday->format('d');
          
          // Check if it's the first or third Saturday
          if ($dayOfMonth <= 7 || ($dayOfMonth > 14 && $dayOfMonth <= 21)) {
            $people = ["Subodh Waghmare", "Vishal Dalvi", "Ganesh Pardhe", "Hemlata Jadhav", "Nidhi Manoj"];
          }
          // Check if it's the second or fourth Saturday
          else if (($dayOfMonth > 7 && $dayOfMonth <= 14) || ($dayOfMonth > 21 && $dayOfMonth <= 28)) {
            $people = ["Tejaswini Patil", "Chaitali", "Hansraj", "Kalyani Divate"];
          }
          else {
            $people = [];
          }

          return $people;
        }

        // Call getSchedule function and display the list
        $schedule = getSchedule();
        if (!empty($schedule)) {
          foreach ($schedule as $person) {
            echo "<li class='list-group-item'>$person</li>";
          }
        } else {
          echo "<li class='list-group-item'>No one scheduled to work this Saturday.</li>";
        }
      ?>
    </ul>
  </div>

  <!-- Bootstrap JS and jQuery (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

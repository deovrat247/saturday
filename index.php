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
      <!-- Schedule will be appended here -->
    </ul>
  </div>

  <!-- Bootstrap JS and jQuery (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Function to determine who works on the upcoming Saturday
    function getSchedule() {
      var today = new Date();
      var nextSaturday = new Date();
      nextSaturday.setDate(today.getDate() + (6 - today.getDay() + 1) % 7); // Calculate the date of the next Saturday
      var dayOfMonth = nextSaturday.getDate();
      
      var scheduleList = document.getElementById("scheduleList");
      scheduleList.innerHTML = ""; // Clear existing list
      
      // Check if it's the first or third Saturday
      if (dayOfMonth <= 7 || (dayOfMonth > 14 && dayOfMonth <= 21)) {
        addPersonToList("Ramesh");
        addPersonToList("Suresh");
      }
      // Check if it's the second or fourth Saturday
      else if ((dayOfMonth > 7 && dayOfMonth <= 14) || (dayOfMonth > 21 && dayOfMonth <= 28)) {
        addPersonToList("Mohan");
        addPersonToList("Sohan");
      }
      else {
        scheduleList.innerHTML = "<li class='list-group-item'>No one scheduled to work this Saturday.</li>";
      }
    }
    
    // Function to add a person to the schedule list
    function addPersonToList(person) {
      var listItem = document.createElement("li");
      listItem.className = "list-group-item";
      listItem.textContent = person;
      document.getElementById("scheduleList").appendChild(listItem);
    }

    // Call getSchedule function on page load
    window.onload = function() {
      getSchedule();
    };
  </script>
</body>
</html>

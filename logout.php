<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout Page</title>
  <style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f3f6;
      text-align: center;
      margin-top: 50px;
    }
    .logout-button {
      background-color: #ff5252;
      color: white;
      border: none;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
    }
    .logout-button:hover {
      background-color: #ff0000;
    }
  </style>
</head>
<body>
  <h2>Are you sure you want to logout?</h2>
  <button class="logout-button" onclick="logout()">Logout</button>

  <script>
    function logout() {
      // Redirect to the login page
      window.location.href = "login.php";
    }
  </script>
</body>
</html>

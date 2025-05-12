<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schedule a Visit</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    input[type="text"], input[type="email"], input[type="date"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    input[type="text"]:focus, input[type="email"]:focus, input[type="date"]:focus {
      border-color: #f35525;
      outline: none;
    }

    button {
      width: 100%;
      padding: 15px;
      background-color: #f35525;
      color: #fff;
      font-size: 18px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #e64720;
    }

    .back-button {
      display: block;
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #333;
    }

    .back-button a {
      text-decoration: none;
      color: #333;
    }

    .back-button a:hover {
      color: #f35525;
    }
  </style>
  <script>
    function showConfirmation(event) {
      event.preventDefault(); 
      alert('You have successfully scheduled a visit. Thank you!');
      
      document.getElementById("contact-form").reset(); 
    }
  </script>
</head>
<body>
  <div class="form-container">
    <h2>Schedule Your Visit</h2>
    <form id="contact-form" action="" method="post" onsubmit="showConfirmation(event)">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" placeholder="Your Name..." required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Your Email..." required>

      <label for="visit-date">Select Visit Date</label>
      <input type="date" id="visit-date" name="visit-date" required>

      <button type="submit">Submit</button>
    </form>
    <div class="back-button">
      <a href="index.php">Back to Home</a>
    </div>
  </div>
</body>
</html>

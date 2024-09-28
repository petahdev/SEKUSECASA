<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Message Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image:url('images/catechism.jpg')  ;
            margin: 0;
            padding: 0;
            color:white;
            background-size:cover;
            background-repeat:no-repeat;
        }
        .form-container {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 8px;
            background-color: transparent;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            color: #22c55e;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 8px;
            color:white;
            font-weight: bold;
        }
        .form-container input[type="text"],
        .form-container textarea {
            width: 94%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        .form-container input[type="text"]:focus,
        .form-container textarea:focus {
            border-color: #22c55e;
            outline: none;
        }
        .form-container textarea {
            height: 120px;
            resize: none; /* Prevent resizing */
        }
        .form-container input[type="submit"] {
            background-color: #22c55e;
            color: white;
            cursor: pointer;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .form-container input[type="submit"]:hover {
            background-color: #1da548;
        }
        .error-message {
            color: red;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Admin Message Form</h2>
        <?php
        session_start(); // Start the session

        // Display error message if it exists
        if (isset($_SESSION['error_message'])) {
            echo '<div class="error-message">' . htmlspecialchars($_SESSION['error_message']) . '</div>';
            unset($_SESSION['error_message']); // Clear the message after displaying
        }
        ?>
        <form action="adminmessage.php" method="POST">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="position">Position in SECASA</label>
            <input type="text" id="position" name="position" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Enter your message here" required></textarea>

            <input type="submit" value="Send Message">
        
        </form>
    </div>

    <button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-secasa.php'">See Secasa Users</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-stpauls.php'">St. Pauls</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-staugustine.php'">St. Augustine</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-stmonica.php'">St. Monica</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-stfrancis.php'">St. Ftancis</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-standrew.php'">St. Andrew</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-cma.php'">CMA</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='editsecasa.php'">Edit Users</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-choir.php'">Choir</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-pioneer.php'">Pioneer</button>
<button style="background-color: #22C55E; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin: 5px;" onclick="window.location.href='live-cla.php'">CLA</button>

</body>
</html>

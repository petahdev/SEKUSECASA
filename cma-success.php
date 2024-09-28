<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMA</title>

    <style>
        /* General resets */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: url('images/rosary.jpg') no-repeat center center fixed; /* Fixed background */
    background-size: cover;
    color: white;
    display: flex;
    flex-direction: column;
    height: 100vh;
}

/* Header */
header {
    background-color: transparent; /* Add some transparency */
    padding: 20px;
    text-align: center;
    color:#4F46E5 ;
    position: relative;
}

.toggle-button {
    position: absolute;
    top: 20px;
    left: 20px;
    background-color: rgba(18, 19, 18, 0.8);
    border: none;
    color: white;
    font-size: 34px;
    border-radius: 5px;
    padding: 5px;
    position: fixed;
    z-index: 1000;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background-color: rgba(26, 29, 27, 0.9);
    height: 100vh;
    position: fixed;
    top: 0;
    left: -250px;
    transition: left 0.3s ease;
    z-index: 1000;
}

.sidebar.active {
    left: 0;
}

.sidebar .logo img {
    max-width: 150px;
    margin: 20px auto;
    display: block;
}

.sidebar nav ul {
    list-style: none;
    padding: 0;
}

.sidebar nav ul li {
    padding: 15px;
}

.sidebar nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    display: block;
    transition: background-color 0.3s;
}

.sidebar nav ul li a:hover {
    background-color: rgba(0, 0, 0, 0.1);
}

/* Main Sections */
main {
    padding: 20px;
    flex-grow: 1;
    background-color: rgba(17, 16, 16, 0.1); /* Slight white overlay */
    border-radius: 10px;
    margin: 10px;
}

.landing {
    text-align: center;
    margin-bottom: 30px;
}

.group-form,
.contact-form {
    margin: 30px 0;
    padding: 20px;
    background-color: transparent;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 600px; /* Added max-width to prevent forms from being too wide */
    margin-left: auto;
    margin-right: auto;
}

form label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

form input[type="text"],
form input[type="email"],
form input[type="tel"],
form input[type="password"],
form input[type="file"],
form textarea {
    width: 100%;
    max-width: 100%; /* Ensure inputs stay within container */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

/* Form button */
form button {
    background-color:#4F46E5;
    border: none;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
    width: 100%;
}

form button:hover {
    background-color: white;
    color:#1D4ED8;
}

/* Footer */
footer {
    background-color:#4F46E5;
    color: white;
    text-align: center;
    padding: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .group-form,
    .contact-form {
        margin: 20px 0;
        padding: 15px;
        max-width: 100%; /* For mobile, make form full width */
    }

    form button {
        width: 100%;
    }
}

/* Landing Content */
.landing-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Full height */
    text-align: center;
    color: #fff; /* Text color */
    padding: 20px;
    background:transparent; /* Use the background image */
    background-size: cover; /* Cover the entire viewport */
    background-position: center; /* Center the image */
}

.heading {
    font-size: 3rem;
    margin: 0;
    color:white;
}

.paragraph {
    font-size: 1.5rem; /* Slightly larger font size */
    max-width: 600px; /* Max width for the paragraph */
}

    </style>
</head>
<body>
    <header>
        <button class="toggle-button" onclick="toggleSidebar()">☰</button>
        <h1>Secasa CMA</h1>
    </header>

    <aside class="sidebar" id="sidebar">
        <div class="logo">
            <img src="SECASA.png" alt="SECASA Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Group Details</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </aside>

    <main onclick="closeSidebar()">
    <section class="landing">
        <h2>Come sing with us</h2>
        <p>Come All men, Lets serve The Lord</p>
    </section>

    <section class="group-form">
        <h3>Register for the Magical Choir</h3>

        <?php
        include 'connect.php'; // Include your database connection

        $errorMessage = '';  // Error message initialization

        // Check if form is submitted
        if (isset($_POST['subscribe'])) {
            $email = $_POST['email'];
            $phoneNumber = $_POST['phone_number'];
            $password = $_POST['password'];

            // Prepare SQL statement to check if the user exists
            $stmt = $conn->prepare("SELECT * FROM cma WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // User exists, allow subscription
                echo "
                <div class='success-message'>
                    <img src='stpauls-images/stp.jpeg' alt='Success' style='width:100%;'>
                    <p>Subscription successful! You will start receiving weekly emails.</p>
                </div>";
            } else {
                // User doesn't exist, show error
                $errorMessage = "This email is not registered for any cma. Please sign up first.";
            }

            $stmt->close();
        }
        ?>

        <!-- If there is an error, display it -->
        <?php if (!empty($errorMessage)): ?>
            <div class="error-message" style="color: red; text-align: center; font-weight: bold; padding: 10px;">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <form action="cmaemail.php" method="POST">
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone_number" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" name="subscribe">Subscribe</button>
</form>
    </section>
</main>

    <footer>
        <p>&copy; 2024 Secasa. All Rights Reserved.</p>
    </footer>

    <script src="group-scripts.js"></script>
</body>
</html>

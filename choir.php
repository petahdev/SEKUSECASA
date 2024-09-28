<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saint Paul Membership Signup</title>
    <link rel="stylesheet" href="stpauls.css">

    <style>
        /* General resets */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: url('images/rosary2.jpg') no-repeat center center fixed; /* Fixed background */
    background-size: cover;
    color: #fff;
    display: flex;
    flex-direction: column;
    height: 100vh;
}

/* Header */
header {
    background-color: transparent; /* Add some transparency */
    padding: 20px;
    text-align: center;
    color: white;
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
    background-color: #F5A623;
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
    color: #22C55E;
}

/* Footer */
footer {
    background-color: #F5A623;
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
}

.paragraph {
    font-size: 1.5rem; /* Slightly larger font size */
    max-width: 600px; /* Max width for the paragraph */
}

    </style>
</head>
<body>
   
        <button class="toggle-button" onclick="toggleSidebar()">☰</button>
      
   

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
    <div class="landing-content">
        <h1 class="heading">Welcome to The Magical Choir </h1>
    </div>
    <main onclick="closeSidebar()">
        <section class="landing">
            <h2>Magical Choir Registration</h2>
            <p>Join the Secasa Magical choir.</p>
        </section>

        <section class="group-form">
            <h3>Register for the Choir here</h3>
            <form action="choir-register.php" method="POST" enctype="multipart/form-data">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="first_name" required>

        <label for="secondName">Second Name:</label>
        <input type="text" id="secondName" name="second_name" required>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone_number" required>

        <label for="course">Course Done:</label>
        <input type="text" id="course" name="course_done" required>

        <label for="year">Year of Study:</label>
        <input type="text" id="year" name="year_of_study" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="repeatPassword">Repeat Password:</label>
        <input type="password" id="repeatPassword" name="repeat_password" required>

        <label for="image">Profile Image (Optional):</label>
        <input type="file" id="image" name="image" accept="image/*">

        <button type="submit">Register</button>
        
        <?php if (isset($_GET['error'])): ?>
            <div style="color: red;"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>
    </form>
    <p style="text-align:center;">Or</p>
    <p style="text-align:center;"><a style="text-decoration:none; color:#22c55e;" href="success.php">Subscribe to Choir Reminders</a></p>

        </section>

        <section class="contact-form">
            <h3>Contact Us</h3>
            <form action="contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="emailContact">Email:</label>
                <input type="email" id="emailContact" name="emailContact" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Secasa. All Rights Reserved.</p>
    </footer>

    <script src="group-scripts.js"></script>
</body>
</html>

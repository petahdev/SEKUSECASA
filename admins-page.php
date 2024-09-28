<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECASA -| Association Admin Portal</title>

    <style>
        /* General resets */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: url('images/catechism.jpg') no-repeat center center fixed;
    background-size: cover; /* Ensures the image covers the entire background */
    color: #202221;
    display: flex;
    flex-direction: column;
    height: 100vh;
}

/* Header */
header {
    background-color:#4A90E2;
    padding: 17px;
    text-align: center;
    color: white;
    position: relative;
}

.toggle-button {
    position: absolute;
    
    background-color: transparent;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
}

/* Sidebar Styles */
.sidebar {
    width: 250px;
    background-color: #4A90E2;
    height: 100vh;
    position: fixed;
    top: 0;
    left: -250px; /* Initially hidden */
    transition: left 0.3s ease;
    z-index: 1000;
}

.sidebar.active {
    left: 0; /* Slide-in when active */
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

/* Main Content Styles */
main {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    justify-content: center;
}

.groups {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-around;
    max-width: 1200px;
}

.group-block {
    background-color: #F5F5F5;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    width: 30%;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, height 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 350px; /* Height for PC view */
}

.group-block:hover {
    transform: translateY(-5px);
}

.group-block h2 {
    color: #202221;
    margin-bottom: 20px;
}

/* Centered and wider button */
button {
    background-color: #4A90E2;
    border: none;
    color: white;
    padding: 15px 40px; /* Wider button */
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
    margin: auto; /* Centered horizontally */
    display: inline-block;
    width: 70%; /* Wider button */
    transition: background-color 0.3s, transform 0.3s;
}

button:hover {
    background-color: white;
    color: #22C55E;
    transform: translateY(-3px);
}

/* Footer Styles */
footer {
    background-color: #4A90E2;
    color: white;
    text-align: center;
    padding: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .group-block {
        width: 100%;
        height: auto; /* Flexible height on mobile */
    }
}

    </style>
</head>
<body>
    <header>
        
        <h1>ADMIN PORTAL</h1>
    </header>

    <aside class="sidebar" id="sidebar">
        <div class="logo">
            <img src="SECASA.png" alt="SECASA Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </aside>

    <main onclick="closeSidebar()">
        <section class="groups">
            <div class="group-block">
                <h2>Saint Paul's Jumuiya</h2>
                <a href="stpauls-admin-login.php"><button>Administrator</button></a>
            </div>
            <div class="group-block">
                <h2>Saint Monicah Jumuiya</h2>
                <a href="stmonica-admin-login.php"><button>Administrator</button></a>
            </div>
            <div class="group-block">
                <h2>Saint Andrew Jumuiya</h2>
                <a href="standrew-admin-login.php"><button>Administrator</button></a>
            </div>
            <!-- Add more group blocks as needed -->
            <div class="group-block">
    <h2>Saint Augustine Jumuiya</h2>
    <a href="staugustine-admin-login.php"><button>Administrator</button></a>
</div>

<div class="group-block">
    <h2>Saint Francis Jumuiya</h2>
    <a href="stfrancis-admin-login.php"><button>Administrator</button></a>
</div>



<div class="group-block">
    <h2>Secasa Magical Choir</h2>
    <a href="choir-admin-login.php"><button>Administrator</button></a>
</div>

<div class="group-block">
    <h2>Catholic Men Association</h2>
    <a href="cma-admin-login.php"><button>Administrator</button></a>
</div>

<div class="group-block">
    <h2>Catholic Ladies Association (CLA)</h2>
    <a href="cla-admin-login.php"><button>Administrator</button></a>
</div>

<div class="group-block">
    <h2>Secasa Pioneer</h2>
    <a href="pioneer-admin-login.php"><button>Administrator</button></a>
</div>

        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Secasa. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

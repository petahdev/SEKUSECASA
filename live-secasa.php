<?php
include 'connect.php';

$results = [];
$error = "";

// Define the tables to fetch data from
$tables = ['stpauls', 'standrew', 'staugustine', 'stfrancis', 'stmonica', 'pioneer', 'cma', 'cla', 'choir'];

if (isset($_POST['show_data'])) {
    foreach ($tables as $table) {
        $query = "SELECT first_name, second_name, surname, email, phone_number, course_done, year_of_study FROM $table";
        $result = $conn->query($query);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
        } else {
            $error = "Error fetching data: " . $conn->error;
            break; // Stop if there's an error
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Secasa Data Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #202221;
            color: white;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1000px; 
            margin: auto;
            background: white;
            color: #202221;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .button {
            background-color: #202221;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            margin-bottom: 20px; 
            display: block; /* Make button block level for better mobile view */
            width: 100%; /* Make button full width */
        }
        .button:hover {
            background-color: #343a40;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            .container {
                padding: 10px;
            }
            .button {
                width: 100%; /* Ensure button takes full width */
                margin-bottom: 10px; 
            }
            th, td {
                font-size: 14px; /* Adjust font size for mobile */
                word-wrap: break-word; /* Wrap long text in table cells */
            }
            table {
                display: block; /* Make table block level */
                overflow-x: auto; /* Allow horizontal scrolling */
                white-space: nowrap; /* Prevent text from wrapping */
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registered SECASA Family members</h2>
    <form method="POST">
        <button type="submit" name="show_data" class="button">Show Data</button>
    </form>

    <?php if ($error): ?>
        <div style="color: red;"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <?php if (!empty($results)): ?>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Course Done</th>
                    <th>Year of Study</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['first_name']); ?></td>
                        <td><?php echo htmlspecialchars($user['second_name']); ?></td>
                        <td><?php echo htmlspecialchars($user['surname']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['phone_number']); ?></td>
                        <td><?php echo htmlspecialchars($user['course_done']); ?></td>
                        <td><?php echo htmlspecialchars($user['year_of_study']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="editsecasa.php"><button class="button">Edit Users</button></a>
    <?php endif; ?>
</div>
 
</body>
</html>

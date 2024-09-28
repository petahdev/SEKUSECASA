<?php
include 'connect.php';

$query = "SELECT * FROM stfrancis";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St. Francis Members</title>
    <style>
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
    <h1>St. Andrew Users</h1>
    <table>
        <tr>
            <th>First Name</th>
            <th>Second Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Course Done</th>
            <th>Year of Study</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td data-label="First Name"><?= htmlspecialchars($row['first_name']); ?></td>
                <td data-label="Second Name"><?= htmlspecialchars($row['second_name']); ?></td>
                <td data-label="Surname"><?= htmlspecialchars($row['surname']); ?></td>
                <td data-label="Email"><?= htmlspecialchars($row['email']); ?></td>
                <td data-label="Phone Number"><?= htmlspecialchars($row['phone_number']); ?></td>
                <td data-label="Course Done"><?= htmlspecialchars($row['course_done']); ?></td>
                <td data-label="Year of Study"><?= htmlspecialchars($row['year_of_study']); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

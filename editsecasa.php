<?php
include 'connect.php';

$results = [];
$error = "";

// Define the tables to fetch data from
$tables = ['stpauls', 'standrew', 'staugustine', 'stfrancis', 'stmonica'];

if (isset($_POST['show_data'])) {
    foreach ($tables as $table) {
        $query = "SELECT id, first_name, second_name, surname, email, phone_number, course_done, year_of_study FROM $table";
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

// Handle update request
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $course_done = $_POST['course_done'];
    $year_of_study = $_POST['year_of_study'];

    // Update the record in the database
    $update_query = "UPDATE stpauls SET first_name=?, second_name=?, surname=?, email=?, phone_number=?, course_done=?, year_of_study=? WHERE id=?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param("sssssssi", $first_name, $second_name, $surname, $email, $phone_number, $course_done, $year_of_study, $id);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Data Display</title>
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
            display: block; 
            width: 100%; 
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
        input[type="text"], input[type="email"] {
            width: calc(100% - 20px); /* Adjust width for padding */
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Include padding in width */
        }
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            .container {
                padding: 10px;
            }
            .button {
                width: 100%; 
                margin-bottom: 10px; 
            }
            th, td {
                font-size: 14px; 
                word-wrap: break-word; 
            }
            table {
                display: block; 
                overflow-x: auto; 
                white-space: nowrap; 
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Make changes to users</h2>
    <form method="POST">
        <button type="submit" name="show_data" class="button">Edit now</button>
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $user): ?>
                    <tr>
                        <form method="POST" action="">
                            <td><input type="text" name="first_name" value="<?php echo htmlspecialchars($user['first_name']); ?>"></td>
                            <td><input type="text" name="second_name" value="<?php echo htmlspecialchars($user['second_name']); ?>"></td>
                            <td><input type="text" name="surname" value="<?php echo htmlspecialchars($user['surname']); ?>"></td>
                            <td><input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"></td>
                            <td><input type="text" name="phone_number" value="<?php echo htmlspecialchars($user['phone_number']); ?>"></td>
                            <td><input type="text" name="course_done" value="<?php echo htmlspecialchars($user['course_done']); ?>"></td>
                            <td><input type="text" name="year_of_study" value="<?php echo htmlspecialchars($user['year_of_study']); ?>"></td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                <input type="submit" name="update" value="Update" class="button">
                            </td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

</body>
</html>

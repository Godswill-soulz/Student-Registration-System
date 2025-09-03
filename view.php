<?php
include "database.php";

//getting recors from my database
$result = $conn->query("SELECT * FROM student_record");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Student</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        body {
            font-family: "segoe UI", Arial, sans-serif;
            background: #101d33FF;
            margin: 20px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.6);
            border-radius: 8px;
            overflow: hidden;
            font-size: 18px;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: center;
        }

        th {
            background: #007BFF;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .link {
            text-decoration: none;
            color: white;
            background: #dc3545;
            padding: 6px 12px;
            border-radius: 5px;
            transition: background 0.3s
        }

        .back-link {
            width: 40%;
            display: block;
            text-align: center;
            margin: 20px;
            font-size: 18px;
            color: #007BFF;
            text-decoration: none;
        }

        .back-link:hover {
            background: #007BFF;
            color: white;
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            body {
                padding: 10px;
                height: auto;
            }

            table {
                width: auto;
                font-size: 18px;
                padding: 15px 20px;
            }

            .link {
                width: auto;
            }

            .back-link {
                width: 40%;
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>

    <head>
        <h1>List of Registered Students</h1>
    </head>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email </th>
            <th>Department</th>
            <th>Matric Number</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 1;
        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $i++ ?> </td>
                <td><?php echo $row['full_Name'] ?> </td>
                <td><?php echo $row['email'] ?> </td>
                <td><?php echo $row['department'] ?> </td>
                <td><?php echo $row['matric_Number'] ?> </td>
                <td><a class="link" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
    <a class="back-link" href="index.php">Back to registration</a>
</body>

</html>
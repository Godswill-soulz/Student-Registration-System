<?php
include "database.php";

$message = "No Action Taken Yet";
$status = "info";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cleaning up my data
    $full_name = trim($_POST['full_Name']);
    $email = trim($_POST['email']);
    $department = trim($_POST['department']);
    $matric_number = trim($_POST['matric_Number']);

    // check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "❌ Invalid email format. Please go back and try again";
        $status = "error";

    } else {
        // Inserting data into DB 
        $statement = $conn->prepare("INSERT INTO student_record (full_name, email, department, matric_Number) VALUES (?, ?, ?, ?)");
        $statement->bind_param("ssss", $full_name, $email, $department, $matric_number);

        //lets return something pleasing to the user asap
        if ($statement->execute()) {
            $message = "✅ Student registered successfully!";
            $status = "success";
        } else {
            $message = "❌ Error: " . $conn->error;
            $status = "error";
        }

        $statement->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Process Page</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            font-family: Arial, sans-serif;
            background: #cde3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 450px;
            background: white;
        }

        .success {
            border-left: 6px solid #007bff;
            color: #007bff;
            background: white;
        }

        .error {
            border-left: 6px solid red;
            color: red;
            background: white;
        }
        .info {
            border-left: 6px solid #007bff;
            color: #004085;
            background: #f9fbfd;
        }


        h2 {
            margin-bottom: 15px;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 18px;
            text-decoration: none;
            background: #007bff;
            color: white;
            border-radius: 6px;
            /* transition: 0.3s; */
        }

        a:hover {
            background: #0056b3;
        }

        @media screen {
            body {
                padding: 10px;
                height: auto;
            }

            .box {
                width: 50%;
                height: auto;
                font-size: 16px;
                margin-top: 10pc;
            }

            a {
                width: auto;
                display: inline-block;

            }
        }
    </style>
</head>

<body>

    <div class="box <?php echo $status; ?>">
        <h2><?php echo $message; ?></h2>
        <a href="view.php">📋 View Registered Students</a>
        <a href="index.php">Back to form</a>
    </div>

</body>

</html>
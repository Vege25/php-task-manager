<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $_POST['task_name'];
    $taskDescription = $_POST['task_description'];

    switch ($_POST['col']) {
        case 'red':
            $postColor = 'red';
            break;
        case 'green':
            $postColor = 'green';
            break;
        case 'blue':
            $postColor = 'blue';
            break;
        default:
            $postColor = 'yellow';
    }

    $sql = "INSERT INTO tasks (task_name, task_description, task_col) VALUES ('$taskName', '$taskDescription', '$postColor')";

    if ($conn->query($sql) === TRUE) {
        echo "Task added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

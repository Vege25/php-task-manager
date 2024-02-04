<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taskName = $_POST['task_name'];
    $taskDescription = $_POST['task_description'];

    $sql = "INSERT INTO tasks (task_name, task_description) VALUES ('$taskName', '$taskDescription')";

    if ($conn->query($sql) === TRUE) {
        echo "Task added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['task_id'])) {
        $taskId = $_POST['task_id'];

        // Delete the task from the tasks table
        $deleteSql = "DELETE FROM tasks WHERE id = $taskId";

        if ($conn->query($deleteSql) === TRUE) {
            echo "Task deleted successfully!";
        } else {
            echo "Error deleting task: " . $conn->error;
        }
    } else {
        echo "Task ID not provided.";
    }
} else {
    echo "Invalid request method. Use POST.";
}

$conn->close();
?>

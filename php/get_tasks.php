<?php
include 'config.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        $taskColor = $row['task_col'];
        $taskId = $row['id'];
        echo "<li class='task-{$taskColor}'><h4>{$row['task_name']}</h4> <p>{$row['task_description']}</p> <p>({$row['created_at']})</p>";
        echo "<button class='delete-task-btn' data-task-id='$taskId'>Delete</button>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "No tasks found.";
}

$conn->close();
?>

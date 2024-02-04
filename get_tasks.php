<?php
include 'config.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['task_name']} - {$row['task_description']} ({$row['created_at']})";
        echo "<form action='delete_task.php' method='POST' style='display:inline;'>";
        echo "<input type='hidden' name='task_id' value='{$row['id']}'>";
        echo "<button type='submit'>Delete</button>";
        echo "</form>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "No tasks found.";
}

$conn->close();
?>

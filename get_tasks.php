<?php
include 'config.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['task_name']} - {$row['task_description']} ({$row['created_at']})</li>";
    }
    echo "</ul>";
} else {
    echo "No tasks found.";
}

$conn->close();
?>
